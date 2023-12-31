<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ConexaoApiController extends Controller
{
  public function __invoke(Request $request){
    
    $semiTons = $request['semiTons'];
    $aSeparar = $request['aSeparar'];
    
    $response =  Http::post(
      'https://cifrasjump-6.gcavalcante3000.repl.co/api/recebetexto',
      ['semiTons' => $semiTons, 'aSeparar' => $aSeparar]
    );
    //Por padrão, no header =>  content type : application/json
    
    return view('resultado', ['response' => $response]);
  }

}
