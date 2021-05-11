@extends('admin.master')
@section('tile','Admin')
@section('back','tab1')
@section('admin')
<h2>Thống kê Giảng viên</h2>
<table class="table table-bordered .table-responsive text-center">
	<tr class="active">
		<td width="10%">Mã giảng viên</td>
		<td width="20%">Tên giảng viên</td>
		<td width="30%">Môn đang dạy</td>
		<td width="20%">Số phiếu</td>
		<td width="15%">Tổng điểm</td>
	</tr>
	@foreach($giangviens as $items)
	<tr>@php $id = 0 @endphp
		<td>{{$items->ma_gv}}</td>
		<td><a href="{{asset('/admin'.$items->ma_gv)}}">{{$items->gv_ten}}</a></td>
		<td>
			@foreach($tkbs as $tkb)
				@if($tkb->ma_gv == $items->ma_gv)
					<li>{{$tkb->ten_mon}}</li>
				@endif
			@endforeach
		</td>
		<td>@foreach($phieus as $phieu)
			@if($phieu->ma_gv == $items->ma_gv)
			<?php $id++; ?>
			@endif
		@endforeach {{$id}}</td>
		<td>{{$items->diemTB}}</td>
	</tr>
	<tr>
		
	</tr>
	@endforeach
</table>

@stop