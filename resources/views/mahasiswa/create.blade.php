<h2>Tambah Mahasiswa</h2>

<form action="/mahasiswa" method="POST">
    @csrf

    <label>NIM:</label><br>
    <input type="text" name="nim"><br><br>

    <label>Nama:</label><br>
    <input type="text" name="nama"><br><br>

    <label>Jurusan:</label><br>
    <input type="text" name="jurusan"><br><br>

    <button type="submit">Simpan</button>
</form>

<br>
<a href="/mahasiswa">Kembali</a>