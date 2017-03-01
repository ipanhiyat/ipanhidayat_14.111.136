@extends('templates.index')
@section('content')
<article>
		<table border="1" width="75%" align="center">
			<td>
				<th><a href="{{URL('tambah')}}"><button type="button">+ TAMBAH</button></a></th>
			</td>
			
			<tr>
				<td>Nama</td>
				<td>Nim</td>
				<td>Alamat</td>
			</tr>
			@foreach ($mahasiswa as $mhs ) 	
		<tr>
	
				<td align=center> {{ $mhs -> nama}}</td>
				<td align=center> {{ $mhs -> nim}}</td>
				<td align=center> {{ $mhs -> alamat}}</td>
                 <td><form method="POST"  action="{{ route('mahasiswa.destroy', $mhs->id) }}" >
		                            <input name="_method" type="hidden" value="DELETE">
		                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
		                            <a href="{{route('mahasiswa.edit', $mhs->id)}}" class="btn btn-primary"><input type="button" value="Edit"></a>
		                        	<input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
		                        </form></td>
		</tr>
		@endforeach
		</table>
	</article>
@stop
