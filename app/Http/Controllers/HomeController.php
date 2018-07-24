<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Attendance;
use App\AssignedTask;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // setlocale(LC_TIME, 'en');
        // $today = Carbon::now('Asia/Dhaka');

        $user = new User;

        $attnTasks = $user->findOrfail(Auth::id())->assigned_task()->where('active', 0)->orderBy('schedule_date')->get();
        
        //dd($attnTasks);

        //return view ('home', compact('attendanceList'));

        return view('home',compact(['attnTasks']));
    }

    public function store(Request $request){

        $this->validate($request, [
                'attendee' => 'required',
                'location' => 'required',
                'batch_id' => 'required'
            ]);


        //set task as completed 
        $setTask  = AssignedTask::find($request->task_id);
        $setTask->active = 1;
        $setTask->save();

        //insert attendance
        Attendance::create([
                'user_id' => Auth::id(),
                'batch_id'=> $request->batch_id,
                'attendee'=> $request->attendee,
                'location'=> $request->location,
                'latlong' => $request->latlong,

            ]);

        return redirect('/home')->with('status', 'Your Attendance Recorded Successfully !');
        // $attn = new Attendance;

        // $attn->attendee = $request->attendee;
        // $attn->user_id = Auth::id();
        // $attn->batch_id = 1;
        // $attn->save();
        
    }

    public function profile()
    {
        $user = User::find(auth()->id());
        return view('profile', compact('user'));
    }

    public function create()
    {
        $user = User::find(auth()->id());

        return view('create', compact('user'));
    }

    public function profileStore(Request $request, $id)
    {

        $this->validate($request, [
                'name' => 'required',
                'dob' => 'required'
            ]);

        $profile = User::find($id);
        $profile->name = $request->name;
        $profile->dob = $request->dob;
        $profile->phone = $request->phone;
        $profile->address = $request->address;
        $profile->save();

        return redirect('/profile')->with('status', 'Your Profile updated Successfully !');

    }

    //showing previous assigned tasks
    public function showPreTask()
    {
        $user = new User;

        $preTask = $user->findOrfail(Auth::id())->assigned_task()->where('active', 1)->orderBy('schedule_date')->get();


        return view('show_user_task',compact(['preTask']));
    }

    public function showAttendance()
    {
        $attn = new User;

        $userAttn = $attn->findOrfail(Auth::id())->attendance()->orderBy('id', 'desc')->get();


        return view('user_attendance',compact(['userAttn']));
    }

    public function showTeachers()
    {
        $teachers = User::all();

        return view('admin.teacher_list',compact('teachers'));
    }


}
