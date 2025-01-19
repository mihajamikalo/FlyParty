<?php

namespace App\Http\Controllers;
use App\Models\mess;

use Illuminate\Http\Request;

class Rapport extends Controller
{
    public function rapported(Request $request) {
        
        $rapport = $request->validate([
            'id_mess',
            'Titre' => 'required|min:3|max:40',
            'Author' => 'required',
            'Rapport' => 'required',
            'date' => 'required'
  
        ]);
        $recorded = mess::create($rapport);
        if ($recorded) {
            return back()->with('success', 'Posted');
        } else {
            return back()->with('fail', 'An error occured, please retry');
        }
        
    }
    public function message(){
        $set = session('loged');
        if ($set) {
            $message = mess::all();
            return view('Admin.Message',['messages' => $message] );
            
        } else {
            return view('Admin.AdminLog');
        }
        
        
    }
    
    public function delete($id_mess){
        $message = mess::find($id_mess);
        if($message){
            $message->delete();
            return back()->with('succes', );
        }
        return redirect('/message');
        
        
    }

    public function modification(Request $request){
        
        try{
            $request->validate([
                'id' => 'required'
            ]);

            $message = $request->id;
            $data = mess::where('id', '=', $message)->first();
       
        }catch(\Exception $err){

            return view('Admin.RapportAdmin')->with('error',$err);

        }

        return view('Admin.UpdateMessage', ['value' => $data]);
    }

    public function updateMess(Request $request){
        $request->validate([
            'id_mess',
            'Titre' => 'required',
            'Author' => 'required',
            'Rapport' => 'required',
            'date' => 'required'
        ]);

    $success = mess::where('id','=',$request->id_mess)->update([
        'id' => $request->id_mess,
        'Titre' => $request->Titre,
        'Author' => $request->Author,
        'Rapport' => $request->Rapport,
        'date' => $request->date,
    ]);

        if($success){
            return redirect('/rapportAdmin')->with('success','Rapport updated');
        }else{
            
            return redirect('/rapportAdmin')->with('fail','Rapport failed');
        }

    }

}
