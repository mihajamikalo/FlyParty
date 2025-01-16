<?php

namespace App\Http\Controllers;

use App\Models\Billet;
use App\Models\Admins;
use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as FacadesSession;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\mess;
use Session;

class Admin extends Controller
{
    public function AdminLogin() {
        return view('Admin.AdminLog');
        
    }

    
    public function Login(Request $request){
  $data = $request->validate([
        'name' => 'required',
        'password' => 'required',
        
    ]);

    
   $user = Admins::where('name', '=' , $request->name)->first();
   if ($user){
    if (Hash::check($request->password, $user->password) ) {
        
        $data = session(['loged' => 'loged']);
        session(['Author' => $user->name]);
        //$billets = Billet::all();
         return redirect('/Dashboard');
    } else {
        return back()->with('fail','Le mot de passe est incorrecte');
    }
}
    else {
        return back()->with('fail','Nom Inconnu'); 
    
   };

    
}
        public function Dashboard() {
         $set = session('loged');
         if ($set) {
            $ticket = Billet::all();
           
            return view('Admin.Dashboard', ['billets' => $ticket ] );
         } else {
            session()->forget('loged');
            return view('Admin.AdminLog');
         };
    }

    public function error(){
        return view('Admin.ERROR');
    }

    public function RegisterAdmin(){
        //Must be added into all function in the Admin page panel
      $set = session('loged');
      
        if($set){
            return view('Admin.NewAdmin');
        }else{
            return redirect('/srsAdmin');
        }
        //end of the important statement
    }

    public function register(Request $request){
           $admins = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'role' => 'required'
            ]);
            $admins ['password'] = bcrypt($admins['password']);
            Admins::create($admins);
            return redirect('Dashboard');
    }

       

    public function Logout(){
        session()->flush();
        return redirect("/srsAdmin");
    }

    public function message(){
        $set = session('loged');
      
        if($set){
            return view('Admin.RapportAdmin');
        }else{
            return redirect('/srsAdmin');
        }

        
    }
    public function modify(){
        return view('Admin.modify');
    }


   
}
