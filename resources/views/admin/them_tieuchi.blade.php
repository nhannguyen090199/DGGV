@extends('admin.master')
@section('tile','Thêm tiêu chí')
@section('back','tab7')
@section('admin')

<h2>Thêm vấn đề</h2>
<form method="post">
	{{ csrf_field() }}
<table>
	<tr>
		<td width="150px" height="50px"><b>Nội dung tiêu chí</b></td>
		<td><input required type="text" class="form-control" placeholder="nội dung" aria-label="Username" aria-describedby="basic-addon1" name="tieuchi" style="width: 500px"></td>
	</tr>

</table><br>
<input type="submit" name="" class="btn btn-primary" value="Thêm vấn đề">
</form>
@stop