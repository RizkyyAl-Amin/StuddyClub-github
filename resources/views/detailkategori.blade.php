<h2>Detail Kategori</h2>

<table>
	<tr>
		<td>Nama Kategori</td>
		<td>:{{$kategori->nama_kategori}}</td>
		
	</tr>
	<tr>
		<td>Keterangan</td>
		<td>:{{$kategori->deskripsi}}</td>
	</tr>
</table>

<a href="{{ route('kategori.index') }}"><button>Kembali</button></a>

