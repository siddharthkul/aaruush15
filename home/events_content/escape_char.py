import fileinput

"""
import os

for root, dirs, files in os.walk(path):
    for name in files:
        if name.endswith((".txt")):
            
"""

def first():
    for line in fileinput.FileInput("introduction.event.txt",inplace=1):
        line = line.replace("‘","&#39;").replace("’","&#39;");
        print line,

def second():
    for line1 in fileinput.FileInput("rounds.event.txt",inplace=1):
        line1 = line1.replace("‘","&#39;").replace("’","&#39;");
        print line1,

def third():
    for line2 in fileinput.FileInput("rules.event.txt",inplace=1):
        line2 = line2.replace("‘","&#39;").replace("’","&#39;");
        print line2,

def fourth():
    for line3 in fileinput.FileInput("coordinator.event.txt",inplace=1):
        line3 = line3.replace("‘","&#39;").replace("’","&#39;");
        print line3,


first();
second();
third();
fourth();
