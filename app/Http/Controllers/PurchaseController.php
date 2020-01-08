<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PurchaseHistory;
use Auth;

class PurchaseController extends Controller
{
    public function index()
    {
        return view('purchase');
    }

    public function store(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

    	$user = Auth::user();

        $create = new PurchaseHistory();
        $create->user_id = $user->id;
        $create->prod_id = $request->prod_id;
        $create->save();

        return response()->json($create);
    }

    public function getdata()
    {
        
    	$user = Auth::user();

    	$getpurchase = PurchaseHistory::where('user_id', $user->id)
    	->get();

    	return response()->json($getpurchase);

    }


}
