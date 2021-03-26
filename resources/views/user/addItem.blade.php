@extends('layouts/main')
@section('content')


<h1>ALL ITEM</h1>
<a href='logout'>LOGOUT</a>

<h2>Welcome {{ Session::get('pengguna') }} - {{ Session::get('nama') }}</h2>
<a href='item_insertnewitem'>ADD ITEM</a>

{!! csrf_field() !!}
</form>

<table border=1>

@foreach ($listofitem as $u)
	<tr>
		<td> {{$u->nama}} </td>
		<td> {{$u->description}} </td>
        <td>
			<form METHOD='POST' action='item_delete'>
			<input type='hidden' name='id' value='{{ $i->id }}'>
			<input type='submit' name='btn' value='Delete'>
			{!! csrf_field() !!}
			</form>

		</td>

       <td>
		<form METHOD='POST' action='item_edit'>
			<input type='hidden' name='id' value='{{ $i->id }}'>
			<input type='submit' name='btn' value='Edit'>
			{!! csrf_field() !!}
			</form>
			</td>

	</tr>
@endforeach
@endsection
</table>
