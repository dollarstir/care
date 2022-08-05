
$(function(){
   

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
        url: 'reciever.php?action=login',
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


$('.login').submit(function(e){

  e.preventDefault();
  
  var staff = {
      url: 'reciever.php?action=login',
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








    
})