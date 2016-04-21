<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CupomRequest;
use App\Cupom;

class CupomController extends Controller
{
    
	public function cupom($cupom)
	{
		$cupom = Cupom::where('cupom', $cupom)->first();
		$result = false;
		if($cupom){
			$result = true;
		}
		return response()->json(['result' => $result]);
	}

	public function store(CupomRequest $request)
	{
		$cupom = Cupom::create($request->all());
		if($cupom){
			return response()->json($cupom);
		}
		return response()->json(['result' => false]);
	}

}
