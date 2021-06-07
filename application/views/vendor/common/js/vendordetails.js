//Ajax 
var request;
$("#forrm_ab").submit(function(event){
    // Prevent default posting of form - put here to work in case of errors
    event.preventDefault();

    // alert('check2');
    var data = new FormData(this);

  console.log(data);



    request = $.ajax({
        url:"<?php echo base_url('index.php/Vendor/addvendor');?>",
        type: "post",
        // dataType: "json",
        processData:false,
        contentType:false,
        cache:false,
        async:true,
        data: data,
        success: function(res){
            var obj = JSON.parse(res);
            // $('form').trigger("reset");
            window.location = "<?php echo base_url('index.php/Vendor/card') ?>";

            }
    });



 
 


});