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
        Danh Sách Sinh Viên
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
                    <th>Tên Sinh Viên</th>
                    <th>RFID</th>
                    <th style="width: 100px;">Thao Tác</th>
                </tr>
            </thead>
            @foreach($students as $key)
            <tbody>
                <tr data-expanded="true">
                    <td>{{ $key->student_name }}</td>
                    <td>{{ $key->rfid }}</td>  
                    <td>  
                        <div style="display: flex; align-items: center; justify-content: space-around;">
                            <a href="{{ URL::to('/toeditstudent/'.$key->student_id) }}" class="active styling-edit" ui-toggle-class="">
                            <i class="fa fa-pencil text-success text-active"></i>
                            </a>
                            <a onclick="return confirm('Bạn có chắc chắn muốn xóa sinh viên này?')" href="{{ URL::to('/deletestudent/'.$key->student_id) }}" class="active styling-edit" ui-toggle-class="">
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
        <span>{!! $students->links() !!}</span>
    </div>
</div>

@endsection