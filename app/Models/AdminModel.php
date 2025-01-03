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

    public function insertdata($table,$data)
    {
        $db = \Config\Database::connect();
        $builder = $db->table($table);
        $builder->insert($data);

        // $query = $db->getLastQuery();
        // $sql = $query->getQuery();
        // echo $sql;
        // die;

        return $db->insertID();
    }
  
    public function login($data){ 
       $encrypter = \Config\Services::encrypter();
        $db = \Config\Database::connect();
        $session = \Config\Services::session(); 
        $password = md5($data['password']); 

        $query = $db->query("SELECT * FROM users where email like '".$data['username']."' AND password= '".$password."'");
        $result = $query->getResult(); //print_r($result); die;
       
               
        if (!empty($result)) {
             $dbd = $result[0]->id;
            $date = date('y-m-d h:i:s');
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