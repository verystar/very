# Very framework web demo

This is PHP framework for VeryStar demo

## Environment configuration

Offline PHP-FPM must setting APP_ENV=local
```
env[APP_ENV]=local
```

Command line

/etc/profile
```
export APP_ENV="local"
```

## Web Server Configuration


### Apache

Edit file `.htaccess` 

```
Options +FollowSymLinks
RewriteEngine On

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^ index.php [L]
```

### Nginx

```
root  /WebPath/public;

location / {
    try_files $uri $uri/ /index.php?$query_string;
}

```