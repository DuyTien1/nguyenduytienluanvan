<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Arr;
use Carbon\Carbon;
use PDF;
session_start();

class ClassController extends Controller
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

    public function tolistclass() {
        $this->authlogin();
        $this->classstatus();
        DB::table('codes')->where('code_id', 1)->update(['status' => 1]);
        $classes = DB::table('classes')
        ->join('classrooms', 'classrooms.classroom_id', '=', 'classes.classroom_id')
        ->join('subjects', 'subjects.subject_id', '=', 'classes.subject_id')
        ->join('shifts', 'shifts.shift_id', '=', 'classes.shift_id')
        ->select('classes.*', 'classrooms.*', 'subjects.*', 'shifts.*')
        ->paginate(10);
        return view('listclass')->with(compact('classes'));
    }

    public function toaddclass() {
        $this->authlogin();
        $this->classstatus();
        DB::table('codes')->where('code_id', 1)->update(['status' => 1]);
        $classrooms = DB::table('classrooms')->get();
        $subjects = DB::table('subjects')->get();
        $shifts = DB::table('shifts')->get();
        return view('addclass')->with('classrooms', $classrooms)->with('subjects', $subjects)->with('shifts', $shifts);
    }

    public function addclass(Request $request) {
        $classname = $request->classname;
        $shift_id = $request->shiftid;
        $check = DB::table('classes')->where('class_name', $classname)->first();
        if ($check) {
            Session::put('message2', 'Tên Lớp Đã Tồn Tại!');
            return Redirect::to('/toaddclass');
        } else {

            $check1 = DB::table('classes')->where('classroom_id', $request->classroomid)->get();

            if (is_null($check1)) {
                $data = array();
                $data['classroom_id'] = $request->classroomid;
                $data['subject_id'] = $request->subjectid;
                $data['shift_id'] = $request->shiftid;
                $data['class_name'] = $request->classname;
                DB::table('classes')->insert($data);
                Session::put('message', 'Thêm Lớp Học Mới Thành Công!');
                return Redirect::to('/toaddclass');
            } else {
                foreach($check1 as $value1) {
                        if ($shift_id == 1) {
                            if ($value1->shift_id == 1 || $value1->shift_id == 2) {
                                Session::put('message2', 'Trùng Giờ Học!');
                                return Redirect::to('/toaddclass');
                            } else {
                                $data = array();
                                $data['classroom_id'] = $request->classroomid;
                                $data['subject_id'] = $request->subjectid;
                                $data['shift_id'] = $request->shiftid;
                                $data['class_name'] = $request->classname;
                                DB::table('classes')->insert($data);
                                Session::put('message', 'Thêm Lớp Học Mới Thành Công!');
                                return Redirect::to('/toaddclass');
                            }    
                        }

                        if ($shift_id == 2) {
                            if ($value1->shift_id == 1 || $value1->shift_id == 2 || $value1->shift_id == 3 || $value1->shift_id == 4) {
                                Session::put('message2', 'Trùng Giờ Học!');
                                return Redirect::to('/toaddclass');
                            } else {
                                $data = array();
                                $data['classroom_id'] = $request->classroomid;
                                $data['subject_id'] = $request->subjectid;
                                $data['shift_id'] = $request->shiftid;
                                $data['class_name'] = $request->classname;
                                DB::table('classes')->insert($data);
                                Session::put('message', 'Thêm Lớp Học Mới Thành Công!');
                                return Redirect::to('/toaddclass');
                            }    
                        }

                        if ($shift_id == 3) {
                            if ($value1->shift_id == 5 || $value1->shift_id == 2 || $value1->shift_id == 3 || $value1->shift_id == 4) {
                                Session::put('message2', 'Trùng Giờ Học!');
                                return Redirect::to('/toaddclass');
                            } else {
                                $data = array();
                                $data['classroom_id'] = $request->classroomid;
                                $data['subject_id'] = $request->subjectid;
                                $data['shift_id'] = $request->shiftid;
                                $data['class_name'] = $request->classname;
                                DB::table('classes')->insert($data);
                                Session::put('message', 'Thêm Lớp Học Mới Thành Công!');
                                return Redirect::to('/toaddclass');
                            }    
                        }

                        if ($shift_id == 4) {
                            if ($value1->shift_id == 5 || $value1->shift_id == 2 || $value1->shift_id == 3 || $value1->shift_id == 4) {
                                Session::put('message2', 'Trùng Giờ Học!');
                                return Redirect::to('/toaddclass');
                            } else {
                                $data = array();
                                $data['classroom_id'] = $request->classroomid;
                                $data['subject_id'] = $request->subjectid;
                                $data['shift_id'] = $request->shiftid;
                                $data['class_name'] = $request->classname;
                                DB::table('classes')->insert($data);
                                Session::put('message', 'Thêm Lớp Học Mới Thành Công!');
                                return Redirect::to('/toaddclass');
                            }    
                        }

                        if ($shift_id == 5) {
                            if ($value1->shift_id == 5 || $value1->shift_id == 3 || $value1->shift_id == 4) {
                                Session::put('message2', 'Trùng Giờ Học!');
                                return Redirect::to('/toaddclass');
                            } else {
                                $data = array();
                                $data['classroom_id'] = $request->classroomid;
                                $data['subject_id'] = $request->subjectid;
                                $data['shift_id'] = $request->shiftid;
                                $data['class_name'] = $request->classname;
                                DB::table('classes')->insert($data);
                                Session::put('message', 'Thêm Lớp Học Mới Thành Công!');
                                return Redirect::to('/toaddclass');
                            }    
                        }
                        if ($shift_id == 6) {
                            if ($value1->shift_id == 6 || $value1->shift_id == 7) {
                                Session::put('message2', 'Trùng Giờ Học!');
                                return Redirect::to('/toaddclass');
                            } else {
                                $data = array();
                                $data['classroom_id'] = $request->classroomid;
                                $data['subject_id'] = $request->subjectid;
                                $data['shift_id'] = $request->shiftid;
                                $data['class_name'] = $request->classname;
                                DB::table('classes')->insert($data);
                                Session::put('message', 'Thêm Lớp Học Mới Thành Công!');
                                return Redirect::to('/toaddclass');
                            }    
                        }
                        if ($shift_id == 7) {
                            if ($value1->shift_id == 6 || $value1->shift_id == 7 || $value1->shift_id == 8) {
                                Session::put('message2', 'Trùng Giờ Học!');
                                return Redirect::to('/toaddclass');
                            } else {
                                $data = array();
                                $data['classroom_id'] = $request->classroomid;
                                $data['subject_id'] = $request->subjectid;
                                $data['shift_id'] = $request->shiftid;
                                $data['class_name'] = $request->classname;
                                DB::table('classes')->insert($data);
                                Session::put('message', 'Thêm Lớp Học Mới Thành Công!');
                                return Redirect::to('/toaddclass');
                            }    
                        }

                        if ($shift_id == 8) {
                            if ($value1->shift_id == 7 || $value1->shift_id == 8) {
                                Session::put('message2', 'Trùng Giờ Học!');
                                return Redirect::to('/toaddclass');
                            } else {
                                $data = array();
                                $data['classroom_id'] = $request->classroomid;
                                $data['subject_id'] = $request->subjectid;
                                $data['shift_id'] = $request->shiftid;
                                $data['class_name'] = $request->classname;
                                DB::table('classes')->insert($data);
                                Session::put('message', 'Thêm Lớp Học Mới Thành Công!');
                                return Redirect::to('/toaddclass');
                            }    
                        }

                        if ($shift_id == 9) {
                            if ($value1->shift_id == 9) {
                                Session::put('message2', 'Trùng Giờ Học!');
                                return Redirect::to('/toaddclass');
                            } else {
                                $data = array();
                                $data['classroom_id'] = $request->classroomid;
                                $data['subject_id'] = $request->subjectid;
                                $data['shift_id'] = $request->shiftid;
                                $data['class_name'] = $request->classname;
                                DB::table('classes')->insert($data);
                                Session::put('message', 'Thêm Lớp Học Mới Thành Công!');
                                return Redirect::to('/toaddclass');
                            }                                   
                    } 
                }
            }
            $data = array();
            $data['classroom_id'] = $request->classroomid;
            $data['subject_id'] = $request->subjectid;
            $data['shift_id'] = $request->shiftid;
            $data['class_name'] = $request->classname;
            DB::table('classes')->insert($data);
            Session::put('message', 'Thêm Lớp Học Mới Thành Công!');
            return Redirect::to('/toaddclass');  
        }
    }

    public function toeditclass($classid) {
        $this->authlogin();
        $this->classstatus();
        DB::table('codes')->where('code_id', 1)->update(['status' => 1]);
        $classes = DB::table('classes')->where('class_id', $classid)->get();
        $classrooms = DB::table('classrooms')->get();
        $subjects = DB::table('subjects')->get();
        $shifts = DB::table('shifts')->get();
        return view('editclass')->with('classes', $classes)->with('classrooms', $classrooms)->with('subjects', $subjects)->with('shifts', $shifts);
    }

    public function updateclass(Request $request, $classid) {
        $classname = $request->classname;
        $shift_id = $request->shiftid;
        $check = DB::table('classes')->where('class_name', $classname)->whereNotIn('class_id', [$classid])->first();   
        if ($check) {
            Session::put('message2', 'Tên Lớp Học Đã Tồn Tại!');
            return Redirect::back();
        } else {
            $check1 = DB::table('classes')->where('classroom_id', $request->classroomid)->whereNotIn('class_id', [$classid])->get();
            if (is_null($check1)) {
                $data = array();
                $data['class_name'] = $request->classname;
                $data['classroom_id'] = $request->classroomid;
                $data['subject_id'] = $request->subjectid;
                $data['shift_id'] = $request->shiftid;
                DB::table('classes')->where('class_id', $classid)->update($data);
                Session::put('message', 'Cập Nhật Thông Tin Lớp Học Thành Công!');
                return Redirect::to('/tolistclass');
            } else {
                foreach ($check1 as $value1) {
                    if ($shift_id == 1) {
                        if ($value1->shift_id == 1 || $value1->shift_id == 2) {
                            Session::put('message2', 'Trùng Giờ Học!');
                            return Redirect::back();
                        } else {
                            $data = array();
                            $data['class_name'] = $request->classname;
                            $data['classroom_id'] = $request->classroomid;
                            $data['subject_id'] = $request->subjectid;
                            $data['shift_id'] = $request->shiftid;
                            DB::table('classes')->where('class_id', $classid)->update($data);
                            Session::put('message', 'Cập Nhật Thông Tin Lớp Học Thành Công!');
                            return Redirect::to('/tolistclass');
                        }    
                    }

                    if ($shift_id == 2) {
                        if ($value1->shift_id == 1 || $value1->shift_id == 2 || $value1->shift_id == 3 || $value1->shift_id == 4) {
                            Session::put('message2', 'Trùng Giờ Học!');
                            return Redirect::back();
                        } else {
                            $data = array();
                            $data['class_name'] = $request->classname;
                            $data['classroom_id'] = $request->classroomid;
                            $data['subject_id'] = $request->subjectid;
                            $data['shift_id'] = $request->shiftid;
                            DB::table('classes')->where('class_id', $classid)->update($data);
                            Session::put('message', 'Cập Nhật Thông Tin Lớp Học Thành Công!');
                            return Redirect::to('/tolistclass');
                        }    
                    }

                    if ($shift_id == 3) {
                        if ($value1->shift_id == 5 || $value1->shift_id == 2 || $value1->shift_id == 3 || $value1->shift_id == 4) {
                            Session::put('message2', 'Trùng Giờ Học!');
                            return Redirect::back();
                        } else {
                            $data = array();
                            $data['class_name'] = $request->classname;
                            $data['classroom_id'] = $request->classroomid;
                            $data['subject_id'] = $request->subjectid;
                            $data['shift_id'] = $request->shiftid;
                            DB::table('classes')->where('class_id', $classid)->update($data);
                            Session::put('message', 'Cập Nhật Thông Tin Lớp Học Thành Công!');
                            return Redirect::to('/tolistclass');
                        }    
                    }

                    if ($shift_id == 4) {
                        if ($value1->shift_id == 5 || $value1->shift_id == 2 || $value1->shift_id == 3 || $value1->shift_id == 4) {
                            Session::put('message2', 'Trùng Giờ Học!');
                            return Redirect::back();
                        } else {
                            $data = array();
                            $data['class_name'] = $request->classname;
                            $data['classroom_id'] = $request->classroomid;
                            $data['subject_id'] = $request->subjectid;
                            $data['shift_id'] = $request->shiftid;
                            DB::table('classes')->where('class_id', $classid)->update($data);
                            Session::put('message', 'Cập Nhật Thông Tin Lớp Học Thành Công!');
                            return Redirect::to('/tolistclass');
                        }    
                    }

                    if ($shift_id == 5) {
                        if ($value1->shift_id == 5 || $value1->shift_id == 3 || $value1->shift_id == 4) {
                            Session::put('message2', 'Trùng Giờ Học!');
                            return Redirect::back();
                        } else {
                            $data = array();
                            $data['class_name'] = $request->classname;
                            $data['classroom_id'] = $request->classroomid;
                            $data['subject_id'] = $request->subjectid;
                            $data['shift_id'] = $request->shiftid;
                            DB::table('classes')->where('class_id', $classid)->update($data);
                            Session::put('message', 'Cập Nhật Thông Tin Lớp Học Thành Công!');
                            return Redirect::to('/tolistclass');
                        }    
                    }
                    if ($shift_id == 6) {
                        if ($value1->shift_id == 6 || $value1->shift_id == 7) {
                            Session::put('message2', 'Trùng Giờ Học!');
                            return Redirect::back();
                        } else {
                            $data = array();
                            $data['class_name'] = $request->classname;
                            $data['classroom_id'] = $request->classroomid;
                            $data['subject_id'] = $request->subjectid;
                            $data['shift_id'] = $request->shiftid;
                            DB::table('classes')->where('class_id', $classid)->update($data);
                            Session::put('message', 'Cập Nhật Thông Tin Lớp Học Thành Công!');
                            return Redirect::to('/tolistclass');
                        }    
                    }
                    if ($shift_id == 7) {
                        if ($value1->shift_id == 6 || $value1->shift_id == 7 || $value1->shift_id == 8) {
                            Session::put('message2', 'Trùng Giờ Học!');
                            return Redirect::back();
                        } else {
                            $data = array();
                            $data['class_name'] = $request->classname;
                            $data['classroom_id'] = $request->classroomid;
                            $data['subject_id'] = $request->subjectid;
                            $data['shift_id'] = $request->shiftid;
                            DB::table('classes')->where('class_id', $classid)->update($data);
                            Session::put('message', 'Cập Nhật Thông Tin Lớp Học Thành Công!');
                            return Redirect::to('/tolistclass');
                        }    
                    }

                    if ($shift_id == 8) {
                        if ($value1->shift_id == 7 || $value1->shift_id == 8) {
                            Session::put('message2', 'Trùng Giờ Học!');
                            return Redirect::back();
                        } else {
                            $data = array();
                            $data['class_name'] = $request->classname;
                            $data['classroom_id'] = $request->classroomid;
                            $data['subject_id'] = $request->subjectid;
                            $data['shift_id'] = $request->shiftid;
                            DB::table('classes')->where('class_id', $classid)->update($data);
                            Session::put('message', 'Cập Nhật Thông Tin Lớp Học Thành Công!');
                            return Redirect::to('/tolistclass');
                        }    
                    }

                    if ($shift_id == 9) {
                        if ($value1->shift_id == 9) {
                            Session::put('message2', 'Trùng Giờ Học!');
                            return Redirect::back();
                        } else {
                            $data = array();
                            $data['class_name'] = $request->classname;
                            $data['classroom_id'] = $request->classroomid;
                            $data['subject_id'] = $request->subjectid;
                            $data['shift_id'] = $request->shiftid;
                            DB::table('classes')->where('class_id', $classid)->update($data);
                            Session::put('message', 'Cập Nhật Thông Tin Lớp Học Thành Công!');
                            return Redirect::to('/tolistclass');
                        }                                   
                    } 
                }
            }

            $data = array();
            $data['class_name'] = $request->classname;
            $data['classroom_id'] = $request->classroomid;
            $data['subject_id'] = $request->subjectid;
            $data['shift_id'] = $request->shiftid;
            DB::table('classes')->where('class_id', $classid)->update($data);
            Session::put('message', 'Cập Nhật Thông Tin Lớp Học Thành Công!');
            return Redirect::to('/tolistclass');
        }
    }

    public function deleteclass($classid) {
        DB::table('classdetails')->where('class_id', $classid)->delete();
        DB::table('classes')->where('class_id', $classid)->delete();
        Session::put('message', 'Xóa Phòng Học Thành Công!');
        return Redirect::to('/tolistclass');
    }

    public function toaddclassdetail($classid) {
        $this->authlogin();
        $this->classstatus();
        DB::table('codes')->where('code_id', 1)->update(['status' => 1]);
        $classdetail = DB::table('classdetails')->where('class_id', $classid)->get();
        $data = [];
        foreach ($classdetail as $key) {
            $data = Arr::prepend($data, $key->student_id);
        }
        $classes = DB::table('classes')->where('class_id', $classid)->first();
        $students = DB::table('students')->whereNotIn('student_id', $data)->get();
        return view('addclassdetail')->with('classes', $classes)->with('students', $students);
    }

    public function addclassdetail(Request $request, $classid) {
        $this->authlogin();
        $studentid = $request->input('studentid');
        if ($studentid == "") {
            return Redirect::to('/tolistclass');
        }
        $data = array();
        $data['class_id'] = $classid;
        foreach ($studentid as $key) {
            $data['student_id'] = $key;
            DB::table('classdetails')->insert($data);
        }
        Session::put('message', 'Thêm Sinh Viên Vào Lớp Học Thành Công!');
        return Redirect::to('/tolistclass');
    }

    public function tolistonline() {
        $this->authlogin();
        $this->classstatus();
        DB::table('codes')->where('code_id', 1)->update(['status' => 1]);
        $classes = DB::table('classes')
        ->join('classrooms', 'classrooms.classroom_id', '=', 'classes.classroom_id')
        ->join('subjects', 'subjects.subject_id', '=', 'classes.subject_id')
        ->join('shifts', 'shifts.shift_id', '=', 'classes.shift_id')
        ->where('classes.class_status', 1)
        ->select('classes.*', 'classrooms.*', 'subjects.*', 'shifts.*')
        ->paginate(10);
        return view('listonline')->with(compact('classes'));
    }

    public function tolistclassdetail($classid) {
        $this->authlogin();
        $this->classstatus();
        DB::table('codes')->where('code_id', 1)->update(['status' => 1]);
        $classes = DB::table('classes')->where('class_id', $classid)->first();
        $classdetails = DB::table('classdetails')
        ->join('students', 'students.student_id', '=', 'classdetails.student_id')
        ->select('classdetails.*', 'students.student_name', 'students.rfid')
        ->where('class_id', $classid)->paginate(10);
        return view('listclassdetail')->with(compact('classdetails'))->with('classes', $classes);
    }

    public function deleteclassdetail(Request $request, $classid) {
        $studentid = $request->input('studentid');
        if ($studentid == "") {
            return Redirect::to('/tolistclass');
        }
        foreach ($studentid as $key) {
            DB::table('classdetails')->where('class_id', $classid)->where('student_id', $key)->delete();
        }
        Session::put('message', 'Xóa Sinh Viên Khỏi Lớp Học Thành Công!');
        return Redirect::to('/tolistclass');
    }

    public function printlog() {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $day = date('Y-m-d');
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->printlogconvert());
        return $pdf->stream("$day.pdf");
    }

    // .styled-table tbody tr:nth-of-type(even) {
    //     background-color: #f3f3f3;
    // }

    public function printlogconvert() {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        // $check = DB::table('checkins')->get();
        // if (is_null($check)) {
        //     Session::put('message2', 'Chưa Có Thông Tin Điểm Danh!');
        //     return Redirect::to('/tolistclass');
        // }
        $test1 = DB::table('checkins')->orderBy('created_at', 'asc')->first();
        $test2 = DB::table('checkins')->orderBy('created_at', 'desc')->first();
        $minday = Carbon::createFromFormat('Y-m-d H:i:s', $test1->created_at)->format('Y-m-d');
        $maxday = Carbon::createFromFormat('Y-m-d H:i:s', $test2->created_at)->format('Y-m-d');
        $day = $minday;
        $data = '';
        $data.= '
        <!DOCTYPE html>
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <style>
            body {
                font-family: DejaVu Sans;
            }

            .styled-table {
                border-collapse: collapse;
                margin: 25px 0;
                font-size: 0.9em;
                font-family: DejaVu Sans;
                min-width: 400px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            }

            .styled-table thead tr {
                background-color: #009879;
                color: #ffffff;
                text-align: left;
            }

            .styled-table th,
            .styled-table td {
                padding: 12px 15px;
            }

            styled-table tbody tr {
                border-bottom: 1px solid #dddddd;
            }
            
            .styled-table tbody tr:last-of-type {
                border-bottom: 2px solid #009879;
            }

            .styled-table tbody tr.active-row {
                font-weight: bold;
                color: #009879;
            }

            tbody tr td {
                border: 1px solid #000;
            }

            thead tr th {
                border: 1px solid #000;
            }
            
        </style>

        </head>
        <body>
            <div style="display: flex; justify-content: center; align-items: center;">     
            <table class="styled-table" style="margin: auto;">
                <thead>
                    <tr>
                        <th>Tên Lớp</th>
                        <th>Tên Sinh Viên</th>
                        <th>RFID</th>
                        <th>Thời Gian</th>
                    </tr>
                </thead>
                <tbody>';
                while ( $day <= $maxday ) {
                $data .= '
                <tr>
                    <td colspan="4">
                        <h4 style="text-align:center; color: rgb(64, 38, 38);">Danh Sách Sinh Viên Điểm Danh Ngày '.$day.'</h4>
                    </td>
                </tr>
                ';
                $classes = DB::table('classes')
                ->join('classrooms', 'classrooms.classroom_id', '=', 'classes.classroom_id')
                ->join('subjects', 'subjects.subject_id', '=', 'classes.subject_id')
                ->orderBy('class_id', 'asc')
                ->select('classes.*', 'subjects.subject_name', 'classrooms.classroom_name')
                ->get();
                foreach($classes as $value) {
                    $from = Carbon::createFromFormat('Y-m-d', $day)->format('Y-m-d 0:00:00');
                    $to = Carbon::createFromFormat('Y-m-d', $day)->format('Y-m-d 23:59:00');
                    $checkins = DB::table('checkins')
                    ->join('classes', 'classes.class_id', '=', 'checkins.class_id')
                    ->whereBetween('checkins.created_at', [$from, $to])
                    ->where('checkins.class_id', $value->class_id)
                    ->select('checkins.*', 'classes.class_name')
                    ->get();
                    $data.= '
                        <tr>
                            <td colspan="4">
                                <h4 style="text-align:center; color: rgb(72, 69, 74);">Phòng: '.$value->classroom_name.', Môn: '.$value->subject_name.', Lớp: '.$value->class_name.'</h4>
                            </td>
                        </tr>
                    ';
                    foreach($checkins as $key => $ci) {
                        $data.= '
                        <tr>
                            <td>'.$ci->class_name.'</td>
                            <td>'.$ci->checkin_name.'</td>
                            <td>'.$ci->checkin_rfid.'</td>
                            <td>'.$ci->created_at.'</td>
                        </tr>
                        ';
                    }
                }
                $day++;
            }
            $data.= '
                </tbody>
            </table>
        </div>
        </body>
        </html>
        ';
        return $data;
    }

    public function deletecheckin() {
        DB::table('checkins')->delete();
        Session::put('message', 'Xóa Thông Tin Điểm Danh Thành Công!');
        return Redirect::to('/tolistclass');
    }
}

