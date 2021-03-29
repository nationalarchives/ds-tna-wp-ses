# Send emails through Amazon SES plugin

Sends WordPress emails through Amazon SES.

Define global variables in `wp-config.php`:
```php
define( 'SMTP_SES', true);
define( 'SMTP_SES_USER', 'username' );
define( 'SMTP_SES_PASS', 'password' );
define( 'SMTP_SES_HOST', 'email-smtp.*.amazonaws.com' );
define( 'SMTP_SES_PORT', 587 );
define( 'SMTP_SES_SECURE', 'tls' );
```
