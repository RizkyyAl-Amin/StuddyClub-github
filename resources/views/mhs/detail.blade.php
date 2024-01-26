@extends('component.layout')

@section('body')

<h2>Detail Data Mahasiswa</h2>

<table>
	<tr>
		<td>ID</td>
		<td>: {{ $dataMhs->id }}</td>	
	</tr>
	<tr>
		<td>Nim</td>
		<td>: {{ $dataMhs->nim }}</td>	
	</tr>
	<tr>
		<td>Nama</td>
		<td>: {{ $dataMhs->nama }}</td>	
	</tr>
	<tr>
		<td>Kelas</td>
		<td>: {{ $dataMhs->kelas }}</td>	
	</tr>
	<tr>
		<td>Deskripsi</td>
		<td>: {{ $dataMhs->des }}</td>	
	</tr>
</table>
<a href="{{ route('mahasiswa.index') }}"><button>Kembali</button></a>
@endsection