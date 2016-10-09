######GitDeploy  
These php scripts should be put into your servers DocumentRoot  
Add http(s)://yourdomain.tld/deploy.php to your GitHub webhooks  
Define your settings in config.php  
This script will auto pull your repo on a new git commit and will then set correct permissions for all your file starting at DocumentRoot (0755 for directories & 0644 for files)  
  
TODO:
- Multi repo support
- Set permissions only for files updated (currently it messes up any special permissions on your server)
