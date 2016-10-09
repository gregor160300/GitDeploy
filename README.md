####GitDeploy  
```
git clone https://github.com/gregor160300/GitDeploy.git deploy
cd deploy
mv *.php ..
cd ..
rm -R -f deploy  
```  
1. SSH into your servers DocumentRoot & run commands above 
2. Add http(s)://yourdomain.tld/deploy.php to your GitHub webhooks  
3. Define your settings in config.php  

#####Notes  
- Make sure you have ssh access to the (private) repos
- First clone yourrepos once manually

#####What this does    
- Auto pull your repo on a new git commit 
- Set permissions to prevent internal server errors (0755 for directories & 0644 for files)  
  
TODO:
- Multi repo support
- Set permissions only for files updated (currently it messes up any special permissions on your server)
