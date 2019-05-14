<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Http\Controllers\Requset;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index()
    {
        return view('job');

    }

    public function store(Request $request)
    {

        $post = new Job();
        $post->name = $request->input('name');
        $post->age = $request->input('age');
        $post->sex = $request->input('sex');
        $post->email = $request->input('email');
        $post->phone = $request->input('phone');
        $post->DG = $request->input('DG');
        $post->about = $request->input('about');
        $post->save();

      return redirect('job')->with('success' , 'تم استلام طلبكم للتوظيف وسوف يتم التواصل معكم بحال تحقق فرصة وظيفية.');

    }



}
