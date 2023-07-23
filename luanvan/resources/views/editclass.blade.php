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
                Cập Nhật Thông Tin Lớp Học
                <br>
            </header>
            <div class="panel-body">
                @foreach($classes as $key => $cl)
                <div class="position-center">
                    <form role="form" action="{{ URL::to('/updateclass/'.$cl->class_id) }}" method="post">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label for="addbrand">Tên Lớp Học</label>
                        <input type="text" class="form-control" id="updatebrand" name="classname" value="{{ $cl->class_name }}" data-validation="length" data-validation-length="min1" data-validation-error-msg="Hãy điền thông tin vào trường này!">
                    </div>  
                    <div class="form-group">
                        <label for="">Chọn Phòng Học</label>
                        <select name="classroomid" id="" class="form-control input-sm m-bot15">
                            @foreach($classrooms as $key => $cr)
                                @if($cr->classroom_id == $cl->classroom_id)
                                    <option selected value="{{ $cr->classroom_id }}">{{ $cr->classroom_name }}</option>
                                @else
                                <option value="{{ $cr->classroom_id }}">{{ $cr->classroom_name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Chọn Môn Học</label>
                        <select name="subjectid" id="" class="form-control input-sm m-bot15">
                            @foreach($subjects as $key => $sj)
                                @if($sj->subject_id == $cl->subject_id)
                                    <option selected value="{{ $sj->subject_id }}">{{ $sj->subject_name }}</option>
                                @else
                                <option value="{{ $sj->subject_id }}">{{ $sj->subject_name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Chọn Tiết Học</label>
                        <select name="shiftid" id="" class="form-control input-sm m-bot15">
                            @foreach($shifts as $key => $sh)
                                @if($sh->shift_id == $cl->shift_id)
                                    <option selected value="{{ $sh->shift_id }}">{{ $sh->shift_name }}</option>
                                @else
                                    <option value="{{ $sh->shift_id }}">{{ $sh->shift_name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div style="display: flex; align-item: center; justify-content: center;">
                        <button style="margin: auto;" type="submit" class="btn btn-info" name="addbrand">Cập Nhật</button>
                    </div>  
                    </form>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</div>

@endsection