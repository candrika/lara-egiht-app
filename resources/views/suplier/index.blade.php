
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
    <!-- bootstrap-datepicker.min -->
    <link href="{{asset('css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/datatables.min.css')}}" rel="stylesheet">
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
        <h1 class="h2">Transaksi</h1>
      </div>
      <div class="row">
        <div class="col-md-3">
          <a href="/form_transaksi" class="btn btn-primary">Tambah</a>       
        </div>
        <div class="col-md-5">
          <form method="get" action="/transaksi">
            <div class="row">
              <div class="col-md-4">
                <input type="text" class="form-control" name="startdate">
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control" name="enddate">
              </div> 
              <div class="col-md-3">
                <input type="submit" value="Cari Data" class="btn btn-primary btn-sm">
              </div> 
            </div>
          </form>
        </div>
      </div>
      <div class="mb-2"></div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Nama Kategori</th>
              <th>Jenis Transaksi</th>
              <th>Nominal</th>
              <th>Deskripsi</th>
              <th>Aksi</th>
            </tr>  
          </thead>
          <tbody>
            @foreach($trx as $v)
            <tr>
                <td>{{$v->nama_kategori}}</td>
                <td>{{$v->jenis_transaksi}}</td>
                <td>{{$v->nominal}}</td>
                <td>{{$v->deskripsi}}</td>
                <th><a href="/edit_transaksi/{{$v->transaksi_id}}" class="btn btn-info btn-sm">Edit</a>&nbsp;<a href="/hapus/transaksi/{{$v->transaksi_id}}" class="btn btn-danger btn-sm">Hapus</a></th>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <script src="{{asset('js/jquery.js')}}"></script>  
  <script src="{{asset('js/jquery-ui.js')}}"></script>  
  <script src="{{asset('js/datatables.min.js')}}"></script>  
  <script src="{{asset('js/popper.js')}}"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $(".datepicker").datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
    });
  });
</script> 
</body>
</html>
