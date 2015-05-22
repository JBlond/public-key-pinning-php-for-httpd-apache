# public-key-pinning-php-for-httpd-apache

```
C:\>php public_pinning.php example.crt
```

```
<VirtualHost *:443>
	ServerName example.com
    ServerAlias www.example.com
    Header always set Public-Key-Pins "pin-sha256=\"bZ3qT75yZLagDEADBEEF0h3KAseeheXXJ5dliOfLB2A=\"; max-age=5184000"
````
