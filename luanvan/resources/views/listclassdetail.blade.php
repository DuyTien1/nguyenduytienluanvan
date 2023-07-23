@extends('index')
@section('admin_content')

<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Danh Sách Sinh Viên Của Lớp Học ({{ $classes->class_name }})
        </div>
        <div class="table-responsive">
            <form role="form" action="{{ URL::to('/deleteclassdetail/'.$classes->class_id) }}" method="post">
            {{ csrf_field() }}
                <table class="table table-striped b-t b-light">
                    <thead>
                        <tr>
                            <th style="width: 50px;">
                            <label class="i-checks m-b-none">
                            </label>
                            </th>
                            <th>Tên Sinh Viên</th>
                            <th>RFID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($classdetails as $key => $cd)
                        <tr>
                            <td><label class="i-checks m-b-none"><input type="checkbox" name="studentid[]" value="{{ $cd->student_id }}"><i></i></label></td>
                            <td>{{ $cd->student_name }}</td>
                            <td><span class="text-ellipsis">{{ $cd->rfid }}</span></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div style="display: flex; align-item: center; justify-content: center;">
                    <button style="margin: auto; margin-bottom: 20px;" type="submit" class="btn btn-danger">Xóa</button>
                </div>  
            </div>
        </form>
    </div>
</div>

@endsection






