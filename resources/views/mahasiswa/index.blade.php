<h2>Data Mahasiswa</h2>

<a href="/mahasiswa/create">+ Tambah Mahasiswa</a>
<br><br>

@foreach($data as $d)
    <p>
        {{ $d->nim }} | {{ $d->nama }} | {{ $d->jurusan }}
    </p>

    <a href="/mahasiswa/{{ $d->id }}/edit">Edit</a>

    <form action="/mahasiswa/{{ $d->id }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Hapus</button>
    </form>

    <hr>
@endforeach