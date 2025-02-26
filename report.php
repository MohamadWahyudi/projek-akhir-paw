<?php
session_start();

if (isset($_POST["login"])) {
    if (empty($_SESSION["user"])) {
        header("Location: user/login.php");
    }
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gili Labak</title>
    <link rel="icon" type="image/png" href="img/logoGili.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-primary">
        <div class="container">
            <div class="logo">
                <img src="img/logoGili.png" alt="Gili Labak Logo">
                <a class="navbar-brand" href="index.php">Gili Labak</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <?php if(empty($_SESSION["user"])) : ?>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link" href="report.php">Report</a></li>
                </ul>
            <?php elseif(!empty($_SESSION["user"])) : ?>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="tiket/tiket.php">Tiket</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link" href="report.php">Report</a></li>
                </ul>
            <?php endif; ?>
            <?php if(empty($_SESSION["user"])) : ?>
                    <span class="theme-icon me-3">🌙</span>
                    <form action="" method="post">
                        <button type="submit" name="login" class="btn btn-outline-light">Login</button>
                    </form>
                    
            <?php elseif(!empty($_SESSION["user"])) : ?>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <span>Hallow <?= $_SESSION["user"] ?></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item text-danger" href="logout.php" onclick="return confirm('Apakah Anda yakin ingin logout?')">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            <?php endif; ?>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>