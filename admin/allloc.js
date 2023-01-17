$(document).ready(function() {
  
  $('#list-district').change(function(){
     theajax();
    if($('#list-district').val()=="" && $('#search').val()==""){
        $("#ggg").css("display","none"); 
    }
  })
  $('#search').keyup(function(){
    theajax(); 
  })

  function theajax(){
    var thedist=$('#list-district').val();
    var search=$('#search').val();
    var check="all locate";
    $.ajax({
        url         : 'processor.php',
        type        : 'POST',
        datatype    : "text",
        data        : {
                 'thedist' :  thedist,
                 'search' :  search,
                 'check'   :  check               
                       
        },
        success : function(reply){
        var x=JSON.parse(reply);
        populatedistr(x[0]);
        populateaddr(x[1],thedist);
        }
     })
  }
  function populatedistr(x){
    $("#disttab").empty();
    for (let i = 0; i < x.length; i++) {
        var row=`<tr>
                <td><input type="text" class="form-control" value="${x[i]['name']}"></td>
                <td><input type="text" class="form-control" value="${x[i]['longitude']}"></td>
                <td><input type="text" class="form-control" value="${x[i]['latitude']}"></td>
                <td> 
                <span class='action-edit' title='Update'  data-value="${x[i]['id']}" data-type="district"><i class='feather icon-edit'></i></span>    
                <span class='action-delete del type-warning' title='Delete'  data-value="${x[i]['id']}" data-type="district"><i class='feather icon-trash'></i></span>
                </td>
            </tr>
            
            
     `

     $("#disttab").append(row);
        
    }

  }

  function populateaddr(x,d){
    $("#addrtab").empty();
    if(x.length==0){
        var emp=`<tr>
                 <td colspan="2" style="text-align:center">No Registered Address !!!</td>
                </tr>
        `
        $("#addrtab").append(emp);
       
    }else{
        for (let i = 0; i < x.length; i++) {
            var row=` <tr>
                    
                    <td><input type="text" class="form-control" value="${x[i]['address_name']}"></td>
                    <td> 
                    <span class='action-edit' title='Update' data-value="${x[i]['id']}" data-type="address"><i class='feather icon-edit'></i></span>    
                    <span class='action-delete del type-warning ' title='Delete' name="deletedistr" data-value="${x[i]['id']}" data-type="address"><i class='feather icon-trash'></i></span>
                    </td>
                  </tr>
        `
        $("#addrtab").append(row);
        $("#ggg").css("display","block");
        } 
    }
   
  }
 
})

$(document).on('click','span.action-edit',function(){
  var va=$(this).attr('data-value');
  var type=$(this).attr('data-type');
  var x=$(this).parent().siblings();
  let z=[];
  for(i=0; i<x.length;i++){
    z.push(x[i].firstChild.value);
  }
  console.log(z);
  editing(va,type,z)   
 
})


$(document).on('click','span.action-delete',function(){
  var va=$(this).attr('data-value');
  var type=$(this).attr('data-type');
  var me=$(this).closest('tr');
   if(type=="district"){
            if(confirm("Are you sure you want to delete?\nDeleting will delete all address under this district if any.")){
               deleting(va,type,me);
              }else{
            return;
          }

   }else{

    if(confirm("Are you sure you want to delete this address?")){
      deleting(va,type,me);
      }else{
    return;
   }
  }
  
})


function deleting(va,type,me){
  
  $.ajax({
    url         : 'processor.php',
    type        : 'POST',
    datatype    : "text",
    data        : {
             'distval' :  va,
             'type' :  type,              
    },
    success : function(){
         me.remove();
      if(type=="district"){
          $('#list-district').val("").change();
          toastr.warning("District has been deleted")
      }else{
        toastr.warning("Address has been deleted")
        
      }
     
    }
 })
}

function editing(va,type,arr){
  $.ajax({
    url         : 'processor.php',
    type        : 'POST',
    datatype    : "text",
    data        : {
             'values' :  va,
             'type' :  type,
             'arr'  : arr
                          
                   
    },
    success : function(){
      if(type=="district"){
      toastr.success("District has been updated", "Success")
    }else{
      toastr.success("Address has been updated", "Success")
      
    }
     
     
    }
 })
}
