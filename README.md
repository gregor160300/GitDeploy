####GitDeploy  
1. These php scripts should be put into your servers DocumentRoot  
2. Add http(s)://yourdomain.tld/deploy.php to your GitHub webhooks  
3. Define your settings in config.php  
  
#####What this does    
- Auto pull your repo on a new git commit 
- Set permissions to prevent internal server errors (0755 for directories & 0644 for files)  
  
TODO:
- Multi repo support
- Set permissions only for files updated (currently it messes up any special permissions on your server)
