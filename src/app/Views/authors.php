<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Authors List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">
            <i class="bi bi-people-fill"></i> Authors List
        </h1>
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th><i class="bi bi-hash"></i> ID</th>
                    <th><i class="bi bi-person"></i> First Name</th>
                    <th><i class="bi bi-person"></i> Last Name</th>
                    <th><i class="bi bi-envelope"></i> E-mail</th>
                    <th><i class="bi bi-key"></i> Password</th>
                    <th><i class="bi bi-check-circle"></i> Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($authors as $author): ?>
                    <tr>
                        <td><?= htmlspecialchars($author->id) ?></td>
                        <td><?= htmlspecialchars($author->name) ?></td>
                        <td><?= htmlspecialchars($author->surname) ?></td>
                        <td><?= htmlspecialchars($author->email) ?></td>
                        <td><?= htmlspecialchars($author->password) ?></td>
                        <td>
                            <?php if ($author->status == 1): ?>
                                <span class="badge bg-success"><i class="bi bi-check-lg"></i> Ative</span>
                            <?php else: ?>
                                <span class="badge bg-danger"><i class="bi bi-x-lg"></i> Inative</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS (optional, for interactive components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>