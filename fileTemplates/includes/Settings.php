## All these values are printed in various places in your new code.
## Make sure to use two hashes for comments. All whitespace in this file
## will be printed to your new files so I commented everything except the
## sets. See http://velocity.apache.org/engine/1.7/user-guide.html for
## syntax.
##
## Your name and email. Used for @author lines. Should match your
## git name and email. This value takes care of adding the first @author
## line in the file. If another person edits the class or file in the future,
## then they should add another @author line (at least per phpdoc's specs).
## Only use ${AUTHOR2} or ${AUTHOR3} if more default authors but usually
## you just need this one and others will add their name as the classes
## are edited further.
#set($AUTHOR1 = "First Last <email@example.com>")
##
## Copyright holder. Set to ${AUTHOR1} if this is you.
#set($COPY_OWNER = "Copyright holder")
##
## The year the project started (used for copyright line).
#set($START_YEAR = 2017)
##
## License for code (short name). Common for open source (e.g., MIT).
## If your code is proprietary or unlicensed, you can comment this line.
## (remember, two hashes)
## #set($LICENSE = "MIT")
##
## Set year from start year
#if(${YEAR} > ${START_YEAR})
    #set($COPY_YEAR = "${START_YEAR}-${YEAR}")
#else
    #set($COPY_YEAR = "${START_YEAR}")
#end
##
## Set copyright line
#set($COPYRIGHT = "Copyright (c) ${COPY_YEAR} ${COPY_OWNER}")
