$(document).ready(function () {  
  AVD_datatable();
  function AVD_datatable(filter_gender = "",filter_belt = "",filter_age = "",filter_weight = "") {  
      var emp_table = $("#example1").DataTable({         
        ajax: {
          serverSide: true,
          processing: true,
          searchDelay: 500,
          responsive: true,
          order: [],
          url: "https://tmafederationofindia.in/admin/champ_warriors_list_ajax",
          type: "POST",
          data: {
            filter_gender: filter_gender,filter_belt: filter_belt,filter_age: filter_age,filter_weight: filter_weight,         
          },
        },
        drawCallback: function (res) {         
                  var dataItems = "";
                  $.each(res.data, function(index, itemData) {
                      dataItems += itemData.EmailID1 + "\n";
                  });
        },
        columns: [
          {
            data: "id"
          },
          {
            data: "name"
          },
          {
            data: "gender"
          },
          { 
            data: "belt"
          },
          { 
            data: "age"
          },          
          { 
            data: "weight"
          },          
          { 
            data: "date_of_birth"
          },
          { 
            data: "father_name"
          },
          { 
            data: "state"
          },
          { 
            data: "district"
          },
          { 
            data: "aadhar_no"
          },
          { 
            data: "membership_no"
          },
          {
            data: "action"           
          },
          {
            data: "tiesheet"          
          },
        ],
        dom: 'Bfrtip',
        buttons: [
             'csv', 'excel', 'pdf'
        ],
      });



    }
    $("#filter_gender,#filter_belt,#filter_age,#filter_weight").bind("change", function () {
      var filter_gender = $("#filter_gender").val();
      var filter_belt = $("#filter_belt").val();
      var filter_age = $("#filter_age").val();
      var filter_weight = $("#filter_weight").val();
      $("#example1").DataTable().destroy();
      AVD_datatable(filter_gender,filter_belt,filter_age,filter_weight);
    });

    // Edit record

});