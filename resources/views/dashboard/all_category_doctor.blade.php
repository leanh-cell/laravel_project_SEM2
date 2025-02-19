@extends('admin_layout')
@section('admin_content')
        <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê danh mục bác sĩ
    </div>
    <?php
	   $message= Session::get('message');
	   if($message){
		 echo '<span class="text-alert">',$message,'</span>' ;
		 Session::put('message',null);
	   }
	 ?>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th style="width:15px;">Stt</th>
            <th>Tên bác sĩ</th>
            <th>Nơi làm việc</th>
            <th>Chuyên khoa</th>
            <th style="width:100px;">Giá đặt khám</th>
            <th style="width:70px;">Đánh giá</th>
            <th style="width:100px;">Ảnh bác sĩ</th>
            <th style="width:100px;">SL đặt khám</th>
            <th style="width: 20px;"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($all_category_product as $key => $cate_pro)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td style="text-align: center;">{{$cate_pro-> doctor_id}}</td>
            <td>{{$cate_pro-> name_doctor}}</td>
            <td><span class="text-ellipsis">{{$cate_pro-> hospital_doctor}}</span></td>
            <td>{{$cate_pro-> specialist_doctor}}</td>
            <td style="text-align: center;">{{$cate_pro-> price_book}}</td>
            <td style="text-align: center;">{{$cate_pro-> star_doctor}}</td>
            <td><span class="text-ellipsis"><img src="upload/doctor/{{$cate_pro-> img_doctor}}" height="55px" width="80px" ></span></td>
            <td style="text-align: center;">{{$cate_pro-> book_doctor}}</td>
            <td>
              <a href="{{URL::to('/admin-edit-category-doctor/'.$cate_pro->doctor_id)}}" class="active" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i>
              </a> 
              <a onclick="return confirm('Are you sure to delete?')" href="{{URL::to('/admin-delete-category-doctor/'.$cate_pro->doctor_id)}}" class="active" ui-toggle-class="">
                <i class="fa fa-trash text-danger text"></i></a>
            </td>
          </tr>
          @endforeach 
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>


@endsection