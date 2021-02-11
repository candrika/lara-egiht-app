<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>
 
	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		Nama Barang <input type="text" name="name" required="required"> <br/>
		Deskripsi <textarea name="description" required="required"></textarea> <br/>
		Harga <input type="number" name="price" required="required"> <br/>
		Stock <input type="number" name="stock" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>