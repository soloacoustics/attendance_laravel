<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendance = Attendance::all();
        return view('attendance.index', ['attendance' => $attendance]);
    }

    public function create()
    {
        return view('attendance.create');
    }

    public function store(Request $request)
    {
        $attendance = new Attendance;
        $attendance->date = $request->date;
        $attendance->work_from = $request->work_from;
        $attendance->work_to = $request->work_to;
        $attendance->break_from = $request->break_from;
        $attendance->break_to = $request->break_to;
        $attendance->description = $request->description;
        $attendance->save();
        return redirect('/attendance');
    }

    public function edit($id)
    {
        $attendance = Attendance::find($id);
        return view('attendance.edit', ['attendance' => $attendance]);
    }

    public function update(Request $request, $id)
    {
        $attendance = Attendance::find($id);
        $attendance->work_from = $request->work_from;
        $attendance->work_to = $request->work_to;
        $attendance->break_from = $request->break_from;
        $attendance->break_to = $request->break_to;
        $attendance->description = $request->description;
        $attendance->save();
        return redirect("/attendance");
    }
}
