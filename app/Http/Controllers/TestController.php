<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function name($name){
        return "hello abdajkbvfksdbk ".$name;
//         echo "# bai_test" >> README.md
// git init
// git add README.md
// git commit -m "first commit"
// git branch -M main
// git remote add origin https://github.com/phongtran2320/bai_test.git
// git push -u origin main
    }

    public function a(){
        return "heheheh ";
    }
    public function c(){
        return "hahahahahah ";
    }
    public function b($name){
        return \Redirect::route('test', $name);
    }
    public function d(){
        return "blbaaadkndsk ";
    }

    public function form(){
        
        return view("form");
    }
    public function post(Request $rq){
        
        $name=$rq->post('name');

        return view('post',['name'=> $name]);
    }


}
