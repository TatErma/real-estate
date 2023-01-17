/*=========================================================================================
    File Name: data-list-view.js
    Description: List View
    ----------------------------------------------------------------------------------------
    Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

function sorttable(){
  var acctype=$('#users-list-type').val();
  var district=$('#users-list-district').val();
  var address=$('#users-list-address').val();
  //   console.log(address);
  $.ajax({
    
      url         : 'usersd.php',
      type        : 'POST',
      datatype    : 'JSON',
      data        : {
               'districts' : district,
               'acctype' : acctype, 
               'address' : address      
      },
      success : function(reply){
          var x=JSON.parse(reply);
          dataListView.clear()
          dataListView.rows.add(x[0]);
          dataListView.draw();
          
      }
   })
 
}
$(document).ready(function(){
  // Scrollbar
 
  if ($(".data-items").length > 0) {
    new PerfectScrollbar(".data-items", { wheelPropagation: false })
  }

  // Close sidebar
  $(".hide-data-sidebar, .cancel-data-btn, .overlay-bg").on("click", function() {
    $(".add-new-data").removeClass("show")
    $(".overlay-bg").removeClass("show")
    $('#data-address').empty()
    $("#data-name, #data-price").val("")
    $("#data-category, #data-status").prop("selectedIndex", 0)
  })



 
  if (navigator.userAgent.indexOf("Mac OS X") != -1) {
    $(".dt-checkboxes-cell input, .dt-checkboxes").addClass("mac-checkbox")
  }

  dataThumbView.on('draw.dt', function(){
    setTimeout(function(){
      if (navigator.userAgent.indexOf("Mac OS X") != -1) {
        $(".dt-checkboxes-cell input, .dt-checkboxes").addClass("mac-checkbox")
      }
    }, 50);
  });

  // To append actions dropdown before add new button
  var actionDropdown = $(".actions-dropodown")
  actionDropdown.insertBefore($(".top .actions .dt-buttons"))

  sorttable();
})
 


  "use strict"
  // init list view datatable
  var dataListView = $(".data-list-view").DataTable({
    responsive: false,
    columnDefs: [
      {
        orderable: false,
        targets: 0,
        checkboxes: { selectRow: true },
        sortable:false
      }
    ],
    dom:
      '<"top"<"actions action-btns"B><"action-filters"lf>><"clear">rt<"bottom"<"actions">p>',
    oLanguage: {
      sLengthMenu: "_MENU_",
      sSearch: ""
    },
    aLengthMenu: [[4, 10, 15, 20], [4, 10, 15, 20]],
    select: {
      style: "multi"
    },
    order: [[1, "asc"]],
    bInfo: false,
    pageLength: 4,
    buttons: [],
    initComplete: function(settings, json) {
      $(".dt-buttons .btn").removeClass("btn-secondary")
    },
   
          
  });

  dataListView.on('draw.dt', function(){
    bttns()
    setTimeout(function(){
      if (navigator.userAgent.indexOf("Mac OS X") != -1) {
        $(".dt-checkboxes-cell input, .dt-checkboxes").addClass("mac-checkbox")
      }
    }, 50);
  });

  
  // init thumb view datatable
  var dataThumbView = $(".data-thumb-view").DataTable({
    responsive: false,
    columnDefs: [
      {
        orderable: true,
        targets: [0],
        checkboxes: {selectRow: true }
      }
    ],
    dom:
      '<"top"<"actions action-btns"B><"action-filters"lf>><"clear">rt<"bottom"<"actions">p>',
    oLanguage: {
      sLengthMenu: "_MENU_",
      sSearch: ""
    },
    aLengthMenu: [[4, 10, 15, 20], [4, 10, 15, 20]],
    select: {
      style: "multi"
    },
    order: [[1, "asc"]],
    bInfo: false,
    pageLength: 4,
    buttons: [
      {
        
      }
    ],
    initComplete: function(settings, json) {
      $(".dt-buttons .btn").removeClass("btn-secondary")
    }
  })



//additional js
// Events
$('#users-list-district').change(function(){ 
   theadd();
   sorttable();
   
})

$('#users-list-type').change(function(){ 
  sorttable();
})
$('#users-list-address').change(function(){
     sorttable();
})

$(".updating").click(function(){
  var name= $('#data-fname').val();
  var lname=$('#data-lname').val();
  var username=$('#data-username').val();
  var number=$('#data-numba').val();
  var address=$('#data-address').val();
  var mail=$('#data-email').val();
  var acc=$('#data-acc_type').val();
  var id=$("#hidden").val();
  var gender=$("input[type='radio'][name='gender']:checked").val();

  $.ajax({
    url         : 'processor.php',
    type        : 'POST',
    datatype    : "json",
    data        : {
          'name' :  name, 'lname' : lname  , 'username' : username  ,'number' : number, 'address' :  address,
          'mail' :  mail    ,'acc' : acc , 'upduser':'user','id': id ,'gender':gender       
    },success:function(reply){
      sorttable()
      toastr.success("User has been Updated","Success")
    }
  })
})



// Functions
function theadd(){
  var x=$('#users-list-district').val();
  if(x==""){
    $('#users-list-address').empty();
     var opt=`<option value="">-- Select Address --</option>`;
     $('#users-list-address').append(opt);
  }else{
    $.ajax({
      url         : 'processor.php',
      type        : 'POST',
      datatype    : 'JSON',
      data        : {
               'districtid' : x,   
      },
      success : function(reply){
          var x=JSON.parse(reply);
          $('#users-list-address').empty();
          var opt=`<option value="">-- Select Address --</option>`;
            if(x.length>0){
              for (let i = 0; i < x.length; i++) {
              var opt=opt+`<option value='${x[i]['id']}'>${x[i]['address_name']}</option>`;
            }
          }
          $('#users-list-address').append(opt);
          }
      
   })
  }
  
}

function addanddis(id,z){
  $.ajax({
    url         : 'processor.php',
    type        : 'POST',
    datatype    : "json",
    data        : {
             'iduser' :  id ,    
    },success: function(reply){
      var x=JSON.parse(reply)
      $('#data-district').val(x[0][0][1]);
      $('input[type="radio"][value='+ x[2] +']').attr('checked', 'checked');
      for (let i = 0; i < x[0].length; i++) {
        var opt=`<option value='${x[0][i]["id"]}'>${x[0][i]["address_name"]}</option>`
        $('#data-address').append(opt)
      }
      $('#data-address').val(x[1])
      $('#data-district').change(function(){
      $.ajax({
        url         : 'processor.php',
        type        : 'POST',
        datatype    : "json",
        data        : {
              'realid': $('#data-district').val()
        },success: function (reply) {
          var x=JSON.parse(reply)
          $('#data-address').empty()
          var opt1=`<option value=''>--Select Address--</option>`
          $('#data-address').append(opt1)
          for (let i = 0; i < x.length; i++) {
            var opt=`<option value='${x[i]["id"]}'>${x[i]["address_name"]}</option>`
            $('#data-address').append(opt)
          }
        }
        })
      })
     
    }
  })
}

function bttns() {
  $('.action-delete').on("click", function(e){
    e.stopPropagation();
    var va=$(this).attr('data-value');
    if(confirm("Are you sure you want to delete??")){
      deleteuser(va);
      toastr.success("User has been deleted","Success")
      $(this).closest('td').parent('tr').fadeOut();
      
          }else{
        return;
      }
  });

  $('.action-edit').on("click",function(e){
    var va1=$(this).attr('data-value');
    var va=$(this).parent().siblings();
    let z=[];
    for(i=1; i<va.length;i++){
      z.push(va[i].firstChild.data);
    }
    e.stopPropagation();
    $('#data-fname').val(z[0]);
    $('#data-lname').val(z[1]);
    $('#data-username').val(z[2]);
    $('#data-numba').val(z[3]);
    $("#hidden").val(va1);
    addanddis(va1,z);
    $('#data-email').val(z[5]);
    $('#data-acc_type').val(z[6]);
    $(".add-new-data").addClass("show");
    $(".overlay-bg").addClass("show");
  });
}


function deleteuser(va){
  $.ajax({
    url         : 'processor.php',
    type        : 'POST',
    datatype    : "text",
    data        : {
             'userval' :  va              
    }
  })
}

function updating(id,upd){
  $.ajax({
    url         : 'processor.php',
    type        : 'POST',
    datatype    : "text",
    data        : {
             'upid' :  id,
             'upd'  :  upd          
    }
  })
}



