<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pieslēgšanās</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow" style="max-width: 400px; width: 100%;">
            <h2 class="text-center mb-3">Pieslēgšanās</h2>

            <!-- Kļūdas ziņa -->
            <?php if (isset($_GET['error'])): ?>
                <div class="alert alert-danger" role="alert">
                    <?= htmlspecialchars($_GET['error']); ?>
                </div>
            <?php endif; ?>

            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label for="uname" class="form-label">Lietotājvārds</label>
                    <input type="text" class="form-control" id="uname" name="uname" placeholder="Ievadiet lietotājvārdu" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Parole</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Ievadiet paroli" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Pieslēgties</button>
            </form>
        </div>
    </div>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
