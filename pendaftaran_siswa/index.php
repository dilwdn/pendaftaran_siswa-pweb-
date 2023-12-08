<!DOCTYPE html>
<html>

<head>
    <style>
        /* Style for body tag */
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            color: #333;
            background-color: #fff;
        }

        /* Style for header tag */
        header {
            background-color: #363062;
            color: #fff;
            padding: 20px;
        }

        /* Style for h1 tag */
        h1 {
            font-size: 36px;
            margin: 0;
        }

        /* Style for h3 tag */
        h3 {
            font-size: 24px;
            margin: 0;
        }

        /* Style for h4 tag */
        h4 {
            font-size: 18px;
            margin: 0;
        }

        /* Style for nav tag */
        nav {
            margin-bottom: 20px;
        }

        /* Style for ul tag */
        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        /* Style for li tag */
        li {
            display: inline-block;
            margin-right: 10px;
        }

        /* Style for a tag */
        a {
            color: #333;
            text-decoration: none;
        }

        /* Style for a:hover tag */
        a:hover {
            color: #666;
        }

        /* Style for .alert tag */
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        /* Style for .alert-success tag */
        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        /* Style for .alert-danger tag */
        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }

        /* Style for .container tag */
        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Style for .my-4 tag */
        .my-4 {
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        /* Style for .card tag */
        .card {
            margin-bottom: 20px;
            border: 1px solid #363062;
            border-radius: 4px;
        }

        /* Style for .card-header tag */
        .card-header {
            background-color: #363062;
            border-bottom: 1px solid #363062;
            padding: 10px 15px;
        }

        /* Style for .card-title tag */
        .card-title {
            margin: 0;
            color: #fff;
        }

        /* Style for .card-body tag */
        .card-body {
            padding: 15px;
        }

        /* Style for .card-text tag */
        .card-text {
            margin-bottom: 0;
        }
    </style>
    <title>Pendaftaran Siswa Baru | MAN 2 Malang</title>
    <!-- Add Bootstrap stylesheet -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</head>

<body>
    <header class="bg-dark text-white py-3">
        <h3 class="text-center">Pendaftaran Siswa Baru</h3>
        <h1 class="text-center">MAN 2 Malang</h1>
    </header>

    <div class="container my-4">
        <h4>Menu</h4>
        <nav>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="form-daftar.php">Daftar Baru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="list-siswa.php">Pendaftar</a>
                </li>
            </ul>
        </nav>

        <?php if (isset($_GET['status'])) : ?>
            <div class="alert <?php echo $_GET['status'] == 'sukses' ? 'alert-success' : 'alert-danger'; ?> mt-4">
                <?php echo $_GET['status'] == 'sukses' ? 'Pendaftaran siswa baru berhasil!' : 'Pendaftaran gagal!'; ?>
            </div>
        <?php endif; ?>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Tentang MAN 2 Malang</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Madrasah Aliyah Negeri 2 Kota Malang adalah lembaga pendidikan umum ditingkat menengah, yang diselenggarakan oleh Kementerian Agama dengan mempunyai keunggulan dibidang pemahaman agama Islam. MAN 2 Kota Malang yang sebelumnya bernama MAN 3 Malang telah dipilih oleh Departemen Agama menjadi salah satu MAN Model di Indonesia berdasarkan SK Dirjen Binbaga Islam Nomor E.IV/PP.00.6/KEP/17.A/1998 tanggal 20 Februari 1998 memiliki potensi yang sangat besar untuk menjadi pusat keunggulan akademik dan nonakademik. Dengan perjalanan yang penuh tantangan berhasil di lalui melalui perjuangan menuju Madrasah yang dijadikan pilihan utama oleh masyarakat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Kontak Kami</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Jl. Bandung No. 7<br>Kota Malang<br>Telepon: (021) 123-4567<br>Email: info@man2malang.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper-base.min.js" integrity="sha384-+JZL4J9fJQ5qJzJ5vJ3z9vJ2zJZ3v7LJ4xZz5ZJy9J7QZf5tJ9zv5gZ7zv1iJ9wz" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>