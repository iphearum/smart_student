<?php

namespace App\Http\Controllers\API;

use App\Major;
use App\University;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\University as UniversityResource;
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
        return UniversityResource::collection($univer);
    }
    
    public function index($id)
    {
        $univer = University::findOrFail($id);
        // return $this->univerToMajor($id);
        return $univer;
    }
    
    public function univerToMajor($m_id)
    {
        $univer = University::findOrFail($m_id);
        return $univer->majors;
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $univer = $request->isMethod('put') ? University::findOrFail($request->id) : new University;

        $univer->id = $request->input('id');
        $univer->name_university = $request->input('name_university');
        $univer->description = $request->input('description');
        $univer->urlimage_logo = $request->input('urlimage_logo');
        $univer->urlimage_cover = $request->input('urlimage_cover');
        $univer->type = $request->input('type');
        if($univer->save()) {
            return new UniversityResource($univer);
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
        $univer = University::findOrFail($id);
        $univer->delete();
    }
}
