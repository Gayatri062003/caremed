﻿//

        $('.display_currentpwddiv').hide();
    }
        $('.display_currentpwddiv').show();
    }
    $("body").on("keypress", "#sEmailaddress_SI,#sPassword_SI", function (e) {
        if (e.which == 13) {
            $('.signinclick').trigger('click');
        }
    });
        if (e.which == 13) {
            $('.Forgotpasswordclick').trigger('click');
        }
    });
        $('.passwordenterytext').hide();
        if (e.which == 13) {
            $('.signupclick').trigger('click');
        }
    });
        $('.passwordenterytext').show();
    $('#ins-alert-popup1').hide();
    $('#ins-alert-popup').hide();
    $('#ins-alert-popup').find('.okvalidatemodelclick').show();
    $('#ins-alert-popup').find('.okvalidatemodelclick1').hide();
});
    var landingUrl = "/cart";
    window.location.href = landingUrl;
});
    var ran = Math.floor(Math.random() * 1001)
}
    if (target.value != "") {
        var text = target.options[target.selectedIndex].text;
            $('.sStatecombo').show();
        }
            $('.sStatecombo').hide();
        }
    }


        $('.displaypassword').prop('type', 'text');
    }
        $('.displaypassword').prop('type', 'password');
    }
});
        $('.displayCurrentpassword').prop('type', 'text');
    }
        $('.displayCurrentpassword').prop('type', 'password');
    }
});

        appId: '258800374659862', // Set YOUR APP ID //'http://circle8.asia/Login',//
        localStorage.setItem("displaycurrentpassword", "true");
            console.log("<br>Connected to Facebook");
                  var User_name = response.name;


            console.log("Failed to Connect");
        } else {
            console.log("Logged Out");
        }
    },
          scope: 'email,user_location,user_likes'
      }
});
    $.ajax({
        url: '/api/homepageapi/Getlogout',
            localStorage.setItem("displaycurrentpassword", "");
        },
            alert(x + '\n' + y + '\n' + z);
        }
    });
});
    var sFirstname = $('#sFirstname_SU').val();
    var sLastname = $('#sLastname_SU').val();
    var sEmailaddresspass = $('#sEmailaddress_SU').val();
    var sEmailaddress = $('#sEmailaddress_SU').val().toLowerCase();
    var txtpassword = $('#txtpassword_SU').val();
    var sPhoneNumber = $('#sPhoneNumber_SU').val();

    if (sFirstname == "") {
        $('.sFirstname_SUdiv').addClass('activealert');
    }
    else {
        $('.sFirstname_SUdiv').removeClass('activealert');
    }

    if (sLastname == "") {
        $('.sLastname_SUdiv').addClass('activealert');
    }
    else {
        $('.sLastname_SUdiv').removeClass('activealert');
    }

    if (sEmailaddress == "") {
        $('.sEmailaddress_SUdiv').addClass('activealert');
    }
    else {
        $('.sEmailaddress_SUdiv').removeClass('activealert');
    }    

    if (txtpassword == "") {
        $('.txtpassword_SUdiv').addClass('activealert');
    }
    else {
        $('.txtpassword_SUdiv').removeClass('activealert');
    }

    if (sPhoneNumber == "") {
        $('.sPhoneNumber_SUdiv').addClass('activealert');
    }
    else {
        $('.sPhoneNumber_SUdiv').removeClass('activealert');
    }

    if (sFirstname == "" || sLastname == "" || sEmailaddress == "" || txtpassword == "" || sPhoneNumber == "") {
        return false;
    }

    if (sEmailaddress != "") {
        if (validateCaseSensitiveEmail(sEmailaddress)) {
            $('.sEmailaddress_SUdiv').removeClass('activealert');
        } else {
            $('.sEmailaddress_SUdiv').addClass('activealert');
            return false;
        }
    } else { $('.sEmailaddress_SUdiv').removeClass('activealert'); }
   
    if (txtpassword != "") {
        if (txtpassword.length < 7) {
            $('.txtpassword_SUdiv').addClass('activealert');
            return false;
        }
        else {
            if (txtpassword.match(/([a-zA-Z])/) && txtpassword.match(/([0-9])/)) {
                $('.txtpassword_SUdiv').removeClass('activealert');
                //sucess
            } else {
                $('.txtpassword_SUdiv').addClass('activealert');
                return false;
            }
        }
    }

    if (txtpassword != "" && txtpassword.length >= 7 && txtpassword.match(/([a-zA-Z])/) && txtpassword.match(/([0-9])/)) {
        $('.txtpassword_SUdiv').removeClass('activealert');
    }

    var numberscheck = /^[0-9]+$/;
    if (!sPhoneNumber.match(numberscheck)) {
        $('#ins-alert-popup').show();
        $('#ins-alert-popup').find('.alertmessage').text('Please enter numeric phone number.');
        return false;
    }

    if (sPhoneNumber.length != 10 || sPhoneNumber.length > 10) {
        $('#ins-alert-popup').show();
        $('#ins-alert-popup').find('.alertmessage').text('Please enter valid phone number.');
        return false;
    }

    //if ($("#chkterm_and_condition").prop('checked') == false) {
    // //   alert('Please checked terms and condition');
    //    $('#ins-alert-popup').show();
    //    $('#ins-alert-popup').find('.alertmessage').text('Please checked terms and condition.');
    //    $('#ins-alert-popup').find('.okvalidatemodelclick').show();
    //    $('#ins-alert-popup').find('.okvalidatemodelclick1').hide();
    //    return false;
    //}
  
    var data = new FormData();

    data.append("sFirstname", sFirstname);
    data.append("sLastname", sLastname);
    data.append("sEmailaddress", sEmailaddresspass);
    data.append("txtpassword", txtpassword);
    data.append("sPhoneNumber", sPhoneNumber);
  
    $('#pageloader').show();
    $('#pageloader .img-responsive').show();
    
    $.ajax({       
        type: "POST",
        processData: false,
        contentType: false,
        url: ResolveUrl("~/Webservice/loginSignUp"),
        success: function (data) {
            localStorage.setItem("displaycurrentpassword", "");

              //  alert('Registered successfully.');
                $('#ins-alert-popup').show();
                $('#ins-alert-popup').find('.alertmessage').text('Registered successfully.');
                $('#ins-alert-popup').find('.okvalidatemodelclick').hide();
                $('#ins-alert-popup').find('.okvalidatemodelclick1').show();
                //var landingUrl = "/cart";
                //window.location.href = landingUrl;
            }
            else if (data == "redirect_on_myaccount") {
                var landingUrl = "/myaccount";
                window.location.href = landingUrl;
            }
            else if (data == "alreadyexits") {
                $('#ins-alert-popup1').show();
                $('#ins-alert-popup1').find('.alertmessage').text('User already exits please use another email address.');
                //alert('User already exits please use another email address.');
            }
            else {
                $('#ins-alert-popup1').show();
                $('#ins-alert-popup1').find('.alertmessage').text('error');
                return false;
            }
        },
            alert(x + '\n' + y + '\n' + z);
        }
    });
});
    var sEmailaddress = $('#sEmailaddress_SI').val().toLowerCase();
    var txtpassword = $('#sPassword_SI').val();

    if (sEmailaddress == "") {
        $('.sEmailaddress_SIdiv').addClass('activealert');
    }
    else {
        $('.sEmailaddress_SIdiv').removeClass('activealert');
    }

    if (txtpassword == "") {
        $('.sPassword_SIdiv').addClass('activealert');
    }
    else {
        $('.sPassword_SIdiv').removeClass('activealert');
    }

    if (sEmailaddress == "" || txtpassword == "") {
        return false;
    }

    var data = new FormData();
    data.append("sEmailaddress", sEmailaddress);
    data.append("txtpassword", txtpassword);
    
    $('#pageloader').show();
    $('#pageloader .img-responsive').show();
    $.ajax({
        type: "POST",
        processData: false,
        contentType: false,
        url: ResolveUrl("~/Webservice/loginSignIn"),
        success: function (data) {
            localStorage.setItem("displaycurrentpassword", "");
                $('#ins-alert-popup1').show();
                $('#ins-alert-popup1').find('.alertmessage').text('Username or password is incorrect.');
                //alert('Username or password is incorrect.');
            }
            else if (data == "redirect_on_cart") {
                var landingUrl = "/cart";
                window.location.href = landingUrl;
            }
            else if (data == "redirect_on_myaccount") {
                var landingUrl = "/myaccount";
                window.location.href = landingUrl;
            }
            else {
                var landingUrl = "/login";
                window.location.href = landingUrl;
            }

        },
            alert(x + '\n' + y + '\n' + z);
        }
    });
});
    var sEmailaddress = $('#sEmailaddress_FP').val().toLowerCase();    

    if (sEmailaddress == "") {
        $('.sEmailaddress_FPdiv').addClass('activealert');
        return false;
    }
    else {
        $('.sEmailaddress_FPdiv').removeClass('activealert');
    } 

    var data = new FormData();
    data.append("sEmailaddress", sEmailaddress);   
    
    $('#pageloader').show();
    $('#pageloader .img-responsive').show();
    $.ajax({     
        type: "POST",
        processData: false,
        contentType: false,
        url: ResolveUrl("~/Webservice/loginForgotpassword"),
        success: function (data) {
            localStorage.setItem("displaycurrentpassword", "");
                //alert('Email send successfully.');
                $('#ins-alert-popup').show();
                $('#ins-alert-popup').find('.alertmessage').text('Email sent successfully.');
             //   var landingUrl = "/login";
             //   window.location.href = landingUrl;
            }
            else if (data == "Usernotexits") {
               // alert('User not exits');
                $('#ins-alert-popup').show();
                $('#ins-alert-popup').find('.alertmessage').text('User does not exist.');
             //   var landingUrl = "/login";
             //   window.location.href = landingUrl;
            }
            else {
                $('#ins-alert-popup1').show();
                $('#ins-alert-popup1').find('.alertmessage').text('Please try again.');
                //alert('error');
            }

        },
            alert(x + '\n' + y + '\n' + z);
        }
    });
});
    var myParams = {
        'clientid': '308423806140-pj5b71eutb5tp8onr7qum9jjnfpncv5i.apps.googleusercontent.com',
}
    }
}
    var request = gapi.client.plus.people.get({
        'userId': 'me'
    });
        console.log(gprofile.emails[0].value);
}
    $.ajax({
        url: '/Webservice/Getsocialmedia',
                var landingUrl = "/myaccount";
            }
                var landingUrl = "/cart";
            }
                var landingUrl = "/home";
            }
        },
            alert(x + '\n' + y + '\n' + z);
        }
    });
}
function validateCaseSensitiveEmail(Emailid) {
    var reg = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
    if (reg.test(Emailid)) {
        return true;
    }
    else {
        return false;
    }
}