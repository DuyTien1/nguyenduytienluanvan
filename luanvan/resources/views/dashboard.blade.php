@extends('index')
@section('admin_content')

<h2 style="color: 	rgb(56, 46, 46);"><center>Chào Mừng Đến Với Trang Điểm Danh Sinh Viên</center></h2>

<div class="market-updates">
	<div class="col-md-4 market-update-gd">
		<div class="market-update-block clr-block-2">
			<a href="{{ URL::to('/tolistonline') }}">
				<div class="col-md-4 market-update-right">
					<i class="fa fa-eye"> </i>
				</div>
					<div class="col-md-8 market-update-left">
					<h4>Lớp Đang Học</h4>
					<h3>{{ $classonline }}</h3>
					<p>Số Lớp Đang Học</p>
				</div>
				<div class="clearfix"> </div>
			</a>
		</div>
	</div>
	<div class="col-md-4 market-update-gd">
		<div class="market-update-block clr-block-1">
			<a href="{{ URL::to('/tolistclass') }}">
				<div class="col-md-4 market-update-right">
					<i class="fa fa-users" ></i>
				</div>
				<div class="col-md-8 market-update-left">
					<h4>Tổng Số Lớp</h4>
					<h3>{{ $classes }}</h3>
					<p>Tổng Số Lớp Đã Đăng Ký</p>
				</div>
				<div class="clearfix"> </div>
			</a>
		</div>
	</div>
	<div class="col-md-4 market-update-gd">
		<div class="market-update-block clr-block-3">
			<a href="{{ URL::to('/toliststudent') }}">
				<div class="col-md-4 market-update-right">
					<i class="fa fa-usd"></i>
				</div>
				<div class="col-md-8 market-update-left">
					<h4>Tổng Số Sinh Viên</h4>
					<h3>{{ $studentcount }}</h3>
					<p>Tổng Số Sinh Viên</p>
				</div>
				<div class="clearfix"> </div>
			</a>
		</div>
	</div>
</div>	

@endsection