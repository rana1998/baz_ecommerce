$(document).ready(function(){
   $("#aid").click(function(){
            
                    var amount_pay = document.getElementById('famt').innerHTML;
                    alert(amount_pay);
                      var request;
                   request = $.ajax({
                     url:"<?php echo base_url('index.php/Control_pay/payment');?>",
                     type: "post",
                     data: "order_amount=" + amount_pay,
                     success: function(data) {
                        // window.reload();
                        var obj = parseJSON(data);
                       console.log(obj);
                        }
                    });

                   // alert("check");

              
            
           

    });
});
