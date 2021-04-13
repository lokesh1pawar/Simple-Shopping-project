                     // jQuery login Form Validation

$(function(){
    $("#lemail_error_message").hide();

    var error_email = false;

    $("form_lemail").focusout(function(){
        check_email();
    })
})
function check_email() {
    var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var email = $("#form_lemail").val();
    if (pattern.test(email) && email !== '') {
       $("#lemail_error_message").hide();
       $("#form_lemail").css("border-bottom","2px solid #34F458");
    } else {
       $("#lemail_error_message").html("Invalid Email");
       $("#lemail_error_message").show();
       $("#form_lemail").css("border-bottom","2px solid #F90A0A");
       error_email = true;
    }
 }
 
    $("#log_form").submit(function() {
       error_email = false;
       check_email();
    
       if ( error_email === false ) {
        alert("Registration Successfull");
        return true;
     } else {
        alert("Please Fill the form Correctly");
        return false;
     }


  });

                      
                     
                     // jQuery registration Form Validation


                      
    $(function() {

    $("#fname_error_message").hide();
    $("#lname_error_message").hide();
    $("#email_error_message").hide();
    $("#password_error_message").hide();
    $("#con_password_error_message").hide();
    $("#phone_error_message").hide();
    // $("#address_error_message").hide();

    var error_fname = false;
    var error_lname = false;
    var error_email = false;
    var error_password = false;
    var error_con_password = false;
    var error_phone = false;
    // var error_address = false;

    $("#form_fname").focusout(function(){
       check_fname();
    });
    $("#form_lname").focusout(function() {
       check_lname();
    });
    $("#form_email").focusout(function() {
       check_email();
    });
    $("#form_password").focusout(function() {
       check_password();
    });
    $("#form_con_password").focusout(function() {
       check_con_password();
    });
    $("#form_phone").focusout(function() {
       check_phone();
    });
    // $("#form_address").focusout(function() {
    //    check_address();
    // });

    function check_fname() {
       var pattern = /^[a-zA-Z]*$/;
       var fname = $("#form_fname").val();
       if (pattern.test(fname) && fname !== '') {
          $("#fname_error_message").hide();
          $("#form_fname").css("border-bottom","2px solid #34F458");
       } else {
          $("#fname_error_message").html("Should contain only Characters");
          $("#fname_error_message").show();
          $("#form_fname").css("border-bottom","2px solid #F90A0A");
          error_fname = true;
       }
    }

    function check_lname() {
       var pattern = /^[a-zA-Z]*$/;
       var lname = $("#form_lname").val()
       if (pattern.test(lname) && lname !== '') {
          $("#lname_error_message").hide();
          $("#form_lname").css("border-bottom","2px solid #34F458");
       } else {
          $("#lname_error_message").html("Should contain only Characters");
          $("#lname_error_message").show();
          $("#form_lname").css("border-bottom","2px solid #F90A0A");
          error_lname = true;
       }
    }

    function check_email() {
        var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var email = $("#form_email").val();
        if (pattern.test(email) && email !== '') {
           $("#email_error_message").hide();
           $("#form_email").css("border-bottom","2px solid #34F458");
        } else {
           $("#email_error_message").html("Invalid Email");
           $("#email_error_message").show();
           $("#form_email").css("border-bottom","2px solid #F90A0A");
           error_email = true;
        }
     }

    function check_password() {
       var password_length = $("#form_password").val().length;
       if (password_length < 8) {
          $("#password_error_message").html("Atleast 8 Characters");
          $("#password_error_message").show();
          $("#form_password").css("border-bottom","2px solid #F90A0A");
          error_password = true;
       } else {
          $("#password_error_message").hide();
          $("#form_password").css("border-bottom","2px solid #34F458");
       }
    }

    function check_con_password() {
       var password = $("#form_password").val();
       var con_password = $("#form_con_password").val();
       if (password !== con_password) {
          $("#con_password_error_message").html("Passwords Did not Matched");
          $("#con_password_error_message").show();
          $("#form_con_password").css("border-bottom","2px solid #F90A0A");
          error_con_password = true;
       } else {
          $("#con_password_error_message").hide();
          $("#form_con_password").css("border-bottom","2px solid #34F458");
       }
    }

   

    function check_phone() {
       var pattern = /([0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})/;
       var phone = $("#form_phone").val();
       if (pattern.test(phone) && phone !== '') {
          $("#phone_error_message").hide();
          $("#form_phone").css("border-bottom","2px solid #34F458");
       } else {
          $("#phone_error_message").html("Invalid Number");
          $("#phone_error_message").show();
          $("#form_phone").css("border-bottom","2px solid #F90A0A");
          error_phone = true;
       }
    }

    // function check_address() {

    //    var address = $("#form_address").val();
    //    if (pattern.test(address) && address !== '') {
    //       $("#address_error_message").hide();
    //       $("#form_address").css("border-bottom","2px solid #34F458");
    //    } else {
    //       $("#address_error_message").html("Please enter your address");
    //       $("#address_error_message").show();
    //       $("#form_address").css("border-bottom","2px solid #F90A0A");
    //       error_address = true;
    //    }
    // }

    $("#registration_form").submit(function() {
       error_fname = false;
       error_lname = false;
       error_email = false;
       error_password = false;
       error_con_password = false;
       error_phone = false;
    //    error_address = false;

       check_fname();
       check_lname();
       check_email();
       check_password();
       check_con_password();
       check_phone();
    //    check_address();

       if (error_fname === false && error_lname === false && error_email === false && error_password === false && error_con_password === false && error_phone === false ) {
          alert("Registration Successfull");
          return true;
       } else {
          alert("Please Fill the form Correctly");
          return false;
       }


    });
 });