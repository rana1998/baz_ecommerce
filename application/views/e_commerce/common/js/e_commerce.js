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

	$('#gsearch').val(val.innerHTML);
	window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+val.id+"&valType="+cat+"');?>";
}



