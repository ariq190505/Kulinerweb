<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuliner Nusantara</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --pinterest-red: #e60023;
            --pinterest-black: #111111;
            --pinterest-dark-gray: #2c2c2c;
            --pinterest-light-gray: #767676;
            --pinterest-white: #FFFFFF;
            --nav-height: 64px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--pinterest-black);
            color: var(--pinterest-white);
            overflow-x: hidden;
        }

        nav {
            background: var(--pinterest-black);
            padding: 1rem 2rem;
            position: fixed;
            width: 100%;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: var(--nav-height);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .nav-left {
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .nav-brand {
            color: var(--pinterest-red);
            font-weight: 700;
            font-size: 1.5rem;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            color: var(--pinterest-light-gray);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            padding: 0.5rem 1rem;
            border-radius: 24px;
        }

        .nav-links a:hover {
            color: var(--pinterest-white);
            background-color: var(--pinterest-dark-gray);
        }

        .featured-hero {
            padding-top: calc(var(--nav-height) + 2rem);
            min-height: 80vh;
            background: var(--pinterest-black);
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .featured-content {
            padding: 2rem 8%;
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .featured-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: var(--pinterest-white);
        }

        .featured-description {
            font-size: 1.2rem;
            color: var(--pinterest-light-gray);
            margin-bottom: 2.5rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .featured-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
        }

        .btn {
            padding: 0.75rem 1.5rem;
            border-radius: 24px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
        }

        .btn-primary {
            background: var(--pinterest-red);
            color: var(--pinterest-white);
        }

        .btn-primary:hover {
            background: #d50021;
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: var(--pinterest-dark-gray);
            color: var(--pinterest-white);
        }

        .btn-secondary:hover {
            background: #3c3c3c;
            transform: translateY(-2px);
        }

        .content-row {
            padding: 2rem 4%;
            margin-bottom: 2rem;
        }

        .row-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding: 0 1rem;
        }

        .row-header h2 {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--pinterest-white);
        }

        .see-all {
            color: var(--pinterest-red);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            padding: 0.5rem 1rem;
            border-radius: 24px;
        }

        .see-all:hover {
            background-color: var(--pinterest-dark-gray);
        }

        .content-slider {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            padding: 0.5rem;
        }

        .content-card {
            background: var(--pinterest-dark-gray);
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.3s ease;
            position: relative;
            break-inside: avoid;
        }

        .content-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-image {
            width: 100%;
            aspect-ratio: 3/4;
            object-fit: cover;
            vertical-align: middle;
        }

        .card-content {
            padding: 1rem;
        }

        .card-content h3 {
            font-size: 1rem;
            margin-bottom: 0.5rem;
            color: var(--pinterest-white);
            font-weight: 500;
        }

        .card-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .tag {
            font-size: 0.75rem;
            color: var(--pinterest-light-gray);
            background: rgba(255, 255, 255, 0.1);
            padding: 4px 12px;
            border-radius: 16px;
            transition: all 0.3s ease;
        }

        .content-card:hover .tag {
            background: var(--pinterest-red);
            color: var(--pinterest-white);
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .featured-title {
                font-size: 2.5rem;
            }

            .featured-description {
                font-size: 1rem;
                padding: 0 1rem;
            }

            .content-slider {
                grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
                gap: 16px;
            }

            .card-image {
                aspect-ratio: 1;
            }
        }
    </style>
</head>

<body>
    <nav>
        <div class="nav-left">
            <a href="index.php" class="nav-brand">Kuliner Nusantara</a>
            <div class="nav-links">
                <a href="?page=makanan">Makanan</a>
                <a href="?page=minuman">Minuman</a>
                <a href="?page=tentang">Tentang</a>
            </div>
        </div>
    </nav>

    <div class="featured-hero">
        <div class="featured-content">
            <h1 class="featured-title">KULINER NUSANTARA</h1>
            <p class="featured-description">Jelajahi keragaman cita rasa Indonesia melalui koleksi makanan dan minuman tradisional terbaik dari Sabang sampai Merauke.</p>
            <div class="featured-buttons">
                <button class="btn btn-primary">Jelajahi</button>
                <button class="btn btn-secondary">Info Lebih Lanjut</button>
            </div>
        </div>
    </div>

    <section class="content-row">
        <div class="row-header">
            <h2>Hidangan Tradisional</h2>
            <a href="?page=makanan" class="see-all">Lihat Semua</a>
        </div>
        <div class="content-slider">
        <?php
$queryMakanan = "SELECT * FROM tbl_makanan ORDER BY RAND() LIMIT 6";
$resultMakanan = mysqli_query($conn, $queryMakanan);

if (mysqli_num_rows($resultMakanan) > 0) {
    while ($makanan = mysqli_fetch_assoc($resultMakanan)) {
?>
        <div class="content-card">
            <img src="images/makanan/<?= htmlspecialchars($makanan['gambar']); ?>" 
                 alt="<?= htmlspecialchars($makanan['nama_makanan']); ?>" 
                 class="card-image">
            <div class="card-content">
                <h3><?= htmlspecialchars($makanan['nama_makanan']); ?></h3>
                <div class="card-tags">
                    <span class="tag"><?= htmlspecialchars($makanan['daerah_makanan']); ?></span>
                </div>
            </div>
    </section>
        </div>
<?php
    }
}
?>

    </section>
    
    <section class="content-row">
    <div class="row-header">
        <h2>Minuman Tradisional</h2>
        <a href="?page=minuman" class="see-all">Lihat Semua</a>
    </div>
    
    <div class="content-slider">
        <?php
        $queryMinuman = "SELECT * FROM tbl_minuman ORDER BY RAND() LIMIT 6";
        $resultMinuman = mysqli_query($conn, $queryMinuman);

        if (mysqli_num_rows($resultMinuman) > 0) {
            while ($minuman = mysqli_fetch_assoc($resultMinuman)) {
        ?>
                <div class="content-card">
                    <img src="images/minuman/<?= htmlspecialchars($minuman['gambar']); ?>" 
                         alt="<?= htmlspecialchars($minuman['nama_minuman']); ?>" 
                         class="card-image">
                    <div class="card-content">
                        <h3><?= htmlspecialchars($minuman['nama_minuman']); ?></h3>
                        <div class="card-tags">
                            <span class="tag"><?= htmlspecialchars($minuman['daerah_minuman']); ?></span>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>
</section>

</body>
</html>
