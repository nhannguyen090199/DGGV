@extends('admin.master')
@section('tile','Quản lý vấn đề')
@section('back','tab7')
@section('admin')
<script type="text/javascript">
  @if(session('mess'))
  alert('{{session('mess')}}');
  @endif
</script>
<h2>Quản lý vấn đề</h2>
<a href="{{asset('/themvande')}}" class="btn btn-success ">Thêm vấn đề</a>
<table class="table table-bordered .table-responsive text-center" id="sv">
  <tr class="active">
    <td width="5%"><b>Mã</b></td>
    <td width="50%"><b>Nội dung</b></td>
    <td width="10%"><b>Tiêu chí</b></td>
    <td width="5%"></td>
    <td width="5%"></td>
  </tr>
  @foreach($vande as $items)
    <tr >
        <td width="10%">{{$items->vande_id}}</td>
        <td width="50%">{{$items->vande_noidung}}</td>
        <td width="10%">{{$items->tieuchi_ten}}</td>
        <td width="5%"><a href="{{asset('suavande'.$items->vande_id)}}" class="btn btn-primary">Sửa</a></td>
        <td width="5%"><a href="{{asset('xoavande'.$items->vande_id)}}" class="btn btn-danger">Xóa</a></td>
    </tr>
  @endforeach
</table>
@stop