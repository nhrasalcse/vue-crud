<?php

namespace App\Http\Controllers;

use App\CrudData;
use App\Http\Requests\CrudeRequest;
use Illuminate\Http\Request;

class CrudController extends Controller
{

   public function store(CrudeRequest $request){
//       return $request;
       $crud=new CrudData();
       $crud->name=$request['name'];
       $crud->phone=$request['phone'];
       $crud->email=$request['email'];
       $crud->address=$request['address'];
       $image = $request->file('image');
       if(isset($image)){
           $imageName ='/image/'.uniqid().'.'.$image->getClientOriginalExtension();
           $image->move(public_path().'/image/', $imageName);
           //$path=$image->storeAs('public/image/customer',$imageName);
           $crud->image=$imageName;
       }
       $crud->save();
       return response()->json('successfully added');
   }
   public function getData(){
       $crud=CrudData::all();
       return response($crud);
   }
   public function editData(Request $request){
       $crud=CrudData::findOrFail($request->id);
       $crud->name=$request->name;
       $crud->phone=$request->phone;
       $crud->email=$request->email;
       $crud->address=$request->address;
       $image = $request->file('image');
       if(isset($image)){
           $imageName ='/image/'.uniqid().'.'.$image->getClientOriginalExtension();
           if(!empty($crud->image)) {

               if (file_exists(public_path($crud->image))) {

                   unlink(public_path($crud->image));
               }
           }
           $image->move(public_path().'/image/', $imageName);
           //$path=$image->storeAs('public/image/customer',$imageName);
           $crud->image=$imageName;
       }
       $crud->save();
       return response()->json('success');
   }
   public function DeleteData($id){
       $crud=CrudData::findOrFail($id);
       $crud->delete();
       return response()->json('success');
   }
}
