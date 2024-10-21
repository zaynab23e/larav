<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
// private static function data(){
//   return[
// ['id'=>'1','title'=>'can be','content'=>'we are can be good'],
// ['id'=>'2','title'=>'me','content'=>'no one can love me like me'],
// ['id'=>'3','title'=>'stop','content'=>'if you stop mean your end ']
// ];
// }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return view('posts.pindex',[
        'allpost' => post::all()
      ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $set= new post();
        $set->title=strip_tags($request->input('title'));
        $set->post=strip_tags($request->input('post'));
        $set->save();
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
     public function show(string $id)
     {
     $id= post::findOrFail($id);
         return view('posts.show',[
           'getid'=>$id
         ]);
     }

    /**
     * Show the form for editing the specified resource.
     */
     public function edit(string $id)
     {
         return view('posts.edit',[
           'idet'=> post::findOrFail($id)
         ]);
     }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $up=post::findOrFail($id);
          $up->title=strip_tags($request->input('title'));
          $up->post=strip_tags($request->input('post'));
          $up->save();
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
     public function destroy(string $id)
     {
         $delete=post::findOrFail($id);
         $delete->delete();
      return redirect()->route('post.index');
     }
 }
