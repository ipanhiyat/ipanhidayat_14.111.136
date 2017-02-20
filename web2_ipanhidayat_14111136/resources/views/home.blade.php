@extends('templates.index')
@section('content')
<form method="post">
<table width="60%" align="center".
		<tr>
			<th align="center"
			colspan="2"Login<a
			href="daftar.php">DAFTAR LOGIN</a></th>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" size="80">
			</td>
		</tr>
		<tr>
		<td>password</td>
			<td><input type="password" name="password" size="80"></td>
		</tr>
		<tr>
			<td colspan="3" align="right"><a href="{{URL('halamanawal')}}"><button type="button">login</button></a><input type="button" value="Batal"></input></td>
		</tr>
</table> 
</form>
@stop
