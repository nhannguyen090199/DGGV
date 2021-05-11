@extends('admin.master')
@section('tile','Thêm vấn đề')
@section('back','tab7')
@section('admin')

<h2>Sửa vấn đề</h2>
<form method="post">
	{{ csrf_field()}}
<table>
	<tr>
		<td width="150px" height="50px"><b>Nội dung vấn đề</b></td>
		<td><input required type="text" class="form-control" placeholder="nội dung" aria-label="Username" aria-describedby="basic-addon1" name="vande" style="width: 500px" value="{{$vande[0]->vande_noidung}}"></td>
	</tr>
	<tr>
		<td><b>Tiêu chí</b></td>
		<td><select name="tc">
			@foreach($tieuchi as $items)
				<option value="{{$items->tieuchi_id}}" 
					@if($items->tieuchi_id == $vande[0]->tc_id)
					selected
					@endif
					>{{$items->tieuchi_ten}}</option>
			@endforeach
		</select></td>
	</tr>
</table><br>
<input type="submit" name="" class="btn btn-primary" value="Sửa vấn đề">
</form>
@stop