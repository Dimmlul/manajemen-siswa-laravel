<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h2 class="mb-4">Data Siswa</h2>

        <!-- Form Tambah Siswa -->
        <form action="{{ url('/siswa') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-2">
                    <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required>
                </div>
                <div class="col-md-2">
                    <input type="text" name="nisn" class="form-control" placeholder="NISN" required>
                </div>
                <div class="col-md-2">
                    <input type="text" name="kelas" class="form-control" placeholder="Kelas" required>
                </div>
                <div class="col-md-2">
                    <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" required>
                </div>
                <div class="col-md-2">
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                </div>
                <div class="col-md-2">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="col-md-2 mt-2">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </form>

        <!-- Tabel Data Siswa -->
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>NISN</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $index => $s)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $s->nama_lengkap }}</td>
                        <td>{{ $s->nisn }}</td>
                        <td>{{ $s->kelas }}</td>
                        <td>{{ $s->jurusan }}</td>
                        <td>{{ $s->alamat }}</td>
                        <td>{{ $s->email }}</td>
                        <td>
                            <form action="{{ url('/siswa/' . $s->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
