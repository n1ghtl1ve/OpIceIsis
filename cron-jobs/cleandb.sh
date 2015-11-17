#!/bin/bash
mysql -u "USER" --password="" -e "DELETE FROM isismembers WHERE (realname LIKE '') AND (location LIKE '') AND (twitter LIKE '') AND (facebook LIKE '') AND (youtube LIKE '') AND (other LIKE '');" opiceisis
