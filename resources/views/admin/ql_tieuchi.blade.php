@extends('admin.master')
@section('tile','Quản lý tiêu chí')
@section('back','tab8')
@section('admin')
<script type="text/javascript">
  @if(session('mess'))
  alert('{{session('mess')}}');
  @endif
</script>
<h2>Quản lý tiêu chí</h2>
<a href="{{asset('/themtieuchi')}}" class="btn btn-success ">Thêm tiêu chí</a>
<table class="table table-bordered .table-responsive text-center" id="sv">
  <tr class="active">
    <td width="5%"><b>Mã</b></td>
    <td width="50%"><b>Tên tiêu chí</b></td>
    <td width="5%"></td>
    <td width="5%"></td>
  </tr>
  @foreach($tieuchi as $items)
    <tr >
        <td width="10%">{{$items->tieuchi_id}}</td>
        <td width="50%">{{$items->tieuchi_ten}}</td>
        <td width="5%"><a href="{{asset('suatieuchi'.$items->tieuchi_id)}}" class="btn btn-primary">Sửa</a></td>
        <td width="5%"><a href="{{asset('xoatieuchi'.$items->tieuchi_id)}}" class="btn btn-danger">Xóa</a></td>
    </tr>
  @endforeach
</table>
@stop