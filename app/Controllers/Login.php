<?php

namespace App\Controllers;
use App\Models\AdminModel;
class Login extends BaseController
{
    protected $session;
    public function __construct(){
        $session = \Config\Services::session();
       // helper('form');
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
        return view('signup_form');
    }
    public function signup()
    {
        return view('signup');
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
