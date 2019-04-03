# Events Ticket Pure Mvc FrameWork

Requires Apache mod_rewrite and PHP short open tags.

## Getting Start

### index.php

You Only Need To Know Below That . In `index.php`
* Assign Controller / Method / Params
* @param $url[0] = Controller
* @param $url[1] = Method
* @param $url[2] = Params 

### Open C:\Windows\System32\drivers\etc\hosts
### And Copy Paste Below (Remove #hash Tag)

### hosts

* 127.0.0.1 localhost
* 127.0.0.1 eventticket.com
* 127.0.0.1 127.0.0.1:8000

## In Coifg VitualHostOpen
###  C:\xampp\apache\conf\extra\httpd-vhosts.conf 

``` apacheconf
        <VirtualHost *:80>
            DocumentRoot "C:/XAMPP/htdocs/"
            ServerName localhost
            <Directory "C:/XAMPP/htdocs/">
                Options Indexes FollowSymLinks MultiViews
                AllowOverride all
                Order Deny,Allow
                Allow from all
                Require all granted
            </Directory>
        </VirtualHost>


        <VirtualHost *:80>
            DocumentRoot "C:/XAMPP/htdocs/eventticket
            ServerName eventticket.com
            <Directory "C:/XAMPP/htdocs/eventticket">
                Options Indexes FollowSymLinks MultiViews
                AllowOverride all
                Order Deny,Allow
                Allow from all
                Require all granted
            </Directory>
        </VirtualHost>
        
        <VirtualHost *:8000>
            DocumentRoot "C:/XAMPP/htdocs/eventticket"
            ServerName 127.0.0.1:8000
            <Directory "C:/XAMPP/htdocs/eventticket">
                Options Indexes FollowSymLinks MultiViews
                AllowOverride all
                Order Deny,Allow
                Allow from all
                Require all granted
            </Directory>
        </VirtualHost>
```

# Database Design
![Database Design](https://raw.githubusercontent.com/WuWooLay/eventTicketsTinyPhp/master/eventticket_database.png)