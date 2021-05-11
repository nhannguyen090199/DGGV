@extends('admin.master')
@section('tile','Quản lý sinh vien')
@section('back','tab5')
@section('admin')

<h2>Quản lý sinh viên</h2>
<form method="get">
Lọc <select  onchange="load(this.value)" id="loc" name="loc">
  <option value="">Tất cả</option>
  <option value="0">Chưa hoàn thành</option>
</select>
<input type="submit" name="">
</form>
<table class="table table-bordered .table-responsive text-center" id="sv">
  <tr class="active">
    <td width="10%">Mã sinh viên</td>
    <td width="20%">Tên sinh viên</td>
    <td width="30%">Lớp</td>
    <td width="20%">Trạng thái</td>
  </tr>
  @foreach($sinhviens as $items)
  <tr>
    <td>{{$items->ma_sv}}</td>
    <td>{{$items->sinhvien_ten}}</td>
    <td>{{$items->sinhvien_lop}}</td>
    <td>@if($items->ok==$items->tatca)
      <span class="btn btn-success ">Hoàn thành</span>
      @else
      <span class="btn btn-danger ">Chưa hoàn thành</span>
      @endif
    </td>
    
  </tr>
  @endforeach
</table>
@stop