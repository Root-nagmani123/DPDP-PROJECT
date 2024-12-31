<?php 
namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Files\File;
class AdminModel extends Model 
{   
    protected $table = 'warriors';
    protected $primaryKey = 'id';
    protected $session;
    public function getData($table='', $where=null, $order_by=null){ 
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM ".$table." ".$where." ".$order_by."");
        if($query !== false){
            return $users = $query->getResult();
        }
        else{
            return false;
        }
    }
    public function countData($table='', $where=null, $order_by=null){ 
        $db = \Config\Database::connect();
        $query = $db->query("SELECT count(*) as totaldata FROM ".$table." ".$where." ".$order_by."");
        if($query !== false){
            return $users = $query->getResult();
        }
        else{
            return false;
        }
    }
  
    public function login($data){ 
       $encrypter = \Config\Services::encrypter();
        $db = \Config\Database::connect();
        $session = \Config\Services::session(); 
        $password = md5($data['password']); 

        $query = $db->query("SELECT * FROM users where email like '".$data['username']."' AND password= '".$password."'");
        $result = $query->getResult();
        $dbd = $result[0]->id;
        $date = date('d-m-y h:i:s');
               
        if ($result[0] != "") {
            
            $result1 = $db->query("UPDATE users set logindate ='".$date."' where id=".$dbd);
            $newdata = [
            'logindate'  => $date,
            'userid'  => $dbd,
            ];
            $session->set($newdata);
            return $result = 'success';           
            
        } else {
            $session->destroy();
            return $result = "error";
        }  
    }
    




}