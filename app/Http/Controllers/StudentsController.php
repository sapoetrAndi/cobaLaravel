<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students')); //compact berfungsi untuk memanggil data (menggantikan ['students'=>$students])
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("students.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nrp' => 'required|size:9',
            'email' => 'required|email:rfc,dns',
            'jurusan' => 'required'
        ]);
        //data dikirimm dari form yang ada di halaman create(method create) dan di tangkap melalui parameter $request
        /* 
        # cara 1 menyimpan data di laravel
        // instansiasi Object student sebelum melakukan simpan data
        $student = new Student();

        $student->nama = $request->nama;
        $student->nrp = $request->nrp;
        $student->email = $request->email;
        $student->jurusan = $request->jurusan;

        $student->save();
         */


        /* 
        # cara 2 menyimpan data di laravel . wajib menggunakan mass assignment
        Student::created([
            'nama' => $request->nama,
            'nrp' => $request->nrp,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ]);
 */

        # cara validasi for di laravel
        /* $validatedData = $request->validate([
            'nama' => ['required', 'unique:posts', 'max:255'],
            'nrp' => ['required'],
        ]); */


        # cara 3 menyimpan data di laravel . wajib menggunakan mass assignment
        Student::create($request->all());

        return redirect('/students')->with('status', 'Data berhasil ditambahkan!'); //method with berfungsi untuk memberikan pesan/alert
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     * parameter pertama menangkap data baru, parameter kedua menyimpan data lama
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        // untuk melakukan validasi form
        $request->validate([
            'nama' => 'required',
            'nrp' => 'required|size:9',
            'email' => 'required|email:rfc,dns',
            'jurusan' => 'required'
        ]);



        //update menggunakan mass update
        Student::where('id', $student->id)
            ->update([
                'nama' => $request->nama,
                'nrp' => $request->nrp,
                'email' => $request->email,
                'jurusan' => $request->jurusan
            ]);
        return redirect('/students')->with('status', 'Data berhasil diedit!'); //method with berfungsi untuk memberikan pesan/alert

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data berhasil dihapus!'); //method with berfungsi untuk memberikan pesan/alert
    }
}
