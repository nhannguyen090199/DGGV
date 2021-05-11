@extends('admin.master')
@section('tile','Đánh giá theo môn học')
@section('back','tab2')
@section('admin')
<h2>Thống kê Môn học</h2>
<table class="table table-bordered .table-responsive text-center">
	<tr class="active">
		<td width="10%">Mã môn</td>
		<td width="20%">Tên môn</td>
		<td width="30%">Giảng viên đảm nhiệm</td>
		<td width="20%">Số phiếu</td>
		<td width="15%">Tổng điểm</td>
	</tr>
	@foreach($monhocs as $monhoc)
	<tr >@php $id = 0 @endphp
			<td >{{$monhoc->ma_mon}}</td>
			<td >{{$monhoc->ten_mon}}</td>
			<td >@foreach($tkbs as $tkb)
					@if($tkb->ma_mon == $monhoc->ma_mon)
						<li>{{$tkb->gv_ten}}</li>
					@endif
				@endforeach
			</td>
			<td >@foreach($phieus as $phieu)
			@if($phieu->ma_mon == $monhoc->ma_mon)
			<?php $id++; ?>
			@endif
		@endforeach {{$id}}</td>
			<td >{{$monhoc->diemTB}}</td>
	</tr>
	@endforeach
</table>

@stop