function proclick(val)
{

	// alert(val.getAttribute('id'));
	var valId =  val.getAttribute('id');
	var valType = val.getAttribute('data-pro-type');
	window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+valId+"&valType="+valType+"');?>";
}