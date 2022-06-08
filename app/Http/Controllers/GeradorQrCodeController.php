<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelQRCode\Facades\QRCode;

class GeradorQrCodeController extends Controller
{
    public function index(Request $request){

        $img = '\public\assets\logotipo.png';
       $qr = $request->txt;
      return view('gerarQr', [
          'qr' => $qr,
          'img' => $img,
      ]);   
    }
}
