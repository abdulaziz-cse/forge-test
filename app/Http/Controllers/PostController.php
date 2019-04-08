<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Controllers\Requset;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
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
        return view('cliend');

    }

    public function store(Request $request)
    {

        $post = new Post();
        $post->patrs = $request->input('patrs');
        $post->time = $request->input('time');
        $post->name = $request->input('name');
        $post->number = $request->input('number');
        $post->save();

      return redirect('cliend')->with('success' , ' تم استلام طلبكم سوف يتم التواصل معكم خلال ٢٤ ساعة كحد أقصى');

    }



}
