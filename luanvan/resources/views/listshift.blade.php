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
        Danh Sách Tiết Học
        </div>
        <div>
            <table class="table" ui-jq="footable" ui-options='{
            "paging": {
            "enabled": true
            },
            "filtering": {
            "enabled": true
            },
            "sorting": {
            "enabled": true
            }}'>
            <thead>
                <tr>
                    <th>Tên Tiết</th>
                    <th>Ghi Chú</th>
                    <th>Giờ Bắt Đầu</th>
                    <th>Giờ Kết Thúc</th>
                    <th style="width: 100px;">Thao Tác</th>
                </tr>
            </thead>
            @foreach($shifts as $key)
            <tbody>
                <tr data-expanded="true">
                    <td>{{ $key->shift_name }}</td>
                    <td>{{ $key->shift_note }}</td> 
                    <td>{{ $key->shift_start }}</td>
                    <td>{{ $key->shift_end }}</td>   
                    <td>  
                        <div style="display: flex; align-items: center; justify-content: space-around;">
                            <a href="{{ URL::to('/toeditshift/'.$key->shift_id) }}" class="active styling-edit" ui-toggle-class="">
                            <i class="fa fa-pencil text-success text-active"></i>
                            </a>
                            <a onclick="return confirm('Bạn có chắc chắn muốn xóa Tiết học này?')" href="{{ URL::to('/deleteshift/'.$key->shift_id) }}" class="active styling-edit" ui-toggle-class="">
                                <i class="fa fa-trash text-danger text-active"></i>
                            </a>
                        </div>         
                    </td>
                </tr>
            </tbody>
            @endforeach
            </table>
        </div>
    </div>
    <div style="display: flex; justify-content: center; align-item: center;">
        <span>{!! $shifts->links() !!}</span>
    </div>
</div>

@endsection