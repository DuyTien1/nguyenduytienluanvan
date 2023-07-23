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
                Thêm Lớp Học
                <br>
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{ URL::to('/addclass') }}" method="post">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label for="addbrand">Tên Lớp Học</label>
                        <input type="text" class="form-control" value="" id="updatebrand" name="classname" data-validation="length" data-validation-length="min1" data-validation-error-msg="Hãy điền thông tin vào trường này!">
                    </div>  
                    <div class="form-group">
                        <label for="ckeditorbr">Chọn Phòng Học</label>
                        <select name="classroomid" id="" class="form-control input-sm m-bot15">
                            @foreach($classrooms as $key => $cr)
                                    <option value="{{ $cr->classroom_id }}">{{ $cr->classroom_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ckeditorbr">Chọn Môn Học</label>
                        <select name="subjectid" id="" class="form-control input-sm m-bot15">
                            @foreach($subjects as $key => $sj)
                                    <option value="{{ $sj->subject_id }}">{{ $sj->subject_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ckeditorbr">Chọn Tiết Học</label>
                        <select name="shiftid" id="" class="form-control input-sm m-bot15">
                            @foreach($shifts as $key => $sh)
                                    <option value="{{ $sh->shift_id }}">{{ $sh->shift_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div style="display: flex; align-item: center; justify-content: center;">
                        <button style="margin: auto;" type="submit" class="btn btn-info" name="addclass">Thêm</button>
                    </div>  
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection






