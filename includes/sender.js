
$(function(){

  // forgot password form 
  $('.forgotpass').hide();

  // hide back to login btn
  $('.logicont').hide();

  // show forgot password form 
  $('.fgtpass').click(function(){
    $('.forgotpass').show();
    $('.login').hide();
    $('.fgtcont').hide();
    $('.shiftKey').html('Forgot Password');
    $('.logicont').show();
  });

  // show login  form 
  $('.logipass').click(function(){
    $('.forgotpass').hide();
    $('.login').show();
    $('.fgtcont').show();
    $('.shiftKey').html('Login');
    $('.logicont').hide();
  });
   

    function success(response){

        if(response == "success"){
            swal.close();
            swal({
                title: "Success",
                text: "Record added Successfully",
                timer: 1000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location.reload();
              });
        }
        else if(response == 'deleted'){

            swal({
                title: "Done!",
                text: "Record Deleted Successfully",
                timer: 1000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location.reload();
              });

        }

        else if(response == 'Registration successful'){

          swal({
              title: "Success!",
              text: "Registration successful",
              timer: 1000,
              type: 'success',
              padding: "2em",
              onOpen: function () {
                swal.showLoading();
              },
            }).then(function (result) {
              window.location.reload();
            });

      }

        else if(response == 'loginsuccess'){

            swal({
                title: "Login Successfull!",
                text: "will be redirected soon",
                timer: 2000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location="staff/index.php";
              });

        }

        else if(response == 'loginsuccess1'){

          swal({
              title: "Login Successfull!",
              text: "will be redirected soon",
              timer: 2000,
              type: 'success',
              padding: "2em",
              onOpen: function () {
                swal.showLoading();
              },
            }).then(function (result) {
              window.location="index.php";
            });

      }

        else if(response == 'Passwordsent'){

          swal({
              title: "Email Sent!",
              text: "Check your email for password reset link",
              timer: 5000,
              type: 'success',
              padding: "2em",
              onOpen: function () {
                swal.showLoading();
              },
            }).then(function (result) {
              window.location.reload();
            });

      }
        else if(response == 'Updated Successfully'){

            swal({
                title: "Success",
                text: "Update Successful",
                timer: 1000,
                type: 'success',
                padding: "2em",
                onOpen: function () {
                  swal.showLoading();
                },
              }).then(function (result) {
                window.location.reload();
              });

        }

        else if(response == 'requestsuccess'){

          swal({
              title: "Success",
              text: "Request sent Successfully",
              timer: 2000,
              type: 'success',
              padding: "2em",
              onOpen: function () {
                swal.showLoading();
              },
            }).then(function (result) {
              window.location.reload();
            });

      }

        else if(response == 'messagedeleted'){

          swal({
              title: "Success",
              text: "Message Deleted Successfully",
              timer: 1000,
              type: 'success',
              padding: "2em",
              onOpen: function () {
                swal.showLoading();
              },
            }).then(function (result) {
              window.location="messages.php";
            });

      }


        else if(response == 'replysuccess'){

          swal({
              title: "Success",
              text: "Reply sent successfuly",
              timer: 1000,
              type: 'success',
              padding: "2em",
              onOpen: function () {
                swal.showLoading();
              },
            }).then(function (result) {
              window.location="support.php";
            });

      }

        else if(response == 'reportsuccess'){

          swal({
              title: "Success",
              text: "Report Submitted Successfuly",
              timer: 1000,
              type: 'success',
              padding: "2em",
              onOpen: function () {
                swal.showLoading();
              },
            }).then(function (result) {
              window.location="record.php";
            });

      }

        else if(response == 'requestsuccess'){

          swal({
              title: "Success",
              text: "Request approved Successfuly",
              timer: 1000,
              type: 'success',
              padding: "2em",
              onOpen: function () {
                swal.showLoading();
              },
            }).then(function (result) {
              window.location="record.php";
            });

      }


       
        else{

            swal({
                title: "Attention!",
                text: response,
                type: "warning",
                padding: "2em",
              });

        }


    }

    function loading()
{
    
    swal({
        title: 'Please Wait !',
        html: 'request in progress...',
        allowOutsideClick: false,
        
    });
}

// Staff login with Ajax
$('.login').submit(function(e){

    e.preventDefault();
    
    var staff = {
        url: 'includes/reciever.php?action=login',
        type: 'post',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: loading,
        success: success

    };
    $.ajax(staff);
});



// staff registration via ajax


$('.register').submit(function(e){

  e.preventDefault();
  
  var staff = {
      url: 'includes/reciever.php?action=register',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: loading,
      success: success

  };
  $.ajax(staff);
});

// forget password via ajax
$('.forgotpass').submit(function(e){

  e.preventDefault();
  
  var staff = {
      url: 'includes/reciever.php?action=forgotpass',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: loading,
      success: success

  };
  $.ajax(staff);
});

// staff support via ajax
$('.support').submit(function(e){

  e.preventDefault();
  
  var staff = {
      url: '../includes/reciever.php?action=support',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: loading,
      success: success

  };
  $.ajax(staff);
});

// admin login with Ajax 
$('.adminlogin').submit(function(e){

  e.preventDefault();
  
  var staff = {
      url: '../includes/reciever.php?action=adminlogin',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: loading,
      success: success

  };
  $.ajax(staff);
});


// adding staff via ajax
$('.addstaff').submit(function(e){

  e.preventDefault();
  
  var staff = {
      url: '../includes/reciever.php?action=addstaff',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: loading,
      success: success

  };
  $.ajax(staff);
});


// add resident via ajax
$('.addresidence').submit(function(e){

  e.preventDefault();
  
  var staff = {
      url: '../includes/reciever.php?action=addresidence',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: loading,
      success: success

  };
  $.ajax(staff);
});

// approve staff request ajax
$(document).on('click','.approvestaff',function(e){

  e.preventDefault();
  
  var id = $(this).attr('id');
  var staff = {
      url: '../includes/reciever.php?action=approverequest',
      type: 'post',
      data: {"id": id},
      
      beforeSend: loading,
      success: success

  };
  $.ajax(staff);
});




// staff completetask via ajax

$('.completetask').submit(function(e){

  e.preventDefault();
  
  var staff = {
      url: '../includes/reciever.php?action=completetask',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: loading,
      success: success

  };
  $.ajax(staff);
});


// reply staff support via ajax

$('.replymessage').submit(function(e){

  e.preventDefault();
  
  var staff = {
      url: '../includes/reciever.php?action=replymessage',
      type: 'post',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: loading,
      success: success

  };
  $.ajax(staff);
});



// delete message via ajax

$(document).on('click','.deletemessage',function(e){

  e.preventDefault();
  
  var id = $(this).attr('id');
  var staff = {
      url: '../includes/reciever.php?action=deletemessage',
      type: 'post',
      data: {"id": id},
      
      beforeSend: loading,
      success: success

  };
  $.ajax(staff);
});




// Staff Request for Residence via ajax

$(document).on('click','.makerequest',function(e){

  e.preventDefault();
  
  var id = $(this).attr('id');
  var staff = {
      url: '../includes/reciever.php?action=makerequest',
      type: 'post',
      data: {"id": id},
      
      beforeSend: loading,
      success: success

  };
  $.ajax(staff);
});





    
})