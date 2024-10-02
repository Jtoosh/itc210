<?php
// Read server information from environment variables
$mysql_servername = getenv("MYSQL_SERVERNAME");
$mysql_user = getenv("MYSQL_USER");
$mysql_password = getenv("MYSQL_PASSWORD");
$mysql_database = getenv("MYSQL_DATABASE");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Prep Cars!</title>
</head>
<body>
    <h1>Prep Cars Database</h1>
    <pre>
<?
// Connect to the server and check for errors
$conn = new mysqli($mysql_servername, $mysql_user, $mysql_password, $mysql_database);
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

// Read the SQL script from the file
$fh = fopen('create-and-fill-table.sql', 'r');
$sql = fread($fh, 8192);
fclose($fh);

// Execute the script - It has multiple commands so we use multi_query()
$result = $conn->multi_query($sql);

// Write the success or failure of each command to the page
do {
    if ($conn->error) {
        echo '<div>Error: ' . htmlspecialchars($conn->error) . '</div>';
    }
    if ($conn->info) {
        echo '<div>Info: ' . htmlspecialchars($conn->info) . '</div>';
    }
} while ($conn->next_result());
if ($conn->error) {
    echo '<div>Error: ' . htmlspecialchars($conn->error) . '</div>';
}
$conn->close();
?>
</body>
</html>
