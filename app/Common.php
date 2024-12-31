<?php

use CodeIgniter\system\Database\BaseResult;
/**
 * The goal of this file is to allow developers a location
 * where they can overwrite core procedural functions and
 * replace them with their own. This file is loaded during
 * the bootstrap process and is called during the frameworks
 * execution.
 *
 * This can be looked at as a `master helper` file that is
 * loaded early on, and may also contain additional functions
 * that you'd like to use throughout your entire application
 *
 * @see: https://codeigniter4.github.io/CodeIgniter4/
 */
if (!function_exists('GetRowsbyId')) {

    function GetRowsbyId($tablename, $fieldname, $fieldvalue = null) {
        $db = \Config\Database::connect();        
        $query = $db->query("SELECT * FROM ".$tablename." where ".$fieldname."= ".$fieldvalue);        
        if($query !== false){
		    return $result = $query->getFirstRow();
		}
		else{
		    return false;
		}		
	}

}
if (!function_exists('GetAllData')) {

    function GetAllData($tablename, $condition) {
        $db = \Config\Database::connect();        
        $query = $db->query("SELECT * FROM ".$tablename." where ".$condition);   
        $result = $query->getFirstRow();
        if($query !== false){
            return $result = $query->getFirstRow();
        }
        else{
            return false;
        }       
    }

}

if (!function_exists('send_email')) {

    function send_email($name=null, $sendto=null, $subject=null, $message=null) {
        
   		$email = \Config\Services::email();
        $config['protocol'] = 'smtp';
        $config['mailPath'] = '/usr/sbin/sendmail';
        $config['charset']  = 'iso-8859-1';
        $config['charset'] = 'utf-8';
        $config['wordWrap'] = true;
        $config['mailtype'] = 'html';
        $config['SMTPHost'] = 'smtp.hostinger.com';
        $config['SMTPUser'] = 'contact@gmial.com';
        $config['SMTPPass'] = 'password';
        $config['SMTPPort'] = 587;
        $email->initialize($config); 

        $email->setFrom('contact@gmail.com', 'DPDP');
        $email->setTo($sendto);
        //$email->setCC($sendcc);
        //$email->setBCC('aryan.kumar12589@gmail.com');

        $email->setSubject($subject);
        $email->setMessage($message);
	 	if (!$email->send()) {
	       return 'error';
	   	} else {
	       return 'success';
	   	}		
	}

}
