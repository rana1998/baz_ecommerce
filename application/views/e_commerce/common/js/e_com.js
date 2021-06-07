
window.onload=function()
{

var a=document.querySelectorAll('li');
console.log(a);
var i=0;
for(i;i<a.length;i++)
{
	a[i].addEventListener("click",function(){
		
		var b=this.innerHTML;
		if(b=='Recent')
		{
			document.getElementById('one').style.display="flex";
			document.getElementById('two').style.display="none";
			document.getElementById('three').style.display="none";
			document.getElementById('four').style.display="none";
			document.getElementById('five').style.display="none";
		}
		else if(b== 'Featured')
		{
			document.getElementById('one').style.display="none";
			document.getElementById('two').style.display="flex";
			document.getElementById('three').style.display="none";
			document.getElementById('four').style.display="none";
			document.getElementById('five').style.display="none";

		}
		else if(b=='Top Rated')
		{
			document.getElementById('one').style.display="none";
			document.getElementById('two').style.display="none";
			document.getElementById('three').style.display="flex";
			document.getElementById('four').style.display="none";
			document.getElementById('five').style.display="none";
		}
		else if(b=='Sale')
		{
			document.getElementById('one').style.display="none";
			document.getElementById('two').style.display="none";
			document.getElementById('three').style.display="none";
			document.getElementById('four').style.display="flex";
			document.getElementById('five').style.display="none";
		}
		else if(b=='Best Selling')
		{
			document.getElementById('one').style.display="none";
			document.getElementById('two').style.display="none";
			document.getElementById('three').style.display="none";
			document.getElementById('four').style.display="none";
			document.getElementById('five').style.display="flex";
		}
		else
		{

		}

	});
}

}



function proclick(val)
{

	// alert(val.getAttribute('id'));
	var valId =  val.getAttribute('id');
	var valType = val.getAttribute('data-pro-type');
	window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+valId+"&valType="+valType+"');?>";
}


function tblshow()
{

	$("#tbl").show();
	$("#gsearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("table tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
}



window.onclick = function(event)
{
	if(event.target ==  document.getElementById('tblId'))
	{
		
	}
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


 $(window).on('load',function(){
       setTimeout(function(){ $('#myModal').show();
   }, 5000);
        
    });

  /*  window.onclick = function(event) {

  var modalDiv = document.getElementById('myModal');
  if (event.target == modalDiv) {
    modalDiv.style.display = "none";
  }
}
*/
function closeclick() {
   

   var viewDivTwo = document.getElementById('myModal');
   viewDivTwo.style.display = "none";

   var pin = document.getElementById('pincode').value;
   //alert(pin);
   var inpReq;
      inpReq = $.ajax({
           // url:"<?php echo base_url('index.php/Control_shop/acceptInfo2');?>",
           url:"<?php echo base_url('index.php/control_e_commerce/updpincodetempusr');?>",
           type:"post",
           data: 'pincode='+pin,
            success:function(data)
          {
            //console.log(data);
           // var obj = JSON.parse(data);
            //console.log(obj);
            //window.location.reload();
   
          }
      });


}

