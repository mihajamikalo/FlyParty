<?php

namespace App\Http\Controllers;

use App\Models\Billet;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use PhpParser\Node\NullableType;
use Session;

class BilletController extends Controller
{
    public function index(){
        return view('index');
       
    }

    public function tick(){
        return view('ticket');

    }

    public function billet(Request $request){
        $BilletInfo = $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:10',
            'NbrTicket' => 'required',
            'demande' => '',
        ]);
      $recorded = Billet::create($BilletInfo);
      if ($recorded){
        $pdf = Pdf::loadView('CheckoutPDF',["user" => $BilletInfo]);
        return $pdf->download("billet.pdf");
      }
      else{
        return back()->with('fail','Erreur serveur, veuillez ressayer plus tard');
      }

    }
    public function destroy($id){
      $post = Billet::find($id);
  
      if($post){
        $post->delete();
        return redirect('/Dashboard');
      }else{
        return redirect('/Error');
      }
 }

};

?>
