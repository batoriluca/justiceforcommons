<?php
session_start();

// Main HTTP LINK

if ($_SERVER['HTTP_HOST'] == 'localhost') {
    define('SERVER_HTTP', 'http://localhost/justiceforcommons/');
    define('SERVER_HTTP_ASSET', 'http://localhost/justiceforcommons/assets/');
    define('SERVER_HTTP_ASSET_DB', 'http://assets.justiceforcommons.com/');

    // ADMIN LINK
    define('SERVER_HTTP_ADMIN', 'http://localhost/justiceforcommons/admin/');
    define('SERVER_HTTP_ADMIN_ASSET', 'http://localhost/justiceforcommons/admin/assets/');
    define('SERVER_DB_HOST', '193.203.166.18');

} elseif ($_SERVER['HTTP_HOST'] == 'justiceforcommons.com') {
    define('SERVER_HTTP', 'https://justiceforcommons.com/');
    define('SERVER_HTTP_ASSET', 'https://justiceforcommons.com/assets/');

    define('SERVER_HTTP_ASSET_DB', 'http://assets.justiceforcommons.com/');

    // ADMIN LINK
    define('SERVER_HTTP_ADMIN', 'https://admin.justiceforcommons.com/');
    define('SERVER_HTTP_ADMIN_ASSET', 'https://admin.justiceforcommons.com/assets/');
    define('SERVER_DB_HOST', 'localhost');

} else {
    define('SERVER_HTTP', 'https://www.justiceforcommons.com/s');
    define('SERVER_HTTP_ASSET', 'https://www.justiceforcommons.com/assets/');

    define('SERVER_HTTP_ASSET_DB', 'http://assets.justiceforcommons.com/');
    define('SERVER_DB_HOST', 'localhost');

    // ADMIN LINK
    define('SERVER_HTTP_ADMIN', 'https://admin.justiceforcommons.com/');
    define('SERVER_HTTP_ADMIN_ASSET', 'https://admin.justiceforcommons.com/assets/');

} 

// DB 
define('SERVER_DB_NAME', 'u656331783_justiceforcomm');
define('SERVER_DB_USERNAME', 'u656331783_justiceforcomm');
define('SERVER_DB_PASSWORD', '9G!Gyg=Ez');

class Database {

    private $host = SERVER_DB_HOST;
    private $username = SERVER_DB_USERNAME;
    private $password = SERVER_DB_PASSWORD;
    private $database = SERVER_DB_NAME;
    private $connection;

    function __construct() {
        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    function getData($table, $where = "", $orderBy = "", $limit = "") {
        $query = "SELECT * FROM $table";
        if($where) {
            $query .= " WHERE $where";
        }
        if($orderBy) {
            $query .= " ORDER BY $orderBy";
        }
        if($limit) {
            $query .= " LIMIT $limit";
        }
        // echo $query;
        // die();
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function insertData($table, $data) {
        $keys = array_keys($data);
        $values = array_values($data);
        $query = "INSERT INTO $table (" . implode(',', $keys) . ") VALUES (:" . implode(',:', $keys) . ")";
        $stmt = $this->connection->prepare($query);
        foreach($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        return $stmt->execute();
    }

    function updateData($table, $data, $where) {
        $set = "";
        foreach($data as $key => $value) {
            $set .= "$key=:$key,";
        }
        $set = rtrim($set, ',');
        $query = "UPDATE $table SET $set WHERE $where";
        $stmt = $this->connection->prepare($query);
        foreach($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        // echo $query;
        // die();
        return $stmt->execute();
    }

    function deleteData($table, $where) {
        $query = "DELETE FROM $table WHERE $where";
        $stmt = $this->connection->prepare($query);
        return $stmt->execute();
    }


    // join query

    function joinData($table1, $table2, $joinCondition, $columns = "*", $where = "", $orderBy = "", $limit = "") {
        $query = "SELECT $columns FROM $table1 JOIN $table2 ON $joinCondition";
        if ($where) {
            $query .= " WHERE $where";
        }
        if ($orderBy) {
            $query .= " ORDER BY $orderBy";
        }
        if ($limit) {
            $query .= " LIMIT $limit";
        }
        // echo $query;
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

$servername = SERVER_DB_HOST;
$username = SERVER_DB_USERNAME;
$password = SERVER_DB_PASSWORD;
$database = SERVER_DB_NAME;
try {
    $conn = new PDO("mysql:host=$servername;dbname=".$database, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    
    echo json_encode(['error_msg' => $e->getMessage(), 'error_count' => 1]);
    exit();
};

$server_name = SERVER_DB_HOST;
$db_username = SERVER_DB_USERNAME;
$db_password = SERVER_DB_PASSWORD;
$db_name = SERVER_DB_NAME;
$conn2 = mysqli_connect($server_name,$db_username,$db_password,$db_name);

?>