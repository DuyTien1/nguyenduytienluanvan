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

class AdminController extends Controller
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

    public function index() {
        return view('login');
    }

    public function dashboard() {
        $this -> authlogin();  

        // date_default_timezone_set('Asia/Ho_Chi_Minh');
        // $date = date('Y-m-d H:i:s');
        // $classes = DB::table('classes')->get();
        // foreach($classes as $key => $cl) {
        //     if ($cl->shift_id == 1) {
        //         $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 20, 00, 00)->format('Y-m-d H:i:s');
        //         $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 23, 30, 00)->format('Y-m-d H:i:s');
        //         if (($date >= $start) && ($date <= $end)) {
        //             DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 1]);
        //         } else {
        //             DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 0]);
        //         }
        //     }
        //     if ($cl->shift_id == 2) {
        //         $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 7, 00, 00)->format('Y-m-d H:i:s');
        //         $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 9, 40, 00)->format('Y-m-d H:i:s');
        //         if (($date >= $start) && ($date <= $end)) {
        //             DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 1]);
        //         } else {
        //             DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 0]);
        //         }
        //     }
        //     if ($cl->shift_id == 3) {
        //         $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 8, 50, 00)->format('Y-m-d H:i:s');
        //         $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 11, 30, 00)->format('Y-m-d H:i:s');
        //         if (($date >= $start) && ($date <= $end)) {
        //             DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 1]);
        //         } else {
        //             DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 0]);
        //         }
        //     }
        //     if ($cl->shift_id == 4) {
        //         $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 9, 50, 00)->format('Y-m-d H:i:s');
        //         $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 11, 30, 00)->format('Y-m-d H:i:s');
        //         if (($date >= $start) && ($date <= $end)) {
        //             DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 1]);
        //         } else {
        //             DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 0]);
        //         }
        //     }
        //     if ($cl->shift_id == 5) {
        //         $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 13, 30, 00)->format('Y-m-d H:i:s');
        //         $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 15, 10, 00)->format('Y-m-d H:i:s');
        //         if (($date >= $start) && ($date <= $end)) {
        //             DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 1]);
        //         } else {
        //             DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 0]);
        //         }
        //     }
        //     if ($cl->shift_id == 6) {
        //         $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 13, 30, 00)->format('Y-m-d H:i:s');
        //         $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 16, 10, 00)->format('Y-m-d H:i:s');
        //         if (($date >= $start) && ($date <= $end)) {
        //             DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 1]);
        //         } else {
        //             DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 0]);
        //         }
        //     }
        //     if ($cl->shift_id == 7) {
        //         $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 15, 20, 00)->format('Y-m-d H:i:s');
        //         $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 17, 00, 00)->format('Y-m-d H:i:s');
        //         if (($date >= $start) && ($date <= $end)) {
        //             DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 1]);
        //         } else {
        //             DB::table('classes')->where('class_id', $cl->class_id)->update(['class_status' => 0]);
        //         }
        //     }
        // }
        $this->classstatus();
        $studentcount = DB::table('students')->count();  
        $classonline = DB::table('classes')->where('class_status', 1)->count();
        $classes = DB::table('classes')->count();
        return view('dashboard')->with('studentcount', $studentcount)->with('classonline', $classonline)->with('classes', $classes);
    }

    public function login(Request $request) {
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);
        $result = DB::table('accounts')->where('email', $admin_email)->where('password', $admin_password)->first();

        if($result){
            Session::put('admin_name', $result->admin_name);
            Session::put('account_id', $result->account_id);
            $studentcount = DB::table('students')->count();
            return Redirect::to('/dashboard');
    
        }else{
            Session::put('message', 'Sai email hoặc mật khẩu vui lòng nhập lại!');
            return Redirect::to('/admin');
        }
    }

    public function logout() {
        Session::put('admin_name', null);
        Session::put('account_id', null);
        return Redirect::to('/admin');
    }

    public function tocheckin($classid) {
        $this -> authlogin();
        $this->classstatus();
        DB::table('codes')->where('code_id', 1)->update(['status' => 1]);
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $classes = DB::table('classes')
        ->join('subjects', 'subjects.subject_id', '=', 'classes.subject_id')
        ->join('classrooms', 'classrooms.classroom_id', '=', 'classes.classroom_id')
        ->select('classes.*', 'subjects.subject_name', 'classrooms.classroom_name')
        ->where('class_id', $classid)
        ->first();
        $classdetails = DB::table('classdetails')
        ->join('students', 'students.student_id', '=', 'classdetails.student_id')
        ->select('classdetails.*', 'students.student_name', 'students.rfid')
        ->where('class_id', $classid)
        ->get();
        if ($classes->shift_id == 1) {
            $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 7, 00, 00)->format('Y-m-d H:i:s');
            $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 8, 40, 00)->format('Y-m-d H:i:s');
            $checkins = DB::table('checkins')
            ->join('students', 'students.rfid', '=', 'checkins.checkin_rfid')
            ->select('checkins.*', 'students.student_name')
            ->whereBetween('checkins.created_at', [$start, $end])
            ->where('checkins.class_id', $classes->class_id)
            ->paginate(10);
            $totals = DB::table('classdetails')->where('class_id', $classid)->count();
            $presents = DB::table('checkins')->where('class_id', $classid)->whereBetween('checkins.created_at', [$start, $end])->count();
            $miss = $totals - $presents;
            return view('checkin')->with('classes', $classes)->with(compact('checkins'))->with('classdetails', $classdetails)->with('totals', $totals)->with('presents', $presents)->with('miss', $miss);
        }
        if ($classes->shift_id == 2) {
            $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 7, 00, 00)->format('Y-m-d H:i:s');
            $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 9, 40, 00)->format('Y-m-d H:i:s');
            $checkins = DB::table('checkins')
            ->join('students', 'students.rfid', '=', 'checkins.checkin_rfid')
            ->select('checkins.*', 'students.student_name')
            ->whereBetween('checkins.created_at', [$start, $end])
            ->where('checkins.class_id', $classes->class_id)
            ->paginate(10);
            $totals = DB::table('classdetails')->where('class_id', $classid)->count();
            $presents = DB::table('checkins')->where('class_id', $classid)->whereBetween('checkins.created_at', [$start, $end])->count();
            $miss = $totals - $presents;
            return view('checkin')->with('classes', $classes)->with(compact('checkins'))->with('classdetails', $classdetails)->with('totals', $totals)->with('presents', $presents)->with('miss', $miss);
        }
        if ($classes->shift_id == 3) {
            $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 8, 50, 00)->format('Y-m-d H:i:s');
            $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 10, 40, 00)->format('Y-m-d H:i:s');
            $checkins = DB::table('checkins')
            ->join('students', 'students.rfid', '=', 'checkins.checkin_rfid')
            ->select('checkins.*', 'students.student_name')
            ->whereBetween('checkins.created_at', [$start, $end])
            ->where('checkins.class_id', $classes->class_id)
            ->paginate(10);
            $totals = DB::table('classdetails')->where('class_id', $classid)->count();
            $presents = DB::table('checkins')->where('class_id', $classid)->whereBetween('checkins.created_at', [$start, $end])->count();
            $miss = $totals - $presents;
            return view('checkin')->with('classes', $classes)->with(compact('checkins'))->with('classdetails', $classdetails)->with('totals', $totals)->with('presents', $presents)->with('miss', $miss);
        }
        if ($classes->shift_id == 4) {
            $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 8, 50, 00)->format('Y-m-d H:i:s');
            $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 11, 30, 00)->format('Y-m-d H:i:s');
            $checkins = DB::table('checkins')
            ->join('students', 'students.rfid', '=', 'checkins.checkin_rfid')
            ->select('checkins.*', 'students.student_name')
            ->whereBetween('checkins.created_at', [$start, $end])
            ->where('checkins.class_id', $classes->class_id)
            ->paginate(10);
            $totals = DB::table('classdetails')->where('class_id', $classid)->count();
            $presents = DB::table('checkins')->where('class_id', $classid)->whereBetween('checkins.created_at', [$start, $end])->count();
            $miss = $totals - $presents;
            return view('checkin')->with('classes', $classes)->with(compact('checkins'))->with('classdetails', $classdetails)->with('totals', $totals)->with('presents', $presents)->with('miss', $miss);
        }
        if ($classes->shift_id == 5) {
            $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 9, 50, 00)->format('Y-m-d H:i:s');
            $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 11, 30, 00)->format('Y-m-d H:i:s');
            $checkins = DB::table('checkins')
            ->join('students', 'students.rfid', '=', 'checkins.checkin_rfid')
            ->select('checkins.*', 'students.student_name')
            ->whereBetween('checkins.created_at', [$start, $end])
            ->where('checkins.class_id', $classes->class_id)
            ->paginate(10);
            $totals = DB::table('classdetails')->where('class_id', $classid)->count();
            $presents = DB::table('checkins')->where('class_id', $classid)->whereBetween('checkins.created_at', [$start, $end])->count();
            $miss = $totals - $presents;
            return view('checkin')->with('classes', $classes)->with(compact('checkins'))->with('classdetails', $classdetails)->with('totals', $totals)->with('presents', $presents)->with('miss', $miss);
        }
        if ($classes->shift_id == 6) {
            $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 12, 00, 00)->format('Y-m-d H:i:s');
            $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 15, 10, 00)->format('Y-m-d H:i:s');
            $checkins = DB::table('checkins')
            ->join('students', 'students.rfid', '=', 'checkins.checkin_rfid')
            ->select('checkins.*', 'students.student_name')
            ->whereBetween('checkins.created_at', [$start, $end])
            ->where('checkins.class_id', $classes->class_id)
            ->paginate(10);
            $totals = DB::table('classdetails')->where('class_id', $classid)->count();
            $presents = DB::table('checkins')->where('class_id', $classid)->whereBetween('checkins.created_at', [$start, $end])->count();
            $miss = $totals - $presents;
            return view('checkin')->with('classes', $classes)->with(compact('checkins'))->with('classdetails', $classdetails)->with('totals', $totals)->with('presents', $presents)->with('miss', $miss);
        }
        if ($classes->shift_id == 7) {
            $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 12, 00, 00)->format('Y-m-d H:i:s');
            $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 16, 10, 00)->format('Y-m-d H:i:s');
            $checkins = DB::table('checkins')
            ->join('students', 'students.rfid', '=', 'checkins.checkin_rfid')
            ->select('checkins.*', 'students.student_name')
            ->whereBetween('checkins.created_at', [$start, $end])
            ->where('checkins.class_id', $classes->class_id)
            ->paginate(10);
            $totals = DB::table('classdetails')->where('class_id', $classid)->count();
            $presents = DB::table('checkins')->where('class_id', $classid)->whereBetween('checkins.created_at', [$start, $end])->count();
            $miss = $totals - $presents;
            return view('checkin')->with('classes', $classes)->with(compact('checkins'))->with('classdetails', $classdetails)->with('totals', $totals)->with('presents', $presents)->with('miss', $miss);
        }
        if ($classes->shift_id == 8) {
            $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 15, 20, 00)->format('Y-m-d H:i:s');
            $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 17, 00, 00)->format('Y-m-d H:i:s');
            $checkins = DB::table('checkins')
            ->join('students', 'students.rfid', '=', 'checkins.checkin_rfid')
            ->select('checkins.*', 'students.student_name')
            ->whereBetween('checkins.created_at', [$start, $end])
            ->where('checkins.class_id', $classes->class_id)
            ->paginate(10);
            $totals = DB::table('classdetails')->where('class_id', $classid)->count();
            $presents = DB::table('checkins')->where('class_id', $classid)->whereBetween('checkins.created_at', [$start, $end])->count();
            $miss = $totals - $presents;
            return view('checkin')->with('classes', $classes)->with(compact('checkins'))->with('classdetails', $classdetails)->with('totals', $totals)->with('presents', $presents)->with('miss', $miss);
        }
        if ($classes->shift_id == 9) {
            $start = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 18, 30, 00)->format('Y-m-d H:i:s');
            $end = Carbon::create(Carbon::now()->year, Carbon::now()->month, Carbon::now()->day, 21, 10, 00)->format('Y-m-d H:i:s');
            $checkins = DB::table('checkins')
            ->join('students', 'students.rfid', '=', 'checkins.checkin_rfid')
            ->select('checkins.*', 'students.student_name')
            ->whereBetween('checkins.created_at', [$start, $end])
            ->where('checkins.class_id', $classes->class_id)
            ->paginate(10);
            $totals = DB::table('classdetails')->where('class_id', $classid)->count();
            $presents = DB::table('checkins')->where('class_id', $classid)->whereBetween('checkins.created_at', [$start, $end])->count();
            $miss = $totals - $presents;
            return view('checkin')->with('classes', $classes)->with(compact('checkins'))->with('classdetails', $classdetails)->with('totals', $totals)->with('presents', $presents)->with('miss', $miss);
        }
    }

    public function signin() {
        $this -> authlogin();
        $this->classstatus();
        DB::table('codes')->where('code_id', 1)->update(['status' => 2]);
        return view('signin');
    }

    public function deletesignin($tempid) {
        $this -> authlogin(); 
        $anonymous = DB::table('temps')->where('temp_id', $tempid)->delete();
        Session::put('message', 'Xóa Thành Công!');
        return Redirect::to('/signin');
    }

    public function sendupdate($temp_id) {
        DB::table('codes')->where('code_id', 1)->update(['status' => 1]);
        $temps = DB::table('temps')->where('temp_id', $temp_id)->get();
        return view('update')->with('temps', $temps);
    }

    public function update(Request $request, $temp_id) {
        $temps = DB::table('temps')->where('temp_id', $temp_id)->first();
        $rfid = $temps->rfid;
        $check = DB::table('students')->where('rfid', $rfid)->first();
        if ($check) {
            DB::table('temps')->where('temp_id', $temp_id)->delete();
            Session::put('message', 'Thông Tin Sinh Viên Đã Tồn Tại!');
            return Redirect::to('/signin');
            
        } else { 
            $data = array();
            $data['rfid'] = $rfid;
            $data['student_name'] = $request->studentname;
            DB::table('students')->insert($data);
            DB::table('temps')->where('temp_id', $temp_id)->delete();
            Session::put('message', 'Đã Đăng Ký Thông Tin Sinh Viên Thành Công!');
            return Redirect::to('/signin');
        }
    }


    public function tolistanonymous() {
        $this -> authlogin();
        $this->classstatus();
        DB::table('codes')->where('code_id', 1)->update(['status' => 1]);
        $anonymous = DB::table('anonymous')
        ->join('classes', 'classes.class_id', '=', 'anonymous.class_id')
        ->join('classrooms', 'classrooms.classroom_id', '=', 'classes.classroom_id')
        ->select('anonymous.*', 'classes.class_name', 'classrooms.classroom_name')
        ->paginate(10);
        return view('listanonymous')->with(compact('anonymous'));
    }

    public function movetosignin($anonymousid) {
        $this -> authlogin(); 
        DB::table('codes')->where('code_id', 1)->update(['status' => 1]);
        $anonymous = DB::table('anonymous')->where('anonymous_id', $anonymousid)->first();
        $data = array();
        $data['rfid'] = $anonymous->rfid;
        $data['created_at'] = $anonymous->created_at;
        DB::table('temps')->insert($data);
        Session::put('message', 'Chuyển Dữ Liệu Thành Công!');
        DB::table('anonymous')->where('anonymous_id', $anonymousid)->delete();
        return Redirect::to('/tolistanonymous');
    }

    public function deleteanonymous($anonymousid) {
        $this -> authlogin(); 
        $anonymous = DB::table('anonymous')->where('anonymous_id', $anonymousid)->delete();
        Session::put('message', 'Xóa Thành Công!');
        return Redirect::to('/tolistanonymous');
    }

    public function toeditadmin($adminid) {
        $this -> authlogin();
        $this->classstatus();
        DB::table('codes')->where('code_id', 1)->update(['status' => 1]);
        $admins = DB::table('accounts')->where('account_id', $adminid)->first();
        return view('editadmin')->with('admins', $admins);
    }

    public function updateadmin(Request $request, $adminid) {
        $data = array();
        $data['admin_name'] = $request->adminname;
        $data['email'] = $request->adminemail;
        DB::table('accounts')->where('account_id', $adminid)->update($data);
        Session::put('message', 'Cập Nhật Thành Công!');
        Session::put('admin_name', $request->adminname);
        return Redirect::back();
    }

    public function toresetpass($adminid) {
        $this -> authlogin();
        $this->classstatus();
        DB::table('codes')->where('code_id', 1)->update(['status' => 1]);
        $admins = DB::table('accounts')->where('account_id', $adminid)->first();
        return view('resetpass')->with('admins', $admins);
    }

    public function resetpass(Request $request, $adminid) {
        $admins = DB::table('accounts')->where('account_id', $adminid)->where('password', md5($request->oldpass))->first();
        if ($admins) {
            if ($request->newpass == $request->renewpass) {
                $data = array();
                $data['password'] = md5($request->newpass);
                DB::table('accounts')->where('account_id', $adminid)->update($data);
                Session::put('message', 'Cập Nhật Thành Công!');
                return Redirect::back();
            } else {
                Session::put('message2', 'Mật Khẩu Nhập Lại Không Chính Xác!');
                return Redirect::back();
            }
        } else {
            Session::put('message2', 'Mật Khẩu Không Chính Xác!');
            return Redirect::back();
        }
    }
}
