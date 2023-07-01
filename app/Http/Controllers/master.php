<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;



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


    public function subscribed(Request $request){

      $request->validate([
        'subscription_email'=>'required|email',
    ]);

    if(Newsletter::isSubscribed($request->subscription_email)){
      return redirect()->back()->with('error','Email already subscribed');
  }
  else
  {
      Newsletter::subscribe($request->subscription_email);
      return redirect()->back()->with('success','Email subscription successfull');
  }
     
      
}

}
