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
                Thêm Phòng Học
                <br>
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{ URL::to('/addclassroom') }}" method="post">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label for="addbrand">Mã Phòng Học</label>
                        <input type="text" class="form-control" value="" id="updatebrand" name="classroomcode" data-validation="length" data-validation-length="min1" data-validation-error-msg="Hãy điền thông tin vào trường này!">
                    </div>  
                    <div class="form-group">
                        <label for="ckeditorbr">Tên Phòng Học</label>
                        <input type="text" class="form-control" id="updatebrand" name="classroomname" data-validation="length" data-validation-length="min1" data-validation-error-msg="Hãy điền thông tin vào trường này!">
                    </div>
                    <div style="display: flex; align-item: center; justify-content: center;">
                        <button style="margin: auto;" type="submit" class="btn btn-info" name="addbrand">Thêm</button>
                    </div>  
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection