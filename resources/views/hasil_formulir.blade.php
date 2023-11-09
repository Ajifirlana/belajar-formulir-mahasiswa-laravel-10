<!DOCTYPE html>
<html>
<head>
    <title>Hasil Formulir Mahasiswa</title>
    <!-- ... (Gaya CSS lainnya) -->
</head>
<body>
    <div class="container">
        <h2>Hasil Formulir Mahasiswa</h2>
        
        <div class="result">
            <p><strong>Nama:</strong> {{ $nama }}</p>
            <p><strong>NIM:</strong> {{ $nim }}</p>
            <p><strong>Alamat:</strong> {{ $alamat }}</p>
            <p><strong>Jenis Kelamin:</strong> {{ $jenis_kelamin }}</p>
            <p><strong>Hobi:</strong> {{ $hobi }}</p>
            <p><strong>Universitas:</strong> {{ $universitas }}</p>
            <p><strong>Jurusan:</strong> {{ $jurusan }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Tanggal Lahir:</strong> {{ $tgl_lahir }}</p>
            <p><strong>Telepon:</strong> {{ $telepon }}</p>
            <p><strong>Website:</strong> {{ $website }}</p>
            <p><strong>Warna Favorit:</strong> {{ $warna_favorit }}</p>
            <p><strong>Bekerja:</strong> {{ $bekerja ? 'Ya' : 'Tidak' }}</p>
        </div>
    </div>
</body>
</html>
