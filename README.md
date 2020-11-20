# As_library



Ok so this is a Final year project. i have created for my friend.

# Features.

This website is for the diahard book readers, who love to read books at any time and any where.

So you can take subscription here and read any of your favorite books on this website.

// Git

git --version // to know that git is installed or not and what is the version.

git config --global user.email "vishal.ravanank@gmail.com" // to add github email.

git config --global --list // to list all the deatils.

git config --global user.name "FL45h-09"

git init // to start git in the current project folder

git remote add origin https://github.com/FL45h-09/As_library.git // to add the repositor from the github

git remote // to know the deatails

git push -u origin master // Is to push the changes to the master repo in github

git pull origin master // Is to pull from master repo from github

git commit -a -m "messeage to coomit!!"



==============================|Database for website|=======================================
#TABLES

@users:

id		userid		email	password	RegDate

visha_vr	: 	password
djbravo		:	champion
anushka1	: 	password123


-------------------------------------------------------------------------------------------
@userdtls:

userid	f-name		l-name	city	DoB		Contact		state	country		zip		street

-------------------------------------------------------------------------------------------
@subscriptions

userid	RegDate		plan	ExDate		CreatedOn

-------------------------------------------------------------------------------------------
@Books

Bid		Bname		Bimage	BDetails

-------------------------------------------------------------------------------------------
@Bank details

userid	cardholderN	cardNo	cardExp		cvv		Date