#!/usr/bin/python

import re

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


def parse_list_subject(line):
	try:
		name = list_subject.match(line)
		if (name != None):
			print name.group(0), name.group(1)
			print name
			return name.group(1)
	except(), e:
		print e



if __name__ == '__main__':

	file = open('0001-Orphan-DECnet.patch')
	for line in file.readlines():
#print line
		parse_list_from(line)

		parse_list_subject(line)

