<?php

namespace App\Http\Controllers;
//use DB;
use App\Card;
use Illuminate\Http\Request;

use App\Http\Requests;

class CardsController extends Controller{

    public function index(){

		//$cards = DB::table('cards')->get();    	 
    	$cards = Card::all();//eloquent
    	return view('cards.index',compact('cards'));

    }

    public function show(Card $card){
    	//$card = Card::find($id);
    	//return $card;
        //$card = Card::with('notes')->get(); 
        //$card = Card::with('notes')->find(2 );
        $card = Card::with('notes')->find(2);
        return $card->notes[0]->user;
    	return view('cards.show',compact('card'));
    }

    public function phpunit(){
        echo 'here';
    }

}
