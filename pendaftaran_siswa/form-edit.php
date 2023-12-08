<?php

include("config.php");

// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Formulir Edit Siswa | MAN 2 Malang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 class="text-center">Formulir Edit Siswa</h3>
                    </div>
                    <div class="card-body">
                        <form action="proses-edit.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?php echo $siswa['nama'] ?>" />
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat:</label>
                                <textarea class="form-control" name="alamat" placeholder="Alamat"><?php echo $siswa['alamat'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="gender">Jenis Kelamin:</label>
                                <?php $gender = $siswa['gender']; ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="laki-laki" <?php echo ($gender == 'laki-laki') ? "checked" : "" ?>>
                                    <label class="form-check-label">Laki-laki</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="perempuan" <?php echo ($gender == 'perempuan') ? "checked" : "" ?>>
                                    <label class="form-check-label">Perempuan</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="agama">Agama:</label>
                                <textarea class="form-control" name="agama" placeholder="Agama"><?php echo $siswa['agama'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="sekolah_asal">Sekolah Asal:</label>
                                <input type="text" class="form-control" name="sekolah_asal" placeholder="Nama Sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" />
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-+J6Q6LJQvJ4XJ6gZmJ8JL5zJx6Z5z9JLJzJ5vzJz5LZ1+QJzJQJzJ5vzJz5LZ1+QJzJQJzJ5vzJz5LZ1+QJzJQ==" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>