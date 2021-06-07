
$(document).ready(function(){
    $('#loginId').on('submit',function(e){
         e.preventDefault();
         // alert('check1');
         // if ($("#input_file").val()== ' ') {
         //  alert('please select the valid image');
         // }
         // else{
          $("#ladda2").show();
        
          $.ajax({
                url:"<?php echo base_url('index.php/Control_e_commerce/auth');?>",
                method:'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success:function(data){
                  // alert(data);
                  $("#log_help").click();
                  $("#ladda2").hide();
                               
                }
          });
         // }
    });
        
});










function blclick()
{
	 var profileId=document.getElementById("re");
  if(profileId.style.display=="flex")
  {
  	profileId.style.display="none";
  }
  else
  {
  	profileId.style.display="flex";
  }
}






function proclick(val)
{

	// alert(val.getAttribute('id'));
	var valId =  val.getAttribute('id');
	var valType = val.getAttribute('data-pro-type');
	window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+valId+"&valType="+valType+"');?>";
}


function catclick()
{
var attend = document.getElementById("subAttend");
if(attend.style.display=="none")
{
  attend.style.display="block";
}
else
{
  attend.style.display="none";
}

}



function tblshow()
{
  if($("#gsearch").val() !== "")
  {
  $("#tbl").show();
  $("#gsearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("table tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  }
  else
  {
    $("#tbl").hide();
  }

}


function itemget()
{
   // alert('check3');
}



function itmsrch()
{
  var valType = $("#categoryId option:selected").val();
  // alert(valType);

  var valId = $("#gsearch").val();
   // alert(valId);


  window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+valId+"&valType="+valType+"');?>";


}


function itmclick(val)
{
  document.getElementById('tbl').style.display = "none";
  // alert(val.innerHTML);
  // alert(val.getAttribute('data-cat-type'));

  var cat = val.getAttribute('data-cat-type');

  // alert(val.innerHTML);

  $('#gsearch').val(val.innerHTML);
  window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+val.id+"&valType="+cat+"');?>";


  // $('#gsearch').val(val.innerHTML);
  // window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+val.innerHTML+"&valType="+cat+"');?>";
}
