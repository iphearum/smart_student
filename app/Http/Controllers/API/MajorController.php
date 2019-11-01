<?php

namespace App\Http\Controllers\API;

use App\Major;
use App\University;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all(){
        $major = Major::all();
        return $major;
    }

    public function index($id)
    {
        $major = Major::findOrFail($id);
        return $major;
    }

    public function majorToSubject($m_id){
        $major = Major::findOrFail($m_id);
        return $major->subjects;
    }

    public function majorToUniversity($u_id){
        $major = Major::findOrFail($u_id);
        $univer = University::findOrFail($major->university_id);
        return $univer;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $univer = $request->isMethod('put') ? Major::findOrFail($request->id) : new Major;
        $univer->id = $request->input('id');
        $univer->name_major = $request->input('name_major');
        $univer->description = $request->input('description');
        $univer->urlimage_major = $request->input('urlimage_major');
        $univer->type_major = $request->input('type_major');
        $univer->university_id = $request->input('university_id');
        if($univer->save()) {
            return new Major($univer);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $univer = Major::findOrFail($id);
        $univer->delete();
    }
}
