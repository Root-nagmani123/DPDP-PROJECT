<?php
function display_error($validation, $field){
    if(isset($validation)){
        if($validation->hasError($field)){
            return $validation->getError($field);
        }else{
            return false;
        }
    }
}

function MoveFile($param = array(), $fieldName =null,$post_id =null,$profile_id =null) {
	//echo "<pre>";print_r($_FILES[$fieldName]["type"]); die("RAM");
		$files = array("image/png", "image/jpg", "image/jpeg");
        if (in_array($_FILES[$fieldName]["type"], $files)) {
        	$userfolder = 'warriors';
            if (!file_exists("./uploads/" . $userfolder)) {
                @mkdir("./uploads/" . $userfolder, 0777, true);
            }
            $filepath = "./uploads/" . $userfolder . '/';
            if ($_FILES[$fieldName]["name"] != "") {
                $rand_num = rand(2222, 9999);
                $filedetails_arr = pathinfo($_FILES[$fieldName]["name"]);
                $docs_extension = $filedetails_arr['extension'];
                $DocsFile = $fieldName.'_' . $profile_id."_".$rand_num . '.' . $docs_extension;
                $target_path = $filepath . basename($DocsFile);
                $formfile_result = move_uploaded_file($_FILES[$fieldName]["tmp_name"], $target_path);
            } else {
                $DocsFile = "";
            }
            return $DocsFile;            
        } else {
            return "FileTypeERR";
        }
    }


function MoveFile_tma_masters($param = array(), $fieldName =null,$post_id =null,$profile_id =null) {
    //echo "<pre>";print_r($_FILES[$fieldName]["type"]); die("RAM");
        $files = array("image/png", "image/jpg", "image/jpeg");
        if (in_array($_FILES[$fieldName]["type"], $files)) {
            $userfolder = 'tma_masters';
            if (!file_exists("./uploads/" . $userfolder)) {
                @mkdir("./uploads/" . $userfolder, 0777, true);
            }
            $filepath = "./uploads/" . $userfolder . '/';
            if ($_FILES[$fieldName]["name"] != "") {
                $rand_num = rand(2222, 9999);
                $filedetails_arr = pathinfo($_FILES[$fieldName]["name"]);
                $docs_extension = $filedetails_arr['extension'];
                $DocsFile = $fieldName.'_' . $profile_id."_".$rand_num . '.' . $docs_extension;
                $target_path = $filepath . basename($DocsFile);
                $formfile_result = move_uploaded_file($_FILES[$fieldName]["tmp_name"], $target_path);
            } else {
                $DocsFile = "";
            }
            return $DocsFile;            
        } else {
            return "FileTypeERR";
        }
    }


function MoveFile_news($param = array(), $fieldName =null,$post_id =null,$profile_id =null) {
    //echo "<pre>";print_r($_FILES[$fieldName]["type"]); die("RAM");
        $files = array("image/png", "image/jpg", "image/jpeg");
        if (in_array($_FILES[$fieldName]["type"], $files)) {
            $userfolder = 'news';
            if (!file_exists("./uploads/" . $userfolder)) {
                @mkdir("./uploads/" . $userfolder, 0777, true);
            }
            $filepath = "./uploads/" . $userfolder . '/';
            if ($_FILES[$fieldName]["name"] != "") {
                $rand_num = rand(2222, 9999);
                $filedetails_arr = pathinfo($_FILES[$fieldName]["name"]);
                $docs_extension = $filedetails_arr['extension'];
                $DocsFile = $fieldName.'_' . $profile_id."_".$rand_num . '.' . $docs_extension;
                $target_path = $filepath . basename($DocsFile);
                $formfile_result = move_uploaded_file($_FILES[$fieldName]["tmp_name"], $target_path);
            } else {
                $DocsFile = "";
            }
            return $DocsFile;            
        } else {
            return "FileTypeERR";
        }
    }
function movefile_centers($param = array(), $fieldName =null,$post_id =null,$profile_id =null) {
    //echo "<pre>";print_r($_FILES[$fieldName]["type"]); die("RAM");
        $files = array("image/png", "image/jpg", "image/jpeg");
        if (in_array($_FILES[$fieldName]["type"], $files)) {
            $userfolder = 'training_centers';
            if (!file_exists("./uploads/" . $userfolder)) {
                @mkdir("./uploads/" . $userfolder, 0777, true);
            }
            $filepath = "./uploads/" . $userfolder . '/';
            if ($_FILES[$fieldName]["name"] != "") {
                $rand_num = rand(2222, 9999);
                $filedetails_arr = pathinfo($_FILES[$fieldName]["name"]);
                $docs_extension = $filedetails_arr['extension'];
                $DocsFile = $fieldName.'_' . $profile_id."_".$rand_num . '.' . $docs_extension;
                $target_path = $filepath . basename($DocsFile);
                $formfile_result = move_uploaded_file($_FILES[$fieldName]["tmp_name"], $target_path);
            } else {
                $DocsFile = "";
            }
            return $DocsFile;            
        } else {
            return "FileTypeERR";
        }
    }