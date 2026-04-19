<h2>Edit Mahasiswa</h2>

<form action="/mahasiswa/{{ $data->id }}" method="POST">
    @csrf
    @method('PUT')

    <label>NIM:</label><br>
    <input type="text" name="nim" value="{{ $data->nim }}"><br><br>

    <label>Nama:</label><br>
    <input type="text" name="nama" value="{{ $data->nama }}"><br><br>

    <label>Jurusan:</label><br>
    <input type="text" name="jurusan" value="{{ $data->jurusan }}"><br><br>

    <button type="submit">Update</button>
</form>

<br>
<a href="/mahasiswa">Kembali</a>