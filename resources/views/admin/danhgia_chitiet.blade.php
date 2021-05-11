@extends('admin.master')
@section('tile','Chi tiết ')
@section('back','tab1')
@section('admin')
<h2>Thống kê chi tiết Giảng viên</h2>
<h3>Giảng viên: {{$gv[0]->gv_ten}}</h3>
<table class="table table-bordered .table-responsive text-center">
	<tr class="active">
		<td width="10%">Mã tiêu chí</td>
		<td width="20%">Tên tiêu chí</td>
		<td width="20%">Điểm trung bình</td>
	</tr>
	@foreach($gv as $items)
		<tr>
			<td>{{$items->tieuchi_id}}</td>
			<td>{{$items->tieuchi_ten}}</td>
			<td>{{$items->diemTB}}</td>
		</tr>
	@endforeach
</table>

@stop