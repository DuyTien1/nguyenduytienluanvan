@extends('index')
@section('admin_content')

<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Thêm Sinh Viên Vào Lớp Học ({{ $classes->class_name }})
        </div>
        <div class="table-responsive">
            <form role="form" action="{{ URL::to('/addclassdetail/'.$classes->class_id) }}" method="post">
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
                        @foreach($students as $key => $sd)
                        <tr>
                            <td><label class="i-checks m-b-none"><input type="checkbox" name="studentid[]" value="{{ $sd->student_id }}"><i></i></label></td>
                            <td>{{ $sd->student_name }}</td>
                            <td><span class="text-ellipsis">{{ $sd->rfid }}</span></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div style="display: flex; align-item: center; justify-content: center;">
                    <button style="margin: auto; margin-bottom: 20px;" type="submit" class="btn btn-info">Thêm</button>
                </div>  
            </div>
        </form>
    </div>
</div>

@endsection






