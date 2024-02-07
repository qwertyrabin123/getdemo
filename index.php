some term used in git

//git init: initiazlize the project

// add specific or all
git add . to add all the file

git add "*.js" only add the js
git add "*.php" only add the php

//shortent like 
instead of git status we can use only git s 
for that we have to configure to configure
git config --global alias.s "status" 
here alias->s will now work as
git s instead of status


git config --global alias.cm "commit -m"
shorten for git commit -m



git log -> to log the version
git log --all ->more detail log

//ignor the file
.gitignore file in the working directory


//remove the git 
rm -rf .git 



////upload portion

git remote add origin url 
for example
git remote add origin https://github.com/qwertyrabin123/getdemo

git remote -v to get the detail of the origin remote reportiatry

to let the github know about us 
git config --global  credential.username qwertyrabin123


//push means to upload to git
git push origin main


shorten this we use 
git push origin main --set-upstream

 so from now on we dont need to add git push origin main we can only 
 write git push


 ///for push
-f means force push
 git push origin master -f
