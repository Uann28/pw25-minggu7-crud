<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Tiket Bioskop</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>

</head>
<body>
<div class="navbar">
    <div class="logo">🎬 Bioskop Online</div>
    <div>
        <a href="index.php">Home</a>
        <a href="dashboard.php">Dashboard</a>
        <a href="tambah.php">+ Beli Tiket</a>
    </div>
</div>

<div class="container">
    <h2>Film Sedang Tayang</h2>
    <div class="film-section">
        <div class="film-card">
            <a href="tambah.php?film=The Last Voyage">
                <img src="./assets/thunderbolts.jpeg" alt="Thunderbolts">
                <div class="film-title">Thunderbolts</div>
            </a>
        </div>
        <div class="film-card">
            <a href="tambah.php?film=Galaxy War">
                <img src="./assets/the-fantastic-four.png" alt="fantastic four">
                <div class="film-title">Fantastic Four</div>
            </a>
        </div>
        <div class="film-card">
            <a href="tambah.php?film=Romansa April">
                <img src="./assets/Poster_Spider-Man_No_Way_Home.jpg" alt="Spiderman No Way Home">
                <div class="film-title">Spiderman No Way Home</div>
            </a>
        </div>
    </div>
</div>
</body>
</html>
