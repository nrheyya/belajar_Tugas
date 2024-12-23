<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
                    <form action="{{ url('fileupload', $detail->informasi_id) }}/edit" method="POST">
                        @csrf
                        @method('PUT')
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
                                File <br>
                                <input type="file" name="file" class="form-control mb-3">
                            </div>
                            <div class="col-md-12">
                                <a href="{{ url('fileupload') }}" class="btn btn-primary">Kembali</a>
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
