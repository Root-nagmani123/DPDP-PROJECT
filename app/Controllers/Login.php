<?php

namespace App\Controllers;
use App\Models\AdminModel;
class Login extends BaseController
{
    protected $session;
    public function __construct(){
        $session = \Config\Services::session();
        //helper('Form_helper');
        helper('url');  
    }
    public function index()
    {
        $adminModel = new AdminModel();      
        if($this->request->getMethod() == "post") {  //print_r($this->request->getVar()); //die("RAM");
                $data['MsgError'] = $adminModel->login($this->request->getVar());
               if(!$_SESSION['userid']){ 
                    return redirect()->to(base_url('/'));
                }else{
                    return view('dashboard');
                }                                    
        }
        return view('login');
        
    }
    public function signup_form()
    {
        $adminModel = new AdminModel();   
        if($this->request->getMethod() == "post") { 
         //print_r($this->request->getVar('password')); die("RAM");
            $data=$this->request->getVar();
        $data['password']=md5($this->request->getVar('password'));
                $lastid = $adminModel->insertdata('users',$data); //print_r($lastid); die;
               if($lastid!=''){ 
                    return redirect()->to(base_url('/signup_form/?s=1'));
                }else{
                    return redirect()->to(base_url('/'));
                }                                    
        }
        return view('signup_form');
    }
    public function signup()
    {
        echo "kk" ;die;
    }
     public function dashboard()
    {
        return view('dashboard');
    }
     public function sim()
    {
        return view('sim');
    }
     public function sim_form()
    {
        return view('sim_form');
    }
    
    public function logout() {
        $data = array(
            'userid' => '',           
        );
        
        session()->remove($data);
        session()->destroy();
        
        return redirect()->to(base_url('/'));
    }
}
