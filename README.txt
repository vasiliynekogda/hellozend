INSTALL HELLOZEND
1. Create somewhere on your computer folder 'hellozend'
2. Add 'application' and 'public' folders to created 'hellozend' folder
3. If Zend Framework didn't configured on your server, you have to:
 - Create empty folder library/ inside 'hellozend',
 - Download Zend Framework 1.12 full from http://www.zend.com/en/company/community/downloads
 - Extract downloaded archive
 - Copying or symlinking it into your library/ directory. 
4. Configure virtualhost

Example

    <VirtualHost *:80>
        ServerName hellozend.dev
        DocumentRoot /path/to/hellozend/public
     
        SetEnv APPLICATION_ENV "development"
     
        <Directory /path/to/hellozend/public>
            DirectoryIndex index.php
            AllowOverride All
            Order allow,deny
            Allow from all
        </Directory>
    </VirtualHost>

5. Change host configuration of your computer adding 127.0.0.1 hellozend.dev
6. Restart your server
7. Open hellozend.dev in your browser.
	
