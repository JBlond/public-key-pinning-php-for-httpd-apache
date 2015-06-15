# public-key-pinning-php-for-httpd-apache

```
C:\>php public_pinning.php example.crt
```

```
<VirtualHost *:443>
	ServerName example.com
    ServerAlias www.example.com
    Header always set Public-Key-Pins "pin-sha256=\"bZ3qT75yZLagDEADBEEF0h3KAseeheXXJ5dliOfLB2A=\"; "pin-sha256=\"sef3575yZLagDEADBEEF0h3KAseeheXXJ5dliOfLdfe=\"; max-age=5184000"
````

Don't be confused. Public key pinning requires at least 2 keys. The real one and a fake one.
