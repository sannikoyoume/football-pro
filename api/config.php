<?php
// Database configuration
define('DB_HOST', 'localhost');  // Database host
define('DB_USER', 'your_username');  // Database username
define('DB_PASSWORD', 'your_password');  // Database password
define('DB_NAME', 'your_database_name');  // Database name

// Create a connection
function db_connect() {
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $connection;
}

// Execute a query
function db_execute($query) {
    $connection = db_connect();
    $result = mysqli_query($connection, $query);
    mysqli_close($connection);
    return $result;
}

// Close the connection
function db_close($connection) {
    mysqli_close($connection);
}
?>