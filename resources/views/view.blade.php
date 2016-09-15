<h1>Masukan Data</h1>
<form method="POST" action="{{url('save')}}">
<input type="hidden" name="_token" value="{{csrf_token()}}">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></input></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email"></input></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password"></input></td>
		</tr>
		<tr>
			<td colspan="2"><button style="float:right;" type="submit">ISI</button></td>
		</tr>
	</table>
</form>