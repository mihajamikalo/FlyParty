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
        $request->session()->put('loginId', $user->id);
        return redirect('Dashboard');

    } else {
        return back()->with('fail','Le mot de passe est incorrecte');
    }
}
    else {
        return back()->with('fail','Nom Inconnu');
    
   };

    
}
        public function Dashboard() {
            $billets = Billet::all();
            return view('Admin.Dashboard', ['billets' => $billets ] );  
        }

    public function error(){
        return view('Admin.ERROR');
    }


    public function register(Request $request){
           $admins = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required'
            ]);
            $admins ['password'] = bcrypt($admins['password']);
            Admins::create($admins);
            
            return redirect('Dashboard');
    }

    public function rapport(Request $request){
        return view('Admin.Rapport');
    }

    public function Logout(){
        auth()->logout();
        return redirect("/srsAdmin");
    }

}
