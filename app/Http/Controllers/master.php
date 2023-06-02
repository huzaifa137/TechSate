<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class master extends Controller
{
    public function index(){
      
      return view('pages.home');  
    }


    public function aboutus(){

      return view('pages.about');
    }

    public function services(){

      return view('pages.services');
    }

    public function WebDevelopment(){

      return view('pages.webdevelopment');
    }

    public function contact(){

      return view('pages.contact');
    }

    public function AppDevelopment(){

      return view('pages.AppDevelopment');
    }

    public function SEO(){

      return view('pages.SEO');
    }

    public function DigitalMarketing(){

      return view('pages.DigitalMarketing');
    }

    public function GraphicsDesign(){

      return view('pages.graphicsdesign');
    }

    public function SoftwareDevelopment(){

      return view('pages.SoftwareDevelopment');
    }

    public function CMS(){

      return view('pages.CMS');
    }

    public function Audio_Video(){

      return view('pages.Audio&Video');
    }

    public function TrainingProgramming(){

      return view('pages.TrainingProgramming');
    }
}
