<?php
// config.php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "db_kuliner";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<?php
// index.php
include "includes/config.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuliner Nusantara</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --pinterest-red: #e60023;
            --pinterest-dark: #121212;
            --pinterest-darker: #0a0a0a;
            --pinterest-gray: #2e2e2e;
            --pinterest-light: #767676;
            --pinterest-white: #ffffff;
            --card-radius: 16px;
            --transition: 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--pinterest-dark);
            color: var(--pinterest-white);
            line-height: 1.5;
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--pinterest-darker);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--pinterest-gray);
            border-radius: 4px;
        }

        .container {
            max-width: 1920px;
            margin: 0 auto;
            padding: 2rem;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding: 1rem;
            background: var(--pinterest-darker);
            border-radius: var(--card-radius);
        }

        .page-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--pinterest-white);
        }

        .add-button {
            background: var(--pinterest-red);
            color: var(--pinterest-white);
            padding: 0.75rem 1.5rem;
            border-radius: 24px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            transition: var(--transition);
            border: none;
            cursor: pointer;
        }

        .add-button:hover {
            background: #cc0000;
            transform: scale(1.05);
        }

        .content-grid {
            columns: 6 240px;
            column-gap: 1rem;
            margin: 1.5rem 0;
        }

        .content-card {
            break-inside: avoid;
            margin-bottom: 1rem;
            position: relative;
            border-radius: var(--card-radius);
            overflow: hidden;
            background: var(--pinterest-darker);
            transition: var(--transition);
        }

        .content-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-image {
            width: 100%;
            display: block;
            border-radius: var(--card-radius) var(--card-radius) 0 0;
            transition: var(--transition);
        }

        .card-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: var(--transition);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 1rem;
        }

        .content-card:hover .card-overlay {
            opacity: 1;
        }

        .card-content {
            padding: 1rem;
        }

        .card-title {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--pinterest-white);
        }

        .card-location {
            font-size: 0.85rem;
            color: var(--pinterest-light);
            background: var(--pinterest-gray);
            padding: 0.25rem 0.75rem;
            border-radius: 12px;
            display: inline-block;
            margin-bottom: 1rem;
        }

        .card-actions {
            display: flex;
            gap: 0.5rem;
            opacity: 0;
            transform: translateY(10px);
            transition: var(--transition);
        }

        .content-card:hover .card-actions {
            opacity: 1;
            transform: translateY(0);
        }

        .action-button {
            padding: 0.5rem 1rem;
            border-radius: 20px;
            text-decoration: none;
            font-size: 0.8rem;
            font-weight: 500;
            flex: 1;
            text-align: center;
            transition: var(--transition);
        }

        .edit-button {
            background: var(--pinterest-gray);
            color: var(--pinterest-white);
        }

        .edit-button:hover {
            background: #404040;
        }

        .delete-button {
            background: var(--pinterest-red);
            color: var(--pinterest-white);
        }

        .delete-button:hover {
            background: #cc0000;
        }

        .total-items {
            text-align: center;
            color: var(--pinterest-light);
            font-size: 0.9rem;
            margin-top: 2rem;
            padding: 1rem;
            background: var(--pinterest-darker);
            border-radius: var(--card-radius);
        }

        /* Form Styles for Add/Edit */
        .form-container {
            max-width: 600px;
            margin: 2rem auto;
            padding: 2rem;
            background: var(--pinterest-darker);
            border-radius: var(--card-radius);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--pinterest-white);
            font-weight: 500;
        }

        .form-input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid var(--pinterest-gray);
            border-radius: 8px;
            background: var(--pinterest-dark);
            color: var(--pinterest-white);
            font-family: 'Inter', sans-serif;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--pinterest-red);
        }

        .form-button {
            background: var(--pinterest-red);
            color: var(--pinterest-white);
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 24px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .form-button:hover {
            background: #cc0000;
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .page-header {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }

            .content-grid {
                columns: 2 200px;
            }

            .form-container {
                margin: 1rem;
                padding: 1rem;
            }
        }

        @media (max-width: 480px) {
            .content-grid {
                columns: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        switch($page) {
            case 'home':
                include "pages/home.php";
                break;
            case 'minumanAdd':
                include "pages/minumanAdd.php";
                break;
            case 'minumanUpdate':
                include "pages/minumanUpdate.php";
                break;
            case 'minumanDelete':
                include "pages/minumanDelete.php";
                break;
            default:
                
        }
        ?>
    </div>
</body>
</html>

<div class="page-header">
    <h1 class="page-title"></h1>
    <a href="?page=minumanAdd" class="add-button">+ Tambah Minuman</a>
</div>

<div class="content-grid">
    <?php
    $query = "SELECT * FROM tbl_minuman ORDER BY id_minuman ASC";
    $sql = mysqli_query($conn, $query);
    $nomor = 1;

    while ($data = mysqli_fetch_array($sql)) { ?>
        <div class="content-card">
            <img src="images/minuman/<?= $nomor ?>.jpg" 
                 alt="<?= htmlspecialchars($data['nama_minuman']) ?>" 
                 class="card-image" 
                 loading="lazy">
            <div class="card-overlay">
                <div class="card-content">
                    <h3 class="card-title"><?= htmlspecialchars($data['nama_minuman']) ?></h3>
                    <div class="card-location"><?= htmlspecialchars($data['daerah_minuman']) ?></div>
                    <div class="card-actions">
                        <a href="?page=minumanUpdate&id=<?= $data['id_minuman'] ?>" 
                           class="action-button edit-button">Edit</a>
                        <a href="?page=minumanDelete&id=<?= $data['id_minuman'] ?>" 
                           onclick="return confirm('Yakin ingin menghapus data ini?');" 
                           class="action-button delete-button">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    <?php
        $nomor++;
    } ?>
</div>

<div class="total-items">
    Total Minuman: <?= mysqli_num_rows($sql) ?>
</div>

<?php

// pages/minumanUpdate.php
if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM tbl_minuman WHERE id_minuman = '$id'";
  $sql = mysqli_query($conn, $query);
  $data = mysqli_fetch_array($sql);
?>
<div class="form-container">
  <h2 class="page-title">Edit Minuman</h2>
  <form action="proses/minumanUpdate_proses.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id_minuman" value="<?= $data['id_minuman'] ?>">
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
      <div class="form-group">
          <label class="form-label">Foto Minuman (Biarkan kosong jika tidak ingin mengubah)</label>
          <input type="file" name="foto_minuman" class="form-input">
      </div>
      <button type="submit" class="form-button">Update</button>
  </form>
</div>
<?php }
 ?>

<?php
// pages/minumanDelete.php
if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM tbl_minuman WHERE id_minuman = '$id'";
  $sql = mysqli_query($conn, $query);
  
  if($sql) {
      echo "<script>alert('Data berhasil dihapus!'); window.location='index.php';</script>";
  } else {
      echo "<script>alert('Data gagal dihapus!'); window.location='index.php';</script>";
  }
}
?>