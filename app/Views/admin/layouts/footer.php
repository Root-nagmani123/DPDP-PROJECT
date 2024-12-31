
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>DPDP</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-backend-bootstrap-backend-html-template/ -->
      Designed by <a href="#" target="_blank">NeGD</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
<script src="<?php echo base_url('backend/assets/vendor/apexcharts/apexcharts.min.js'); ?>"></script>
<script src="<?php echo base_url('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('backend/assets/vendor/chart.js/chart.min.js'); ?>"></script>
<script src="<?php echo base_url('backend/assets/vendor/echarts/echarts.min.js'); ?>"></script>
<script src="<?php echo base_url('backend/assets/vendor/quill/quill.min.js'); ?>"></script>  
<script src="<?php echo base_url('backend/assets/vendor/tinymce/tinymce.min.js'); ?>"></script>
<script src="<?php echo base_url('backend/assets/vendor/php-email-form/validate.js'); ?>"></script>
<script src="<?php echo base_url('backend/assets/js/main.js'); ?>"></script>
<script src="<?php echo base_url('backend/assets/vendor/select2.min.js'); ?>" defer></script>
<script src="<?php echo base_url('backend/assets/vendor/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('backend/assets/vendor/jquery-3.7.0.js'); ?>"></script>
<script src="<?php echo base_url('backend/assets/vendor/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('backend/assets/vendor/dataTables.buttons.min.js'); ?>"></script>
<script src="<?php echo base_url('backend/assets/vendor/jszip.min.js'); ?>"></script>
<script src="<?php echo base_url('backend/assets/vendor/pdfmake.min.js'); ?>"></script>
<script src="<?php echo base_url('backend/assets/vendor/vfs_fonts.js'); ?>"></script>
<script src="<?php echo base_url('backend/assets/vendor/buttons.html5.min.js'); ?>"></script>
<script src="<?php echo base_url('backend/assets/vendor/buttons.print.min.js'); ?>"></script>
<script src="<?php echo base_url('backend/assets/vendor/dataTables.editor.js'); ?>"></script>
<script src="<?php echo base_url('backend/assets/vendor/dataTables.editor.min.js'); ?>"></script>

<?php
if (!empty($custompage_script)) {
    foreach ($custompage_script as $key => $scriptname) { ?>
        <script src="<?php echo base_url('backend/assets/js/'.$scriptname.''); ?>"></script>
    <?php
    }
}
?>

<div id="fb-root"></div>

<script type="text/javascript">

  $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
             'csv', 'excel', 'pdf'
        ]
    } );

 
  $('#example_new').DataTable( {
        dom: 'Bfrtip',
        buttons: [
             'csv', 'excel', 'pdf'
        ]
    } );

} );
  function recieved_charge(id){
    $.ajax({
            url: '<?php echo base_url('admin/color-belt-fulldetails'); ?>',
            type: "post",
            data: {id: id},
            beforeSend: function ()
            {
                $('.loader').html('<span class="loader_content"><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i></span>');
            },
            success: function (data) { 
              $("#datacolor").html(data);
            }
    });

  }
  function addtotiesheetjs(gender,belt,age,weight){
    $.ajax({
            url: '<?php echo base_url('admin/addtotiesheet'); ?>',
            type: "post",
            data: {gender: gender,belt: belt,age: age,weight: weight},
            beforeSend: function ()
            {
                $('.loader').html('<span class="loader_content"><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i></span>');
            },
            success: function (data) { 
                if(data == "success"){                  
                  $(".checkadd").html('<i class="bi bi-check2-all"></i> Done');
              }else{

              }
            }
    });

  }


function addwarriorweight(id,weight,membership_no,name){
     $("#warriors_id").val(id);
     $("#weight").val(weight);
     $("#membership_no").val(membership_no);
     $("#name").val(name);
    $("#receive_yy").modal('show');
}

</script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script type="text/javascript">
  // $(function() {
  //   $( ".datepicker" ).datepicker({ 
  //       autoclose: true, 
  //       todayHighlight: true,
  //       format: 'dd-mm-yyyy',
  // });

  // } );
  $( "#title" ).keyup(function() { 
    var title = $("#title").val();
    title = title.split(' ').join('_');
    title = title.toLowerCase();
    $("#alise").val(title);
});
  
</script>
<script type="text/javascript">
  function upload_orders(redcorner,bluecorner,tisheetoldvalue, id, columname){
    $("#redcorner").val(redcorner);
    $("#bluecorner").val(bluecorner);
    $("#old_winner").val(tisheetoldvalue);
    $("#id").val(id);
    $("#columname").val(columname);
    $("#receive_up").modal('show');
  }
  function upload_final(id,totalwarriors){
    
    $("#id").val(id);
    $("#totalwarriors").val(totalwarriors);
    $("#finalwarriors").modal('show');
  }
  function changelist(id,totalwarriors){    
    $("#id").val(id);
    $("#totalwarriors").val(totalwarriors);
    $("#changelists").modal('show');
  }
  
  $('.changessingleval').on('change', function() { 
    var totalvalues1  = $("#totalvalues").val();
    var numberToCheck  = parseInt($(".changessingleval").val());   
    var originalArray = totalvalues1.split(',').map(function(item) {
        return parseInt(item, 10);
      });
    if ($.inArray(numberToCheck, originalArray) !== -1) {
        console.log(numberToCheck + ' is in the array.');
      } else {
        alert("This id is not in this category! You can only change not add new ids");
        return false;
      }
    //originalArray.push(membership_no);
   //console.log(originalArray);
  // $("#changevalues").val(membership_no);
  
});

  $('#form_winner').on('click', function() { 
     var redcorner = $("#redcorner").val();
      var bluecorner =$("#bluecorner").val();
      var winner = $("#winner").val();
      if(winner == redcorner || winner == bluecorner){

      }else{
        alert("Please Enter Current Corner Number");
        return false;
      }
  });

 

$('#membership_no').on('change', function() { 
    $("#membership_no").select2();
  membership_no = this.value;
    $.ajax({
      url: '<?php echo base_url('admin/warriors-upgrading-cont'); ?>',
      type: "post",
      data: {membership_no: membership_no},      
      success: function (data) {
          
        $(".datacolor1").html(data);
        $("#form_warriors").css("display","block");
        
      }
    });
}); 
$('#membership_no_champ').on('change', function() { 
    $("#membership_no_champ").select2(); 
  membership_no = this.value;   
    $.ajax({
      url: '<?php echo base_url('admin/warriors-upgrading-champ'); ?>',
      type: "post",
      data: {membership_no: membership_no},      
      success: function (data) {
        $(".datacolor3").html(data);
        $("#form_champ_warriors").css("display","block");
        
      }
    });
}); 
$(document).ready(function() {
    $('.js-example-basic-single').select2();
    $('.js-example-basic-single2').select2();
    $("#filter_gender").select2();
    $("#filter_belt").select2();
    $("#filter_age").select2();
    $("#filter_weight").select2();
});

</script>
<script type="text/javascript">
  function recieved_charge1(membership_no){
    $.ajax({
            url: '<?php echo base_url('admin/warriors-upgrading-cont'); ?>',
            type: "post",
            data: {membership_no: membership_no},
            beforeSend: function ()
            {
                $('.loader').html('<span class="loader_content"><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i></span>');
            },
            success: function (data) { 
              $("#datacolor").html(data);
            }
    });

  }
  $('#filter_belt').on('change', function() { 
    filter_belt = this.value;
    $.ajax({
      url: '<?php echo base_url('admin/getagebybelt'); ?>',
      type: "post",
      data: {filter_belt: filter_belt},      
      beforeSend: function ()
      {
          $('.loader').html('<span class="loader_content"><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i></span>');
      },
      success: function (data) {
        $("#filter_age").html(data);
      }
    });
  });
  $('#filter_age').on('change', function() { 
    filter_age = this.value;
    $.ajax({
      url: '<?php echo base_url('admin/getweightbyage'); ?>',
      type: "post",
      data: {filter_age: filter_age},      
      beforeSend: function ()
      {
          $('.loader').html('<span class="loader_content"><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i></span>');
      },
      success: function (data) {
        $("#filter_weight").html(data);
      }
    });
  });
  function recieved_charge2(membership_no, belt){
    $("#membership_no").val(membership_no);
    $("#belt").val(belt);
    $("#receive3").modal('show');
  }



  function warr_submit(id){
    $.ajax({
            url: '<?php echo base_url('admin/warriors-complete-grading'); ?>',
            type: "post",
            data: {id: id},
            beforeSend: function ()
            {
                $('.loader').html('<span class="loader_content"><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i></span>');
            },
            success: function (data) { 
              alert(data);
              window.location.reload();
            }
    });

  }
function export2Word() {
        var html, link, blob, url, css;
        css = (
                '<link href="<?php echo base_url('font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">' + '<style>  table {   border-collapse: collapse;  border-style:none;  } .tables td,th{border:0px solid black;}' +
                '@page WordSection1{size: 41.95pt 95.35pt;mso-page-orientation: portrait;}' +
                //'div.WordSection1 {page: WordSection1;} ' +
                '</style>'
                );

        html = document.getElementById("proposal_query").outerHTML;
        blob = new Blob(['\ufeff', css + html], {
            type: 'application/msword'
        });
        url = URL.createObjectURL(blob);
        link = document.createElement('A');
        link.href = url;
        link.download = 'position_details';  // default name without extension
        document.body.appendChild(link);
        if (navigator.msSaveOrOpenBlob)
            navigator.msSaveOrOpenBlob(blob, 'position_details.doc'); // IE10-11
        else
            link.click();  // other browsers
        document.body.removeChild(link);
    };
    
    $("#btnExportnew11").click(function (e) {
    var sel = $('input[type=checkbox]:checked').map(function(_, el) {
      return $(el).val();
    }).get();
    var valid=$('#valid').val();    
  $.ajax
  ({
  type: 'post',
  url: '<?php echo base_url("admin/download_excel") ?>',
  dataType: 'JSON',
  data: {
  valid:valid,
  },    
  beforeSend: function ()
    {
      $(".btnExportnew11").removeClass("blink");    
    $('.load').html('<button class="btn btn-primary" type="button" disabled><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Downloading...</button>');
       },     
  success: function (response) {
    if (response.msg == "success")
    {
      //alert(response.tabdata);
      $(".tabledatavalues1").append(response.tabdata);
      let file = new Blob([$('#positionpage_main2_excel').html()], {type: "application/vnd.ms-excel"});
      let url = URL.createObjectURL(file);
      let a = $("<a />", {
          href: url,
          download: "position_list.xls"}).appendTo("body").get(0).click();
    $('.load').hide();  
      e.preventDefault();

     
    }
  }
  });    
  });


 $("#btnExportnew15").click(function (e) {
    var sel = $('input[type=checkbox]:checked').map(function(_, el) {
      return $(el).val();
    }).get();
    var valid=$('#valid').val();    
  $.ajax
  ({
  type: 'post',
  url: '<?php echo base_url("admin/download_excel12") ?>',
  dataType: 'JSON',
  data: {
  valid:valid,
  },    
  beforeSend: function ()
    {
      $(".btnExportnew15").removeClass("blink");    
    $('.load').html('<button class="btn btn-primary" type="button" disabled><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Downloading...</button>');
       },     
  success: function (response) {
    if (response.msg == "success")
    {
      //alert(response.tabdata);
      $(".tabledatavalues15").append(response.tabdata);
      let file = new Blob([$('#positionpage_main21_excel').html()], {type: "application/vnd.ms-excel"});
      let url = URL.createObjectURL(file);
      let a = $("<a />", {
          href: url,
          download: "Warriors_Champ_list.xls"}).appendTo("body").get(0).click();
    $('.load').hide();  
      e.preventDefault();

     
    }
  }
  });    
  });
</script>
