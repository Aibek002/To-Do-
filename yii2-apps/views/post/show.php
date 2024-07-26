<?php
$servername = "db";
$username = "yii2basic";
$password = "yii2basic";
$dbname = "yii2basic";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

$query = $conn->query("SELECT * FROM example_table");
$results = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Table Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<h2>Table Data</h2>

<table>
    <tr>
        <?php
        if (!empty($results)) {
            foreach ($results[0] as $key => $value) {
                echo "<th>" . htmlspecialchars($key) . "</th>";
            }
        }
        ?>
    </tr>
    <?php
    foreach ($results as $row) {
        echo "<tr>";
        foreach ($row as $column) {
            echo "<td>" . htmlspecialchars($column) . "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
ртпт
</body>
</html>
