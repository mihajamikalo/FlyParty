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
        return redirect('/');
      }
      else{
        return view('Admin.ERROR');
      }

    }

};

?>
