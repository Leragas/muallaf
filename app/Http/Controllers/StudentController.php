<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
           public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //dd('dah sampai controller student');
        $semuaStudent = Student::all();
        
        //dd($semuaStudent);
        
        
          return view('student.index',compact('semuaStudent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataStudentBaru = request()->validate([
              'name' => '',
              'phone' => '',
              'email' => '',
              'national_id' => '',
        ]);
        
        //dd($dataStudentBaru);
        
        $baru = Student::create($dataStudentBaru);
            \App\Models\Activity::create([
                'type' => 'Create',
                'username' => Auth::user()->username,
                'details' => 'Created Student :'.$baru->name,  
            ]);
        //dd($baru);
        
        return redirect('/Student');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }
    
    public function report(Student $student)
    {
        //dd($student);
        return view('student.report',compact('student')); 
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student) {return view('student.edit',compact('student')); }
     public function G1(Student $student) {return view('student.G1',compact('student')); }
      public function G2(Student $student) {return view('student.G2',compact('student')); }
       public function G3(Student $student) {return view('student.G3',compact('student')); }
        public function G4(Student $student) {return view('student.G4',compact('student')); }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
          $dataStudentBaru = request()->validate([
              'name' => '',
              'phone' => '',
              'email' => '',
              'national_id' => '',
              
               'ILMU_AKIDAH' => '',
               'ILMU_FEQAH' => '',
               'ILMU_AKHLAK' => '',
               'ILMU_TAFSIR' => '',
               'ILMU_HADIS' => '',
               'ILMU_SIRAH' => '',
               'ILMU_AL_QURAN' => '',
              
              
               'KEPIMPINAN_PENGURUSAN' => '',
               'KEPIMPINAN_SUKERELAWAN' => '',
               'KEPIMPINAN_JATIDIRI' => '',
              
               'SAHSIAH_KEBERSIHAN' => '',
               'SAHSIAH_BERSOSIAL' => '',
               'SAHSIAH_BERMINDA_POSITIVE' => '',
              
              'KEMAHIRAN_KEBERSIHAN' => '',
              'KEMAHIRAN_BERSOSIAL' => '',
              'KEMAHIRAN_BERMINDA_POSITIVE' => '',
              
              
              
              'd1' => '',
              'd2' => '',
              'd3' => '',
              'd4' => '',
              'd5' => '',
              'd6' => '',
              'd7' => '',
              'd8' => '',
              'd9' => '',
              'd10' => '',
              
              
   
              
        ]);
         //dd($dataStudentBaru);
         
         
          $student->update($dataStudentBaru);
          
          //dd($student);
            \App\Models\Activity::create([
                'type' => 'Update',
                'username' =>  Auth::user()->username,
                'details' => 'Updated Student :'.$student->name,  
            ]);

          
          
             return redirect('/Student');
          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
    
    
     public function MarksAkhlak_1(Student $student) {
         
         $marks = $student->ILMU_AKIDAH_1;
         
       
       
          $data = (object)([
            "d1" =>  strtok($marks,','),
            "d2" =>  strtok(','),
            "d3" =>  strtok(','),
            "d4" =>  strtok(','),
            "d5" =>  strtok(','),
            "d6" =>  strtok(','),
            "d7" =>  strtok(','),
            "d8" =>  strtok(','),
            "d9" =>  strtok(','),
            "d10" =>  strtok(','),
            "d11" =>  strtok(',')]);
  
         //dd($data);
         
         return view('student.MarksAkhlak_1',compact('student','data')); }
     
     
     public function updateMarksAkhlak_1(Request $request, Student $student)
    {
         
         //dd($student);
          $d = request()->validate([

              'd1' => '',
              'd2' => '',
              'd3' => '',
              'd4' => '',
              'd5' => '',
              'd6' => '',
              'd7' => '',
              'd8' => '',
              'd9' => '',    
        ]);
          
         // dd($d);
          

          $appended = $d['d1'].','
                  .$d['d2'].','
                  .$d['d3'].','
                  .$d['d4'].','
                  .$d['d5'].','
                  .$d['d6'].','
                  .$d['d7'].','
                  .$d['d8'].','
                  .$d['d9'].',';
           
      
          
         $dataStudentBaru = $d;
         //dd($dataStudentBaru,$appended);
         
          $data['ILMU_AKIDAH_1'] = $appended;
          $student->update($data);
          
          //dd($student);
            \App\Models\Activity::create([
                'type' => 'Update',
                'username' =>  Auth::user()->username,
                'details' => 'Updated Student :'.$student->name,  
            ]);

          
          
             return redirect('/Student');
          
    }
}
