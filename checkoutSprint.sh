#!/bin/sh
SPRINTDATE=`/usr/bin/php getSprintDate.php $1`
echo $SPRINTDATE
GITHASH=`git rev-list -n 1 --before="$SPRINTDATE" master`
git checkout $GITHASH
