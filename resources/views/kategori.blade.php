<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		tr {
			border : 2px solid grey;
			font-family: sans-serif;
		}
		td {
			padding: 5px;
		}
		td button {
			margin: 1px; border-radius: 6px; border:2px solid grey;
		}
		table {
		    border : 2px solid rgba(0, 0, 0, 0.10);
		    font-size: 14px;
		    text-align: left;
		    font-weight: 500;
		}
		th {
			text-align: center;
			padding-left: 5px;
		}
	</style>
</head>
<body>

<h2 style="text-align: center;"> Daftar Kategori</h2>
<div style="padding-left: 30%;">
<a href="{{ route('kategori.create') }}"><button style="padding: 5px; margin: 5px; border-radius: 9px; border:2px solid grey;">Tambah Kategori</button></a>
<table border="3" cellspacing="0" width="auto">
    <tr>
    	<th>ID</th>
    	<th>Nama Kategori</th>
    	<th>Keterangan</th>
    	<th colspan="3">Aksi</th>
    </tr>

    @foreach ($kategori as $data)
    <tr>
    	<td>{{$data->id}}</td>
    	<td>{{$data->nama_kategori}}</td>
    	<td>{{$data->deskripsi}}</td>
    	<td>
    		<a href="{{ route('kategori.show', $data->id) }}">
    			<button type="submit">DETAIL</button>
    		</a>
    	</td>
    	<td>
    		<form action="{{ route('kategori.destroy', $data->id) }}" method="post">
    			@csrf @method('delete')
    			<button type="submit">HAPUS</button>
    		</form>
    	</td>
    	<td>
    		<a href="{{ route('kategori.edit',  $data->id) }}"><button>EDIT</button></a>
    	</td>
    </tr>

    @endforeach

  </table>
</div>
</body>
</html>
