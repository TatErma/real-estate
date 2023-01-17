// $('#users-list-district').add('#users-list-type').change(function(){
//     var extra0="";
//     sorttable( extra0);
// })

// $('#users-list-address').change(function(){
//      var extra0="extra";
//      sorttable(extra0);
// })
// function sorttable(extra0){
//     var acctype=$('#users-list-type').val();
//     var district=$('#users-list-district').val();
//     var address=$('#users-list-address').val();
//     //   console.log(address);
//     $.ajax({
//         url         : 'usersd.php',
//         type        : 'POST',
//         datatype    : 'JSON',
//         data        : {
//                  'districts' : district,
//                  'acctype' : acctype, 
//                  'address' : address      
//         },
//         success : function(reply){
//             var x=JSON.parse(reply);
//             // console.log(x);
//             // console.log(x[0].length)
//             populate(x[0]);
//             $(".data-list-view").DataTable().draw();
           
//         }
//      })
   
// }

// function populate(x){
//     $("tbody").empty();
//     for(i=0;i<x.length;i++){
//     var row=`<tr>
//         <td></td>
//         <td>${x[i]["name"]}</td>
//         <td>${x[i]["username"]}</td>
//         <td>${x[i]["phone_number"]}</td>
//         <td>${x[i]["address_name"]}</td>
//         <td>${x[i]["email"]}</td>
//         <td>${x[i]["acc_type"]}</td>
       
//     </tr>`

//     $("table").append(row);
    
//     }

// }
// function addaddress(x){
//     $("#users-list-address").empty()
//     var c=`<option value="">All</option>`
//     $("#users-list-address").append(c)
//       for (let i = 0; i < x.length; i++) {
//          let r=`<option value="${x[i]["id"]}" class="address1">${x[i]["address_name"]}</option>`
//          $("#users-list-address").append(r);
//       }                 
// }
// function empty1(x){
//     // console.log(x)
//     $.ajax({
//         url         : 'del.php',
//         type        : 'POST',
//         datatype    : "text",
//         data        : {
//                  'id' : x
                       
//         },
//         success : function(reply){
//             var extra0="extra";
//             sorttable(extra0);
           
//         }
//      })
   
// }


// add district and address add page
$('#btnnn1').click(function(){
  var districtt=$('#dname').val();
  var longitude=$('#lon').val();
  var latitude=$('#lat').val();
  if (districtt && longitude && latitude){
    $("#warn").css("display", "none");
    adddistr();
  }else{
    $("#warn").css("display", "block");
  }
})

$('#btnnn2').click(function(){
  var districtid=$('#districtid').val();
  var Address=$('#Addressname').val();
  if (districtid && Address){
    $("#warn2").css("display", "none");
    addaddr();
  }else{
    $("#warn2").css("display", "block");
  }
   
})

// add district and address functions
function addaddr() {
    var districtid=$('#districtid').val();
    var Address=$('#Addressname').val();
    $.ajax({
        url         : 'processor.php',
        type        : 'POST',
        datatype    : 'JSON',
        data        : {
                 'districtidd' : districtid,
                 'Address' : Address
                    
        },
        success : function(reply){
          if(reply==0){
            toastr.success("Address Registered", 'Success');
          }else{
            toastr.info("Address Already Registered");
          }
         
            }
        
     })
}


function adddistr(){
    var districtt=$('#dname').val();
    var longitude=$('#lon').val();
    var latitude=$('#lat').val();
    $.ajax({
        url         : 'processor.php',
        type        : 'POST',
        datatype    : 'JSON',
        data        : {
                 'districts1' : districtt,
                 'long' : longitude, 
                 'lati' : latitude     
        },
        success : function(reply){
          if(reply==0){
            toastr.success("District Registered", 'Success');
          }else{
            toastr.info("District Already Registered");
          }
          
                
            }
        
     })
   
}

// address change onchange for add user and all user
// district input=#districtid
// address input=#addid
$("#districtid").change(function(){
    var x=$("#districtid").val();
    $.ajax({
        url         : 'processor.php',
        type        : 'POST',
        datatype    : 'JSON',
        data        : {
                 'districtid' : x,   
        },
        success : function(reply){
            var x=JSON.parse(reply);
            $("#addid").empty();
            if(x=="empty"){
              var opt1=`<option>-- Select Address --</option>`;
              $("#addid").append(opt1);
            }else{
              if(x.length==0){
                var opt1=`<option>-- Select Address --</option>`;
                $("#addid").append(opt1);
              }else{
                for (let i = 0; i < x.length; i++) {
                var opt=`<option value='${x[i]['id']}'>${x[i]['address_name']}</option>`;
                $("#addid").append(opt);
              }
            }
            }
            }
        
     })
    
})
