@extends('templates.index')
@section('content')
<article>
		<table border="1" width="75%" align="center">
			<td>
				<th><a href="{{URL('tambah')}}"><button type="submit">+ TAMBAH</button></a></th>
			</td>
			<td>
				<th><a href="{{URL('edit')}}"><button type="submit">+ EDIT</button></a></th>
			</td>
			<tr>
				<td>Nim</td>
				<td>Nama</td>
				<td>Alamat</td>
			</tr>
		</table>
	</article>
@stop
