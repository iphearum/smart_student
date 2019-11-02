<?php

namespace App\Http\Controllers\API;
use App\Info;
use App\University;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $info = Info::all();
        foreach($info as $do_info){
            if ($id == $do_info->university_id){
                return $do_info;
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $info = $request->isMethod('put') ? Info::findOrFail($request->id) : new Info;
        $info->id = $request->input('id');
        $info->websit = $request->input('websit');
        $info->phone_number = $request->input('phone_number');
        $info->university_email = $request->input('university_email');
        $info->street = $request->input('street');
        $info->direction = $request->input('direction');
        $info->city = $request->input('city');
        $info->university_id = $request->input('university_id');
        if($info->save()) {
            return new Info($info);
        }
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
    }
}
