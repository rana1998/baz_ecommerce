window.onload = function()
{



}


// function modalclick(btnId)
// { 
//      $('#stu_data').empty();
   
//     // var valid  = btnId.getAttribute('id');
//     // alert(valid);
//       // var modal = document.getElementById("classtableId");
//       //     modal.style.display = "block";

//     // document.getElementById(valid).addEventListener('click',function(){
//     //        var modal = document.getElementById("classtableId");
//     //       modal.style.display = "block";
//     // });


//     var span = document.getElementsByClassName("close")[0];
//     span.onclick = function() {
//          var modal = document.getElementById("classtableId");
//   modal.style.display = "none";
//    }
//    var class_id= btnId.getAttribute('id');
//    // alert(class_id);
//    $.ajax({
//         type: "POST",
//         url: "<?php echo base_url('index.php/control_admin/classDetails'); ?>",
//         dataType: 'json',
//         data:'val12='+class_id,
//         success: function(res){
//             $('#stu_data').empty();
//             var modal = document.getElementById("classtableId");
//           modal.style.display = "block";

//             $.each(res, function(index, element) {
//                 $('#stu_data').append(`<tr><td>`+element.id+`</td>
//             <td>`+element.user_name+`</td>
//             <td>`+element.user_email+`</td>
//             <td>`+element.user_code+`</td>
//             <!--<td><button type="button" id = "`+element.id+`" onclick = "Hello" view</button><button type="button" id = "`+element.id+`" onclick = viewmodalclick(`+element.id+`)>Delete Student</button></td>-->
//           </tr>`);
//             }); 
//             $('#myTable').DataTable();
// // //             var ab=JSON.parse(res);
// //             console.log(ab);
// //             var len=ab.length();
// //             alert(len);
// //             $("").append(`
// //             
            
// // `)
// //             alert(res);
//             // console.log(res);
//             } });
// }


// function viewmodalclick(btnId)
// { 
     
//    // console.log(btnId);
//     // var valid  = btnId.getAttribute('id');
//     // alert(valid);
//       var modal = document.getElementById("classtableTwoId");
//           modal.style.display = "block";

//     // document.getElementById(valid).addEventListener('click',function(){
//     //        var modal = document.getElementById("classtableId");
//     //       modal.style.display = "block";
//     // });


//     var span = document.getElementById("closeTwo");
//     span.onclick = function() {
//          var modal = document.getElementById("classtableTwoId");
//   modal.style.display = "none";
//   // var stu_id= btnId.getAttribute('id');
//   // alert(stu_id);
//    }

//    $.ajax({
//         type: "POST",
//         url: "<?php echo base_url('index.php/control_admin/student_data'); ?>",
//         dataType: 'json',
//         data:'val12='+btnId,
//         success: function(res){
//             var obj = JSON.parse(res);
//             // JSON.de
//             // alert(res.length);
//             // $.each(res, function(index, element) {
//                 $('#stu_data_detai').append(`<br><?php print_r(`+obj+`);?>`);
//             // });
//           console.log(res); 
//             } });
// }


// function btnOnetoggle1(id){
//    //alert("check");
//    var tclass = document.getElementById("one"); 
//    var aclass = document.getElementById("two");

   
//    $.ajax({
//         type: "POST",
//         url: "<?php echo base_url('index.php/control_admin/other_em_data'); ?>",
//         dataType: 'json',
//         data:'val12='+id,
//         success: function(res){
//             $('#tea_data').empty();
//             tclass.style.display="block";
//             aclass.style.display="none";
//             // var obj = JSON.parse(res);
//             // JSON.de
//             // alert(res.length);
//             var count=0;

//             $.each(res, function(index, element) {
//                 count++;
//                 $('#tea_data').append(`<tr><td>`+count+`</td>
//                     <td>`+element.user_name+`</td>
//                     <td><?php echo $this->session->userdata('sessionn');?></td>
//                     <td>`+element.user_code+`</td>
//                     <!--<tr><td>`+element.user_name+`</td>-->`);
//             });
//           //4 console.log(res); 
//           $('#myTable').DataTable(
//           // {
//           //   dom:'Bfrtip',
//           //   button:['copy' ,'csv','excel','pdf', 'print' ]}
//           );
//             }

//              });   
// }
// function btnTwotoggle1(){
//    var tclass = document.getElementById("one"); 
//    var aclass = document.getElementById("two");

//    tclass.style.display="none";
//    aclass.style.display="block";
   
// }


// function btnOnetoggle(){
//    //alert("check");
//    var tclass = document.getElementById("one"); 
//    var aclass = document.getElementById("two");

//    tclass.style.display="block";
//    aclass.style.display="none";
   
// }

// function btnTwotoggle(){
//    var tclass = document.getElementById("one"); 
//    var aclass = document.getElementById("two");

//    tclass.style.display="none";
//    aclass.style.display="block";
   
// }


//Ajax 


// // Variable to hold request
// var request;

// // Bind to the submit event of our form
// $("#formId").submit(function(event){
//     //alert("check1");
//     // Prevent default posting of form - put here to work in case of errors
//     event.preventDefault();

//     // Abort any pending request
//     // if (request) {
//     //     request.abort();
//     // }
//     // setup some local variables
//     // var $form = $(this);

//     // Let's select and cache all the fields
//     // var $inputs = $form.find("input, select, button, textarea");
//     var class_id = $("#class_id_data").val();
//     // alert(class_id);
//     // if(class_id == '0'){
//     //     alert("jd");
//     //     return;
//     // }
//     var studentname = $("#studentname").val();
//     // alert(studentname);
//     var fathername = $("#fathername").val();
//     // alert(class_id);
//     var mothername = $("#mothername").val();
//     // alert(mothername);
//     var parentmob = $("#parentmob").val();
//     // alert(parentmob);
//     var email_add= $("#email_add").val();
//     // alert(email_add);
//     var address= $("#address").val();
//     // alert(address);
//     var dob = $("#dob").val();
//     // alert(dob);
//     var bloodgroup = $("#bloodgroup").val();
//     // alert(bloodgroup);
//     var cur_session = $("#cur_session").val();
//     // alert(cur_session);
//     var preschoolname = $("#preschoolname").val();
//     // alert(preschoolname);
//     var pre_classname = $("#pre_classname").val();
//     // alert(pre_classname);
//     var pre_session = $("#pre_session").val();
//     // alert(pre_session);
//     // var class_id = $("#class_id_data").val();
//     // alert(class_id);

//     // var serializedData = $form.serialize();
//     // var finalData =serializedData.push(class_id);
//     // alert(serializedData);
//     // alert(finalData);

//     // return;
//     // $inputs.prop("disabled", true);

//     if( studentname==""||class_id=="0" || fathername=="" || mothername=="" || parentmob=="" || email_add=="" || address=="" || dob=="" || bloodgroup=="" || cur_session=="")
//     {
//         alert("Please Fill all the fields");
//         return;
//     }else{
//     // Fire off the request to /form.php
//     request = $.ajax({
//         url: '<?php echo base_url("index.php/control_admin/addstudent"); ?>',
//         type: "post",
//         data: 'class_id='+class_id+'&studentname='+studentname+'&fathername='+fathername+'&mothername='+mothername+'&parentmob='+parentmob+'&email_add='+email_add+'&address='+address+'&dob='+dob+'&bloodgroup='+bloodgroup+'&cur_session='+cur_session+'&preschoolname='+preschoolname+'&pre_classname='+pre_classname+'&pre_session='+pre_session,
//     });

//     // alert(serializedData);
//     // Callback handler that will be called on success
//     request.done(function (response, textStatus, jqXHR){
//         // Log a message to the console
//         // alert(response);
//         $("#class_id_data").val("0");
//         $("#studentname").val("");
//         $("#fathername").val("");   
//         $("#mothername").val("");  
//         $("#parentmob").val("");
//         $("#email_add").val("");
//         $("#address").val("");
//         $("#dob").val("");
//         $("#bloodgroup").val("");
//         $("#cur_session").val(""); 
//         $("#preschoolname").val("");
//         $("#pre_classname").val(""); 
//         $("#pre_session").val("");
//         console.log("Hooray, it worked!"+response+textStatus);
//     });

//     alert('Successfully submitted');
//     // Callback handler that will be called on failure
//     request.fail(function (jqXHR, textStatus, errorThrown){
//         // Log the error to the console
//         console.error(
//             "The following error occurred: "+
//             textStatus, errorThrown
//         );
//     });
// }
//     // Callback handler that will be called regardless
//     // if the request failed or succeeded
//     // request.always(function () {
//     //     // Reenable the inputs
//     //     $inputs.prop("disabled", false);
//     // });

//     //alert("check2");
// });

$("#formId_teacher").submit(function(event){
    event.preventDefault();
    // var class_id = $("#class_id_data").val();
    // alert(class_id);
    var teachername = $("#teachername").val();
    // alert(teachername);
    var fathername = $("#teafathername").val();
    // alert(fathername);
    var mothername = $("#teamothername").val();
    // alert(mothername);
    var mob = $("#teamob").val();
    // alert(mob);
    var email_add= $("#teaemail_add").val();
    // alert(email_add);
    var address= $("#teaaddress").val();
    // alert(address);
    var dob = $("#teadob").val();
    // alert(dob);
    var bloodgroup = $("#teabloodgroup").val();
    // alert(bloodgroup);
    var cur_session = $("#teacur_session").val();
    // alert(cur_session);
    var preschoolname = $("#teapreschoolname").val();
    // alert(preschoolname);
    // var pre_classname = $("#teapre_classname").val();
    // alert(pre_classname);
    var pre_session = $("#teapre_session").val();
    // alert(pre_session);
    var user_categ= $("#user_categr").val();
    // alert(user_categ);
    if(user_categ =="Teacher"){
       var user_lev='2'; 
       var user_cat ="Teacher";
    }else if(user_categ =="Accountant"){
        var user_lev='4';
        var user_cat ="Accountant";
    }else if(user_categ =="Warden"){
        var user_lev='5';
        var user_cat ="Warden";
    }else if(user_categ =="C_A"){
        var user_lev='6';
        var user_cat ="C_A";
    }else if(user_categ =="Liabrarian"){
        var user_lev='7';
        var user_cat = "Liabrarian";
    }else if(user_categ =="Employee"){
        var user_lev='8';
        var user_cat ="Employee";
    }
    // if(){
        // alert(user_lev);
        // alert(user_categ);    // var textBox = $('input:text').value;
    // if (textBox == "") {
    //     $("#error").show('slow');
    // }
    // }
    // if(user_categ== "" || user_lev== "" || teachername=="" || fathername=="" || mothername=="" || mob=="" || email_add=="" || address=="" || dob=="" || bloodgroup=="" || cur_session=="")
    // {
    //     alert("Please Fill all the fields");

    //     return;
    // }else{
        // alert("Else");
    request = $.ajax({
        url: '<?php echo base_url("index.php/control_c_a/addteacher"); ?>',
        type: "post",
        data: 'teachername='+teachername+'&user_lev='+user_lev+'&user_cat='+user_cat+'&father_name='+fathername+'&mother_name='+mothername+'&mob='+mob+'&email_add='+email_add+'&address='+address+'&dob='+dob+'&bloodgroup='+bloodgroup+'&cur_session='+cur_session+'&preschoolname='+preschoolname+'&pre_session='+pre_session,
    });

    request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
        // alert(response);
        // user_categ      ="" ;
        // user_lev        ="" ;
        $("#teachername").val("");
        $("#teafathername").val("");   
        $("#teamothername").val("");  
        $("#teamob").val("");
        $("#teaemail_add").val("");
        $("#teaaddress").val("");
        $("#teadob").val("");
        $("#teabloodgroup").val("");
        $("#teacur_session").val(""); 
        $("#teapreschoolname").val(""); 
        $("#teapre_session").val("");
        console.log("Hooray, it worked!"+response+textStatus);
    });

    alert('Successfully submitted');
    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // Log the error to the console
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown +" Please Try Again! "
        );
    });
    // }
});


// $(document).ready( function () {
//     $('#myTable').DataTable();
// } );



