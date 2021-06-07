//Ajax 
var request;
$("#forrm_ab").submit(function(event){
    // Prevent default posting of form - put here to work in case of errors
    event.preventDefault();

    // alert('check3');
    var data = new FormData(this);
    // var $resource = $('#classtemplate option:selected').val();
  console.log(data);



    request = $.ajax({
        url:"<?php echo base_url('index.php/Vendor/addaadharpaninfo');?>",
        type: "post",
        // dataType: "json",
        processData:false,
        contentType:false,
        cache:false,
        async:true,
        data: data,
        success: function(data){
            // var obj = JSON.parse(data);
            alert(data);
         
            window.location = "<?php echo base_url('index.php/Vendor/verification') ?>";

            }
    });



 
 $('form').trigger("reset");


});