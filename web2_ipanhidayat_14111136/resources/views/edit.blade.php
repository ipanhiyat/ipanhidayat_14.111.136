@extends('templates.index')
@section('content')
<article>
	<form name="input" method="POST" action="proses_tambah.php">
		<table border="0" width="50%" align="center">
			<tr>
				<td><b>Edit Data</b></td>
			</tr>
			<tr>
				<td><input type="text" name="nim" maxlenght="10" placeholder="NIM"></input></td>
			</tr>
			<tr>
				<td><input type="text" name="nama" maxlenght="50" placeholder="Nama"></input></td>
			</tr>
			<tr>
				<td><input type="text" name="alamat" maxlenght="50" placeholder="Alamat"></input></td>
			</tr>
			<tr>
				
				<td colspan="3"><input name="submit" type="submit" value="SIMPAN"></input><input type="reset" value="BATAL"></input></td>
			</tr>
		</table>
	</form>
	</article>
@stop
