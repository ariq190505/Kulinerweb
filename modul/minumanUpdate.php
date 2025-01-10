<?php
include "includes/config.php";

// Validate and get ID
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "<script>alert('Invalid ID');window.location='?page=minuman';</script>";
    exit;
}

$id = $_GET['id'];

// Fetch data
$query = "SELECT * FROM tbl_minuman WHERE id_minuman = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (!$result || mysqli_num_rows($result) == 0) {
    echo "<script>alert('Data not found');window.location='?page=minuman';</script>";
    exit;
}

$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Minuman Tradisional</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --pinterest-red: #e60023;
            --pinterest-dark: #111111;
            --pinterest-gray: #767676;
            --pinterest-light-gray: #efefef;
            --pinterest-white: #ffffff;
            --pinterest-hover: #ad081b;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--pinterest-dark);
            color: var(--pinterest-white);
            min-height: 100vh;
            line-height: 1.5;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 2rem;
        }

        .form-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .page-title {
            font-size: 24px;
            font-weight: 600;
            color: var(--pinterest-white);
            margin-bottom: 0.5rem;
        }

        .form-card {
            background: #222222;
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--pinterest-light-gray);
            font-weight: 500;
            font-size: 14px;
        }

        .form-input {
            width: 100%;
            padding: 12px 16px;
            background: #333333;
            border: 2px solid transparent;
            border-radius: 8px;
            color: var(--pinterest-white);
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            transition: var(--transition);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--pinterest-red);
            background: #444444;
        }

        .button-group {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .btn {
            flex: 1;
            padding: 12px 16px;
            border: none;
            border-radius: 8px;
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: var(--transition);
        }

        .btn-primary {
            background: var(--pinterest-red);
            color: var(--pinterest-white);
        }

        .btn-primary:hover {
            background: var(--pinterest-hover);
        }

        .btn-secondary {
            background: #333333;
            color: var(--pinterest-white);
        }

        .btn-secondary:hover {
            background: #444444;
        }

        .form-card {
            animation: slideUp 0.4s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .form-card {
                padding: 1.5rem;
            }

            .button-group {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-header">
            <h1 class="page-title">Edit Minuman Tradisional</h1>
        </div>

        <div class="form-card">
            <form method="post" action="?page=minumanUpdateProses">
                <input type="hidden" name="id" value="<?= htmlspecialchars($data['id_minuman']) ?>">

                <div class="form-group">
                    <label class="form-label">Nama Minuman</label>
                    <input type="text" name="nama_minuman" class="form-input"
                        value="<?= htmlspecialchars($data['nama_minuman']) ?>" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Daerah Asal</label>
                    <input type="text" name="daerah_minuman" class="form-input"
                        value="<?= htmlspecialchars($data['daerah_minuman']) ?>" required>
                </div>

                <div class="button-group">
                    <button type="button" class="btn btn-secondary" onClick="document.location='?page=minuman'">
                        Batal
                    </button>
                    <button type="submit" name="<?= isset($data) ? 'update' : 'submit' ?>" class="btn btn-primary">
                        <?= isset($data) ? 'Update' : 'Simpan' ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>