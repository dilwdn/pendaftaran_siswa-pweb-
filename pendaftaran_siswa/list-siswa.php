<?php include("config.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Siswa Baru | MAN 2 Malang</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">MAN 2 Malang</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Daftar Siswa</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container mt-5">
        <h3 class="mb-4">Siswa yang sudah mendaftar</h3>

        <a href="form-daftar.php" class="btn btn-primary mb-3">Tambah Baru</a>

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Sekolah Asal</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM calon_siswa";
                $query = mysqli_query($db, $sql);

                while ($siswa = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>" . $siswa['id'] . "</td>";
                    echo "<td>" . $siswa['nama'] . "</td>";
                    echo "<td>" . $siswa['alamat'] . "</td>";
                    echo "<td>" . $siswa['gender'] . "</td>";
                    echo "<td>" . $siswa['agama'] . "</td>";
                    echo "<td>" . $siswa['sekolah_asal'] . "</td>";

                    echo "<td>";
                    echo "<a href='form-edit.php?id=" . $siswa['id'] . "' class='btn btn-warning btn-sm'>Edit</a> ";
                    echo "<a href='hapus.php?id=" . $siswa['id'] . "' class='btn btn-danger btn-sm'>Hapus</a>";
                    echo "</td>";

                    echo "</tr>";
                }
                ?>

            </tbody>
        </table>

        <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>

    <!-- Add Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>