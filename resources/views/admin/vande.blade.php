@extends('admin.master')
@section('tile','Tiêu chí')
@section('back','tab4')
@section('admin')
<h2>Thống kê Vấn đề</h2>
<table class="table table-bordered .table-responsive text-center">
	<tr class="active">
		<td width="10%">Mã Vấn đề</td>
		<td width="50%">Nội dung</td>
		<td width="10%">Mã Tiêu chí</td>
		<td width="10%">Tổng điểm</td>
	</tr>
	@foreach($vd as $items)
	<tr>
		<td>{{$items->ma_vande}}</td>
		<td>{{$items->vande_noidung}}</td>
		<td>{{$items->ma_tieuchi}}</td>
		<td>{{$items->diemTB}}</td>
	</tr>
	@endforeach
</table>

@stop