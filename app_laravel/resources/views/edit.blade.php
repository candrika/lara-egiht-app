<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>
 
	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($product as $p)
	<form action="/pegawai/update" method="post">
		{{csrf_field()}}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		Nama Barang<input type="text" required="required" name="name" value="{{ $p->name }}"> <br/>
		Deskripsi <input type="text" required="required" name="description" value="{{ $p->description }}"> <br/>
		Harga <input type="number" required="required" name="price" value="{{ $p->price }}"> <br/>
		Stock <textarea required="required" name="stock">{{$p->stock}}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
</body>
</html>