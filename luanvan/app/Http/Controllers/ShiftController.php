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

class ShiftController extends Controller
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

    public function tolistshift() {
        $this->authlogin();
        $this->classstatus();
        DB::table('codes')->where('code_id', 1)->update(['status' => 1]);
        $shifts = DB::table('shifts')->paginate(10);
        return view('listshift')->with(compact('shifts'));
    }

    public function toaddshift() {
        $this->authlogin();
        $this->classstatus();
        DB::table('codes')->where('code_id', 1)->update(['status' => 1]);
        return view('addshift');
    }

    public function addshift(Request $request) {
        $data = array();
        $data['shift_name'] = $request->shiftname;
        $data['shift_note'] = $request->shiftnote;
        $data['shift_start'] = $request->timestart;
        $data['shift_end'] = $request->timeend;
        DB::table('shifts')->insert($data);
        Session::put('message', 'Thêm Ca Học Mới Thành Công!');
        return Redirect::to('/toaddshift');
    }

    public function toeditshift($shiftid) {
        $this->authlogin();
        $this->classstatus();
        DB::table('codes')->where('code_id', 1)->update(['status' => 1]);
        $shifts = DB::table('shifts')->where('shift_id', $shiftid)->get();
        return view('editshift')->with('shifts', $shifts);
    }

    public function updateshift(Request $request, $shiftid) {
        $data = array();
        $data['shift_name'] = $request->shiftname;
        $data['shift_note'] = $request->shiftnote;
        $data['shift_start'] = $request->timestart;
        $data['shift_end'] = $request->timeend;
        DB::table('shifts')->where('shift_id', $shiftid)->update($data);
        Session::put('message', 'Cập Nhật Thông Tin Ca Học Thành Công!');
        return Redirect::to('/tolistshift');
    }

    public function deleteshift($shiftid) {
        DB::table('classes')->where('shift_id', $shiftid)->update(['class_status' => 2]);
        DB::table('shifts')->where('shift_id', $shiftid)->delete();
        Session::put('message', 'Xóa Ca Học Thành Công!');
        return Redirect::to('/tolistshift');
    }
}
