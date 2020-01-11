<?php
namespace App\Http\Controllers;
use App\Mail\KirimRandom;
use Illuminate\Http\Request;
use Mail;
class KirimEmailController extends Controller
{
    public function index(){
 
		Mail::to("testing@malasngoding.com")->send(new KirimRandom());
 
        return redirect('/');
    }
}
