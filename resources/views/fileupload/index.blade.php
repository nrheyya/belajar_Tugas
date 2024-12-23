<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-success text-white">
                <div class="card-title">
                    <h3>Ini halaman belajar upload file</h3>
                    <div class="d-flex align-items-center">
                        <!-- Button Create -->
                        <a href="{{ url('fileupload/create') }}" class="btn btn-dark me-2">Tambah Data</a>
                        @csrf
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Nama pembuat</th>
                            <th>Tanggal di buat</th>
                            <th>File</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_fileupload as $fileupload)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $fileupload->nama_pembuat }}</td>
                                <td>{{ $fileupload->tanggal_dibuat }}</td>
                                <td>{{ $fileupload->file }}</td>
                                <td>
                                    <a href="{{ url('fileupload', $fileupload->informasi_id) }}/show" class="btn btn-primary btn-sm">Show</a>
                                    <a href="{{ url('fileupload', $fileupload->informasi_id) }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="{{ url('fileupload', $fileupload->informasi_id) }}/delete" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
