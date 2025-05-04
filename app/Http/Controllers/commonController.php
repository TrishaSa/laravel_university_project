<?php

namespace App\Http\Controllers;

use App\Models\BasicInfo;
use App\Models\district;
use App\Models\EducationInfo;
use App\Models\Thana;
use Illuminate\Http\Request;

class commonController extends Controller
{
    public function index(){
        return view('index');
    }

    public function studentList()
    {
        $studentList = BasicInfo::all();
        return view('student.student-list', ['students' => $studentList]);
    }
    
    public function studentcreate( ){
        $districts = district::all();
        return view('student.student-new', compact('districts'));
    }

    public function getThana(Request $request){
               
        $thanas = Thana::where('district_id',$request->district_id)->get();
        $html =' <option value="">Select Thana</option>';
        foreach($thanas as $thana){
        $html.='<option value="'. $thana->thana_id.'">'.$thana->thana_name.'</option>';
      
        }
        return $html;
    }

    public function studentStore(Request $request){
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
    
        $signName = time() . '_sign.' . $request->sign->extension();
        $request->sign->move(public_path('images'), $signName);

        $student = new BasicInfo;
        $student->name =  $request->name;
        $student->email =  $request->email;
        $student->dob =  $request->dob;
        $student->phone =  $request->phone;
        $student->gender =  $request->gender;
        $student->address =  $request->address;
        $student->district =  $request->district;
        $student->thana =  $request->thana;
        $student->image = $imageName;
        $student->file_name =  $request->fineName;
        $student->terms =  $request->check;
        $student->sign = $signName;
   
        $student->save();

        $app_id = $student->id;

      $institutes  = $request->institute;
      $degrees = $request->degree;
      $year = $request->year;
      $result = $request->result;
      for ($count = 0; $count < count($institutes); $count++) {
        $data = new EducationInfo;
        $data->institute_name = $institutes[$count];
        $data->degree = $degrees[$count];
        $data->passing_year = $year[$count];
        $data->result = $result[$count];

        $data->app_id = $app_id;
        $data->save();

      }
   
    return redirect()->route('studentList')->with('success', 'Student addded successfully');    
}


    public function studentView($id)
    {
        $students = BasicInfo::leftJoin('district', 'basic_info.district', '=', 'district.district_id')
            ->leftJoin('thana', 'basic_info.thana', '=', 'thana.thana_id')
            ->select('basic_info.*', 'district.district_name','thana.thana_name')
            ->where('basic_info.id', $id)
            ->first();

            $educationList = EducationInfo::where('app_id', $id)
            ->get();

            return view('student.student-view', compact('students', 'educationList'));
    }
    
    public function studentEdit($id)
    {
        $students = BasicInfo::findOrFail($id);
        $districts = district::all();
        $thanas = Thana::where('district_id', $students->district)->get();
    
        $selectedDistrict = district::where('district_id', $students->district)->first();
        $selectedThana = Thana::where('thana_id', $students->thana)->first();

        $educationList = EducationInfo::where('app_id', $id)->get();

        return view('student.student-edit',compact('students','districts','selectedDistrict','thanas','selectedThana', 'educationList'));
    }    

    public function studentUpdate(Request $request, $id){

        $student = BasicInfo::where('id',$id)->first();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imageName = time() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path('images'), $imageName);
            $student->image = $imageName;
        }

        if ($request->hasFile('sign') && $request->file('sign')->isValid()) {
            $signName = time() . '_sign.' . $request->sign->extension();
            $request->sign->move(public_path('images'), $signName);    
            $student->sign = $signName;
        }

        $student->name =  $request->name;
        $student->email =  $request->email;
        $student->dob =  $request->dob;
        $student->phone =  $request->phone;
        $student->gender =  $request->gender;
        $student->address =  $request->address;  
        $student->district =  $request->district;
        $student->thana =  $request->thana;
        $student->file_name =  $request->fineName;
        $student->terms =  $request->terms;
   
        $student->save();  
        
        // $app_id = $student->id;
        // $education_id = $request->id;
        // $institutes = $request->institute;
        // $degrees = $request->degree;
        // $year = $request->year;
        // $result = $request->result;
        
        if (!empty($request->institute)) {
            $instituteIds = [];
            foreach ($request->institute as $key => $value) {
                $instituteId = $request->id[$key];
                $educationInfo = EducationInfo::findOrNew($instituteId);
                $educationInfo->app_id =  $student->id;
                $educationInfo->institute_name = $request->institute[$key];
                $educationInfo->degree = $request->degree[$key];
                $educationInfo->passing_year = $request->year[$key];
                $educationInfo->result = $request->result[$key];

                $educationInfo->save();
                $instituteIds[] = $educationInfo->id;
            }
            if (count($instituteIds) > 0) {
                EducationInfo::where('app_id', $student->id)->whereNotIn('id', $instituteIds)->delete();
            }
        }
        
        return redirect()->route('studentList')->with('success', 'Student updated successfully');    
    }

    
    public function studentDelete($id){
        $student = BasicInfo::where('id',$id)->first();
        $student->delete();
        return redirect()->route('studentList')->with('success', 'Student deleted successfully');    
    }

    public function gallery(){
        return view('gallery');
    }

    public function contact(){
        return view('contact');
    }
 

}
