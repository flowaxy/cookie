# Flowaxy Cookie

A simple and elegant PHP utility class for managing HTTP cookies, created by [Flowaxy](https://flowaxy.com).

## 📦 Installation

You can include the package via Composer:

```bash
composer require flowaxy/cookie
```

Or, if you are developing and using your local repository:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/flowaxy/cookie"
    }
  ],
  "require": {
    "flowaxy/cookie": "dev-main"
  },
  "minimum-stability": "dev",
  "prefer-stable": true
}
```

## ⚙️ Usage

```php
use Flowaxy\Cookie;

// Set a cookie
Cookie::set('username', 'JohnDoe', 7); // Expires in 7 days

// Get a cookie
$username = Cookie::get('username');

// Check if cookie is empty
if (!Cookie::isEmpty('username')) {
    echo "Welcome, $username!";
}

// Remove a cookie
Cookie::remove('username');
```

## 🧪 Test Script

You can test cookie functionality with a simple script. Save the following as `test.php`:

```php
<?php

require_once './vendor/autoload.php';

use Flowaxy\Cookie;

$action = $_GET['action'] ?? null;
$key = 'test_cookie';
$value = 'FlowaxyRocks';

switch ($action) {
    case 'set':
        Cookie::set($key, $value, 7);
        $message = "Cookie '{$key}' has been set to '{$value}'";
        break;
    case 'get':
        $cookieValue = Cookie::get($key);
        $message = $cookieValue !== false 
            ? "Cookie '{$key}' value is '{$cookieValue}'"
            : "Cookie '{$key}' is not set";
        break;
    case 'remove':
        Cookie::remove($key);
        $message = "Cookie '{$key}' has been removed";
        break;
    case 'check':
        $isEmpty = Cookie::isEmpty($key);
        $message = $isEmpty
            ? "Cookie '{$key}' is empty or not set"
            : "Cookie '{$key}' has a value";
        break;
    default:
        $message = "No action provided. Use ?action=set|get|remove|check";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie Test — Flowaxy</title>
</head>
<body>
    <h2>Flowaxy Cookie Test</h2>
    <p><?= $message ?></p>
    <ul>
        <li><a href="?action=set">Set Cookie</a></li>
        <li><a href="?action=get">Get Cookie</a></li>
        <li><a href="?action=remove">Remove Cookie</a></li>
        <li><a href="?action=check">Check if Cookie is Empty</a></li>
    </ul>
</body>
</html>
```

## 📄 License

This package is open-sourced software licensed under the [MIT license](LICENSE).

---

Made with ❤️ by [Flowaxy](https://flowaxy.com)
