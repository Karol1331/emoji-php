# emoji-php
Just PHP functions &amp; classes written with emoticons 🌐😎 (not all)

## Getting Started
To use the Emoji PHP Library in your project, include the `emoji.php` file and create an instance of the 🌐 class:

```php
<?php
include 'emoji.php';

$db = new 🌐('your_database_name', 'server', 'user', 'password');

🔂($db->🔎("SELECT * FROM your_table"), function () {
  // Process each row of the result
});

$db->🚫(); // Close the database connection
?>
```
## Emoji Functions

### 🗣️ Echo Function
```php
🗣️('Hello, Emoji PHP!');
```

### 🔄 Loop Function
```php
🔄(0, 10, 2, function ($i) {
    🗣️( $i . "<br>");
}, '➕');
```

### 🔁 While Loop Function
```php
$counter = 0;
🔁(function () use (&$counter) {
    return $counter < 5;
}, function () use (&$counter) {
    🗣️ ($counter++ . "<br>");
});
```

### 🔄 Foreach Loop Function
```php
$arr = ['Volvo', 'BMW', 'Audi'];
🔂($arr, function ($key, $value) {
  🗣️("$key $value<br>");
});
```

### 💾 Result Class
```php
$result = $db->🔍('SELECT * FROM your_table');
while ($row = $result->⌨️()) {
    // Process each row of the result
}
```

### 🍪 Cookie Class
```php
🍪::set('cookie_name', 'cookie_value', $expire);
$value = 🍪::get('cookie_name');
🍪::❌('cookie_name');
```

### 📑 Session Class
```php
📑::run();
📑::set('key', 'value');
$value = 📑::get('key');
📑::❌();
```

## Emoji Utility Functions:
* 💥 `explode` function
* 🧳 `implode` function
* ✂️ `substr` function
* 📏 `strlen` function
* 🔀 `str_replace` function
* ❌ `unset` function (set variable to null)
* 🔢 `count` function
