<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Type_Appointment;
use App\Types_Worker;
class HomeController extends Controller
{
    private $employees;
    private $employee;
    private $appointment;
    private $name_id;
    private $day;
    private $time;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Type_Appointment::all();
        return view('welcome', compact('appointments'));
    }

    public function Employee(Request $request){
        $appointment = $request->input('HiddenValue');
        $types_worker = Types_Worker::where('types_appointment_id', 'LIKE', $appointment );

      $employees = Employee::where('id', 'LIKE', $types_worker->employee_id);

        return view('Employee', compact('employees'));
    }


    public function Day(Request $request)
    {
        $name_id = $request->input('HiddenValue');
        $employee = Employee::findOrFail($name_id);
        $schedules = $employee->schedule;


        return view('Day', compact('schedules'));
    }

    public function Time(Request $request)
    {
        $day =  $request->input('HiddenValue');
        dd($day);
        return view('Time', compact('schedules'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {

    }
}
