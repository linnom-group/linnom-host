<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Employees;

class HomeController extends Controller
{
     public function upload(Request $request){
       $employee = new employees;

       $employee->first_name=$request->first_name;
       $employee->last_name=$request->last_name;
       $employee->code=$request->code;
       
       $doc=$request->file;
       $docname=time().'.'.$doc->getClientOriginalExtension();
       $request->file->move('Documents',$docname);
       $employee->documents=$docname;

       $employee->save();
       return redirect()->back();
}

public function view(){
  
  $data = employees::all();

  return view('employees.employee-details',compact('data'));
}

public function delete($id){
  $data = employees::find($id);
  $data->delete();
  return redirect()->back();
}
public function search(Request $request){
    $search=$request->search;
    $data = employees::where('first_name','Like','%'.$search.'%')
    ->orWhere('last_name','Like','%'.$search.'%')
    ->orWhere('code','Like','%'.$search.'%')
    ->get();
    return view('employees.employee-details',compact('data'));
}
public function update($id){
 $employee = employees::find($id);
 return view('employees.update-page', compact('employee'));
}

public function update_view(Request $request,$id){
  $employee = employees::find($id);
  $employee->first_name=$request->first_name;
  $employee->last_name=$request->last_name;
  $employee->code=$request->code;

  $doc=$request->file;
  if($doc){
    
   $docname=time().','.$doc->getClientOriginalExtension();
  $request->file->move('Documents',$docname);
  $employee->documents=$docname;
  }
  
  $employee->save();
  return redirect()->back();
}

}
