<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // foreach (Student::all() as $student) {
        //     echo $student->name;
        // }
        $data = Student::all();
        foreach ($data as $key => $value) {
            $rankText = 1;
            if ($value['id'] > 2) {
                $rankText = 2;
            }
            $data[$key]['rank'] = $rankText;
        }
        return view("student.index", ['data123' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd("yyy");
        return view("student.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd("dddd");
        // $data=$request->all();
        // $data = $request->except('_token');
        // dd($data);
        $student = new Student;

        $student->name = $request->name;
        $student->mobile = $request->mobile;

        $student->save();
        return redirect()->route("students.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        // dd('hello StudentController edit');
        // dd($id);

        // 兩個都可以
        // $data = Student::find($id);
        // $data = Student::where('欄位名稱', 變數名稱)->first();
        $data = Student::where('id', $id)->first();
        dd($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
