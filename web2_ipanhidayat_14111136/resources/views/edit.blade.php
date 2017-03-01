@extends('templates.index')
@section('content')
<article>
<form  action="{{route('mahasiswa.update', $mahasiswa->id)}}" method="post">
    <input name="_method" type="hidden" value="PATCH">
					{{csrf_field()}}
					<table border="1" width="75%" align="center">
			<tr>
				<th>Edit Data</th>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" class="form-control" placeholder="Nama" value="{{$mahasiswa->nama}}" size="70"></input></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" class="form-control" placeholder="NIM" value="{{$mahasiswa->nim}}" size="70"></input></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat"  class="form-control" placeholder="Alamat" value="{{$mahasiswa->alamat}}" size="70"></input></td>
			</tr>
			<tr>

				<td colspan="3"><input type="submit" class="btn btn-primary" value="UPDATE"><a
				<td colspan="3" align="left"><a href="{{URL::to('halamanawal')}}"><button type="button">BATAL</button><a
			</tr>
			
		</table>
	</article>
@stop
