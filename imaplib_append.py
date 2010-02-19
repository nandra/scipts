#!/usr/bin/python

import imaplib
import time
import email.message
import imaplib_connect

new_message = email.message.Message()
new_message.set_unixfrom('pymotw')
new_message['Subject'] = 'subject goes here'
new_message['From'] = 'marek.belisko@gmail.com'
new_message['To'] = 'example@example.com'
new_message['Content-Type'] = ' text/plain; charset=UTF-8'
new_message.set_payload('This is the body of the message.\n')

print new_message.as_string()

c = imaplib_connect.open_connection()
try:
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

