
<div id="otherpackage-popup" class="modal fade enquire-popup-block" role="dialog">
    <div class="modal-dialog">        
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close closeotherpackage-popup" data-dismiss="modal"><i class="ion-close-round"></i></button>
                <h4 class="modal-title">Get a Quote!</h4>
                <p class="modal-mini-title">For your requirement, we need to make you a custom quote, please fill in your contact information and we will call you. We look forward to speaking with you!</p>
            </div>
            <div class="modal-body">
                <div class="enquire-popup-form-block">
                    <div class="input-box fnamediv">
                        <label class="formLabel" for="">First Name</label>
                        <input type="text" class="formInput" id="txtnameenquire" name="" autocomplete="off">
                    </div>
                    <div class="input-box lnamediv">
                        <label class="formLabel" for="">Last Name</label>
                        <input type="text" class="formInput" id="txtlastnameenquire" name="" autocomplete="off">
                    </div>
                    <div class="input-box emailaddressdiv">
                        <label class="formLabel" for="">Email</label>
                        <input type="text" class="formInput" id="txtenquiryemailenquire" name="" autocomplete="off">
                    </div>
                    <div class="input-box phonediv">
                        <label class="formLabel" for="">Phone Number</label>
                        <input type="text" class="formInput" id="txtphoneenquire" name="" autocomplete="off">
                    </div>
                    <div class="input-box timediv">
                        <label class="formLabel" for="">Preferred Time For A Call</label>
                        <input type="text" class="formInput" id="txttimeenquire" name="time" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-insGreen waves-effect waves-ripple otherpackageclick">Submit</button>               
            </div>

        </div>

    </div>
</div>
<div class="modal-backdrop otherpackage-extradiv fade in" style="display: none;"></div>
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="js/webslidemenu3860.js?v=1"></script>
    <script type="text/javascript" src="js/sliderscreenshot7b30.js?v=4"></script>
    <script src="js/custom7789.js?v=11.5.13"></script>
    <script src="js/jquery.timeselector3860.js?v=1"></script>

    <script>
        $(function () {
            $('[name="time"]').timeselector()
        });
        $(document).on("click", ".otherpackageclick", function (e) {


            var getdata = "Quote For GST / TDS Return Filing";

            var name = $('#txtnameenquire').val();
            var lastname = $('#txtlastnameenquire').val();
            var enquiryemail = $('#txtenquiryemailenquire').val().toLowerCase();
            var phone = $('#txtphoneenquire').val();
            var time = $('#txttimeenquire').val();
            if (name == "") {
                $(this).parents('div').find('.fnamediv').addClass('activealert');
            }
            else {
                $(this).parents('div').find('.fnamediv').removeClass('activealert');
            }

            if (lastname == "") {
                $(this).parents('div').find('.lnamediv').addClass('activealert');
            }
            else {
                $(this).parents('div').find('.lnamediv').removeClass('activealert');
            }


            if (enquiryemail == "") {
                $(this).parents('div').find('.emailaddressdiv').addClass('activealert');
            }
            else {
                $(this).parents('div').find('.emailaddressdiv').removeClass('activealert');
            }


            if (phone == "") {
                $(this).parents('div').find('.phonediv').addClass('activealert');
            }
            else {
                $(this).parents('div').find('.phonediv').removeClass('activealert');
            }

            if (time == "") {
                $(this).parents('div').find('.timediv').addClass('activealert');
            }
            else {
                $(this).parents('div').find('.timediv').removeClass('activealert');
            }

            if (name == "" || lastname == "" || enquiryemail == "" || phone == "" || time == "") {
                return false;
            }

            if (enquiryemail != "") {
                if (validateCaseSensitiveEmail(enquiryemail)) {

                } else {
                    $(this).parents('div').find('.emailaddressdiv').addClass('activealert');
                    return false;
                }
            }

            var numberphone = /^[0-9]+$/;
            if (!phone.match(numberphone)) {
                $(this).parents('div').find('.phonediv').addClass('activealert');
                return false;
                $('#txtphone').focus();
            }
            if (phone.length != 10) {
                $(this).parents('div').find('.phonediv').addClass('activealert');
                return false;
            }

            $('#pageloader .img-responsive').show();
            $('#pageloader').show();
            $.ajax({
                url: '/Webservice/Postbusinesspackageemail',
                type: 'POST',
                contentType: "application/json",
                dataType: 'json',
                data: "{'sFirstname':'" + name + "','sLastname':'" + lastname + "','sEmailaddress':'" + enquiryemail + "','sPhoneNumber':'" + phone + "','time':'" + time + "','getdata':'" + getdata + "'}", //datefilter
                //  data: data,
                success: function (data) {

                    if (data == "add") {
                        $('.input-box input').val('');
                        $('.close').trigger('click');
                        $('#pageloader .img-responsive').hide();
                        $('#pageloader').hide();
                        $('#ins-alert-popup').show();
                        $('#ins-alert-popup').find('.alertmessage').text('We have noted your requirement and will contact you shortly!');

                    }
                    else {
                        $('#pageloader .img-responsive').hide();
                        $('#pageloader').hide();
                        $('#ins-alert-popup1').show();
                        $('#ins-alert-popup1').find('.alertmessage').text('Please try after sometimes.');
                        location.reload();
                    }
                },
                error: function (x, y, z) {
                    $('#pageloader .img-responsive').hide();
                    $('#pageloader').hide();
                    $('#ins-alert-popup1').show();
                    $('#ins-alert-popup1').find('.alertmessage').text('Please try after sometimes.');
                    location.reload();
                }
            });
            return false;
        });
        jQuery(document).ready(function ($) {
            var currentPage = location.pathname;
            if (currentPage != "/home" && currentPage != "index.html") {
                $('#fullpage').removeAttr('id');
            }
        })

        jQuery(document).ready(function ($) {

            var hduserdisplayname = $('#hduserdisplayname').val();
            if (hduserdisplayname != "") {
            }
            else if (hduserdisplayname == "securitypage") {
            }
            else {
                window.location.href = "security.html";
            }

            $('body').on('click', '.closeotherpackage-popup', function () {
                $('#otherpackage-popup').removeClass('in');
                $('.otherpackage-extradiv').hide();
                $('#otherpackage-popup').hide();
                $('body').removeClass('modal-open');
                $('body').css('padding-right', '');
            });

            var currentPage = location.pathname;
            if (currentPage != "/home" && currentPage != "index.html") {
                $('#fullpage').removeAttr('id');
            }
        })

        $('body').on('click', '.newbtn', function () {

            try {
                $(".formInput").val('');
                var data = $(this).attr('data-toggle');
                if (data != "") {
                    $('.activealert').removeClass('activealert');

                }
            } catch (e) { }

        });

    </script>
    <script>
        var baseUrl = "index.html";
        function ResolveUrl(url) {
            url = baseUrl + url.substring(2);
            return url;
        }
        function onScroll(event) {
            var scrollPos = $(document).scrollTop();

            $('#insfaqsidebar a').each(function () {
                var currLink = $(this);
                var refElement = $(currLink.attr("href"));
                if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                    $('#insfaqsidebar ul li a').removeClass("active");
                    currLink.addClass("active");
                }
                else {
                    currLink.removeClass("active");
                }
            });
        }
        $(document).ready(function () {
            $('#ins-alert-popup').hide();
            $('.calbussinesspackage').click(function () {

                var bnature = $('#ddlBusinessnature').val();
                var btype = $('#ddlTypeofbussiness').val();
                var bturnover = $('#ddlTurnopen').val();

                if (bturnover == "7") {
                    $('.modal-close').trigger('click');

                    $('#otherpackage-popup').addClass('in');
                    $('.otherpackage-extradiv').show();
                    $('#otherpackage-popup').show();
                    $('body').addClass('modal-open');
                    $('body').css('padding-right', '17px');
                }
                else {
                    window.location.href = "/Businesspackage?bnature=" + bnature + "&btype=" + btype + "&bturnover=" + bturnover;
                }
            });
            $(window).scroll(function () {
                var window_top = $(window).scrollTop() + 12;
                var div_top = $('#insfaqcheckdiv').offset().top;
                if (window_top >= div_top) {
                    $('.insfaqnav').addClass('stickydiv');
                } else {
                    $('.insfaqnav').removeClass('stickydiv');
                }
            });

            $(document).on("scroll", onScroll);
            $('.scroll').bind('click', function (e) {
                e.preventDefault();
                $(document).off("scroll");

                $('.scroll').each(function () {
                    $(this).removeClass('active');
                })
                $(this).addClass('active');

                var target = this.hash,
                    menu = target;
                $target = $(target);
                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top + 2
                }, 600, 'swing'
                 );
                event.preventDefault();
            });
        });
        $(document).on("click", ".okvalidatemodelclick", function (e) {
            $('#ins-alert-popup').hide();
			$('#ins-alert-popup').find('.ion-android-checkmark-circle').removeClass('ion-android-checkmark-circle');
        });
        $(document).on("click", ".logoutclick", function (e) {
            $.ajax({
                type: "POST",
                processData: false,
                contentType: false,
                url: ResolveUrl("~/Webservice/logout"),
                async: false,
                data: "", //datefilter

                success: function (data) {
                    var landingUrl = "home.html";
                    window.location.href = landingUrl;
                },
                error: function (x, y, z) {
                    alert(x + '\n' + y + '\n' + z);
                }
            });
        });


        $(document).on("click", ".enquiryclick", function (e) {

            var name = $('#txtname').val();
            var lastname = $('#txtlastname').val();
            var enquiryemail = $('#txtenquiryemail').val().toLowerCase();
            var phone = $('#txtphone').val();
            if (name == "") {
                $(this).parents('div').find('.fnamediv').addClass('activealert');
            }
            else {
                $(this).parents('div').find('.fnamediv').removeClass('activealert');
            }

            if (lastname == "") {
                $(this).parents('div').find('.lnamediv').addClass('activealert');
            }
            else {
                $(this).parents('div').find('.lnamediv').removeClass('activealert');
            }


            if (enquiryemail == "") {
                $(this).parents('div').find('.emailaddressdiv').addClass('activealert');
            }
            else {
                $(this).parents('div').find('.emailaddressdiv').removeClass('activealert');
            }


            if (phone == "") {
                $(this).parents('div').find('.phonediv').addClass('activealert');
            }
            else {
                $(this).parents('div').find('.phonediv').removeClass('activealert');
            }

            if (name == "" || lastname == "" || enquiryemail == "" || phone == "") {
                return false;
            }

            if (enquiryemail != "") {
                if (validateCaseSensitiveEmail(enquiryemail)) {

                } else {
                    $(this).parents('div').find('.emailaddressdiv').addClass('activealert');
                    return false;
                }
            }

            var numberphone = /^[0-9]+$/;
            if (!phone.match(numberphone)) {
                $(this).parents('div').find('.phonediv').addClass('activealert');
                return false;
                $('#txtphone').focus();
            }
            if (phone.length != 10) {
                $(this).parents('div').find('.phonediv').addClass('activealert');
                return false;
            }

            //var data = new FormData();
            //data.append("name", name);
            //data.append("enquiryemail", enquiryemail);
            //data.append("phone", phone);
            $('#pageloader .img-responsive').show();
            $('#pageloader').show();
            $.ajax({
                url: '/Webservice/PostEnquiryemail',
                type: 'POST',
                contentType: "application/json",
                dataType: 'json',
                data: "{'sFirstname':'" + name + "','sLastname':'" + lastname + "','sEmailaddress':'" + enquiryemail + "','sPhoneNumber':'" + phone + "'}", //datefilter
                //  data: data,
                success: function (data) {

                    if (data == "add") {
                        $('.input-box input').val('');
                        $('.close').trigger('click');
                        $('#pageloader .img-responsive').hide();
                        $('#pageloader').hide();
                        $('#ins-alert-popup').show();
                        $('#ins-alert-popup').find('.alertmessage').text('Your request has been submitted.');

                        //
                    }
                    else {
                        $('#pageloader .img-responsive').hide();
                        $('#pageloader').hide();
                        $('#ins-alert-popup1').show();
                        $('#ins-alert-popup1').find('.alertmessage').text('Please try after sometimes.');
                    }
                },
                error: function (x, y, z) {
                    $('#pageloader .img-responsive').hide();
                    $('#pageloader').hide();
                    $('#ins-alert-popup1').show();
                    $('#ins-alert-popup1').find('.alertmessage').text('Please try after sometimes.');
                }
            });
            return false;
        });


        function validateCaseSensitiveEmail(Emailid) {
            var reg = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
            if (reg.test(Emailid)) {
                return true;
            }
            else {
                return false;
            }
        }
        $(".applynewsletterclick").click(function () {
            var email = $("#txtnewsletter").val();
            if (email == "") {
                $('#ins-alert-popup').find('.alertmessage').text('Please enter email address.');
                $('#ins-alert-popup').show();
                return false;
            }

            if (email != "") {
                if (validateCaseSensitiveEmail(email)) {

                } else {
                    $('#ins-alert-popup').find('.alertmessage').text('Please enter valid email address.');
                    $('#ins-alert-popup').show();
                    return false;
                }
            }

            //$('#pageloader .img-responsive').show();
            //$('#pageloader').show();
            $(this).addClass('ion-checkmark-round');
            $(this).text(' Subscribe!');
            $("#txtnewsletter").val('');
            var data = new FormData();
            data.append("email", email);

            $.ajax({
                type: "POST",
                processData: false,
                contentType: false,
                url: ResolveUrl("~/Webservice/sendnewsletteremail"),
                async: true,
                data: data, //datefilter

                success: function (data) {
                    // $('#pageloader .img-responsive').hide();
                    // $('#pageloader').hide();
                    if (data == "add") {
                        $('#ins-alert-popup').find('.alertmessage').text('Thank you for subscribing.');
                        $('#ins-alert-popup').show();
						$('#ins-alert-popup').find('.ion-alert-circled').addClass('ion-android-checkmark-circle');
						
                        return false;
                    }
                    else if (data == "SameID") {
                        $('#ins-alert-popup').find('.alertmessage').text('You are already subscribed.');
                        $('#ins-alert-popup').show();
                        return false;
                    }
                    else {
                        $('#ins-alert-popup').find('.alertmessage').text('error');
                        $('#ins-alert-popup').show();
                        return false;
                    }
                },
                error: function (x, y, z) {
                    alert(x + '\n' + y + '\n' + z);
                }
            });
        });
    </script>
    <script>
        //$('#trigger').click(function () {
        //  $('#bubble').fadeToggle();
        //return false
        //        });
        var hoverOrClick = function () {
            $('#bubble').fadeToggle(50);
            return false
        }
        $('.hphone-no').click(hoverOrClick).hover(hoverOrClick);

    </script>
     
    <script type="text/javascript">
        function getPageName(url) {
            var index = url.lastIndexOf("index.html") + 1;
            var filenameWithExtension = url.substr(index);
            var filename = filenameWithExtension.split(".")[0]; // <-- added this line
            return filename;                                    // <-- added this line
        }
        $(document).ready(function () {
		$('.getstartedclick_businesspackage').click(function(){
		$('.dvfbp').show();
		});
            var cururlpage = getPageName(window.location.href);
            if (cururlpage == "complete-business-accounting") {
                $('.getstartedclick_businesspackage').trigger('click');
            }
        });

    </script>
</body>

<!-- Mirrored from www.instaca.in/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Feb 2021 08:38:27 GMT -->
</html>