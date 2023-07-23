<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
session_start();

class StatusController extends Controller
{
    public function authlogin() {
        $id = Session::get('account_id');
        if ($id) {
            return Redirect::to('dashboard');
        }else {
            return Redirect::to('/admin')->send();
        }
    }

    public function classstatus() {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s');
        $class = DB::table('classes')->whereIn('class_status', [0, 1])->get();
        foreach($class as $key => $cl) {
            if ($cl->shift_id == 1) {
                $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 7, 00, 00)->format('Y-m-d H:i:s');
                $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 8, 40, 00)->format('Y-m-d H:i:s');
                if (($date >= $start) && ($date <= $end)) {
                    DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 1]);
                } else {
                    DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 0]);
                }
            }
            if ($cl->shift_id == 2) {
                $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 7, 00, 00)->format('Y-m-d H:i:s');
                $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 9, 40, 00)->format('Y-m-d H:i:s');
                if (($date >= $start) && ($date <= $end)) {
                    DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 1]);
                } else {
                    DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 0]);
                }
            }
            if ($cl->shift_id == 3) {
                $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 8, 50, 00)->format('Y-m-d H:i:s');
                $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 10, 40, 00)->format('Y-m-d H:i:s');
                if (($date >= $start) && ($date <= $end)) {
                    DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 1]);
                } else {
                    DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 0]);
                }
            }
            if ($cl->shift_id == 4) {
                $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 8, 50, 00)->format('Y-m-d H:i:s');
                $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 11, 30, 00)->format('Y-m-d H:i:s');
                if (($date >= $start) && ($date <= $end)) {
                    DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 1]);
                } else {
                    DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 0]);
                }
            }
            if ($cl->shift_id == 5) {
                $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 9, 50, 00)->format('Y-m-d H:i:s');
                $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 11, 30, 00)->format('Y-m-d H:i:s');
                if (($date >= $start) && ($date <= $end)) {
                    DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 1]);
                } else {
                    DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 0]);
                }
            }         
            if ($cl->shift_id == 6) {
                $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 12, 00, 00)->format('Y-m-d H:i:s');
                $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 15, 10, 00)->format('Y-m-d H:i:s');
                if (($date >= $start) && ($date <= $end)) {
                    DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 1]);
                } else {
                    DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 0]);
                }
            }
            if ($cl->shift_id == 7) {
                $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 12, 00, 00)->format('Y-m-d H:i:s');
                $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 16, 10, 00)->format('Y-m-d H:i:s');
                if (($date >= $start) && ($date <= $end)) {
                    DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 1]);
                } else {
                    DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 0]);
                }
            }
            if ($cl->shift_id == 8) {
                $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 15, 20, 00)->format('Y-m-d H:i:s');
                $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 17, 00, 00)->format('Y-m-d H:i:s');
                if (($date >= $start) && ($date <= $end)) {
                    DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 1]);
                } else {
                    DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 0]);
                }
            }
            if ($cl->shift_id == 9) {
                $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 18, 30, 00)->format('Y-m-d H:i:s');
                $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 21, 10, 00)->format('Y-m-d H:i:s');
                if (($date >= $start) && ($date <= $end)) {
                    DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 1]);
                } else {
                    DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 0]);
                }
            }
        }
        return 0;
    }

    public function toliststudent() {
        $this->authlogin();
        $this->classstatus();
        DB::table('codes')->where('code_id', 1)->update(['status' => 1]);
        $students = DB::table('students')->paginate(10);
        return view('liststudent')->with(compact('students'));
    }

    // public function toaddstudent() {
    //     $this->authlogin();
    //     return view('addstudent');
    // }

    // public function addstudent(Request $request) {
    //     $studentcode = $request->studentcode;
    //     $check = DB::table('students')->where('student_code', $studentcode)->first();
    //     if ($check) {
    //         Session::put('message2', 'Mã Môn Đã Tồn Tại!');
    //         return Redirect::to('/toaddstudent');
    //     } else {
    //         $data = array();
    //         $data['student_code'] = $request->studentcode;
    //         $data['student_name'] = $request->studentname;
    //         DB::table('students')->insert($data);
    //         Session::put('message', 'Thêm Sinh Viên Mới Thành Công!');
    //         return Redirect::to('/toaddstudent');
    //     }
    // }

    public function toeditstudent($studentid) {
        $this->authlogin();
        $this->classstatus();
        DB::table('codes')->where('code_id', 1)->update(['status' => 1]);
        $students = DB::table('students')->where('student_id', $studentid)->get();
        return view('editstudent')->with('students', $students);
    }

    public function updatestudent(Request $request, $studentid) {
        $data = array();
        $data['student_name'] = $request->studentname;
        DB::table('students')->where('student_id', $studentid)->update($data);
        Session::put('message', 'Cập Nhật Thông Tin Sinh Viên Thành Công!');
        return Redirect::to('/toliststudent');
    }

    public function deletestudent($studentid) {
        DB::table('students')->where('student_id', $studentid)->delete();
        Session::put('message', 'Xóa Sinh Viên Thành Công!');
        return Redirect::to('/toliststudent');
    }
}
