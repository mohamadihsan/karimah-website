<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function program_santri()
    {
        return view('frontend.program_santri');
    }
    
    public function program_tahsin_ikhwan()
    {
        return view('frontend.program_tahsin_ikhwan');
    }
    
    public function program_tahsin_akhwat()
    {
        return view('frontend.program_tahsin_akhwat');
    }
    
    public function program_tahsin_anak()
    {
        return view('frontend.program_tahsin_anak');
    }
}
