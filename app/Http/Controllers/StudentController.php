<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditStudentFormRequest;
use App\Http\Requests\StudentFormRequest;
use App\Models\stdClass;
use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware("Auth");
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$students = Student::paginate(10);
        $students = student::all();
        return view("list", compact(["students"]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = stdClass::all();
        return view("add", compact(["classes"]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentFormRequest $request)
    {
        $std = new student();
        $std->fill($request->all());
        $std->save();
        return redirect()->route("list.index");
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\student $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\student $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student, $id)
    {
        $std = $student::findOrFail($id);
        $cls = stdClass::all();
        return view("edit", compact(['std', 'cls']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\student $student
     * @return \Illuminate\Http\Response
     */
    public function update(EditStudentFormRequest $request, student $student)
    {
        $std = $student::findOrFail($request->id);
        $std->fill($request->all());
        $std->save();
        return redirect()->route("list.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\student $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student, $id)
    {
        $std = $student::findOrFail($id);
        $std->delete();
        return redirect()->route("list.index");
    }
}
