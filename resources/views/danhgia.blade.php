@extends('master')
@section('tile','Trang chủ')
@section('main')
<div class="container">

<form action="{{asset('/done')}}" method="post">
  {{ csrf_field() }}
  <h3>Giảng viên: {{$giangvien[0]->gv_ten}}</h3>
  <h4>Môn học: {{$monhocs[0]->ten_mon}}</h4>
  <hr>
  <div style="text-align: center;">
  <p style="font-style: italic ;">Tích chọn trong bảng hỏi dưới đây theo suy nghĩ của bạn về từng vấn đề trong quá trình học, theo các mức
    độ từ 1-4 (<b>1</b> là mức đánh giá thấp, <b>4</b> là mức đánh giá cao nhất.<br>
    <b>1 = không đồng ý;   2 = phân vân;   3 = đồng ý;   4 = hoàn toàn đồng ý</b>
  </p>
    </div>
  <input type="hidden" value="{{$giangvien[0]->gv_ma}}" name="giangvien">
   <input type="hidden" value="{{$monhocs[0]->ma_mon}}" name="monhoc">

  <table class="table table-bordered table-striped">
    <thead class="thead-dark">
      <tr>
        <th width="4%">STT</th>
        <th scope="col">Vấn đề</th>
        <th width="4%">1</th>
        <th width="4%">2</th>
        <th width="4%">3</th>
        <th width="4%">4</th>
      </tr>
    </thead>
    <tbody>
      <?php $id=1 ?>
      @foreach($vandes as $vande)
      <tr class="vande">
        <th scope="row"><?php echo $id; $id++; ?></th>
        <td>{{$vande->vande_noidung}}</td>
        <td><input type="radio" name="{{$vande->vande_id}}" value="1"></td>
        <td><input type="radio" name="{{$vande->vande_id}}" value="2"></td>
        <td><input type="radio" name="{{$vande->vande_id}}" value="3"></td>
        <td><input type="radio" name="{{$vande->vande_id}}" value="4"></td>
      </tr>
      @endforeach  
    </tbody>
  </table>
  <div class="container" style="text-align: right;"><input type="submit" value="ĐÁNH GIÁ" class="btn btn-primary " ></div>
</form>
</div>
@stop
