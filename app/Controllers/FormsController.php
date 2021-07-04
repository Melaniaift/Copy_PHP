<?php
namespace App\Controllers;
use CodeIgniter\Controller;
class FormsController extends Controller
{
    public function index(){
        return view('forma');
    }
    public function copy1(){
        $var1="";
        if(isset($_POST["text1"])){
            $var2=$_POST["text1"];
        }
        else{
            $var2="";
        }
        $data['var1']=$var1;
        $data['var2']=$var2;
        return view('forma1',$data);
    }
}