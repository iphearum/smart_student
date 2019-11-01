<?php
namespace App\Http\Controllers\API;

use App\Major;
use App\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function all(){
        $subject = Subject::all();
        return $subject;
    }
    public function index($id)
    {
        $subject = Subject::findOrFail($id);
        return $subject;
    }
    public function subjectToMajor($m_id){
        $subject = Subject::findOrFial($m_id);
        $major = Major::findOrFial($subject->majors_id);
        return $major;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $univer = $request->isMethod('put') ? Subject::findOrFail($request->id) : new Subject;

        $univer->id = $request->input('id');
        $univer->name_university = $request->input('name_university');
        $univer->description = $request->input('description');
        $univer->urlimage_logo = $request->input('urlimage_logo');
        $univer->urlimage_cover = $request->input('urlimage_cover');
        $univer->type = $request->input('type');
        if($univer->save()) {
            return new Subject($univer);
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
        $univer = Subject::findOrFail($id);
        $univer->delete();
    }
}
