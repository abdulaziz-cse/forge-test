<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

use App\Http\Controllers\Requset;
use Illuminate\Support\Facades\DB;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::orderBy('created_at','desc')->paginate(5);

        return view('cliend');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliend');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $post = new Post();

        $post->patrs = $request->input('patrs');
        $post->time = $request->input('time');
        $post->name = $request->input('name');
        $post->number = $request->input('number');
        $post->save();

        return redirect('/booking')->with('success' , 'تم إستلام طلبكم وجاري التواصل معكم خلال ٢٤ ساعة كحد أقصى ');


    }

    public function accept($postId){
        $post = Post::findOrFail($postId);
            $post->update(['approved' => 1]);
            session()->flash('accept', '  تم قبول العرض بنجاح !');
            return redirect()->back();

    }

    public function waiting($postId){
        $post = Post::findOrFail($postId);
            $post->update(['approved' => 2]);
            session()->flash('waiting', '  تم قبول العرض بنجاح !');
            return redirect()->back();

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
    public function old()
    {
        $post = Post::orderBy('created_at','desc')->paginate(5);
        return view('oldhome',compact('post'));

    }

    public function wait()
    {
        $post = Post::orderBy('created_at','desc')->paginate(5);
        return view('wait',compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        $post = Post::find($id);
        $post->delete();

    }
}
