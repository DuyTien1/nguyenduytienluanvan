@extends('index')
@section('admin_content')

<?php
    $message = Session::get('message');
    if ($message) {
        echo '<p style="color: #009900; margin-top: 10px; margin-bottom: 10px; font-size: 20px; display: flex; align-item: center; justify-content: center;" class="text-alert">'.$message.'</p>';
        Session::put('message', null);
    }
    $message = null;
?>
<?php
    $message2 = Session::get('message2');
    if ($message2) {
        echo '<p style="color: #800000; margin-top: 10px; margin-bottom: 10px; font-size: 20px; display: flex; align-item: center; justify-content: center;" class="text-alert">'.$message2.'</p>';
        Session::put('message2', null);
    }
    $message2 = null;
?>
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
        Danh Sách Tất Cả Lớp Học
        </div>
        <div>
            <table class="table" ui-jq="footable" ui-options='{
            "paging": {
            "enabled": true
            },shift_name
            "filtering": {
            "enabled": true
            },
            "sorting": {
            "enabled": true
            }}'>
            <thead>
                <tr>
                    <th>Tên Lớp Học</th>
                    <th>Tên Phòng</th>
                    <th>Tên Môn</th>
                    <th>Tên Tiết</th>
                    <th style="width: 100px;">Thao Tác</th>
                </tr>
            </thead>
            @foreach($classes as $key)
            <tbody>
                <tr data-expanded="true">
                    <td>{{ $key->class_name }}</td>
                    <td>{{ $key->classroom_name }}</td>  
                    <td>{{ $key->subject_name }}</td>
                    <td>{{ $key->shift_name }}</td>
                    <td>  
                        <div style="display: flex; align-items: center; justify-content: space-around;">
                            <a href="{{ URL::to('/toeditclass/'.$key->class_id) }}" class="active styling-edit" ui-toggle-class="">
                                <i class="fa fa-pencil text-success text-active"></i>
                            </a>
                            <a href="{{ URL::to('/tolistclassdetail/'.$key->class_id) }}" class="active styling-edit" ui-toggle-class="">
                                <i class="fa fa-file-text-o text-success text-active"></i>
                            </a>
                            <a href="{{ URL::to('/toaddclassdetail/'.$key->class_id) }}" class="active styling-edit" ui-toggle-class="">
                                <i class="fa fa-plus text-alert text-active"></i>
                            </a>
                            <a onclick="return confirm('Bạn có chắc chắn muốn xóa lớp học này?')" href="{{ URL::to('/deleteclass/'.$key->class_id) }}" class="active styling-edit" ui-toggle-class="">
                                <i class="fa fa-trash text-danger text-active"></i>
                            </a>
                        </div>         
                    </td>
                </tr>
            </tbody>
            @endforeach
            </table>
        </div>
        <?php
            $check = DB::table('checkins')->orderBy('created_at', 'asc')->first();
        ?>
        <div style="display: flex; align-item: center; justify-content: center;">
        @if($check)
        <div>
                <a target="_blank" href="{{ URL::to('/printlog') }}" style="margin: auto;  margin-bottom: 20px; margin-right: 20px;" class="btn btn-info">In Thông Tin Điểm Danh</a>
            </div>
            <div>
                <a onclick="return confirm('Sau Khi In Thông Tin Điểm Danh Hôm Nay Sẽ Bị Xóa Xác Nhận Xóa?')" href="{{ URL::to('/deletecheckin') }}" style="margin: auto;  margin-bottom: 20px;" class="btn btn-danger">Xóa Thông Tin Điểm Danh</a>
            </div>
        @endif
        </div>
    <div style="display: flex; justify-content: center; align-item: center;">
        <span>{!! $classes->links() !!}</span>
    </div>
</div>

@endsection