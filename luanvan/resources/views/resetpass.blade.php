@extends('index')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
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
        <section class="panel">
            <header class="panel-heading">
                Thay Đổi Mật Khẩu Admin
                <br>
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{ URL::to('/resetpass/'.$admins->account_id) }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="addbrand">Mật Khẩu Cũ</label>
                            <input type="password" class="form-control" id="updatebrand" name="oldpass">
                        </div>  
                        <div class="form-group">
                            <label for="ckeditorbr">Mật Khẩu Mới</label>
                            <input type="password" class="form-control" id="updatebrand" name="newpass" data-validation="length" data-validation-length="min6" data-validation-error-msg="Hãy điền ít nhất 6 ký tự!">
                        </div>
                        <div class="form-group">
                            <label for="ckeditorbr">Nhập Lại Mật Khẩu Mới</label>
                            <input type="password" class="form-control" id="updatebrand" name="renewpass" data-validation="length" data-validation-length="min6" data-validation-error-msg="Hãy điền ít nhất 6 ký tự!">
                        </div>
                        <div style="display: flex; align-item: center; justify-content: center;">
                            <button style="margin: auto;" type="submit" class="btn btn-info" name="addbrand">Cập Nhật</button>
                        </div>  
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection