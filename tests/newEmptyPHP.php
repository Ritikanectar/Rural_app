<VirtualHost *:80>
    ServerName invoice.nectarinfotel.com
    ServerAlias www.invoice.nectarinfotel.com
    ServerAlias http://invoice.nectarinfotel.com
   # Redirect permanent / https://invoice.nectarinfotel.com/
    DocumentRoot /var/www/invoice
    <Directory /var/www/invoice>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order allow,deny
        allow from all
        Require all granted
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/error.log
	CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>

<VirtualHost *:80>
    ServerName ezentek.nectarinfotel.com
    ServerAlias www.ezentek.nectarinfotel.com
    ServerAlias http://ezentek.nectarinfotel.com
   # Redirect permanent / https://ezentek.nectarinfotel.com/
    DocumentRoot /var/www/ezentek
    <Directory /var/www/ezentek>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order allow,deny
        allow from all
        Require all granted
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>

<VirtualHost *:80>
    ServerName visitormanage.nectarinfotel.com
    ServerAlias www.visitormanage.nectarinfotel.com
    ServerAlias http://visitormanage.nectarinfotel.com
    DocumentRoot /var/www/visitor_management/public
    <Directory /var/www/visitor_management/public>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order allow,deny
        allow from all
        Require all granted
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
<VirtualHost *:80>
    ServerName nt3dg.nectarinfotel.com
    ServerAlias www.nt3dg.nectarinfotel.com
    ServerAlias http://nt3dg.nectarinfotel.com
    DocumentRoot /home/nt3
    <Directory /home/nt3>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order allow,deny
        allow from all
        Require all granted
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
<VirtualHost *:80>
    ServerName wadeuat.nectarinfotel.com
    ServerAlias www.wadeuat.nectarinfotel.com
    ServerAlias http://wadeuat.nectarinfotel.com
    DocumentRoot /var/www/wade
    <Directory /var/www/wade>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order allow,deny
        allow from all
        Require all granted
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
<VirtualHost *:80>
    ServerName docs.nectarinfotel.com
    ServerAlias www.docs.nectarinfotel.com
    ServerAlias http://docs.nectarinfotel.com
    DocumentRoot /var/www/appdemo   
    <Directory /var/www/appdemo>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order allow,deny
        allow from all
        Require all granted
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
<VirtualHost *:80>
    ServerName herbalfax.nectarinfotel.com
    ServerAlias www.herbalfax.nectarinfotel.com
    ServerAlias http://herbalfax.nectarinfotel.com
    DocumentRoot /var/www/herbalfax   
    <Directory /var/www/herbalfax>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order allow,deny
        allow from all
        Require all granted
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
<VirtualHost *:80>
    ServerName upliftr.nectarinfotel.com
    ServerAlias www.upliftr.nectarinfotel.com
    ServerAlias http://upliftr.nectarinfotel.com
    DocumentRoot /var/www/upliftr   
    <Directory /var/www/upliftr>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order allow,deny
        allow from all
        Require all granted
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
<VirtualHost *:80>
    ServerName unodata.nectarinfotel.com
    ServerAlias www.unodata.nectarinfotel.com
    ServerAlias http://unodata.nectarinfotel.com
    DocumentRoot /var/www/unodata   
    <Directory /var/www/unodata>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order allow,deny
        allow from all
        Require all granted
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
<VirtualHost *:80>
    ServerName kingstudent.nectarinfotel.com
    ServerAlias www.kingstudent.nectarinfotel.com
    ServerAlias http://kingstudent.nectarinfotel.com
    DocumentRoot /var/www/kingStudent  
    <Directory /var/www/kingStudent>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order allow,deny
        allow from all
        Require all granted
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
<VirtualHost *:80>
    ServerName lakyday.nectarinfotel.com
    ServerAlias www.lakyday.nectarinfotel.com
    ServerAlias http://lakyday.nectarinfotel.com
    DocumentRoot /var/www/lakyday
    <Directory /var/www/lakyday>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order allow,deny
        allow from all
        Require all granted
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
<VirtualHost *:80>
    ServerName wadetest.nectarinfotel.com
    ServerAlias www.wadetest.nectarinfotel.com
    ServerAlias http://wadetest.nectarinfotel.com
   # Redirect permanent / https://wadetest.nectarinfotel.com/
    DocumentRoot /var/www/wadeuat
    <Directory /var/www/wadeuat>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order allow,deny
        allow from all
        Require all granted
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
<VirtualHost *:80>
    ServerName movicel.nectarinfotel.com
    ServerAlias www.movicel.nectarinfotel.com
    ServerAlias http://movicel.nectarinfotel.com
   # Redirect permanent / https://movicel.nectarinfotel.com/
    DocumentRoot /var/www/movicel
    <Directory /var/www/movicel>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order allow,deny
        allow from all
        Require all granted
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
<VirtualHost *:80>
    ServerName demodamagecontrol.nectarinfotel.com
    ServerAlias www.demodamagecontrol.nectarinfotel.com
    ServerAlias http://demodamagecontrol.nectarinfotel.com
   # Redirect permanent / https://demodamagecontrol.nectarinfotel.com/
    DocumentRoot /var/www/damageControlDemo
    <Directory /var/www/damageControlDemo>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order allow,deny
        allow from all
        Require all granted
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
<VirtualHost *:80>
    ServerName andre-ecommerce.nectarinfotel.com
    ServerAlias www.andre-ecommerce.nectarinfotel.com
    ServerAlias http://andre-ecommerce.nectarinfotel.com
   # Redirect permanent / https://andre-ecommerce.nectarinfotel.com/
    DocumentRoot /var/www/andre_ecommerce
    <Directory /var/www/andre_ecommerce>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order allow,deny
        allow from all
        Require all granted
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
<VirtualHost *:80>
    ServerName auswill.nectarinfotel.com
    ServerAlias www.auswill.nectarinfotel.com
    ServerAlias http://auswill.nectarinfotel.com
   # Redirect permanent / https://auswill.nectarinfotel.com/
    DocumentRoot /var/www/auswill
    <Directory /var/www/auswill>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order allow,deny
        allow from all
        Require all granted
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>

<VirtualHost *:80>
    ServerName posfe.nectarinfotel.com
    ServerAlias www.posfe.nectarinfotel.com
    ServerAlias http://posfe.nectarinfotel.com
   # Redirect permanent / https://posfe.nectarinfotel.com/
    DocumentRoot /var/www/posfe
    <Directory /var/www/posfe>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order allow,deny
        allow from all
        Require all granted
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>

<VirtualHost *:80>
    ServerName posadmin.nectarinfotel.com
    ServerAlias www.posadmin.nectarinfotel.com
    ServerAlias http://posadmin.nectarinfotel.com
   # Redirect permanent / https://posadmin.nectarinfotel.com/
    DocumentRoot /var/www/pos_admin
    <Directory /var/www/pos_admin>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order allow,deny
        allow from all
        Require all granted
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>

<VirtualHost *:80>
    ServerName products.nectarinfotel.com
    ServerAlias www.products.nectarinfotel.com
    ServerAlias http://products.nectarinfotel.com
   # Redirect permanent / https://products.nectarinfotel.com/
    DocumentRoot /var/www/products
    <Directory /var/www/products>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order allow,deny
        allow from all
        Require all granted
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>

<VirtualHost *:80>
    ServerName portfolio.nectarinfotel.com
    ServerAlias www.portfolio.nectarinfotel.com
    ServerAlias http://portfolio.nectarinfotel.com
   # Redirect permanent / https://portfolio.nectarinfotel.com/
    DocumentRoot /var/www/portfolio
    <Directory /var/www/portfolio>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order allow,deny
        allow from all
        Require all granted
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>

<VirtualHost *:80>
    ServerName portfoliowp.nectarinfotel.com
    ServerAlias www.portfoliowp.portfoliowp.com
    ServerAlias http://portfoliowp.nectarinfotel.com
   # Redirect permanent / https://portfoliowp.nectarinfotel.com/
    DocumentRoot /var/www/portfoliowp
    <Directory /var/www/portfoliowp>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order allow,deny
        allow from all
        Require all granted
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>

<VirtualHost *:80>
    ServerName challengers.nectarinfotel.com
    ServerAlias www.challengers.nectarinfotel.com
    ServerAlias http://challengers.nectarinfotel.com
   # Redirect permanent / https://challengers.nectarinfotel.com/
    DocumentRoot /var/www/challengers
    <Directory /var/www/challengers>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order allow,deny
        allow from all
        Require all granted
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>

<VirtualHost *:80>
    ServerName fpuat.nectarinfotel.com
    ServerAlias www.fpuat.nectarinfotel.com
    ServerAlias http://fpuat.nectarinfotel.com
   # Redirect permanent / https://fpuat.nectarinfotel.com/
    DocumentRoot /var/www/familyPrintingUat
    <Directory /var/www/familyPrintingUat>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order allow,deny
        allow from all
        Require all granted
    </Directory>
    <FilesMatch \.php$>
      # For Apache version 2.4.10 and above, use SetHandler to run PHP as a fastCGI process server
      SetHandler "proxy:unix:/run/php/php7.4-fpm.sock|fcgi://localhost"
    </FilesMatch>

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>

<VirtualHost *:80>
    ServerName wptest.nectarinfotel.com
    ServerAlias www.wptest.nectarinfotel.com
    ServerAlias http://wptest.nectarinfotel.com
   # Redirect permanent / https://wptest.nectarinfotel.com/
    DocumentRoot /var/www/wptest
    <Directory /var/www/wptest>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order allow,deny
        allow from all
        Require all granted
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>

<VirtualHost *:80>
    ServerName ruralwisp.nectarinfotel.com
    ServerAlias www.ruralwisp.nectarinfotel.com
    ServerAlias http://ruralwisp.nectarinfotel.com
   # Redirect permanent / ruralwisp.nectarinfotel.com/
    DocumentRoot /var/www/ruralwisp
    <Directory /var/www/ruralwisp>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order allow,deny
        allow from all
        Require all granted
    </Directory>
    <FilesMatch \.php$>
      # For Apache version 2.4.10 and above, use SetHandler to run PHP as a fastCGI process server
      SetHandler "proxy:unix:/run/php/php8.0-fpm.sock|fcgi://localhost"
    </FilesMatch>
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
