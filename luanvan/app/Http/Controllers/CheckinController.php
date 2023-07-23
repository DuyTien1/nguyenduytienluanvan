<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use App\Models;
use App\Http\Controllers\Controller;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\SessionController;
use Carbon\Carbon;


class CheckinController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('codes')->first();
        return $data->status;
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $time = date("Y-m-d H:i:s");
        $rfid = $request->rfid;
        $classroomcode = $request->classroomcode;
        $classrooms = DB::table('classrooms')->where('classroom_code', $classroomcode)->first();
        $classes = DB::table('classes')->where('classroom_id', $classrooms->classroom_id)->where('class_status', 1)->first();
        if ($classes) {
            $students = DB::table('students')->where('rfid', $rfid)->first();
            if (!$students) {
                $data = array();
                $data['class_id'] = $classes->class_id;
                $data['rfid'] = $rfid;
                $data['name'] = 'Không Xác Định';
                $data['created_at'] = $time;
                $id = DB::table('anonymous')->insertGetId($data);
                return $id;
            }           
            $classdetails = DB::table('classdetails')->where('class_id', $classes->class_id)->where('student_id', $students->student_id)->first();
            if (!$classdetails) {
                $data = array();
                $data['class_id'] = $classes->class_id;
                $data['rfid'] = $rfid;
                $data['name'] = $students->student_name;
                $data['created_at'] = $time;
                $id = DB::table('anonymous')->insertGetId($data);
                return $id;
            } else {
                if ($classes->shift_id == 1) {
                    $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 7, 00, 00)->format('Y-m-d H:i:s');
                    $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 8, 40, 00)->format('Y-m-d H:i:s');
                    $checkins = DB::table('checkins')
                    ->where('class_id', $classes->class_id)
                    ->where('checkin_rfid', $rfid)
                    ->whereBetween('created_at', [$start, $end])
                    ->first();
                    if ($checkins) {
                        return "Đã Điểm Danh Rồi";
                    } else {
                        $data = array();
                        $data['class_id'] = $classes->class_id;
                        $data['checkin_rfid'] = $rfid;
                        $data['checkin_name'] = $students->student_name;
                        $data['created_at'] = $time;
                        $id = DB::table('checkins')->insertGetId($data);
                        return $id;
                    }
                }
                if ($classes->shift_id == 2) {
                    $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 7, 00, 00)->format('Y-m-d H:i:s');
                    $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 9, 40, 00)->format('Y-m-d H:i:s');
                    $checkins = DB::table('checkins')
                    ->where('class_id', $classes->class_id)
                    ->where('checkin_rfid', $rfid)
                    ->whereBetween('created_at', [$start, $end])
                    ->first();
                    if ($checkins) {
                        return "Đã Điểm Danh Rồi";
                    } else {
                        $data = array();
                        $data['class_id'] = $classes->class_id;
                        $data['checkin_rfid'] = $rfid;
                        $data['checkin_name'] = $students->student_name;
                        $data['created_at'] = $time;
                        $id = DB::table('checkins')->insertGetId($data);
                        return $id;
                    }
                }
                if ($classes->shift_id == 3) {
                    $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 8, 50, 00)->format('Y-m-d H:i:s');
                    $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 10, 40, 00)->format('Y-m-d H:i:s');
                    $checkins = DB::table('checkins')
                    ->where('class_id', $classes->class_id)
                    ->where('checkin_rfid', $rfid)
                    ->whereBetween('created_at', [$start, $end])
                    ->first();
                    if ($checkins) {
                        return "Đã Điểm Danh Rồi";
                    } else {
                        $data = array();
                        $data['class_id'] = $classes->class_id;
                        $data['checkin_rfid'] = $rfid;
                        $data['checkin_name'] = $students->student_name;
                        $data['created_at'] = $time;
                        $id = DB::table('checkins')->insertGetId($data);
                        return $id;
                    }
                }
                if ($classes->shift_id == 4) {
                    $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 8, 50, 00)->format('Y-m-d H:i:s');
                    $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 11, 30, 00)->format('Y-m-d H:i:s');
                    $checkins = DB::table('checkins')
                    ->where('class_id', $classes->class_id)
                    ->where('checkin_rfid', $rfid)
                    ->whereBetween('created_at', [$start, $end])
                    ->first();
                    if ($checkins) {
                        return "Đã Điểm Danh Rồi";
                    } else {
                        $data = array();
                        $data['class_id'] = $classes->class_id;
                        $data['checkin_rfid'] = $rfid;
                        $data['checkin_name'] = $students->student_name;
                        $data['created_at'] = $time;
                        $id = DB::table('checkins')->insertGetId($data);
                        return $id;
                    }
                }
                if ($classes->shift_id == 5) {
                    $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 9, 50, 00)->format('Y-m-d H:i:s');
                    $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 11, 30, 00)->format('Y-m-d H:i:s');
                    $checkins = DB::table('checkins')
                    ->where('class_id', $classes->class_id)
                    ->where('checkin_rfid', $rfid)
                    ->whereBetween('created_at', [$start, $end])
                    ->first();
                    if ($checkins) {
                        return "Đã Điểm Danh Rồi";
                    } else {
                        $data = array();
                        $data['class_id'] = $classes->class_id;
                        $data['checkin_rfid'] = $rfid;
                        $data['checkin_name'] = $students->student_name;
                        $data['created_at'] = $time;
                        $id = DB::table('checkins')->insertGetId($data);
                        return $id;
                    }
                }
                if ($classes->shift_id == 6) {
                    $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 12, 00, 00)->format('Y-m-d H:i:s');
                    $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 15, 10, 00)->format('Y-m-d H:i:s');
                    $checkins = DB::table('checkins')
                    ->where('class_id', $classes->class_id)
                    ->where('checkin_rfid', $rfid)
                    ->whereBetween('created_at', [$start, $end])
                    ->first();
                    if ($checkins) {
                        return "Đã Điểm Danh Rồi";
                    } else {
                        $data = array();
                        $data['class_id'] = $classes->class_id;
                        $data['checkin_rfid'] = $rfid;
                        $data['checkin_name'] = $students->student_name;
                        $data['created_at'] = $time;
                        $id = DB::table('checkins')->insertGetId($data);
                        return $id;
                    }
                }
                if ($classes->shift_id == 7) {
                    $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 12, 00, 00)->format('Y-m-d H:i:s');
                    $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 16, 10, 00)->format('Y-m-d H:i:s');
                    $checkins = DB::table('checkins')
                    ->where('class_id', $classes->class_id)
                    ->where('checkin_rfid', $rfid)
                    ->whereBetween('created_at', [$start, $end])
                    ->first();
                    if ($checkins) {
                        return "Đã Điểm Danh Rồi";
                    } else {
                        $data = array();
                        $data['class_id'] = $classes->class_id;
                        $data['checkin_rfid'] = $rfid;
                        $data['checkin_name'] = $students->student_name;
                        $data['created_at'] = $time;
                        $id = DB::table('checkins')->insertGetId($data);
                        return $id;
                    }
                }
                if ($classes->shift_id == 8) {
                    $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 15, 20, 00)->format('Y-m-d H:i:s');
                    $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 17, 00, 00)->format('Y-m-d H:i:s');
                    $checkins = DB::table('checkins')
                    ->where('class_id', $classes->class_id)
                    ->where('checkin_rfid', $rfid)
                    ->whereBetween('created_at', [$start, $end])
                    ->first();
                    if ($checkins) {
                        return "Đã Điểm Danh Rồi";
                    } else {
                        $data = array();
                        $data['class_id'] = $classes->class_id;
                        $data['checkin_rfid'] = $rfid;
                        $data['checkin_name'] = $students->student_name;
                        $data['created_at'] = $time;
                        $id = DB::table('checkins')->insertGetId($data);
                        return $id;
                    }
                }
                if ($classes->shift_id == 9) {
                    $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 18, 30, 00)->format('Y-m-d H:i:s');
                    $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 21, 10, 00)->format('Y-m-d H:i:s');
                    $checkins = DB::table('checkins')
                    ->where('class_id', $classes->class_id)
                    ->where('checkin_rfid', $rfid)
                    ->whereBetween('created_at', [$start, $end])
                    ->first();
                    if ($checkins) {
                        return "Đã Điểm Danh Rồi";
                    } else {
                        $data = array();
                        $data['class_id'] = $classes->class_id;
                        $data['checkin_rfid'] = $rfid;
                        $data['checkin_name'] = $students->student_name;
                        $data['created_at'] = $time;
                        $id = DB::table('checkins')->insertGetId($data);
                        return $id;
                    }
                }
            }
        } else {
            // $student_name = $student->student_name;
            // $data = array();
            // $data['checkin_rfid'] = $rfid;
            // $data['checkin_name'] = "Không Xác Định";
            // $data['created_at'] = $time;
            // $id = DB::table('checkins')->insertGetId($data);
            return 'Lớp Học Chưa Online';        
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
