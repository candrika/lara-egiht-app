<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Welcome Candrika
                </div>
                <a href="/pegawai/tambah_elo"> + Tambah Pegawai Baru</a>
                |
                <a href="/pegawai/get_elo">Data Produk</a>
                |
                <a href="/pegawai/trash" class="btn btn-sm btn-primary">Tong Sampah</a>

                <br/>
                <br/>

                <!-- <a href="/pegawai/kembalikan_semua">Kembalikan Semua</a>
                |
                <a href="/pegawai/hapus_permanen_semua">Hapus Permanen Semua</a> -->
                <br/>
                <br/>
                <table border="1">
                    <thead>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Stock</th>
                        <th>Opsi</th>
                    </thead>
                    @foreach($product as $p) 
                    <tbody>
                       <tr> 
                            <td>{{$p->name}}</td>
                            <td>{{$p->price}}</td>
                            <td>{{$p->stock}}</td>
                            <td>
                                <a href="/pegawai/edit_elo/{{$p->id}}">Edit</a>
                                |
                                <a href="/pegawai/hapus_elo/{{$p->id}}">Hapus</a>
                                <a href="/pegawai/kembalikan/{{ $p->id }}" class="btn btn-success btn-sm">Restore</a>
                                |
                                <a href="/pegawai/hapus_permanen/{{ $p->id }}" class="btn btn-danger btn-sm">Hapus Permanen</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>    
            </div>
        </div>
    </body>
</html>
