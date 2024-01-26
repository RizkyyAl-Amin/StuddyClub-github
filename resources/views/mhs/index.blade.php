@extends('component.layout')
<style type="text/css">
	.judul {
		text-align: center;
		padding: 10px;
		font-weight: 800;
		
	}
	table {
		border: 2px solid grey;
		width: 70%;
		border-radius: 10px;
		margin-left: 15%;
	}
	thead tr td{
		background: #e6e6e6;
		text-align: center;
		font-weight: bold;
	}
	td {
		font-weight: 600;
		color: black;
		padding: 8px;
		border: 2px solid grey;
	}

	tbody tr td button {
		font-weight: 800;
		background-color: #7194da;
		border-radius: 5px;
	}
</style>
@section('body')
<h2 class="judul">Tabel Mahasiswa</h2>
<table class="tabelMhs">
	<thead>
		<tr>
			<td>ID</td>
			<td>NIM</td>
			<td>NAMA</td>
			<td>KELAS</td>
			<td>DESKRIPSI</td>
			<td colspan="3">AKSI</td>
		</tr>
	</thead>
	@foreach ($dataMhs as $data)
	<tbody>
		<tr>
			<td>{{ $data->id }}</td>
			<td>{{ $data->nim }}</td>
			<td>{{ $data->nama }}</td>
			<td>{{ $data->kelas }}</td>
			<td>{{ $data->des }}</td>
			<td align="center"><a href="{{ route('mahasiswa.edit', $data->id) }}"><button>Edit Data</button></a></td>
			<td align="center"><a href="{{ route('mahasiswa.show', $data->id) }}"><button>Detail Data</button></a></td>
			<td align="center" style="padding-top: 25px;">
				<form action="{{ route('mahasiswa.destroy', $data->id) }}" method="post">
					@csrf @method('delete')
					<button type="submit">Hapus Data</button>
				</form>
			</td>

		</tr>		
	</tbody>
	@endforeach
</table>
@endsection