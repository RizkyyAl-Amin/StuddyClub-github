@extends('component.layout')
<style type="text/css">
	.judul {
		text-align: center;
		padding: 10px;
		font-weight: 800;
	}
	form {
		width: 25%;
		border: 2px solid grey;
		margin-left:37.5%;
		padding: 10px;
	}
	td input {
		margin-bottom:  8px;
	}
</style>
@section('body')
<h2 class="judul">Tambah Data Mahasiswa</h2>

<form action="{{ route('mahasiswa.store') }}" method="post">
	@csrf
	<table>
		<tr>
			<td><label for="nim_mahasiswa">Nim</label></td>
			<td>  :   <input type="text" name="nim" id="nim_mahasiswa"></td>
		</tr>

		<tr>
			<td><label for="nama">Nama</label></td>
			<td>  :    <input type="text" name="nama" id="nama_mahasiswa"></td>
		</tr>

		<tr>
			<td><label for="kelas">Kelas</label></td>
			<td>  :    <input type="text" name="kelas" id="kelas_mahasiswa"></td>
		</tr>

		<tr>
			<td><label for="des">Deskripsi</label></td>
			<td>  :    <input type="text" name="des" id="deskripsi_mahasiswa"></td>
		</tr>
	</table>
	<input type="submit" value="KIRIM" style="margin-left: 30%; margin-top: 7px; border-radius: 5px;background-color: #7194da; font-weight: 800; width: 40%">
</form>

@endsection