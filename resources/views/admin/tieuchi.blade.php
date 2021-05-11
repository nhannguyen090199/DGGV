@extends('admin.master')
@section('tile','Tiêu chí')
@section('back','tab3')
@section('admin')
<h2>Thống kê Tiêu chí</h2>
<table class="table table-bordered .table-responsive text-center">
	<tr class="active">
		<td width="10%">Mã Tiêu chí</td>
		<td width="20%">Tên Tiêu chí</td>
		<td width="15%">Tổng điểm</td>
	</tr>
	@foreach($tc as $items)
		<tr>
			<td>{{$items->ma_tieuchi}}</td>
			<td>{{$items->tieuchi_ten}}</td>
			<td>{{$items->diemTB}}</td>
		</tr>
	@endforeach
</table>

@stop