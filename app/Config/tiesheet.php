<?= $this->extend('layouts/base')?>
<?= $this->section('content')?> 
    <section id="tiesheet_details" class="tiesheet_details">
        <div class="container">
            <div class="pagetitle newtitle">
              <?php $champ_name = GetRowsbyId("champ_details", "id", $champ_tiesheet_data[0]->champ_id)->title;  
        
              $gender = $champ_tiesheet_data[0]->gender;
              $belt = explode('-', $champ_tiesheet_data[0]->belt_category);
              $age = explode('-', $champ_tiesheet_data[0]->age_category);
              $weight = explode('-', $champ_tiesheet_data[0]->weight_category);
              $gender = ($champ_tiesheet_data[0]->gender == "Male") ? "Boys" : "Girls";
              if($belt[0]=1 && $belt[1]=3){
                $beltcat = "White to Green Belt";
              }else if($belt[0]=4 && $belt[1]=6){
                $beltcat = "Blue to Pre-Black Belt";
              }else {
                $beltcat = "Black Belt & Up";
              }
              if($age[0] == 0 || $age[0] == ''){
                $agecat = "Below ".$age[1]." Years";
              }else if($age[0] >= 18){
                $agecat = "Above 18+ Years";
              }else{
                $agecat = "".$age[0]." to ".$age[1]." Years";
              }
              if($weight[0] == 0 || $weight[0] == ''){
                $weightcat = "Below ".$weight[1]." Kg.";
              }else{
                $weightcat = "".$weight[0]." to ".$weight[1]." Kg.";
              }
              
              
        
        
              ?>
              <h1><?php echo $champ_name; ?></h1>
              <h3>(<?php echo $gender; ?>, <?php echo $beltcat; ?>, <?php echo $agecat; ?>, <?php echo $weightcat; ?>)</h3>
              <hr>
            </div><!-- End Page Title -->
            <div class="row">
    <div><a href="<?php echo base_url("admin/champ-tiesheet"); ?>" style="float: right;"><i class="bi bi-box-arrow-left" aria-hidden="true"></i> Back to Category Dashboard</a>

      </div>
    <div class="card-body">
      <?php 
        foreach ($champtiesheetdetails as $key => $value) {
          $gender = GetRowsbyId("champ_tiesheet1", "id", $value->warriors_cat_details_id)->gender; 
          $srno = $key+1;
          if($value->total_warriors == 1){
          ?>
            <table border="0" class="admin_form_table">
              <!-- start one -->
              <tr>
                <td class="number_form">1.</td>
                <td class="number_form1 "><?php 
                  if($value->tiesheet1 == 0){
                  $state_name1 = '';
                  }else{
                  $state_id1 = GetRowsbyId("warriors_championship", "id", $value->tiesheet1)->state;
                  $state_name1 = GetRowsbyId("states", "id", $state_id1)->state_name;
                  $state_name1 = ' ('.$state_name1.')';
                  }
                  echo ($value->tiesheet1 == 0) ? 'BY' :  $value->tiesheet1.' '.$state_name1.''; ?>
                </td>
                <td class=""></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!-- End One -->                   
            </table>
            <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>  
              <div class="change_list">
                <a href="javascript:void(0)" style="float: right;"  onclick="changelist(<?php echo $value->id; ?>,<?php echo $value->total_warriors; ?>)" class="btn-md"> <i class="bi bi-pencil-square" aria-hidden="true"> Change List</i></a>
              </div>
            <?php } ?>  
            <div style="width: 100%;margin-top: 24px;">            
              <table class="tbl">
                <tr>
                  <td class="name_me">Gold: </td>
                  <td class="goldcolor">
                    <?php
                    if(!empty($value->gold) && $value->gold != 0){
                    $warrior_name = GetRowsbyId('warriors_championship', 'id', $value->gold)->name;
                    $state_id = GetRowsbyId('warriors_championship', 'id', $value->gold)->state;
                    $distict_id = GetRowsbyId('warriors_championship', 'id', $value->gold)->district;
                    $state_name = GetRowsbyId('states', 'id', $state_id)->state_name;
                    $district_name = GetRowsbyId('district', 'id', $distict_id)->city_name;
                    echo $warrior_name.' ('.$district_name.', '.$state_name.')';
                    }else{
                    echo "";
                    }                       
                    ?>
                  </td>
                  <td class="name_me">Silver: </td>
                  <td class="silvercolor">
                    <?php
                    if(!empty($value->silver && $value->silver != 0)){
                    $warrior_name = GetRowsbyId('warriors_championship', 'id', $value->silver)->name;
                    $state_id = GetRowsbyId('warriors_championship', 'id', $value->silver)->state;
                    $distict_id = GetRowsbyId('warriors_championship', 'id', $value->silver)->district;
                    $state_name = GetRowsbyId('states', 'id', $state_id)->state_name;
                    $district_name = GetRowsbyId('district', 'id', $distict_id)->city_name;
                    echo $warrior_name.' ('.$district_name.', '.$state_name.')';
                    }else{
                    echo "";
                    }                       
                    ?>                      
                  </td>
                  <td class="name_me">Bronze1: </td>
                  <td class="bronzecolor">
                    <?php
                    if(!empty($value->bronze1 && $value->bronze1 != 0)){
                    $warrior_name = GetRowsbyId('warriors_championship', 'id', $value->bronze1)->name;
                    $state_id = GetRowsbyId('warriors_championship', 'id', $value->bronze1)->state;
                    $distict_id = GetRowsbyId('warriors_championship', 'id', $value->bronze1)->district;
                    $state_name = GetRowsbyId('states', 'id', $state_id)->state_name;
                    $district_name = GetRowsbyId('district', 'id', $distict_id)->city_name;
                    echo $warrior_name.' ('.$district_name.', '.$state_name.')';
                    }else{
                    echo "";
                    }                       
                    ?>
                  </td>
                  <td class="name_me">Bronze2: </td>
                  <td class="bronzecolor">
                    <?php
                    if(!empty($value->bronze2 && $value->bronze2 != 0)){
                    $warrior_name = GetRowsbyId('warriors_championship', 'id', $value->bronze2)->name;
                    $state_id = GetRowsbyId('warriors_championship', 'id', $value->bronze2)->state;
                    $distict_id = GetRowsbyId('warriors_championship', 'id', $value->bronze2)->district;
                    $state_name = GetRowsbyId('states', 'id', $state_id)->state_name;
                    $district_name = GetRowsbyId('district', 'id', $distict_id)->city_name;
                    echo $warrior_name.' ('.$district_name.', '.$state_name.')';
                    }else{
                    echo "";
                    }                       
                    ?>                        
                  </td>
                  <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>
                  <td>
                    <a href="javascript:void(0)" style="float: right;"  onclick="upload_final(<?php echo $value->id; ?>,<?php echo $value->total_warriors; ?>)" class="btn-md addon_two"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                  </td>
                  <?php } ?>
                </tr>
              </table>
            </div>
          <?php
          }else if($value->total_warriors == 1 || $value->total_warriors == 2){
          ?>
            <table border="0" class="admin_form_table">
              <!-- start one -->
              <tr>
                <td class="number_form">1.</td>
                <td class="number_form1 "><?php 
                  if($value->tiesheet1 == 0){
                  $state_name1 = '';
                  }else{
                  $state_id1 = GetRowsbyId("warriors_championship", "id", $value->tiesheet1)->state;
                  $state_name1 = GetRowsbyId("states", "id", $state_id1)->state_name;
                  $state_name1 = ' ('.$state_name1.')';
                  }
                  echo ($value->tiesheet1 == 0) ? 'BY' :  $value->tiesheet1.' '.$state_name1.''; ?>
                </td>
                <td class="up_form"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!-- End One -->
              <!-- start two -->
              <tr>
                <td></td>
                <td></td>
                <td class="middle_form"></td>
                <td class="number_form1">
                  <?php echo ($value->tiesheet3 == 0) ? '' : $value->tiesheet3; ?> 
                  <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>
                  <a href="javascript:void(0)" style="float: right;"  onclick="upload_orders(<?php echo $value->tiesheet1; ?>,<?php echo $value->tiesheet2; ?>,<?php echo $value->tiesheet3; ?>,<?php echo $value->id; ?>,'tiesheet3')" class="btn-md addon_one"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                  <?php } ?>
                </td>
                <td class=""></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!-- End two -->
              <!-- start three -->
              <tr>
                <td class="number_form">2.</td>
                <td class="number_form2"><?php 
                  if($value->tiesheet2 == 0){
                  $state_name2 = '';
                  }else{
                  $state_id2 = GetRowsbyId("warriors_championship", "id", $value->tiesheet2)->state;
                  $state_name2 = GetRowsbyId("states", "id", $state_id2)->state_name;
                  $state_name2 = ' ('.$state_name2.')';
                  }
                  echo ($value->tiesheet2 == 0) ? 'BY' :  $value->tiesheet2.' '.$state_name2.''; ?>
                </td>
                <td class="down_form"></td>
                <td></td>
                <td class=""></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!-- End three -->                    
            </table>
            <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>  
              <div class="change_list">
                <a href="javascript:void(0)" style="float: right;"  onclick="changelist(<?php echo $value->id; ?>,<?php echo $value->total_warriors; ?>)" class="btn-md"> <i class="bi bi-pencil-square" aria-hidden="true"> Change List</i></a>
              </div>
            <?php } ?>  
            <div style="width: 100%;margin-top: 24px;">            
              <table class="tbl">
                <tr>
                  <td class="name_me">Gold: </td>
                  <td class="goldcolor">
                    <?php
                    if(!empty($value->gold) && $value->gold != 0){
                    $warrior_name = GetRowsbyId('warriors_championship', 'id', $value->gold)->name;
                    $state_id = GetRowsbyId('warriors_championship', 'id', $value->gold)->state;
                    $distict_id = GetRowsbyId('warriors_championship', 'id', $value->gold)->district;
                    $state_name = GetRowsbyId('states', 'id', $state_id)->state_name;
                    $district_name = GetRowsbyId('district', 'id', $distict_id)->city_name;
                    echo $warrior_name.' ('.$district_name.', '.$state_name.')';
                    }else{
                    echo "";
                    }                       
                    ?>
                  </td>
                  <td class="name_me">Silver: </td>
                  <td class="silvercolor">
                    <?php
                    if(!empty($value->silver && $value->silver != 0)){
                    $warrior_name = GetRowsbyId('warriors_championship', 'id', $value->silver)->name;
                    $state_id = GetRowsbyId('warriors_championship', 'id', $value->silver)->state;
                    $distict_id = GetRowsbyId('warriors_championship', 'id', $value->silver)->district;
                    $state_name = GetRowsbyId('states', 'id', $state_id)->state_name;
                    $district_name = GetRowsbyId('district', 'id', $distict_id)->city_name;
                    echo $warrior_name.' ('.$district_name.', '.$state_name.')';
                    }else{
                    echo "";
                    }                       
                    ?>                      
                  </td>
                  <td class="name_me">Bronze1: </td>
                  <td class="bronzecolor">
                    <?php
                    if(!empty($value->bronze1 && $value->bronze1 != 0)){
                    $warrior_name = GetRowsbyId('warriors_championship', 'id', $value->bronze1)->name;
                    $state_id = GetRowsbyId('warriors_championship', 'id', $value->bronze1)->state;
                    $distict_id = GetRowsbyId('warriors_championship', 'id', $value->bronze1)->district;
                    $state_name = GetRowsbyId('states', 'id', $state_id)->state_name;
                    $district_name = GetRowsbyId('district', 'id', $distict_id)->city_name;
                    echo $warrior_name.' ('.$district_name.', '.$state_name.')';
                    }else{
                    echo "";
                    }                       
                    ?>
                  </td>
                  <td class="name_me">Bronze2: </td>
                  <td class="bronzecolor">
                    <?php
                    if(!empty($value->bronze2 && $value->bronze2 != 0)){
                    $warrior_name = GetRowsbyId('warriors_championship', 'id', $value->bronze2)->name;
                    $state_id = GetRowsbyId('warriors_championship', 'id', $value->bronze2)->state;
                    $distict_id = GetRowsbyId('warriors_championship', 'id', $value->bronze2)->district;
                    $state_name = GetRowsbyId('states', 'id', $state_id)->state_name;
                    $district_name = GetRowsbyId('district', 'id', $distict_id)->city_name;
                    echo $warrior_name.' ('.$district_name.', '.$state_name.')';
                    }else{
                    echo "";
                    }                       
                    ?>                        
                  </td>
                  <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>
                  <td>
                    <a href="javascript:void(0)" style="float: right;"  onclick="upload_final(<?php echo $value->id; ?>,<?php echo $value->total_warriors; ?>)" class="btn-md addon_two"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                  </td>
                  <?php } ?>
                </tr>
              </table>
            </div>
          <?php
          }else if($value->total_warriors == 3 || $value->total_warriors == 4){
          ?>
            <table border="0" class="admin_form_table">
              <!-- start one -->
              <tr>
                <td class="number_form">1.</td>
                <td class="number_form1 "><?php 
                  if($value->tiesheet1 == 0){
                  $state_name1 = '';
                  }else{
                  $state_id1 = GetRowsbyId("warriors_championship", "id", $value->tiesheet1)->state;
                  $state_name1 = GetRowsbyId("states", "id", $state_id1)->state_name;
                  $state_name1 = ' ('.$state_name1.')';
                  }
                  echo ($value->tiesheet1 == 0) ? 'BY' :  $value->tiesheet1.' '.$state_name1.''; ?>
                </td>
                <td class="up_form"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!-- End One -->
              <!-- start two -->
              <tr>
                <td></td>
                <td></td>
                <td class="middle_form"></td>
                <td class="number_form1">
                  <?php echo ($value->tiesheet5 == 0) ? '' : $value->tiesheet5; ?> 
                  <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>
                  <a href="javascript:void(0)" style="float: right;"  onclick="upload_orders(<?php echo $value->tiesheet1; ?>,<?php echo $value->tiesheet2; ?>,<?php echo $value->tiesheet5; ?>,<?php echo $value->id; ?>,'tiesheet5')" class="btn-md addon_one"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                  <?php } ?>
                </td>
                <td class="up_form"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!-- End two -->
              <!-- start three -->
              <tr>
                <td class="number_form">2.</td>
                <td class="number_form2"><?php 
                  if($value->tiesheet2 == 0){
                  $state_name2 = '';
                  }else{
                  $state_id2 = GetRowsbyId("warriors_championship", "id", $value->tiesheet2)->state;
                  $state_name2 = GetRowsbyId("states", "id", $state_id2)->state_name;
                  $state_name2 = ' ('.$state_name2.')';
                  }
                  echo ($value->tiesheet2 == 0) ? 'BY' :  $value->tiesheet2.' '.$state_name2.''; ?>
                </td>
                <td class="down_form"></td>
                <td></td>
                <td class="mix_form"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!-- End three -->
              <!-- start four -->
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="middle_form"></td>
                <td class="number_form1"><?php echo ($value->tiesheet7 == 0) ? '' : $value->tiesheet7; ?> 
                  <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>
                  <a href="javascript:void(0)" style="float: right;"  onclick="upload_orders(<?php echo $value->tiesheet5; ?>,<?php echo $value->tiesheet6; ?>,<?php echo $value->tiesheet7; ?>,<?php echo $value->id; ?>,'tiesheet7')" class="btn-md addon_one"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                  <?php } ?>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!-- End four -->
              <!-- start five -->
              <tr>
                <td class="number_form">3.</td>
                <td class="number_form1"><?php 
                if($value->tiesheet3 == 0){
                $state_name3 = '';
                }else{
                $state_id3 = GetRowsbyId("warriors_championship", "id", $value->tiesheet3)->state;
                $state_name3 = GetRowsbyId("states", "id", $state_id3)->state_name;
                $state_name3 = ' ('.$state_name3.')';
                }
                echo ($value->tiesheet3 == 0) ? 'BY' :  $value->tiesheet3.' '.$state_name3.''; ?>
                </td>
                <td class="up_form"></td>
                <td></td>
                <td class="mix_form"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!-- End five -->
              <!-- start six -->  
              <tr>
                <td></td>
                <td></td>
                <td class="middle_form"></td>
                <td class="number_form2"><?php echo ($value->tiesheet6 == 0) ? '' : $value->tiesheet6; ?> 
                <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>
                <a href="javascript:void(0)" style="float: right;"  onclick="upload_orders(<?php echo $value->tiesheet3; ?>,<?php echo $value->tiesheet4; ?>,<?php echo $value->tiesheet6; ?>,<?php echo $value->id; ?>,'tiesheet6')" class="btn-md addon_one"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                <?php } ?>
                </td>
                <td class="down_form"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!-- End six -->
              <!-- start seven -->
              <tr>
                <td class="number_form">4.</td>
                <td class="number_form2"><?php 
                if($value->tiesheet4 == 0){
                $state_name4 = '';
                }else{
                $state_id4 = GetRowsbyId("warriors_championship", "id", $value->tiesheet4)->state;
                $state_name4 = GetRowsbyId("states", "id", $state_id4)->state_name;
                $state_name4 = ' ('.$state_name4.')';
                }
                echo ($value->tiesheet4 == 0) ? 'BY' :  $value->tiesheet4.' '.$state_name4.''; ?>

                </td>
                <td class="down_form"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!-- End seven -->                   
            </table>
            <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>  
              <div class="change_list">
                <a href="javascript:void(0)" style="float: right;"  onclick="changelist(<?php echo $value->id; ?>,<?php echo $value->total_warriors; ?>)" class="btn-md"> <i class="bi bi-pencil-square" aria-hidden="true"> Change List</i></a>
              </div>
            <?php } ?>  
            <div style="width: 100%;margin-top: 24px;">            
              <table class="tbl">
                <tr>
                  <td class="name_me">Gold: </td>
                  <td class="goldcolor">
                    <?php
                    if(!empty($value->gold) && $value->gold != 0){
                    $warrior_name = GetRowsbyId('warriors_championship', 'id', $value->gold)->name;
                    $state_id = GetRowsbyId('warriors_championship', 'id', $value->gold)->state;
                    $distict_id = GetRowsbyId('warriors_championship', 'id', $value->gold)->district;
                    $state_name = GetRowsbyId('states', 'id', $state_id)->state_name;
                    $district_name = GetRowsbyId('district', 'id', $distict_id)->city_name;
                    echo $warrior_name.' ('.$district_name.', '.$state_name.')';
                    }else{
                    echo "";
                    }                       
                    ?>
                  </td>
                  <td class="name_me">Silver: </td>
                  <td class="silvercolor">
                    <?php
                    if(!empty($value->silver && $value->silver != 0)){
                    $warrior_name = GetRowsbyId('warriors_championship', 'id', $value->silver)->name;
                    $state_id = GetRowsbyId('warriors_championship', 'id', $value->silver)->state;
                    $distict_id = GetRowsbyId('warriors_championship', 'id', $value->silver)->district;
                    $state_name = GetRowsbyId('states', 'id', $state_id)->state_name;
                    $district_name = GetRowsbyId('district', 'id', $distict_id)->city_name;
                    echo $warrior_name.' ('.$district_name.', '.$state_name.')';
                    }else{
                    echo "";
                    }                       
                    ?>                      
                  </td>
                  <td class="name_me">Bronze1: </td>
                  <td class="bronzecolor">
                    <?php
                    if(!empty($value->bronze1 && $value->bronze1 != 0)){
                    $warrior_name = GetRowsbyId('warriors_championship', 'id', $value->bronze1)->name;
                    $state_id = GetRowsbyId('warriors_championship', 'id', $value->bronze1)->state;
                    $distict_id = GetRowsbyId('warriors_championship', 'id', $value->bronze1)->district;
                    $state_name = GetRowsbyId('states', 'id', $state_id)->state_name;
                    $district_name = GetRowsbyId('district', 'id', $distict_id)->city_name;
                    echo $warrior_name.' ('.$district_name.', '.$state_name.')';
                    }else{
                    echo "";
                    }                       
                    ?>
                  </td>
                  <td class="name_me">Bronze2: </td>
                  <td class="bronzecolor">
                    <?php
                    if(!empty($value->bronze2 && $value->bronze2 != 0)){
                    $warrior_name = GetRowsbyId('warriors_championship', 'id', $value->bronze2)->name;
                    $state_id = GetRowsbyId('warriors_championship', 'id', $value->bronze2)->state;
                    $distict_id = GetRowsbyId('warriors_championship', 'id', $value->bronze2)->district;
                    $state_name = GetRowsbyId('states', 'id', $state_id)->state_name;
                    $district_name = GetRowsbyId('district', 'id', $distict_id)->city_name;
                    echo $warrior_name.' ('.$district_name.', '.$state_name.')';
                    }else{
                    echo "";
                    }                       
                    ?>                        
                  </td>
                  <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>
                  <td>
                    <a href="javascript:void(0)" style="float: right;"  onclick="upload_final(<?php echo $value->id; ?>,<?php echo $value->total_warriors; ?>)" class="btn-md addon_two"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                  </td>
                  <?php } ?>
                </tr>
              </table>
            </div>
          <?php
          }else if($value->total_warriors == 5 || $value->total_warriors == 6 || $value->total_warriors == 7 || $value->total_warriors == 8) {
          ?>
            <table border="0" class="admin_form_table">
              <!-- start one -->
              <tr>
                <td class="number_form">1.</td>
                <td class="number_form1 "><?php 
                  if($value->tiesheet1 == 0){
                  $state_name1 = '';
                  }else{
                  $state_id1 = GetRowsbyId("warriors_championship", "id", $value->tiesheet1)->state;
                  $state_name1 = GetRowsbyId("states", "id", $state_id1)->state_name;
                  $state_name1 = ' ('.$state_name1.')';
                  }
                  echo ($value->tiesheet1 == 0) ? 'BY' :  $value->tiesheet1.' '.$state_name1.''; ?>
                </td>
                <td class="up_form"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!-- End One -->
              <!-- start two -->
              <tr>
                <td></td>
                <td></td>
                <td class="middle_form"></td>
                <td class="number_form1">
                  <?php echo ($value->tiesheet9 == 0) ? '' : $value->tiesheet9; ?> 
                  <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>
                  <a href="javascript:void(0)" style="float: right;"  onclick="upload_orders(<?php echo $value->tiesheet1; ?>,<?php echo $value->tiesheet2; ?>,<?php echo $value->tiesheet9; ?>,<?php echo $value->id; ?>,'tiesheet9')" class="btn-md addon_one"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                  <?php } ?>
                </td>
                <td class="up_form"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!-- End two -->
              <!-- start three -->
              <tr>
                <td class="number_form">2.</td>
                <td class="number_form2"><?php 
                  if($value->tiesheet2 == 0){
                  $state_name2 = '';
                  }else{
                  $state_id2 = GetRowsbyId("warriors_championship", "id", $value->tiesheet2)->state;
                  $state_name2 = GetRowsbyId("states", "id", $state_id2)->state_name;
                  $state_name2 = ' ('.$state_name2.')';
                  }
                  echo ($value->tiesheet2 == 0) ? 'BY' :  $value->tiesheet2.' '.$state_name2.''; ?>
                </td>
                <td class="down_form"></td>
                <td></td>
                <td class="mix_form"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!-- End three -->
              <!-- start four -->
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="middle_form"></td>
                <td class="number_form1"><?php echo ($value->tiesheet13 == 0) ? '' : $value->tiesheet13; ?> 
                  <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>
                  <a href="javascript:void(0)" style="float: right;"  onclick="upload_orders(<?php echo $value->tiesheet9; ?>,<?php echo $value->tiesheet10; ?>,<?php echo $value->tiesheet13; ?>,<?php echo $value->id; ?>,'tiesheet13')" class="btn-md addon_one"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                  <?php } ?>
                </td>
                <td class="up_form"></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!-- End four -->
              <!-- start five -->
              <tr>
                <td class="number_form">3.</td>
                <td class="number_form1"><?php 
                if($value->tiesheet3 == 0){
                $state_name3 = '';
                }else{
                $state_id3 = GetRowsbyId("warriors_championship", "id", $value->tiesheet3)->state;
                $state_name3 = GetRowsbyId("states", "id", $state_id3)->state_name;
                $state_name3 = ' ('.$state_name3.')';
                }
                echo ($value->tiesheet3 == 0) ? 'BY' :  $value->tiesheet3.' '.$state_name3.''; ?>
                </td>
                <td class="up_form"></td>
                <td></td>
                <td class="mix_form"></td>
                <td></td>
                <td class="mix_form"></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!-- End five -->
              <!-- start six -->  
              <tr>
                <td></td>
                <td></td>
                <td class="middle_form"></td>
                <td class="number_form2"><?php echo ($value->tiesheet10 == 0) ? '' : $value->tiesheet10; ?> 
                <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>
                <a href="javascript:void(0)" style="float: right;"  onclick="upload_orders(<?php echo $value->tiesheet3; ?>,<?php echo $value->tiesheet4; ?>,<?php echo $value->tiesheet10; ?>,<?php echo $value->id; ?>,'tiesheet10')" class="btn-md addon_one"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                <?php } ?>
                </td>
                <td class="down_form"></td>
                <td></td>
                <td class="mix_form"></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!-- End six -->
              <!-- start seven -->
              <tr>
                <td class="number_form">4.</td>
                <td class="number_form2"><?php 
                if($value->tiesheet4 == 0){
                $state_name4 = '';
                }else{
                $state_id4 = GetRowsbyId("warriors_championship", "id", $value->tiesheet4)->state;
                $state_name4 = GetRowsbyId("states", "id", $state_id4)->state_name;
                $state_name4 = ' ('.$state_name4.')';
                }
                echo ($value->tiesheet4 == 0) ? 'BY' :  $value->tiesheet4.' '.$state_name4.''; ?>

                </td>
                <td class="down_form"></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="mix_form"></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!-- End seven -->
              <!-- start eight -->
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="middle_form"></td>
                <td class="number_form1"><?php echo ($value->tiesheet15 == 0) ? '' : $value->tiesheet15; ?>
                <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?> 
                <a href="javascript:void(0)" style="float: right;"  onclick="upload_orders(<?php echo $value->tiesheet13; ?>,<?php echo $value->tiesheet14; ?>,<?php echo $value->tiesheet15; ?>,<?php echo $value->id; ?>,'tiesheet15')" class="btn-md addon_one"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                <?php } ?>
                </td>
                <td></td>
                <td></td>
              </tr>
              <!-- End eight -->
              <!-- start nine -->
              <tr>
                <td class="number_form">5.</td>
                <td class="number_form1"><?php 
                if($value->tiesheet5 == 0){
                $state_name5 = '';
                }else{
                $state_id5 = GetRowsbyId("warriors_championship", "id", $value->tiesheet5)->state;
                $state_name5 = GetRowsbyId("states", "id", $state_id5)->state_name;
                $state_name5 = ' ('.$state_name5.')';
                }
                echo ($value->tiesheet5 == 0) ? 'BY' :  $value->tiesheet5.' '.$state_name5.''; ?>

                </td>
                <td class="up_form"></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="mix_form"></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!-- End nine -->
              <!-- start ten -->
              <tr>
                <td></td>
                <td></td>
                <td class="middle_form"></td>
                <td class="number_form1"><?php echo ($value->tiesheet11 == 0) ? '' : $value->tiesheet11; ?> 
                <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>
                <a href="javascript:void(0)" style="float: right;"  onclick="upload_orders(<?php echo $value->tiesheet5; ?>,<?php echo $value->tiesheet6; ?>,<?php echo $value->tiesheet11; ?>,<?php echo $value->id; ?>,'tiesheet11')" class="btn-md addon_one"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                <?php } ?>
                </td>
                <td class="up_form"></td>
                <td></td>
                <td class="mix_form"></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!-- End ten -->
              <!-- start eleven -->
              <tr>
                <td class="number_form">6.</td>
                <td class="number_form2"><?php 
                if($value->tiesheet6 == 0){
                $state_name6 = '';
                }else{
                $state_id6 = GetRowsbyId("warriors_championship", "id", $value->tiesheet6)->state;
                $state_name6 = GetRowsbyId("states", "id", $state_id6)->state_name;
                $state_name6 = ' ('.$state_name6.')';
                }
                echo ($value->tiesheet6 == 0) ? 'BY' :  $value->tiesheet6.' '.$state_name6.''; ?>
                </td>
                <td class="down_form"></td>
                <td></td>
                <td class="mix_form"></td>
                <td></td>
                <td class="mix_form"></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!-- End eleven -->
              <!-- start twelve -->
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="middle_form"></td>
                <td class="number_form2"><?php echo ($value->tiesheet14 == 0) ? '' : $value->tiesheet14; ?> 
                <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>
                <a href="javascript:void(0)" style="float: right;"  onclick="upload_orders(<?php echo $value->tiesheet11; ?>,<?php echo $value->tiesheet12; ?>,<?php echo $value->tiesheet14; ?>,<?php echo $value->id; ?>,'tiesheet14')" class="btn-md addon_one"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                <?php } ?>
                </td>
                <td class="down_form"></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!-- End twelve -->
              <!-- start thirteen -->
              <tr>
                <td class="number_form">7.</td>
                <td class="number_form1">
                <?php
                if($value->tiesheet7 == 0){
                $state_name7 = '';
                }else{
                $state_id7 = GetRowsbyId("warriors_championship", "id", $value->tiesheet7)->state;
                $state_name7 = GetRowsbyId("states", "id", $state_id7)->state_name;
                $state_name7 = ' ('.$state_name7.')';
                }
                echo ($value->tiesheet7 == 0) ? 'BY' :  $value->tiesheet7.' '.$state_name7.''; ?>
                </td>
                </td>
                <td class="up_form"></td>
                <td></td>
                <td class="mix_form"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!-- End thirteen -->
              <!-- start fourteen -->
              <tr>
                <td></td>
                <td></td>
                <td class="middle_form"></td>
                <td class="number_form2"><?php echo ($value->tiesheet12 == 0) ? '' : $value->tiesheet12; ?> 
                <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>
                <a href="javascript:void(0)" style="float: right;"  onclick="upload_orders(<?php echo $value->tiesheet7; ?>,<?php echo $value->tiesheet8; ?>,<?php echo $value->tiesheet12; ?>,<?php echo $value->id; ?>,'tiesheet12')" class="btn-md addon_one"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                <?php } ?>
                </td>
                <td class="down_form"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!-- End fourteen -->
              <!-- start fifteen -->
              <tr>
                <td class="number_form">8.</td>
                <td class="number_form2">
                <?php
                if($value->tiesheet8 == 0){
                $state_name8 = '';
                }else{
                $state_id8 = GetRowsbyId("warriors_championship", "id", $value->tiesheet8)->state;
                $state_name8 = GetRowsbyId("states", "id", $state_id8)->state_name;
                $state_name8 = ' ('.$state_name8.')';
                }
                echo ($value->tiesheet8 == 0) ? 'BY' :  $value->tiesheet8.' '.$state_name8.''; ?>
                </td>
                <td class="down_form"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>    
              <!-- End fifteen -->       
            </table>
            <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>  
              <div class="change_list">
                <a href="javascript:void(0)" style="float: right;"  onclick="changelist(<?php echo $value->id; ?>,<?php echo $value->total_warriors; ?>)" class="btn-md"> <i class="bi bi-pencil-square" aria-hidden="true"> Change List</i></a>
              </div>
            <?php } ?>  
            <div style="width: 100%;margin-top: 24px;">            
              <table class="tbl">
                <tr>
                  <td class="name_me">Gold: </td>
                  <td class="goldcolor">
                    <?php
                    if(!empty($value->gold) && $value->gold != 0){
                    $warrior_name = GetRowsbyId('warriors_championship', 'id', $value->gold)->name;
                    $state_id = GetRowsbyId('warriors_championship', 'id', $value->gold)->state;
                    $distict_id = GetRowsbyId('warriors_championship', 'id', $value->gold)->district;
                    $state_name = GetRowsbyId('states', 'id', $state_id)->state_name;
                    $district_name = GetRowsbyId('district', 'id', $distict_id)->city_name;
                    echo $warrior_name.' ('.$district_name.', '.$state_name.')';
                    }else{
                    echo "";
                    }                       
                    ?>
                  </td>
                  <td class="name_me">Silver: </td>
                  <td class="silvercolor">
                    <?php
                    if(!empty($value->silver && $value->silver != 0)){
                    $warrior_name = GetRowsbyId('warriors_championship', 'id', $value->silver)->name;
                    $state_id = GetRowsbyId('warriors_championship', 'id', $value->silver)->state;
                    $distict_id = GetRowsbyId('warriors_championship', 'id', $value->silver)->district;
                    $state_name = GetRowsbyId('states', 'id', $state_id)->state_name;
                    $district_name = GetRowsbyId('district', 'id', $distict_id)->city_name;
                    echo $warrior_name.' ('.$district_name.', '.$state_name.')';
                    }else{
                    echo "";
                    }                       
                    ?>                      
                  </td>
                  <td class="name_me">Bronze1: </td>
                  <td class="bronzecolor">
                    <?php
                    if(!empty($value->bronze1 && $value->bronze1 != 0)){
                    $warrior_name = GetRowsbyId('warriors_championship', 'id', $value->bronze1)->name;
                    $state_id = GetRowsbyId('warriors_championship', 'id', $value->bronze1)->state;
                    $distict_id = GetRowsbyId('warriors_championship', 'id', $value->bronze1)->district;
                    $state_name = GetRowsbyId('states', 'id', $state_id)->state_name;
                    $district_name = GetRowsbyId('district', 'id', $distict_id)->city_name;
                    echo $warrior_name.' ('.$district_name.', '.$state_name.')';
                    }else{
                    echo "";
                    }                       
                    ?>
                  </td>
                  <td class="name_me">Bronze2: </td>
                  <td class="bronzecolor">
                    <?php
                    if(!empty($value->bronze2 && $value->bronze2 != 0)){
                    $warrior_name = GetRowsbyId('warriors_championship', 'id', $value->bronze2)->name;
                    $state_id = GetRowsbyId('warriors_championship', 'id', $value->bronze2)->state;
                    $distict_id = GetRowsbyId('warriors_championship', 'id', $value->bronze2)->district;
                    $state_name = GetRowsbyId('states', 'id', $state_id)->state_name;
                    $district_name = GetRowsbyId('district', 'id', $distict_id)->city_name;
                    echo $warrior_name.' ('.$district_name.', '.$state_name.')';
                    }else{
                    echo "";
                    }                       
                    ?>                        
                  </td>
                  <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>
                  <td>
                    <a href="javascript:void(0)" style="float: right;"  onclick="upload_final(<?php echo $value->id; ?>,<?php echo $value->total_warriors; ?>)" class="btn-md addon_two"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                  </td>
                  <?php } ?>
                </tr>
              </table>
            </div>
          <?php
          }else{
          ?>
            <table border="0" class="admin_form_table">
                <!-- start one -->
                <tr>
                  <td class="number_form">1.</td>
                  <td class="number_form1 "><?php 
                    if($value->tiesheet1 == 0){
                    $state_name1 = '';
                    }else{
                    $state_id1 = GetRowsbyId("warriors_championship", "id", $value->tiesheet1)->state;
                    $state_name1 = GetRowsbyId("states", "id", $state_id1)->state_name;
                    $state_name1 = ' ('.$state_name1.')';
                    }
                    echo ($value->tiesheet1 == 0) ? 'BY' :  $value->tiesheet1.' '.$state_name1.''; ?>
                  </td>
                  <td class="up_form"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <!-- End One -->
                <!-- start seventeen -->
                <tr>
                  <td></td>
                  <td></td>
                  <td class="middle_form"></td>
                  <td class="number_form1">
                    <?php echo ($value->tiesheet17 == 0) ? '' : $value->tiesheet17; ?> 
                    <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>
                    <a href="javascript:void(0)" style="float: right;"  onclick="upload_orders(<?php echo $value->tiesheet1; ?>,<?php echo $value->tiesheet2; ?>,<?php echo $value->tiesheet17; ?>,<?php echo $value->id; ?>,'tiesheet17')" class="btn-md addon_one"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                    <?php } ?>
                  </td>
                  <td class="up_form"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <!-- End seventeen -->
                <!-- start three -->
                <tr>
                  <td class="number_form">2.</td>
                  <td class="number_form2"><?php 
                    if($value->tiesheet2 == 0){
                    $state_name2 = '';
                    }else{
                    $state_id2 = GetRowsbyId("warriors_championship", "id", $value->tiesheet2)->state;
                    $state_name2 = GetRowsbyId("states", "id", $state_id2)->state_name;
                    $state_name2 = ' ('.$state_name2.')';
                    }
                    echo ($value->tiesheet2 == 0) ? 'BY' :  $value->tiesheet2.' '.$state_name2.''; ?>
                  </td>
                  <td class="down_form"></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <!-- End three -->
                <!-- start four -->
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td class="middle_form"></td>
                  <td class="number_form1"><?php echo ($value->tiesheet25 == 0) ? '' : $value->tiesheet25; ?> 
                    <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>
                    <a href="javascript:void(0)" style="float: right;"  onclick="upload_orders(<?php echo $value->tiesheet17; ?>,<?php echo $value->tiesheet18; ?>,<?php echo $value->tiesheet25; ?>,<?php echo $value->id; ?>,'tiesheet25')" class="btn-md addon_one"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                    <?php } ?>
                  </td>
                  <td class="up_form"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <!-- End four -->
                <!-- start five -->
                <tr>
                  <td class="number_form">3.</td>
                  <td class="number_form1"><?php 
                  if($value->tiesheet3 == 0){
                  $state_name3 = '';
                  }else{
                  $state_id3 = GetRowsbyId("warriors_championship", "id", $value->tiesheet3)->state;
                  $state_name3 = GetRowsbyId("states", "id", $state_id3)->state_name;
                  $state_name3 = ' ('.$state_name3.')';
                  }
                  echo ($value->tiesheet3 == 0) ? 'BY' :  $value->tiesheet3.' '.$state_name3.''; ?>
                  </td>
                  <td class="up_form"></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <!-- End five -->
                <!-- start eighteen -->  
                <tr>
                  <td></td>
                  <td></td>
                  <td class="middle_form"></td>
                  <td class="number_form2"><?php echo ($value->tiesheet18 == 0) ? '' : $value->tiesheet18; ?> 
                  <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>
                  <a href="javascript:void(0)" style="float: right;"  onclick="upload_orders(<?php echo $value->tiesheet3; ?>,<?php echo $value->tiesheet4; ?>,<?php echo $value->tiesheet18; ?>,<?php echo $value->id; ?>,'tiesheet18')" class="btn-md addon_one"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                  <?php } ?>
                  </td>
                  <td class="down_form"></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <!-- End eighteen -->
                <!-- start seven -->
                <tr>
                  <td class="number_form">4.</td>
                  <td class="number_form2"><?php 
                  if($value->tiesheet4 == 0){
                  $state_name4 = '';
                  }else{
                  $state_id4 = GetRowsbyId("warriors_championship", "id", $value->tiesheet4)->state;
                  $state_name4 = GetRowsbyId("states", "id", $state_id4)->state_name;
                  $state_name4 = ' ('.$state_name4.')';
                  }
                  echo ($value->tiesheet4 == 0) ? 'BY' :  $value->tiesheet4.' '.$state_name4.''; ?>

                  </td>
                  <td class="down_form"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <!-- End seven -->
                <!-- start twenty nine -->
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td class="middle_form"></td>
                  <td class="number_form1"><?php echo ($value->tiesheet29 == 0) ? '' : $value->tiesheet29; ?>
                  <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?> 
                  <a href="javascript:void(0)" style="float: right;"  onclick="upload_orders(<?php echo $value->tiesheet25; ?>,<?php echo $value->tiesheet26; ?>,<?php echo $value->tiesheet29; ?>,<?php echo $value->id; ?>,'tiesheet29')" class="btn-md addon_one"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                  <?php } ?>
                  </td>
                  <td class="up_form"></td>
                  <td></td>
                </tr>
                <!-- End twenty nine -->
                <!-- start five -->
                <tr>
                  <td class="number_form">5.</td>
                  <td class="number_form1"><?php 
                  if($value->tiesheet5 == 0){
                  $state_name5 = '';
                  }else{
                  $state_id5 = GetRowsbyId("warriors_championship", "id", $value->tiesheet5)->state;
                  $state_name5 = GetRowsbyId("states", "id", $state_id5)->state_name;
                  $state_name5 = ' ('.$state_name5.')';
                  }
                  echo ($value->tiesheet5 == 0) ? 'BY' :  $value->tiesheet5.' '.$state_name5.''; ?>

                  </td>
                  <td class="up_form"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                </tr>
                <!-- End five -->
                <!-- start ninteen -->
                <tr>
                  <td></td>
                  <td></td>
                  <td class="middle_form"></td>
                  <td class="number_form1"><?php echo ($value->tiesheet19 == 0) ? '' : $value->tiesheet19; ?> 
                  <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>
                  <a href="javascript:void(0)" style="float: right;"  onclick="upload_orders(<?php echo $value->tiesheet5; ?>,<?php echo $value->tiesheet6; ?>,<?php echo $value->tiesheet19; ?>,<?php echo $value->id; ?>,'tiesheet19')" class="btn-md addon_one"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                  <?php } ?>
                  </td>
                  <td class="up_form"></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                </tr>
                <!-- End ninteen -->
                <!-- start six -->
                <tr>
                  <td class="number_form">6.</td>
                  <td class="number_form2"><?php 
                  if($value->tiesheet6 == 0){
                  $state_name6 = '';
                  }else{
                  $state_id6 = GetRowsbyId("warriors_championship", "id", $value->tiesheet6)->state;
                  $state_name6 = GetRowsbyId("states", "id", $state_id6)->state_name;
                  $state_name6 = ' ('.$state_name6.')';
                  }
                  echo ($value->tiesheet6 == 0) ? 'BY' :  $value->tiesheet6.' '.$state_name6.''; ?>
                  </td>
                  <td class="down_form"></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                </tr>
                <!-- End six -->
                <!-- start twenty six -->
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td class="middle_form"></td>
                  <td class="number_form2"><?php echo ($value->tiesheet26 == 0) ? '' : $value->tiesheet26; ?> 
                  <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>
                  <a href="javascript:void(0)" style="float: right;"  onclick="upload_orders(<?php echo $value->tiesheet19; ?>,<?php echo $value->tiesheet20; ?>,<?php echo $value->tiesheet26; ?>,<?php echo $value->id; ?>,'tiesheet26')" class="btn-md addon_one"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                  <?php } ?>
                  </td>
                  <td class="down_form"></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                </tr>
                <!-- End twenty six -->
                <!-- start seven -->
                <tr>
                  <td class="number_form">7.</td>
                  <td class="number_form1">
                  <?php
                  if($value->tiesheet7 == 0){
                  $state_name7 = '';
                  }else{
                  $state_id7 = GetRowsbyId("warriors_championship", "id", $value->tiesheet7)->state;
                  $state_name7 = GetRowsbyId("states", "id", $state_id7)->state_name;
                  $state_name7 = ' ('.$state_name7.')';
                  }
                  echo ($value->tiesheet7 == 0) ? 'BY' :  $value->tiesheet7.' '.$state_name7.''; ?>
                  </td>
                  </td>
                  <td class="up_form"></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                </tr>
                <!-- End seven -->
                <!-- start twentee -->
                <tr>
                  <td></td>
                  <td></td>
                  <td class="middle_form"></td>
                  <td class="number_form2"><?php echo ($value->tiesheet20 == 0) ? '' : $value->tiesheet20; ?> 
                  <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>
                  <a href="javascript:void(0)" style="float: right;"  onclick="upload_orders(<?php echo $value->tiesheet7; ?>,<?php echo $value->tiesheet8; ?>,<?php echo $value->tiesheet20; ?>,<?php echo $value->id; ?>,'tiesheet20')" class="btn-md addon_one"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                  <?php } ?>
                  </td>
                  <td class="down_form"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                </tr>
                <!-- End twentee -->
                <!-- start eight -->
                <tr>
                  <td class="number_form">8.</td>
                  <td class="number_form2">
                  <?php
                  if($value->tiesheet8 == 0){
                  $state_name8 = '';
                  }else{
                  $state_id8 = GetRowsbyId("warriors_championship", "id", $value->tiesheet8)->state;
                  $state_name8 = GetRowsbyId("states", "id", $state_id8)->state_name;
                  $state_name8 = ' ('.$state_name8.')';
                  }
                  echo ($value->tiesheet8 == 0) ? 'BY' :  $value->tiesheet8.' '.$state_name8.''; ?>
                  </td>
                  <td class="down_form"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                </tr>    
                <!-- End eight -->  
                <!-- start thirty one -->
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>                  
                  <td></td>                  
                  <td></td>
                  <td class="middle_form"></td>
                  <td class="number_form1"><?php echo ($value->tiesheet31 == 0) ? '' : $value->tiesheet31; ?>
                  <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?> 
                  <a href="javascript:void(0)" style="float: right;"  onclick="upload_orders(<?php echo $value->tiesheet29; ?>,<?php echo $value->tiesheet30; ?>,<?php echo $value->tiesheet31; ?>,<?php echo $value->id; ?>,'tiesheet31')" class="btn-md addon_one"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                  <?php } ?>
                  </td>
                </tr>
                <!-- End thirty one -->
                <!-- start nine -->
                <tr>
                  <td class="number_form">9.</td>
                  <td class="number_form1 "><?php 
                    if($value->tiesheet9 == 0){
                    $state_name9 = '';
                    }else{
                    $state_id9 = GetRowsbyId("warriors_championship", "id", $value->tiesheet9)->state;
                    $state_name9 = GetRowsbyId("states", "id", $state_id9)->state_name;
                    $state_name9 = ' ('.$state_name9.')';
                    }
                    echo ($value->tiesheet9 == 0) ? 'BY' :  $value->tiesheet9.' '.$state_name9.''; ?>
                  </td>
                  <td class="up_form"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                </tr>
                <!-- End nine -->
                <!-- start twenty one -->
                <tr>
                  <td></td>
                  <td></td>
                  <td class="middle_form"></td>
                  <td class="number_form1">
                    <?php echo ($value->tiesheet21 == 0) ? '' : $value->tiesheet21; ?> 
                    <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>
                    <a href="javascript:void(0)" style="float: right;"  onclick="upload_orders(<?php echo $value->tiesheet9; ?>,<?php echo $value->tiesheet10; ?>,<?php echo $value->tiesheet21; ?>,<?php echo $value->id; ?>,'tiesheet21')" class="btn-md addon_one"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                    <?php } ?>
                  </td>
                  <td class="up_form"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                </tr>
                <!-- End twenty one -->
                <!-- start ten -->
                <tr>
                  <td class="number_form">10.</td>
                  <td class="number_form2"><?php 
                    if($value->tiesheet10 == 0){
                    $state_name10 = '';
                    }else{
                    $state_id10 = GetRowsbyId("warriors_championship", "id", $value->tiesheet10)->state;
                    $state_name10 = GetRowsbyId("states", "id", $state_id10)->state_name;
                    $state_name10 = ' ('.$state_name10.')';
                    }
                    echo ($value->tiesheet10 == 0) ? 'BY' :  $value->tiesheet10.' '.$state_name10.''; ?>
                  </td>
                  <td class="down_form"></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                </tr>
                <!-- End ten -->
                <!-- start twenty seven -->
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td class="middle_form"></td>
                  <td class="number_form1"><?php echo ($value->tiesheet27 == 0) ? '' : $value->tiesheet27; ?> 
                    <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>
                    <a href="javascript:void(0)" style="float: right;"  onclick="upload_orders(<?php echo $value->tiesheet21; ?>,<?php echo $value->tiesheet22; ?>,<?php echo $value->tiesheet27; ?>,<?php echo $value->id; ?>,'tiesheet27')" class="btn-md addon_one"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                    <?php } ?>
                  </td>
                  <td class="up_form"></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                </tr>
                <!-- End twenty seven -->
                <!-- start eleven -->
                <tr>
                  <td class="number_form">11.</td>
                  <td class="number_form1"><?php 
                  if($value->tiesheet11 == 0){
                  $state_name11 = '';
                  }else{
                  $state_id11 = GetRowsbyId("warriors_championship", "id", $value->tiesheet11)->state;
                  $state_name11 = GetRowsbyId("states", "id", $state_id11)->state_name;
                  $state_name11 = ' ('.$state_name11.')';
                  }
                  echo ($value->tiesheet11 == 0) ? 'BY' :  $value->tiesheet11.' '.$state_name11.''; ?>
                  </td>
                  <td class="up_form"></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                </tr>
                <!-- End eleven -->
                <!-- start eighteen -->  
                <tr>
                  <td></td>
                  <td></td>
                  <td class="middle_form"></td>
                  <td class="number_form2"><?php echo ($value->tiesheet22 == 0) ? '' : $value->tiesheet22; ?> 
                  <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>
                  <a href="javascript:void(0)" style="float: right;"  onclick="upload_orders(<?php echo $value->tiesheet11; ?>,<?php echo $value->tiesheet12; ?>,<?php echo $value->tiesheet22; ?>,<?php echo $value->id; ?>,'tiesheet22')" class="btn-md addon_one"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                  <?php } ?>
                  </td>
                  <td class="down_form"></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                </tr>
                <!-- End eighteen -->
                <!-- start twelve -->
                <tr>
                  <td class="number_form">12.</td>
                  <td class="number_form2"><?php 
                  if($value->tiesheet12 == 0){
                  $state_name12 = '';
                  }else{
                  $state_id12 = GetRowsbyId("warriors_championship", "id", $value->tiesheet12)->state;
                  $state_name12 = GetRowsbyId("states", "id", $state_id12)->state_name;
                  $state_name12 = ' ('.$state_name12.')';
                  }
                  echo ($value->tiesheet12 == 0) ? 'BY' :  $value->tiesheet12.' '.$state_name12.''; ?>

                  </td>
                  <td class="down_form"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                </tr>
                <!-- End twelve -->
                <!-- start thirty -->
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td class="middle_form"></td>
                  <td class="number_form1"><?php echo ($value->tiesheet30 == 0) ? '' : $value->tiesheet30; ?>
                  <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?> 
                  <a href="javascript:void(0)" style="float: right;"  onclick="upload_orders(<?php echo $value->tiesheet27; ?>,<?php echo $value->tiesheet28; ?>,<?php echo $value->tiesheet30; ?>,<?php echo $value->id; ?>,'tiesheet30')" class="btn-md addon_one"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                  <?php } ?>
                  </td>
                  <td class="down_form"></td>
                  <td></td>
                </tr>
                <!-- End thirty -->
                <!-- start thirteen -->
                <tr>
                  <td class="number_form">13.</td>
                  <td class="number_form1"><?php 
                  if($value->tiesheet13 == 0){
                  $state_name13 = '';
                  }else{
                  $state_id13 = GetRowsbyId("warriors_championship", "id", $value->tiesheet13)->state;
                  $state_name13 = GetRowsbyId("states", "id", $state_id13)->state_name;
                  $state_name13 = ' ('.$state_name13.')';
                  }
                  echo ($value->tiesheet13 == 0) ? 'BY' :  $value->tiesheet13.' '.$state_name13.''; ?>

                  </td>
                  <td class="up_form"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <!-- End thirteen -->
                <!-- start ninteen -->
                <tr>
                  <td></td>
                  <td></td>
                  <td class="middle_form"></td>
                  <td class="number_form1"><?php echo ($value->tiesheet23 == 0) ? '' : $value->tiesheet23; ?> 
                  <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>
                  <a href="javascript:void(0)" style="float: right;"  onclick="upload_orders(<?php echo $value->tiesheet13; ?>,<?php echo $value->tiesheet14; ?>,<?php echo $value->tiesheet23; ?>,<?php echo $value->id; ?>,'tiesheet23')" class="btn-md addon_one"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                  <?php } ?>
                  </td>
                  <td class="up_form"></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <!-- End ninteen -->
                <!-- start fourteen -->
                <tr>
                  <td class="number_form">14.</td>
                  <td class="number_form2"><?php 
                  if($value->tiesheet14 == 0){
                  $state_name14 = '';
                  }else{
                  $state_id14 = GetRowsbyId("warriors_championship", "id", $value->tiesheet14)->state;
                  $state_name14 = GetRowsbyId("states", "id", $state_id14)->state_name;
                  $state_name14 = ' ('.$state_name14.')';
                  }
                  echo ($value->tiesheet14 == 0) ? 'BY' :  $value->tiesheet14.' '.$state_name14.''; ?>
                  </td>
                  <td class="down_form"></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <!-- End fourteen -->
                <!-- start twenty eight -->
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td class="middle_form"></td>
                  <td class="number_form2"><?php echo ($value->tiesheet28 == 0) ? '' : $value->tiesheet28; ?> 
                  <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>
                  <a href="javascript:void(0)" style="float: right;"  onclick="upload_orders(<?php echo $value->tiesheet23; ?>,<?php echo $value->tiesheet24; ?>,<?php echo $value->tiesheet28; ?>,<?php echo $value->id; ?>,'tiesheet28')" class="btn-md addon_one"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                  <?php } ?>
                  </td>
                  <td class="down_form"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <!-- End twenty eight -->
                <!-- start fifteen -->
                <tr>
                  <td class="number_form">15.</td>
                  <td class="number_form1">
                  <?php
                  if($value->tiesheet15 == 0){
                  $state_name15 = '';
                  }else{
                  $state_id15 = GetRowsbyId("warriors_championship", "id", $value->tiesheet15)->state;
                  $state_name15 = GetRowsbyId("states", "id", $state_id15)->state_name;
                  $state_name15 = ' ('.$state_name15.')';
                  }
                  echo ($value->tiesheet15 == 0) ? 'BY' :  $value->tiesheet15.' '.$state_name15.''; ?>
                  </td>
                  </td>
                  <td class="up_form"></td>
                  <td></td>
                  <td class="mix_form"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <!-- End fifteen -->
                <!-- start twentee four -->
                <tr>
                  <td></td>
                  <td></td>
                  <td class="middle_form"></td>
                  <td class="number_form2"><?php echo ($value->tiesheet24 == 0) ? '' : $value->tiesheet24; ?> 
                  <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>
                  <a href="javascript:void(0)" style="float: right;"  onclick="upload_orders(<?php echo $value->tiesheet15; ?>,<?php echo $value->tiesheet16; ?>,<?php echo $value->tiesheet24; ?>,<?php echo $value->id; ?>,'tiesheet24')" class="btn-md addon_one"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                  <?php } ?>
                  </td>
                  <td class="down_form"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <!-- End twentee four -->
                <!-- start sixteen -->
                <tr>
                  <td class="number_form">16.</td>
                  <td class="number_form2">
                  <?php
                  if($value->tiesheet16 == 0){
                  $state_name16 = '';
                  }else{
                  $state_id16 = GetRowsbyId("warriors_championship", "id", $value->tiesheet16)->state;
                  $state_name16 = GetRowsbyId("states", "id", $state_id16)->state_name;
                  $state_name16 = ' ('.$state_name16.')';
                  }
                  echo ($value->tiesheet16 == 0) ? 'BY' :  $value->tiesheet16.' '.$state_name16.''; ?>
                  </td>
                  <td class="down_form"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>    
                <!-- End sixteen -->       
              </table>
              <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>  
                <div class="change_list">
                  <a href="javascript:void(0)" style="float: right;"  onclick="changelist(<?php echo $value->id; ?>,<?php echo $value->total_warriors; ?>)" class="btn-md"> <i class="bi bi-pencil-square" aria-hidden="true"> Change List</i></a>
                </div>
              <?php } ?>  
              <div style="width: 100%;margin-top: 24px;">            
                <table class="tbl">
                  <tr>
                    <td class="name_me">Gold: </td>
                    <td class="goldcolor">
                      <?php
                      if(!empty($value->gold) && $value->gold != 0){
                      $warrior_name = GetRowsbyId('warriors_championship', 'id', $value->gold)->name;
                      $state_id = GetRowsbyId('warriors_championship', 'id', $value->gold)->state;
                      $distict_id = GetRowsbyId('warriors_championship', 'id', $value->gold)->district;
                      $state_name = GetRowsbyId('states', 'id', $state_id)->state_name;
                      $district_name = GetRowsbyId('district', 'id', $distict_id)->city_name;
                      echo $warrior_name.' ('.$district_name.', '.$state_name.')';
                      }else{
                      echo "";
                      }                       
                      ?>
                    </td>
                    <td class="name_me">Silver: </td>
                    <td class="silvercolor">
                      <?php
                      if(!empty($value->silver && $value->silver != 0)){
                      $warrior_name = GetRowsbyId('warriors_championship', 'id', $value->silver)->name;
                      $state_id = GetRowsbyId('warriors_championship', 'id', $value->silver)->state;
                      $distict_id = GetRowsbyId('warriors_championship', 'id', $value->silver)->district;
                      $state_name = GetRowsbyId('states', 'id', $state_id)->state_name;
                      $district_name = GetRowsbyId('district', 'id', $distict_id)->city_name;
                      echo $warrior_name.' ('.$district_name.', '.$state_name.')';
                      }else{
                      echo "";
                      }                       
                      ?>                      
                    </td>
                    <td class="name_me">Bronze1: </td>
                    <td class="bronzecolor">
                      <?php
                      if(!empty($value->bronze1 && $value->bronze1 != 0)){
                      $warrior_name = GetRowsbyId('warriors_championship', 'id', $value->bronze1)->name;
                      $state_id = GetRowsbyId('warriors_championship', 'id', $value->bronze1)->state;
                      $distict_id = GetRowsbyId('warriors_championship', 'id', $value->bronze1)->district;
                      $state_name = GetRowsbyId('states', 'id', $state_id)->state_name;
                      $district_name = GetRowsbyId('district', 'id', $distict_id)->city_name;
                      echo $warrior_name.' ('.$district_name.', '.$state_name.')';
                      }else{
                      echo "";
                      }                       
                      ?>
                    </td>
                    <td class="name_me">Bronze2: </td>
                    <td class="bronzecolor">
                      <?php
                      if(!empty($value->bronze2 && $value->bronze2 != 0)){
                      $warrior_name = GetRowsbyId('warriors_championship', 'id', $value->bronze2)->name;
                      $state_id = GetRowsbyId('warriors_championship', 'id', $value->bronze2)->state;
                      $distict_id = GetRowsbyId('warriors_championship', 'id', $value->bronze2)->district;
                      $state_name = GetRowsbyId('states', 'id', $state_id)->state_name;
                      $district_name = GetRowsbyId('district', 'id', $distict_id)->city_name;
                      echo $warrior_name.' ('.$district_name.', '.$state_name.')';
                      }else{
                      echo "";
                      }                       
                      ?>                        
                    </td>
                    <?php if($_SESSION['userid'] == 1 || $_SESSION['userid'] == 2){ ?>
                    <td>
                      <a href="javascript:void(0)" style="float: right;"  onclick="upload_final(<?php echo $value->id; ?>,<?php echo $value->total_warriors; ?>)" class="btn-md addon_two"> <i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                    </td>
                    <?php } ?>
                  </tr>
                </table>
              </div>
          <?php
          }        
        }
        ?>  
      </div>
    </div>
  </div><!-- End Recent Sales -->
            
         </div
     </section>
<?= $this->endSection()?>
