<?php

namespace App\Http\Controllers;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;

class QRCodeController extends Controller
{
    public function create(){
        return view('qr-code');
    }

    public function generateQRcode(Request $request){
        if($request->qrCode){
$QrCode = QrCode::size(200)
    ->margin(10) // Adds a margin around the QR code
    ->backgroundColor(240, 240, 240) // Light gray background (soft and neutral)
    ->color(50, 150, 255) // A nice blue color for the foreground (calming and modern)
    ->generate($request->qrCode);        //  dd($QrCode);
         return back()->with('QrCode',$QrCode);
        }
    }
}