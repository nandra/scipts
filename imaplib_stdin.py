#!/usr/bin/python

import imaplib
import time
import email.message
import imaplib_connect
import sys
import re


new_message = email.message.Message()
new_message.set_unixfrom('pymotw')
new_message['Content-Type'] = ' text/plain; charset=UTF-8'

list_from = re.compile(r'From: (.*)')
list_subject = re.compile(r'Subject: (.*)')

def parse_list_from(line):
	try:
		name = list_from.match(line)
		if (name != None):
			print name.group(0), name.group(1)
			print name
			return name.group(1)
	except(), e:
		print e
		return None 


def parse_list_subject(line):
	try:
		name = list_subject.match(line)
		if (name != None):
			print name.group(0), name.group(1)
			print name
			return name.group(1)
	except(), e:
		print e
		return None 


print new_message.as_string()
out=""
c = imaplib_connect.open_connection()
try:
	data = sys.stdin.readlines();
	for line in data:
		sub = parse_list_subject(line)
		if (sub != None):
			new_message['Subject'] = sub
		fm = parse_list_from(line)
		if (fm != None):
			new_message['From'] = fm

	out = ''.join(str(line) for line in data)

	new_message.set_payload(out)
	print new_message.as_string()
	print c.append('[Gmail]/Drafts', '', imaplib.Time2Internaldate(time.time()), new_message.as_string())
	        
        print c.select('[Gmail]/Drafts', True)
	typ, [msg_ids] = c.search(None, 'ALL')
	for num in msg_ids.split():
		typ, msg_data = c.fetch(num, '(BODY.PEEK[HEADER])')
		for response_part in msg_data:
			if isinstance(response_part, tuple):
				print '\n%s:' % num
				print response_part[1]
													          
finally:
	try:
		c.close()
	except:
		pass
	c.logout()

