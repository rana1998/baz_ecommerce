function proclick(val)
{

	// alert(val.getAttribute('id'));
	var valId =  val.getAttribute('id');
	var valType = val.getAttribute('data-pro-type');
	window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+valId+"&valType="+valType+"');?>";
}


function srchclick()
{

  document.getElementById('myModalP').style.display='block';
 
   var item = '1';
  $.ajax({
        url:"<?php echo base_url('index.php/Control_shop/addSearchdash');?>",
        type: "post",
        data: 'val='+item,
          success:function(data)
          {
            console.log(data);
            var obj = JSON.parse(data);
            console.log(obj);
            
//start search
            $("#search").on("keyup", function() {
             // var value = $('#search').val().toLowerCase();
             $('#mainContentItem').html('');
             var searchField = $('#search').val();
             var expression = new RegExp(searchField,'i');
             $.getJSON('addSearchdash',function(obj){
                 $.each(obj,function(key,value){
                  if(value.item_name.search(expression) != -1)
                  {
                    $('#mainContentItem').append('<div class="img_contain" style="display:block;" id="'+value.id+' " data-card-type="'+value.category+'" onclick=addclick(this)><img src = "'+value.item_image_path+'" class="image" style="height:200px;""> </div>');
                  }
                 });
             });
             
          
        });
//end search


          }
    });

}



// // When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  var modal = document.getElementById("myModalP");
  if (event.target == modal) {
    modal.style.display = "none";
  }
}



function addclick(val)
{
    var valId = val.getAttribute('id');
    var valType = val.getAttribute('data-card-type');

    window.location.href = "<?php echo base_url('index.php/Control_shop/product?valId="+valId+"&valType="+valType+"');?>";

}
