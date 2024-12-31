<?php 
// Path to the front controller (this file)
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

chdir(FCPATH);

require FCPATH . 'app/Config/Paths.php';

$paths = new Config\Paths();
require rtrim($paths->systemDirectory, '\\/ ') . DIRECTORY_SEPARATOR . 'bootstrap.php';
require_once SYSTEMPATH . 'Config/DotEnv.php';
(new CodeIgniter\Config\DotEnv(ROOTPATH))->load();
$app = Config\Services::codeigniter();
$app->initialize();

$name= "RAM";
	$email_id= "aryan.kumar12589@gmail.com";
 	$subject = "Hi";
  	$message= "please check my mail";

		$msg = send_email($name, $email_id, $subject, $message);
		print_r($msg); die("RAM");
            if($msg == 'success'){
                $result = 'success';
            }