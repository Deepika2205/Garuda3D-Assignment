<?php
require_once "db.php";

$result = $con->query("SELECT * FROM contact_form ORDER BY id ASC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Records</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td { border: 1px solid black; }
        th, td { padding: 10px; }
        th { background: #007bff; color: white; }
    </style>
</head>
<body>

<h2>Saved Submissions</h2>

<table>
    <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Message</th><th>Created At</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['name']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['phone']; ?></td>
            <td><?= $row['message']; ?></td>
            <td><?= $row['created_at']; ?></td>
        </tr>
    <?php } ?>

</table>

<br>
<a href="index.php">← Back to form</a>

</body>
</html>

<?php $con->close(); ?>