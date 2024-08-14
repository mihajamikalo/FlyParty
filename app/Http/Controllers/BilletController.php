<?php

namespace App\Http\Controllers;

use App\Models\Billet;
use Illuminate\Http\Request;
use PhpParser\Node\NullableType;

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
            'email' => 'required',
            'phone' => 'required',
            'NbrTicket' => 'required',
            'demande' => '',
        ]);
      $recorded= billet::create($BilletInfo);
      if ($recorded){
        return back()->with('success', 'Vôtre achat a été enregistrer,Vous allez recevoir une confirmation par email' );
      }
      else{
        return back()->with('fail','Erreur serveeur, veuillez ressayer plus tard');
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
