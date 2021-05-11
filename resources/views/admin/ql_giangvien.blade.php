@extends('admin.master')
@section('tile','Quản lý giảng viên')
@section('back','tab6')
@section('admin')

<h2>Quản lý giảng viên</h2>
<table class="table table-bordered .table-responsive text-center" id="sv">
  <tr class="active">
    <td width="10%">Mã giảng viên</td>
    <td width="20%">Tên giảng viên</td>
    <td width="30%">Ngày sinh</td>
    
  </tr>
  @foreach($giangvien as $items)
  <tr>
    <td>{{$items->gv_ma}}</td>
    <td>{{$items->gv_ten}}</td>
    <td>{{$items->gv_ngaysinh}}</td>
    
    
  </tr>
  @endforeach
</table>
@stop