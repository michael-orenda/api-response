# API Logging Middleware

Logs:
- Request method
- URL
- Body
- Response JSON

Enable in Kernel.php:
```php
\App\Http\Middleware\LogApiActivity::class
```
