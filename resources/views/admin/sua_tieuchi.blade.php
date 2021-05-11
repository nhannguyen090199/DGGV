@extends('admin.master')
@section('tile','Sửa tiêu chí')
@section('back','tab8')
@section('admin')

<h2>Sửa tiêu chí</h2>
<form method="post">
	{{ csrf_field() }}
<table>
	<tr>
		<td width="150px" height="50px"><b>Nội dung tiêu chí</b></td>
		<td><input required type="text" class="form-control" placeholder="nội dung" aria-label="Username" aria-describedby="basic-addon1" name="tieuchi" style="width: 500px" value="{{$tieuchi[0]->tieuchi_ten}}"></td>
	</tr>
	
</table><br>
<input type="submit" name="" class="btn btn-primary" value="Sửa tiêu chí">
</form>
@stop