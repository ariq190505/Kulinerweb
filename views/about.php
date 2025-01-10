<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Kuliner Tradisional</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --pinterest-red: #e60023;
            --pinterest-black: #111111;
            --pinterest-dark-gray: #2c2c2c;
            --pinterest-light-gray: #767676;
            --pinterest-white: #FFFFFF;
            --transition-speed: 0.3s;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--pinterest-black);
            color: var(--pinterest-white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Scrollbar Styling */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--pinterest-black);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--pinterest-dark-gray);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #3E3E3E;
        }

        .container {
            padding: 2rem 8%;
            margin-top: 2rem;
            min-height: 100vh;
            background: var(--pinterest-black);
        }

        .page-header {
            text-align: center;
            margin-bottom: 4rem;
            padding: 2.5rem;
            border-radius: 24px;
            background: var(--pinterest-dark-gray);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .page-title {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--pinterest-white);
        }

        .content-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .about-card {
            background: var(--pinterest-dark-gray);
            border-radius: 24px;
            padding: 2rem;
            transition: all var(--transition-speed) ease;
            position: relative;
            overflow: hidden;
        }

        .about-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        .about-title {
            font-size: 1.5rem;
            color: var(--pinterest-red);
            margin-bottom: 1rem;
            position: relative;
            font-weight: 600;
        }

        .about-text {
            color: var(--pinterest-light-gray);
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .highlight {
            color: var(--pinterest-white);
            font-weight: 500;
        }

        .feature-list {
            list-style: none;
            margin-top: 1.5rem;
        }

        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            color: var(--pinterest-light-gray);
            padding: 0.5rem 0;
        }

        .feature-item::before {
            content: '•';
            color: var(--pinterest-red);
            font-size: 1.5rem;
            margin-right: 0.8rem;
        }

        .team-section {
            text-align: center;
            padding: 2.5rem;
            background: var(--pinterest-dark-gray);
            border-radius: 24px;
            margin-top: 3rem;
        }

        .team-title {
            color: var(--pinterest-red);
            font-size: 2rem;
            margin-bottom: 2.5rem;
            font-weight: 600;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .team-member {
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 16px;
            transition: transform var(--transition-speed) ease;
        }

        .team-member:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.05);
        }

        .member-name {
            color: var(--pinterest-white);
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .member-role {
            color: var(--pinterest-red);
            font-size: 0.9rem;
            margin-bottom: 1rem;
            font-weight: 500;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }

        .social-link {
            color: var(--pinterest-light-gray);
            text-decoration: none;
            transition: all var(--transition-speed) ease;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.05);
        }

        .social-link:hover {
            color: var(--pinterest-white);
            background: var(--pinterest-red);
            transform: translateY(-2px);
        }

        /* Navigation */
        nav {
            background: var(--pinterest-black);
            padding: 1rem 2rem;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .nav-brand {
            color: var(--pinterest-red);
            text-decoration: none;
            font-weight: 700;
            font-size: 1.5rem;
        }

        .nav-links {
            display: flex;
            gap: 1.5rem;
        }

        .nav-link {
            color: var(--pinterest-light-gray);
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: var(--pinterest-white);
            background: var(--pinterest-dark-gray);
        }

        .nav-link.active {
            color: var(--pinterest-white);
            background: var(--pinterest-red);
        }

        @media (max-width: 768px) {
            .container {
                padding: 1.5rem 4%;
            }

            .page-header {
                padding: 2rem;
            }

            .page-title {
                font-size: 2rem;
            }

            .content-section {
                grid-template-columns: 1fr;
            }

            .team-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            }

            .nav-links {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 1rem 3%;
            }

            .page-title {
                font-size: 1.8rem;
            }

            .about-card {
                padding: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <nav>
        <a href="index.php" class="nav-brand">Kuliner Nusantara</a>
        <div class="nav-links">
            <a href="index.php" class="nav-link">Beranda</a>
            <a href="?page=makanan" class="nav-link">Makanan</a>
            <a href="?page=minuman" class="nav-link">Minuman</a>
            <a href="?page=about" class="nav-link active">Tentang</a>
        </div>
    </nav>

    <div class="container">
        <div class="page-header">
            <h1 class="page-title">About Us</h1>
            <p class="about-text highlight">Menjelajahi Kekayaan Kuliner Tradisional Indonesia</p>
        </div>

        <div class="content-section">
            <div class="about-card">
                <h2 class="about-title">Visi Kami</h2>
                <p class="about-text highlight">
                    Menjadi platform terdepan dalam melestarikan dan memperkenalkan kekayaan kuliner tradisional Indonesia kepada generasi muda dan dunia.
                </p>
                <p class="about-text highlight">
                    Kami berkomitmen untuk mendokumentasikan dan membagikan warisan kuliner nusantara yang tak ternilai.
                </p>
            </div>
        
            <div class="about-card">
                <h2 class="about-title">Misi Kami</h2>
                </p>
                    <p class="about-title highlight">Mendokumentasikan resep makanan dan minuman tradisional
                    <p class="about-title highlight">Memperkenalkan keanekaragaman kuliner daerah
                    <p class="about-title highlight">Mendukung pelestarian warisan kuliner Indonesia
                    <p class="about-title highlight">Mengedukasi masyarakat tentang nilai budaya kuliner
                </p>
            </div>
        </div>

        <div class="team-section">
            <h2 class="team-title">Saya</h2>
            <div class="team-grid">
                <?php
                $team_members = [
                    [
                        'name' => 'Ariq Ibtihal',
                        'role' => 'Web Developer',
                        'social' => [
                            ['name' => 'Github', 'url' => '#'],
                            ['name' => 'LinkedIn', 'url' => '#']
                        ]
                    ],
                ];

                foreach ($team_members as $member) {
                    echo '<div class="team-member">';
                    echo '<h3 class="member-name">' . htmlspecialchars($member['name']) . '</h3>';
                    echo '<p class="member-role">' . htmlspecialchars($member['role']) . '</p>';
                    echo '<div class="social-links">';
                    foreach ($member['social'] as $social) {
                        echo '<a href="' . htmlspecialchars($social['url']) . '" class="social-link" target="_blank">' . 
                             htmlspecialchars($social['name']) . '</a>';
                    }
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>