<?php

namespace App\Http\Controllers;

use App\Major;
use App\University;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function all()
    {
        $univer = University::all();
        return $univer;
    }

    public function index($id)
    {
        $univer = University::findOrFail($id);
        return $univer;
    }
    
    public function univerToMajor($m_id)
    {
        $major = Major::findOrFail($m_id);
        return $major;
    }

    public function syncToType($input){
        if ($input == "private"){
            $univer = University::where('type','private');
            $univer = "private";
            return $univer;
        }elseif($input == "public"){
            $univer = University::where('type','public');
            $univer = "public";
            return $univer;
        }
        else{
            return University::all();
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
        //
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
