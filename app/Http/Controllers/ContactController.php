<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Product;
use Illuminate\Http\Request;
use function Ramsey\Uuid\v1;

class ContactController extends Controller
{
    public function adduser(Request $request){
        $user = new Contact();
        $user->name = $request->name;
        $user->save();
        return back();
    }

    public function index(){
        $users = Contact::all();
        return view('all',compact('users'));
    }
    public function addpage(){
        return view('add');
    }
    public function edit($id){
        $edit = Contact::find($id);
        return view('edit',compact('edit'));
    }
    public function update(Request $request, $id){
        $users = Contact::find($id);
        $users->update(['name' => $request->name]);
        return back();
    }
    public function delete($id){
        Contact::destroy($id);
        return back();
    }
}
