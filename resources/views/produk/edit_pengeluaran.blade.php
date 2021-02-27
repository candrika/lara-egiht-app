
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Dashboard Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <!-- s<link href="dashboard.css" rel="stylesheet"> -->
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign out</a>
    </li>
  </ul>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">
              HOME
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Kategori
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/pemasukan">Pemasukan</a>
              <a class="dropdown-item" href="/pengeluaran">Pengeluaran</a>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/transaksi">
              Transaksi
            </a>
          </li>
        </ul>
    </nav>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Pengeluaran</h1>
      </div>
        <form method="post" action="/update_pengeluaran/{{$out->list_kategori_id}}">
            {{ csrf_field() }}
            {{method_field('PUT')}}
            <input type="hidden" value="{{$out->list_kategori_id}}"/>
            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Nama Kategori</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" required="required" value="{{$out->nama_kategori}}" name="nama_kategori">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Deskripsi</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" required="required" value="{{$out->deskripsi}}" name="deskripsi">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Kategori</label>
              <div class="col-sm-6">
                <select class="form-select" aria-label="Default select example" value=="{{$out->jenis_kategori}}" name="jenis_kategori">
                  <option value="1">Pemasukan</option>
                  <option value="2">Pengeluaran</option>
                </select>
              </div>
            </div>
            <div class="mb-3 row">
              <div class="col-sm-6"></div>  
              <div class="col-sm-6">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
              </div>
            </div>
        </form>
    </main>
  </div>
</div>
  <script src="{{('assetjs/bootstrap.bundle.min.js')}}"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js">
  </script>
</body>
</html>
