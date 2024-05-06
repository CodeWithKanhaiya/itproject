<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\crud;
class contactController extends Controller{
//======================read ke la======================================================
    public function index(){
        $data=crud::all();//database se data lana
        return view('project.contact.index')->withAll($data);//database se data lakar read page  me jana withAll function ke dara
       }
      //==========================form ke call ke la========================================================
       public function create(){
         return view('project.contact.create');//
       }
  //==========================form validation ke la======================================================
       public function insert(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'messsage'=>'message',
        ]);
        $crud=new Crud;//class name
        $crud->name=$request->name;
        $crud->email=$request->email;
        $crud->subject=$request->subject;
        $crud->message=$request->message;
        $crud->save();
        return redirect('/itcrud')->withSuccess('Data inserted');//location read page pa jana ko or table
       }
  //==========================form update ke la=======================================================
       public function updateData($id){
            $data=crud::find($id);// update date ko read kara find function ke use kata he //crud class he model ke unde wala
            return  view('project.contact.updateform')->withData($data);
       }
  //=====================form update validation ke la==================================
       public function postData(Request $request){
          $crud=crud::where('id',$request->id)->first();///crud class he model ke unde wala
          $crud->name=$request->name;
          $crud->email=$request->email;
          $crud->subject=$request->subject;
          $crud->message=$request->message;
          $crud->save();
          return redirect('/itcrud');//location read page pa jana ko or table// url crud he
       }
    //=====================delete ke la==================================================
       public function delete($id){
          $crud=crud::where('id',$id)->delete();//crud class name model ke under wala he
          return redirect('/itcrud');//locatio delete ke bad read page pa jana ko or table
       }
    
}


