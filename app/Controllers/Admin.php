<?php 
namespace App\Controllers;
use App\Models\AdminModel;
use CodeIgniter\Controller;
use CodeIgniter\Files\File;

class Admin extends BaseController
{	protected $session;
	public function __construct(){
		$session = \Config\Services::session();
		helper('form');
        helper('url');	
    }
    public function index()
    {
        $adminModel = new AdminModel();         
        $data = [
            'users' => $adminModel->paginate(12),
            'pager' => $adminModel->pager
        ];  
        
        return view('index', $data);
    }
    public function getAll() {

        $adminModel = new AdminModel();         
        $data = [
            'users' => $adminModel->paginate(12),
            'pager' => $adminModel->pager
        ];  
        $todaydate = date('Y-m-d');      
        if($this->request->getMethod() == "post") { //	print_r($this->request->getVar()); die("RAM");
               	$data['MsgError'] = $adminModel->login($this->request->getVar());				                        
        }
       // print_r($_SESSION); die("RAMMMM");
        	return view('dashboard', $data);
                
    }

    public function dashboard() {
        $adminModel = new AdminModel();         
        $data = [
            'users' => $adminModel->paginate(12),
            'pager' => $adminModel->pager
        ];        
        if ($this->request->getMethod() == "post") { //print_r($this->request->getVar()); die("RAM");
               $data['MsgError'] = $adminModel->login($this->request->getVar());          
        }
        if(!$_SESSION['userid']){ 
			return redirect()->to(base_url('/'));
   		}else{
			return view('dashboard', $data);
   		}
        
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