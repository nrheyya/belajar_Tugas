<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-success text-white">
                <div class="card-tittle">
                    <h3>
                        Form Tambah Data Jurusan
                    </h3>
                </div>
            </div>
            <div class="card-header">
                <div class="card-body">
                    <form action="{{ url('fileupload/create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                Nama Pembuat <br>
                                <input type="text" name="nama_pembuat" class="form-control mb-3">
                            </div>
                            <div class="col-md-6">
                                Tanggal Pembuatan <br>
                                <input type="text" name="tanggal_dibuat" class="form-control mb-3">
                            </div>
                            <div class="col-md-6">
                                <label for="fileUpload" class="form-label">Unggah File</label>
                                <input type="file" name="file" id="fileUpload" class="form-control mb-3" aria-describedby="fileHelp">
                                <div id="fileHelp" class="form-text">Pilih file untuk diunggah. Format yang didukung: jpg, png, pdf.</div>
                            </div>
                            <div class="col-md-12">
                                <a href="{{ url('fileUpload') }}" class="btn btn-primary">Kembali</a>
                                <button class="btn btn-success">SIMPAN</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
