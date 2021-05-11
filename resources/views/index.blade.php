@extends('master')
@section('tile','Trang chủ')
@section('main')

@if (session('mess'))
          <div class="alert alert-success">
                <h2>{{ session('mess') }}</h2>
          </div>
@endif
<div class="container-fluid" >
  <div class="row">
    <div class="col-3" style="background-color: #f7f7f7; text-align: center;">
        <img src="{{asset('img/in4.png')}}" class="col-6 " >
        <h4>{{$sinhvien[0]->sinhvien_ten}}</h4>
        <p>Mã sinh viên: {{$sinhvien[0]->sinhvien_ma}}</p>
        <hr align="center">
        <p>Khoa: {{$sinhvien[0]->khoa}}<br>
          Lớp: {{$sinhvien[0]->sinhvien_lop}}<br>
          Giới tính: @if($sinhvien[0]->gioitinh ==0) Nữ @else Nam @endif<br>
          Ngày sinh: {{$sinhvien[0]->sinhvien_ngaysinh}}

         </p>

    </div>
    <div class="col-9">
      <h2>ĐÁNH GIÁ</h2>
      <form action="{{asset('/danhgia')}}" method="post" >
        {{ csrf_field() }}   
        Giảng viên: 
      <select id="gv" onchange="load(this.value)" name="giang_vien">
        <option value="">----Chọn----</option>
        @foreach($giangviens as $items)
          <option value="{{$items->gv_ma}}">{{$items->gv_ten}}</option>
        @endforeach
      </select>
      | Môn học: 
      <select id="mon-hoc" name="mon_hoc">
        
      </select>
      <input type="submit" name="" value="Duyệt" class="btn btn-primary">

      </form>
      <span style="color: red">Đã hoàn thành:@if($sinhvien[0]->ok==null) 
      	0/{{$sinhvien[0]->tatca}} môn
      	@else
      	{{$sinhvien[0]->ok}}/{{$sinhvien[0]->tatca}} môn
      	@endif</span>
      <h1>Sinh viên lựa chọn giảng viên và môn học để đánh giá!</h1>
      </div>
    </div>
</div>



@stop