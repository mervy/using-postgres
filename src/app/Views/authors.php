<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authors List</title>
    <style>
        table { border-collapse: collapse; width: 60%; margin: 50px auto; }
        th, td { border: 1px solid #ccc; padding: 8px 12px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Authors List</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Birth Year</th>
            <th>Country</th>
        </tr>
        <?php foreach($authors as $author): ?>
        <tr>
            <td><?= htmlspecialchars($author['id']) ?></td>
            <td><?= htmlspecialchars($author['first_name']) ?></td>
            <td><?= htmlspecialchars($author['last_name']) ?></td>
            <td><?= htmlspecialchars($author['birth_year']) ?></td>
            <td><?= htmlspecialchars($author['country']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
