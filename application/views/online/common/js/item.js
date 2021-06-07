
function btnOnetoggle(){
   //alert("check");
   var tclass = document.getElementById("one"); 
   var aclass = document.getElementById("two");

   tclass.style.display="block";
   aclass.style.display="none";
   
}

function btnTwotoggle(){
   var tclass = document.getElementById("one"); 
   var aclass = document.getElementById("two");

   tclass.style.display="none";
   aclass.style.display="block";
   
}




//Ajax 
var request;
$("#forrm_ab").submit(function(event){
    // Prevent default posting of form - put here to work in case of errors
    event.preventDefault();

   
    // var data = new FormData(this);
    // var $resource = $('#classtemplate option:selected').val();
  console.log(data);


    data.append('classtemplate',$resource);

    // Fire off the request to /form.php
    request = $.ajax({
        url:"<?php echo base_url('index.php/Control_shop/');?>",
        type: "post",
        // dataType: "json",
        processData:false,
        contentType:false,
        cache:false,
        async:true,
        data: data,
    });



 
 $('form').trigger("reset");
 // alert('Successfully submitted');

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // console.log("Hooray, it worked!");
        alert(response);

    });



    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

});

$(document).ready(function(){
  $('#myTable').DataTable();
});

