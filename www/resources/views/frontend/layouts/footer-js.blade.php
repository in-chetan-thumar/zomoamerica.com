<script src={{ asset('assets/frontend/js/jquery.min.js') }}></script>
<script src={{ asset('assets/frontend/js/swiper-bundle.min.js') }}></script>
<script src={{ asset('assets/frontend/js/owl.carousel.js') }}></script>
<script src={{ asset('assets/frontend/js/bootstrap.min.js') }}></script>
<script src={{ asset('assets/frontend/js/script.js') }}></script>
<script src={{ asset('assets/js/user.js') }}></script>

<script type="text/javascript" src="{{ asset('assets/vendor/jsvalidation/js/jsvalidation.js') }}"></script>
<script>
    $(document).ready(function() {

        if (document.cookie.indexOf("blocker") != -1) {
            $(".blocker").hide();
        }
        if (document.cookie.indexOf("blocker") == -1) {
            $(".blocker").show();
        }
    });
    $(".pop-submit").click(function() {
        let a = $(this).text();
        if (a == "Enter") {
            // var allcookies = document.cookie;
            var d = new Date();
            d.setTime(d.getTime() + (24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toGMTString();
            document.cookie = "name=blocker;expire='" + expires + "'";
            $(".blocker").hide();
            $(".Popup").show();
        }
    });

    function newsletterPopupFormAxaj(actionType) {
        // $(".Popup").hide();
        var email = jQuery("#emailPop").val();
        if (email == "" && actionType == "newsletter_subscribe") {
            jQuery(".errorMessage").html(
                "<p>Your email address is required.</p>"
            );
            return false;
        } else {
            $("#actionValue").val(actionType);
            var _selector = jQuery(this);
            $.ajax({
                url: "{{ route('frontend.newsLetter') }}",
                type: "POST",
                data: {
                    email: email,
                    actionType: actionType,
                    "_token": "{{ csrf_token() }}",
                },
                beforeSend: function() {
                    jQuery(".pop-inner").prepend(
                        '<div id="myLoader" class="ajax-loader"></div>'
                    );
                    $("#myLoader").css({
                        height: $("#myLoader").parent().height(),
                        width: $("#myLoader").parent().width(),
                    });
                    $("#myLoader").show();
                },
                complete: function() {
                    jQuery("#myLoader").hide();
                },
                success: function(response) {
                    $(".Popup").hide();
                    if (response.status == "unsubscribe") {} else {
                        swal(
                            "Thank You!",
                            "" + response.success_message + ""
                        );
                    }
                    window.location.href = "{{ route('frontend.home') }}";
                },
            });
        }
    }

</script>
