<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class topicsController extends Controller
{
    public function display(){
       $topics = \App\topic::all();
       return view('index.topics')->with( 'topics',$topics);
      // return view('index.topics',['topics'=>topics]);
      //  return view('index.topics',compact('topics'));
   //   return view('index.topics' );
    }
    public function create(){
        return view('admin.create' );

    }
    public function update($id){
        $topic = \DB::table('topics')->find($id);
        return view('admin.update', ['topic' => $topic]);
       // return view('admin.update' )->with( 'topics',$topics);

    }
    
    public function edit(){
        $topics = \App\topic::all();
       return view('admin.edit')->with('topics',$topics);

    }
    public function updated(Request $request,$id){
        $img = $request->input('img');
        $title = $request->input('title');
        $content = $request->input('content');
//$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);
//DB::table('student')->update($data);
// DB::table('student')->whereIn('id', $id)->update($request->all());
    \DB::update('update topics set title = ?,content=?,img_url=? where id = ?',[$title,$content,$img,$id]);


        return  redirect()->route('index.topics')
        ->with('updated','Post edited , Title: '.$request->input('title'));
    }
       public function insert(Request $request){

        $img = $request->input('img');
        $title = $request->input('title');
        $content = $request->input('content');
        $data=array('title'=>$title,"content"=>$content,"img_url"=>$img);
        \DB::table('topics')->insert($data);

        return  redirect()->route('index.topics')
        ->with('created','Post created ,new Title: '.$request->input('title'));

    }
    public function showtopic($id)
    {
        $topic = \DB::table('topics')->find($id);
        return view('index.topic', ['topic' => $topic]);
    }
    public function delete(){
        $topics = \App\topic::all();
       return view('admin.delete')->with('topics',$topics);

    }
    public function deleted($id){
        $topic = \DB::table('topics')->find($id);
        $titre=$topic->title;
        \DB::delete('delete from topics where id = ?',[$id]);
   return  redirect()->route('index.topics')
        ->with('deleted','Post de , Title: '.$titre);
    }
}
