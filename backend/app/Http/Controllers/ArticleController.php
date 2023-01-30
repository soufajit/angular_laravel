<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DB::table('articles')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        // echo "11"; exit;
        return DB::table('articles')->insert($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return DB::table('articles')->find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function updateart(Request $request)
    {
        // echo "ffff"; exit;
        $id=$request->id;
        $title = $request->title;
        $body = $request->body;
        $author = $request->author;
       if (DB::table('articles')->where('id',$id)->exists()){
        DB::table('articles')->where('id',$id)
            ->update(['title' => $title, 'body' => $body , 'author' => $author]);

        return response()->json([
            "message"=> "record Update Successfully"
        ],200);
       }else{
        return response()->json([
            "message"=> "Article Not Found"
        ],404);
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        // echo "hiiswadwd";exit;
        $id=$request->id;
        if ( DB::table('articles')->where('id',$id)->exists()){
        DB::table('articles')->where('id',$id)->delete();
        return response()->json([
            "message"=> "Record Deleted"
        ],202);
        }else{
            return response()->json([
                "message"=> "Article Not Deleted"
            ],404);
        }
        // echo $id; exit;
    }
    
}