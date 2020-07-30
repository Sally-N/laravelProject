<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FailedJobs;

class PagesController extends Controller
{
   public function index(){
       $title = 'Welcome to Laravel!';
      // return view('pages.index', compact('title'));  
       return view('pages.index')->with('title', $title); 
   } 

   public function about(){
       $title = 'About Us';
       #you need to include $data kwa hii  function 
      // return view('pages.about')->with('title', $title); //ndio iki render the about page ipate $services
  
       
       $data = array(
        'title' => 'About Us',
        'services' => ['Web design', 'Programmming', 'SEO']
    );
       #you need to include $data kwa hii  function 
       //return view('pages.about')->with($data); //ndio iki render the about page ipate $services
       return view('pages.about')->with($data);
   }

   public function services(){
       $data = array(
           'title' => 'services',
           'services' => ['Web design', 'Programmming', 'SEO']
       );
    return view('pages.services')->with($data);
}

public function posts(){

    $title = 'posts';
  
 return view('pages.post')->with('title', $title);
}

}