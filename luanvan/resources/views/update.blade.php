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

        <?php
        $signins = DB::table('temps')->orderBy('temp_id', 'desc')->paginate(10);
        ?>

<div class="row">
    <div class="col-lg-12">
        <?php
            $message = Session::get('message');
            if ($message) {
                echo '<p class="text-alert">'.$message.'</p>';
                Session::put('message', null);
            }
        ?>
        <section class="panel">
            <header class="panel-heading">
                Bảng Đăng Ký Thông Tin Sinh Viên
                <br>
            </header>
            <div class="panel-body">
                @foreach($temps as $key)
                <div class="position-center">
                    <form role="form" action="{{ URL::to('update/'.$key->temp_id) }}" method="post">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label for="addbrand">RFID</label>
                        <p type="text" class="form-control" id="updatebrand" name="rfid">{{ $key->rfid }} </p>
                    </div>  
                    <div class="form-group">
                        <label for="ckeditorbr">Tên Sinh Viên</label>
                        <input type="text" class="form-control" id="updatebrand" name="studentname" data-validation="length" data-validation-length="min1" data-validation-error-msg="Hãy điền thông tin vào trường này!">
                    </div>
                    <div style="display: flex; align-item: center; justify-content: center;">
                        <button style="margin: auto;" type="submit" class="btn btn-info" name="addbrand">Đăng Ký Sinh Viên</button>
                    </div>  
                    </form>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</div>

@endsection