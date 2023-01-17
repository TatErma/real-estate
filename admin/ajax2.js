$(document).ready(function() {
empty1();
$("#iconLeft5").keyup(function(){
 empty1();
})

$("#users-list-district").change(function(){
//  populateaddr(this.value);
 empty1();
})
$("#Address").add('#prop-owner').add('input[name="category-filter"]').change(function(){
   empty1();
})

function empty1(){
    var district=$("#users-list-district").val();
    var address=$("#Address").val();
    var owner=$("#prop-owner").val();
    var rors=$("input[name='category-filter']:checked").val();
    var search=$("#iconLeft5").val();
    $.ajax({
        url         : 'processor.php',
        type        : 'POST',
        datatype    : "text",
        data        : {
                 'propfetch' : 'fetch',
                 'dis'       : district,
                 'add'       : address,
                 'own'       : owner,
                 'rors'      : rors,
                 'search'    : search
                       
        },
        success : function(reply){
           var x=JSON.parse(reply);
        //    console.log(reply);
           populateme(x);
        }
     })
   
}

function populateme(x){
    $('#ecommerce-products').empty();
    for (let i = 0; i < x.length; i++) {
    //    console.log(x[i]['pname']);
       var product=`<div class="card ecommerce-card">
       <div class="card-content">
           <div class="item-img text-center">
               <img class="img-fluid" src="../app-assets/images/pages/eCommerce/4.png" alt="img-placeholder">
           </div>
           <div class="card-body">
           <div class="item-wrapper">
                   
                   <div class="item-cost">
                       <h6 class="item-price">
                       ${x[i]['pname']}
                       </h6>
                   </div>
               </div>
               <div class="item-wrapper">
                   
                   <div class="item-cost">
                       <h6 class="item-price">
                       &#8358 ${x[i]['cost']}
                       </h6>
                   </div>
               </div>
              
               <div>
                   <p class="item-description">
                    Extra Notes
                   </p>
               </div>
           </div>
           <div class="item-options text-center">
           <div class="item-wrapper">
                   
                   <div class="item-cost">
                       <h6 class="item-price">
                       ${x[i]['pname']}
                       </h6>
                   </div>
               </div>
               <div class="item-wrapper">
                   <div class="item-cost">
                       <h6 class="item-price">
                       &#8358 ${x[i]['cost']}
                       </h6>
                   </div>
               </div>
                <div class="wishlist">
                <form method="POST" action="viewp.php">
                <input type="hidden" value="${x[i]['id']}" name="id">
                <button type="submit" style="border:none;background:none"><i class="fa fa-home mr-25">View Property</i></button>
                <form>
               </div>
           </div>
       </div>
     </div>`
     
     $('#ecommerce-products').append(product);
    }


  $("#rno").text(`${x.length} result(s) found`); 
}

})
