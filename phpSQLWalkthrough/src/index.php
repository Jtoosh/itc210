<?php
# This version of the PHP page has both SQL Injection and
# Cross-Site Scripting (XSS) vulnerabilities. See 'secured.php'
# for a more secure version.

// Get the environment and connect to the SQL server
$mysql_servername = getenv("MYSQL_SERVERNAME");
$mysql_user = getenv("MYSQL_USER");
$mysql_password = getenv("MYSQL_PASSWORD");
$mysql_database = getenv("MYSQL_DATABASE");
$conn = new mysqli($mysql_servername, $mysql_user, $mysql_password, $mysql_database);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cars!</title>
    <style>
th {
    text-align: left;
    border-bottom: 1px solid black;
}
    </style>
</head>
<body>
    <h1>Cars!</h1>

    <form method="post">
        <label for="make">Make:</label><input type="text" id="make" name="make"/><br/>
        <label for="model">Model:</label><input type="text" id="model" name="model"/><br/>
        <label for="year">Year:</label><input type="text" id="year" name="year"/><br/>
        <label for="plate">License plate:</label><input type="text" id="plate" name="plate"/><br/>
        <label for="owner">Owner:</label><input type="text" id="owner" name="owner"/><br/>
        <input type="submit" name="action" value="Find" /> <input type="submit" name="action" value="Add" />
    </form>

    <?
if ($_POST["action"] == "Find") {

    // Choose a field on which to search. Set $fieldName and $value to the value
    $properties = array("make", "model", "year", "plate", "owner");
    foreach ($properties as $p) {
        if ($_POST[$p]) {
            $fieldName = $p;
            $value = $_POST[$p];
            break;
        }
    } 

    // Compose the query and echo it to the page
    $sql = "SELECT make, model, year, plate, owner FROM cars WHERE $fieldName = '$value'";
    echo '<p>' . htmlspecialchars($sql) . '</p>';

    // Perform the search
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->bind_result($rmake, $rmodel, $ryear, $rplate, $rowner);

    // Write the results to a table
    ?>
    <table>
        <tr><th>Make</th><th>Model</th><th>Year</th><th>Plate</th><th>Owner</th></tr>
    <?
    while($row = $stmt->fetch()) {
        ?>
        <tr><td><? echo $rmake; ?></td>
        <td><? echo $rmodel; ?></td>
        <td><? echo $ryear; ?></td>
        <td><? echo $rplate; ?></td>
        <td><? echo $rowner; ?></td></tr>
        <?
    }
    $stmt->free_result();
    ?>
    </table>
    <?
}

else if ($_POST["action"] == "Add") {

    // Insert a new record
    $sql = "INSERT INTO cars (make, model, year, plate, owner) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssiss', $_POST['make'], $_POST['model'], $_POST['year'], $_POST['plate'], $_POST['owner']);
    $stmt->execute();

    // Report success or failure
    $errmsg = $conn->error;
    if ($errmsg) {
        echo "<p>Error: " . htmlspecialchars($errmsg) . "</p>";
    }
    else {
        echo "<p>Record added!</p>";
    }
}
    ?>

</body>
</html>
