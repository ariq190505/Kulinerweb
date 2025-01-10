<?php
// Common PHP header for both files
include "includes/config.php";

// For update.php only - fetch data
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM tbl_makanan WHERE id_makanan = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $data = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($data) ? 'Edit' : 'Tambah' ?> Makanan Tradisional</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --pinterest-red: #e60023;
            --pinterest-dark: #111111;
            --pinterest-darker: #000000;
            --pinterest-gray: #767676;
            --pinterest-light-gray: #2c2c2c;
            --pinterest-white: #ffffff;
            --transition: 0.2s ease-in-out;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--pinterest-darker);
            color: var(--pinterest-white);
            min-height: 100vh;
            line-height: 1.5;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }

        .form-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .page-title {
            font-size: 1.75rem;
            font-weight: 600;
            color: var(--pinterest-white);
        }

        .form-card {
            background: var(--pinterest-dark);
            padding: 2rem;
            border-radius: 32px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.25);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--pinterest-gray);
            font-weight: 500;
            font-size: 0.875rem;
        }

        .form-input {
            width: 100%;
            padding: 0.75rem 1rem;
            background: var(--pinterest-light-gray);
            border: 2px solid transparent;
            border-radius: 16px;
            color: var(--pinterest-white);
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--pinterest-red);
            background: var(--pinterest-dark);
        }

        .button-group {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .btn {
            flex: 1;
            padding: 0.75rem 1rem;
            border: none;
            border-radius: 24px;
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 0.875rem;
            cursor: pointer;
            transition: var(--transition);
        }

        .btn-primary {
            background: var(--pinterest-red);
            color: var(--pinterest-white);
        }

        .btn-primary:hover {
            background: #cc0000;
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: var(--pinterest-light-gray);
            color: var(--pinterest-white);
        }

        .btn-secondary:hover {
            background: #3c3c3c;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .page-title {
                font-size: 1.5rem;
            }

            .form-card {
                padding: 1.5rem;
                border-radius: 24px;
            }

            .button-group {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-header">
            <h1 class="page-title"><?= isset($data) ? 'Edit' : 'Tambah' ?> Makanan Tradisional</h1>
        </div>

        <div class="form-card">
            <form method="post" action="?page=<?= isset($data) ? 'makananUpdateProses' : 'makananAddProses' ?>">
                <?php if (isset($data)): ?>
                    <input type="hidden" name="id" value="<?= htmlspecialchars($data['id_makanan']) ?>">
                <?php endif; ?>

                <div class="form-group">
                    <label class="form-label">Nama Makanan</label>
                    <input type="text" name="nama_makanan" class="form-input"
                        value="<?= isset($data) ? htmlspecialchars($data['nama_makanan']) : '' ?>" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Daerah Asal</label>
                    <input type="text" name="daerah_makanan" class="form-input"
                        value="<?= isset($data) ? htmlspecialchars($data['daerah_makanan']) : '' ?>" required>
                </div>

                <div class="button-group">
                    <button type="button" class="btn btn-secondary" onClick="document.location='?page=makanan'">
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