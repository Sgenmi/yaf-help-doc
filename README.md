# Yaf-help-doc is compatible with Yaf 3.3.4

* Install Yaf
   
```php
    wget http://pecl.php.net/get/yaf-3.3.4.tgz
    tar zxvf yaf-3.3.2.tgz
    cd yaf-3.3.4
    phpize   [/path/to/phpize]
    ./configure --with-php-config=php-config  [/path/to/php-config]
    make && sudo make install
```  

 * Edit php.ini
    * Add the following code to php.ini
    * open use_namespace
    
 ```php
     extension=yaf.so
     yaf.use_namespace=1
     yaf.name_suffix=0
     yaf.name_separator=\;
```
 
* nginx Config 

```php

server {
  listen 8080;
  server_name xx.com ;
  access_log off;
  index index.html index.htm index.php;
  # Project path
  
  root /var/www/xxxx/public;

  #error_page 404 /404.html;
  #error_page 502 /502.html;

  location / {
      try_files $uri $uri/ /index.php?$args;
  }

  location ~ [^/]\.php(/|$) {
    #fastcgi_pass remote_php_ip:9000;
    fastcgi_pass unix:/dev/shm/php-cgi.sock;
    fastcgi_index index.php;
    include fastcgi.conf;
  }
  
  location ~ /\.ht {
    deny all;
  }
  location ~ /\.git {
      deny all;
  }
  location ~ /\.md {
        deny all;
    }
}



```
