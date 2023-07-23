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
            Bảng Điểm Danh Sai
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
                        <th>Tên Lớp</th>
                        <th>Phòng</th>
                        <th>RFID</th>
                        <th>Tên Sinh Viên</th>
                        <th>Thời Gian</th>
                        <th style="width: 100px;">Thao Tác</th>
                    </tr>
                </thead>
                @foreach($anonymous as $key)
                <tbody>
                    <tr data-expanded="true">
                        <td>{{ $key->class_name }}</td>
                        <td>{{ $key->classroom_name }}</td>
                        <td>{{ $key->rfid }}</td>
                        <td>{{ $key->name }}</td>  
                        <td>{{ $key->created_at }}</td>  
                        <td>
                            @if ($key->name == "Không Xác Định")           
                            <div style="display: flex; align-items: center; justify-content: space-around;">
                                <a onclick="return confirm('Bạn có chắc chắn muốn chuyển dữ liệu này sang trang đăng ký?')" href="{{ URL::to('movetosignin/'.$key->anonymous_id) }}" class="active styling-edit" ui-toggle-class="">
                                    <i class="fa fa-arrows text-success text-active"></i>
                                </a>
                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="{{ URL::to('/deleteanonymous/'.$key->anonymous_id) }}" class="active styling-edit" ui-toggle-class="">
                                    <i class="fa fa-trash text-danger text-active"></i>
                                </a>
                            </div> 
                            @else 
                            <div style="display: flex; align-items: center; justify-content: space-around;">
                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="{{ URL::to('/deleteanonymous/'.$key->anonymous_id) }}" class="active styling-edit" ui-toggle-class="">
                                    <i class="fa fa-trash text-danger text-active"></i>
                                </a>
                            </div> 
                            @endif
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
    <div style="display: flex; justify-content: center; align-item: center;">
        <span>{!! $anonymous->links() !!}</span>
    </div>
    </div>

@endsection