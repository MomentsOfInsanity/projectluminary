    apt-get update
    apt-get install -y lsb-release ca-certificates apt-transport-https software-properties-common 
    add-apt-repository ppa:ondrej/php
    apt-get update
    apt-get install -y apache2 php8.0 php8.0-mysql php8.0-curl php8.0-mbstring php8.0-xml php8.0-intl

    a2ensite 000-default.conf 

    if  grep -q "DocumentRoot /var/www/html/public" "/etc/apache2/sites-available/000-default.conf" ; then
         echo 'the string exists' ; 
    else
         sed -i "s#DocumentRoot /var/www/html#DocumentRoot /var/www/html/public#g" /etc/apache2/sites-available/000-default.conf 
    fi

    grep -qxF '<Directory /var/www/html/public/>' /etc/apache2/apache2.conf || echo -e '<Directory /var/www/html/public/>\n\tOptions Indexes FollowSymLinks\nAllowOverride All\nRequire all granted\n</Directory>' >> /etc/apache2/apache2.conf

    a2enmod rewrite
    
    systemctl restart apache2

    rm /var/www/html/index.html
