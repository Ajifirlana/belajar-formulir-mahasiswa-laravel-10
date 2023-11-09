<!DOCTYPE html>
<html>
<head>
    <title>Formulir Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 50px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333; /* Warna label */
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="tel"],
        input[type="url"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px; /* Ukuran font isian */
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 5px;
        }

        button[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px; /* Ukuran font tombol */
        }

        button[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Formulir Mahasiswa</h2>
        <form action="{{url('simpan_formulir')}}" method="post">
            @csrf <!-- Tambahkan token CSRF untuk keamanan -->

            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" required>
            </div>

            <div class="form-group">
            <label for="nama">Nama Panggil:</label>
            <input type="text" name="nama" id="nama" class="form-control">
        </div>

        <div class="form-group">
            <label for="nim">NIM:</label>
            <input type="text" name="nim" id="nim" class="form-control">
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea name="alamat" id="alamat" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin:</label>
            <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
        </div>

        <div class="form-group">
            <label for="hobi">Hobi:</label>
            <select name="hobi" id="hobi" class="form-control">
                <option value="Membaca">Membaca</option>
                <option value="Olahraga">Olahraga</option>
                <option value="Musik">Musik</option>
            </select>
        </div>

        <div class="form-group">
            <label for="universitas">Universitas:</label>
            <input type="text" name="universitas" id="universitas" class="form-control">
        </div>

        <div class="form-group">
            <label for="jurusan">Jurusan:</label>
            <input type="text" name="jurusan" id="jurusan" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir:</label>
            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
        </div>

        <div class="form-group">
            <label for="telepon">Telepon:</label>
            <input type="tel" name="telepon" id="telepon" class="form-control">
        </div>

        <div class="form-group">
            <label for="website">Website:</label>
            <input type="url" name="website" id="website" class="form-control">
        </div>

        <div class="form-group">
            <label for="warna_favorit">Warna Favorit:</label>
            <input type="color" name="warna_favorit" id="warna_favorit" class="form-control">
        </div>

        <div class="form-group">
            <label>Bekerja:</label>
            <input type="checkbox" name="bekerja" value="1"> Ya
        </div>


                    <button type="submit">Simpan</button>
                </form>
            </div>
</body>
</html>
