<?php
include "includes/config.php";
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Makanan Tradisional</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --pinterest-red: #E60023;
            --pinterest-dark: #111111;
            --pinterest-gray-dark: #2C2C2C;
            --pinterest-gray: #767676;
            --pinterest-white: #FFFFFF;
            --border-radius: 16px;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: var(--pinterest-dark);
            color: var(--pinterest-white);
            min-height: 100vh;
            line-height: 1.6;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 3rem 1.5rem;
        }

        .form-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .page-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 2rem;
            font-weight: 700;
            color: var(--pinterest-white);
            margin-bottom: 0.5rem;
            margin-top: 30px;
        }

        .form-subtitle {
            color: var(--pinterest-gray);
            font-size: 1rem;
        }
        .form-card {
            background-color: var(--pinterest-gray-dark);
            border-radius: var(--border-radius);
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.25);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--pinterest-white);
            font-weight: 600;
            font-size: 0.9rem;
        }

        .form-group:focus-within .form-label {
            color: var(--spotify-green);
        }

        .form-input {
            width: 100%;
            padding: 0.8rem 1rem;
            background-color: var(--pinterest-dark);
            border: 2px solid transparent;
            border-radius: var(--border-radius);
            color: var(--pinterest-white);
            font-family: 'Open Sans', sans-serif;
            font-size: 0.95rem;
            transition: var(--transition);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--pinterest-red);
            box-shadow: 0 0 0 2px rgba(230, 0, 35, 0.2);
        }
        .form-input::placeholder {
            color: var(--pinterest-gray);
        }
        .button-group {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-top: 2rem;
        }

        .btn {
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: var(--border-radius);
            font-family: 'Open Sans', sans-serif;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: var(--transition);
        }

        .btn-primary {
            background-color: var(--pinterest-red);
            color: var(--pinterest-white);
        }

        .btn-primary:hover {
            background-color: #cc0000;
            transform: translateY(-2px);
        }

        .btn-secondary {
            background-color: transparent;
            border: 2px solid var(--pinterest-gray);
            color: var(--pinterest-white);
        }

        .btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }

        .form-input::placeholder {
            color: rgba(255, 255, 255, 0.3);
        }

        @media (max-width: 768px) {
            .container {
                padding: 2rem 1rem;
            }

            .page-title {
                font-size: 2rem;
            }

            .form-card {
                padding: 1.5rem;
            }

            .button-group {
                flex-direction: column;
            }

            .form-subtitle {
                font-size: 1rem;
                padding: 0 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-header">
            <h1 class="page-title">Tambah Minuman Tradisional</h1>
            <p class="form-subtitle">Tambahkan minuman baru ke koleksi kuliner nusantara</p>
        </div>

        <div class="form-card">
            <form method="post" action="?page=minumanAddProses">
                <div class="form-group">
                    <label class="form-label">Nama Minuman</label>
                    <input type="text" name="nama_minuman" class="form-input"
                        placeholder="Masukkan nama minuman" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Daerah Asal</label>
                    <input type="text" name="daerah_minuman" class="form-input"
                        placeholder="Masukkan daerah asal" required>
                </div>

                <div class="button-group">
                    <button type="button" class="btn btn-secondary" onClick="document.location='?page=minuman'">
                        Batal
                    </button>
                    <button type="submit" name="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>