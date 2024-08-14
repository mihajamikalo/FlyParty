<?php

namespace App\Http\Controllers;
use App\Models\mess;

use Illuminate\Http\Request;

class Rapport extends Controller
{
    public function rapported(Request $request) {
        
        $rapport = $request->validate([
            'id_mess',
            'Titre' => 'required',
            'Author' => 'required',
            'Rapport' => 'required',
            'date' => 'required'
  
        ]);
        $recorded = mess::create($rapport);
        if ($recorded) {
            return back()->with('succes', 'Posted');
        } else {
            return back()->with('fail', 'An error occured, please retry');
        }
        
    }
    public function message(){
        $set = session('loged');
        if ($set) {
            $message = mess::all();
            return view('Admin.Message',['message' => $message] );
            
        } else {
            return view('Admin.AdminLog');
        }
        
        
    }
    public function delete($id_mess){
        $message = mess::find($id_mess);
        if($message){
            $message->delete();
        }
        return redirect('/message');
        
        
    }

}
