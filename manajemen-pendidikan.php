<?php
session_start();
require_once('required/database.php');
require_once('required/auth.php');

onlyAdmin();

$query = "SELECT * FROM pendidikan ORDER BY id DESC";
$result = mysqli_query($connectDb, $query);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Manajemen pendidikan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.min.css" rel="stylesheet" type="text/css" />

    <!-- colors -->
    <link href="css/colors/default.css" rel="stylesheet" type="text/css" id="color-opt" />
  </head>
  <body>
    <?php include('admin-layout/navbar.php'); ?>

    <div class="admin-container my-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Manajemen <span class="text-primary"> pendidikan</span></h3>
                    <a href="pendidikan-add.php" class="btn btn-primary">Tambah pendidikan</a>
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama</th>
                                <th scope="col">mulai</th>
                                <th scope="col">selesai</th>
                                <th scope="col">deskripsi</th>
                                <th scope="col">alamat</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $no = 1;
                        while ($data = mysqli_fetch_array($result)) : ?>
                            <tr>
                                <td><?= $no; ?></th>
                                <td><?= $data['nama']; ?></td>
                                <td><?= $data['mulai']; ?></td>
                                <td><?= $data['selesai']; ?></td>
                                <td><?= $data['deskripsi']; ?></td>
                                <td><?= $data['alamat']; ?></td>
                                <td>
                                    <a href="pendidikan-edit.php?id=<?= $data['id']; ?>" class="btn btn-outline-primary">Edit</a>
                                    <a href="pendidikan-delete.php?id=<?= $data['id']; ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php $no++; endwhile; ?>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>  
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript">
        <?php 
        if (isset($_GET['tambah'])) {
            $statusTambah = $_GET['tambah'];
            if ($statusTambah == 'sukses') : ?>
                alert('Sukses menambah pendidikan');
            <?php elseif ($statusTambah == 'gagal') : ?>
                alert('Gagal menambah pendidikan');
            <?php endif;
        }

        if (isset($_GET['update'])) {
            $statusUpdate = $_GET['update'];
            if ($statusUpdate == 'sukses') : ?>
                alert('Sukses update pendidikan');
            <?php elseif ($statusUpdate == 'gagal') : ?>
                alert('Gagal update pendidikan');
            <?php endif;
        }

        if (isset($_GET['delete'])) {
            $statusDelete = $_GET['delete'];
            if ($statusDelete == 'sukses') : ?>
                alert('Sukses menghapus pendidikan');
            <?php elseif ($statusDelete == 'gagal') : ?>
                alert('Gagal menghapus pendidikan');
            <?php endif;
        }
        ?>
    </script>
    
    
  </body>
</html>
<?php 
    mysqli_close($connectDb);
