# public-key-pinning-php-for-httpd-apache

[![Code Climate](https://codeclimate.com/github/JBlond/public-key-pinning-php-for-httpd-apache/badges/gpa.svg)](https://codeclimate.com/github/JBlond/public-key-pinning-php-for-httpd-apache) [![SensioLabsInsight](https://insight.sensiolabs.com/projects/c17796f7-cee8-49ae-bebf-996b746a017b/mini.png)](https://insight.sensiolabs.com/projects/c17796f7-cee8-49ae-bebf-996b746a017b) [![Codacy Badge](https://api.codacy.com/project/badge/grade/b21e1f8c2a374771b65d59c3266cc518)](https://www.codacy.com/app/leet31337/public-key-pinning-php-for-httpd-apache)

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
