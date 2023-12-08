<!DOCTYPE html>
<html>

<head>
    <title>Formulir Pendaftaran Siswa Baru | MAN 2 Malang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }

    header {
        background-color: #363062;
        color: #fff;
        padding: 10px;
        text-align: center;
    }

    form {
        background-color: #fff;
        padding: 20px;
        margin: 20px auto;
        max-width: 600px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    input[type="text"],
    textarea,
    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 10px;
        font-size: 16px;
    }

    input[type="radio"] {
        margin-right: 10px;
    }

    input[type="submit"] {
        background-color: #333;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    input[type="submit"]:hover {
        background-color: #555;
    }
</style>

<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="nama lengkap">
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat"></textarea>
            </div>

            <div class="form-group">
                <label for="gender">Jenis Kelamin:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="laki-laki" value="laki-laki">
                    <label class="form-check-label" for="laki-laki">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="perempuan" value="perempuan">
                    <label class="form-check-label" for="perempuan">
                        Perempuan
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label for="agama">Agama:</label>
                <textarea class="form-control" id="agama" name="agama"></textarea>
            </div>

            <div class="form-group">
                <label for="sekolah_asal">Sekolah Asal:</label>
                <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" placeholder="nama sekolah">
            </div>

            <button type="submit" class="btn btn-primary" name="daftar">Daftar</button>

        </fieldset>
    </form>
</body>

</form>

</body>

</html>