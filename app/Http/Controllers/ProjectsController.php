<?php

namespace App\Http\Controllers;

use App\Models\projects;
use Illuminate\Http\Request;
use DB;
use Excel;

class ProjectsController extends Controller
{
// ONLY LOGGED IN USERS CAN ACCESS THIS CONTROLLER IF NOT THE WILL BE FORCED TO LOGGIN IN FIRST 
    public function __construct(){$this->middleware('auth');}






    
//testing


function store1jap(Request $request)
{
 $this->validate($request, [
  'select_file'  => 'required|mimes:xls,xlsx'
 ]);

 $path = $request->file('select_file')->getRealPath();

 $data = Excel::load($path)->get();

 if($data->count() > 0)
 {
  foreach($data->toArray() as $key => $value)
  {
   foreach($value as $row)
   {
    $insert_data[] = array(
     'name'  => $row['name'],
     'email'   => $row['email']
    );
   }
  }

  if(!empty($insert_data))
  {
   DB::table('test')->insert($insert_data);
  }
 }
 return back()->with('success', 'Excel Data Imported successfully.');
}
//testing



































    public function index1()
    {
      // GETTING THE LOGGED IN USER INFORMATION 
        $user = auth()->user();
        $profile = $user->profile();
        //dd($user);
        //show the HTML WEBISTE AND SEND THE VARIABLES PROFILE AND USER
        return view('excel.import1', compact('profile','user'));
    }
   
    public function store1(Request $request)
    {
        // Upload and save to server folder 
       $request->validate(['file' => '',]);      
       $fileName = time().'.'.$request->file->extension(); 
       $path = $request->file->move(public_path('uploads'),$fileName);
       // load the XLSX TO READ $path was the new uploaded XLSX
       \Maatwebsite\Excel\Facades\Excel::import(new \App\Imports\UsersImport1() , $path,);
       Excel::load('file.xls', function($reader) {

          })->get();

       
       //AFTER READING SEND THE USER BACK TO SOMEWHERE 
       return redirect('home');
    }


    public function index2()
    {
      // GETTING THE LOGGED IN USER INFORMATION 
        $user = auth()->user();
        $profile = $user->profile();
        //dd($user);
        //show the HTML WEBISTE AND SEND THE VARIABLES PROFILE AND USER
        return view('excel.import2', compact('profile','user'));
    }

    public function store2(Request $request)
    {
        // Upload and save to server folder 
       $request->validate(['file' => '',]);      
       $fileName = time().'.'.$request->file->extension(); 
       $path = $request->file->move(public_path('uploads'),$fileName);
       // load the XLSX TO READ $path was the new uploaded XLSX
       \Maatwebsite\Excel\Facades\Excel::import(new \App\Imports\UsersImport2() , $path);
       
       //AFTER READING SEND THE USER BACK TO SOMEWHERE 
       return redirect('home');
    }



    public function index3()
    {
      // GETTING THE LOGGED IN USER INFORMATION 
        $user = auth()->user();
        $profile = $user->profile();
        //dd($user);
        //show the HTML WEBISTE AND SEND THE VARIABLES PROFILE AND USER
        return view('excel.import3', compact('profile','user'));
    }

    public function store3(Request $request)
    {
        // Upload and save to server folder 
       $request->validate(['file' => '',]);      
       $fileName = time().'.'.$request->file->extension(); 
       $path = $request->file->move(public_path('uploads'),$fileName);
       // load the XLSX TO READ $path was the new uploaded XLSX
       \Maatwebsite\Excel\Facades\Excel::import(new \App\Imports\UsersImport3() , $path);
       
       //AFTER READING SEND THE USER BACK TO SOMEWHERE 
       return redirect('home');
    }



    public function index4()
    {
      // GETTING THE LOGGED IN USER INFORMATION 
        $user = auth()->user();
        $profile = $user->profile();
        //dd($user);
        //show the HTML WEBISTE AND SEND THE VARIABLES PROFILE AND USER
        return view('excel.import4', compact('profile','user'));
    }

    public function store4(Request $request)
    {
        // Upload and save to server folder 
       $request->validate(['file' => '',]);      
       $fileName = time().'.'.$request->file->extension(); 
       $path = $request->file->move(public_path('uploads'),$fileName);
       // load the XLSX TO READ $path was the new uploaded XLSX
       \Maatwebsite\Excel\Facades\Excel::import(new \App\Imports\UsersImport4() , $path);
       
       //AFTER READING SEND THE USER BACK TO SOMEWHERE 
       return redirect('home');
    }
}
    