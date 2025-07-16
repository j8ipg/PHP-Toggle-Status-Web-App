<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Form</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f9f9f9;
        }
        form input, form button {
            padding: 5px;
            margin-right: 5px;
        }
        table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 80%;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid #000;
            text-align: center;
        }
        th {
            background-color: #e8e8e8;
        }
    </style>
</head>
<body>

<!-- Form to insert data -->
<form method="POST">
    <input type="text" name="name" placeholder="Name" required>
    <input type="number" name="age" placeholder="Age" required>
    <button type="submit" name="submit">Add</button>
</form>

<?php
// إدخال البيانات إلى قاعدة البيانات
if (isset($_POST['submit'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $age = (int)$_POST['age'];
    $conn->query("INSERT INTO list (name, age) VALUES ('$name', $age)");
}

// جلب البيانات من قاعدة البيانات
$result = $conn->query("SELECT * FROM list");

echo "<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Status</th>
    <th>Toggle</th>
</tr>";

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $status = $row['status'] ? 'ON' : 'OFF';
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['age']}</td>
                <td id='status-{$row['id']}'>$status</td>
                <td><button onclick='toggleStatus({$row['id']})'>Toggle</button></td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>No records found</td></tr>";
}

echo "</table>";
?>

<script src="script.js"></script>

</body>
</html>