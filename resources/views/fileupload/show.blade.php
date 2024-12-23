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
                        Form Show Data 
                    </h3>
                </div>
            </div>
            <div class="card-header">
                <div class="card-body">
                    <div class="">
                        <ul class="list-group list-group-flush col-md-12 table ">
                            <li class="list-group-item">
                                <strong>Nama Pembuat:</strong> {{ $detail->nama_pembuat }}
                            </li>
                            <li class="list-group-item">
                                <strong>Tanggal dibuat:</strong> {{ $detail->tanggal_dibuat }}
                            </li>
                            <li class="list-group-item">
                                <strong>File:</strong> {{ $detail->file }}
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 float-end">
                    <a href="{{ url('fileupload') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>