<?php
class 🌐
{
    private $conn;

    public function __construct($database, $host = "localhost", $username = "root", $password = "") {
        $this->conn = new Mysqli($host, $username, $password, $database);
        if ($this->conn->connect_error) {
            die("Błąd połączenia z bazą danych: " . $this->connection->connect_error);
        }
    }

    public function 🔍($query) {
        return new 💾($this->conn->query($query));
    }

    public function 🔎($query) {
        return $this->conn->query($query);
    }

    public function 🚫() {
        $this->conn->close();
    }
    
    public function __destruct() 
    {
        $this->conn->close();
    }
}

class 💾 {
    private $result;

    public function __construct($result) {
        $this->result = $result;
    }

    public function ⌨️() {
        return $this->result->fetch_array();
    }

    public function 🔢() {
        return $this->result->num_rows;
    }

    public function __destruct()  {
        $this->result->free_result();
    }
}

function 🗣️($str)
{
    echo $str;
}

function 🔄($start, $end, $step, $callback, $type = '➕')
{
    if ($type == '➕') {
        for ($i = $start; $i <= $end; $i += $step) {
            $callback($i);
        }
    }
    else if ($type == '➖') {
        for ($i = $start; $i >= $end; $i -= $step) {
            $callback($i);
        }
    }
    else if ($type == '✖️') {
        for ($i = $start; $i <= $end; $i *= $step) {
            $callback($i);
        }
    }
    else if ($type == '➗') {
        for ($i = $start; $i >= $end; $i /= $step) {
            $callback($i);
        }
    }
}

function 🔁($condition, $callback)
{
    while ($condition()) {
        $callback();
    }
}

function 🔂($arr, $callback)
{
    foreach ($arr as $key => $value) {
        $callback($key, $value);
    }
}

function 💥($delimiter, $string) {
    return explode($delimiter, $string);
}

function 🧳($glue, $pieces) {
    return implode($glue, $pieces);
}

function ✂️($string, $start, $length = null) {
    return substr($string, $start, $length);
}

function 📏($string) {
    return strlen($string);
}

function 🔀($search, $replace, $subject) {
    return str_replace($search, $replace, $subject);
}

function ❌(&$var) {
    #unset($var);
    $var = null;
}

function 🔢($arr) {
    return count($arr);
}

function arr_❌(&$array, $index = -1) {
    if ($index = -1) $index = 🔢($array) - 1;
    unset($array[$index]);
}

class 🍪 {
    public static function set($name, $value, $expire = 0) {
        setcookie($name, $value, $expire, '/');
    }
    public static function ❌($name) {
        setcookie($name, '', time() - 3600, '/');
    }
    public static function get($name) {
        return isset($_COOKIE[$name]) ? $_COOKIE[$name] : null;
    }
}

class 📑 { #sesje
    public static function run() {
        session_start();
    }
    public static function ❌() {
        session_destroy();
    }
    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }
    public static function get($key) {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }
}