<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Control extends Controller
{
    public function viewFunction(){
        $var = DB::table('tbcrud')->get();
        return view('index',compact('var'));
    }
    public function addFunction(){
        return view('add');
    }
    public function saveFunction(Request $request){
        DB::table('tbcrud')->insert([
            'Full_Name'=>$request->fname,
            'email'=>$request->email,
            'birth'=>$request->birth,
            'position'=>$request->position,
            'msg'=>$request->why
        ]);
        return redirect()->route('view')->with('addmsg', 'Added Successfully');
    }
    public function editFunction($id){
        $row = DB::table('tbcrud')->where('id', $id)->first();
        return view('edit',compact('row'));
    }
     public function updateFunction(Request $request){
        DB::table('tbcrud')->where('id',$request->id)->update([
            'Full_Name'=>$request->fname,
            'email'=>$request->email,
            'birth'=>$request->birth,
            'position'=>$request->position,
            'msg'=>$request->why
        ]);
        return redirect()->route('view')->with('updatemsg', 'Update was Successfully');
    }
    public function deleteFunction($id){
        DB::table('tbcrud')->where('id',$id)->delete();
        return redirect()->route('view')->with('deletemsg', 'Delete was Successfully');
    }
   
}
