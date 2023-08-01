<script src={{ asset('assets/frontend/js/jquery.min.js') }}></script>
<script src={{ asset('assets/frontend/js/swiper-bundle.min.js') }}></script>
<script src={{ asset('assets/frontend/js/owl.carousel.js') }}></script>
<script src={{ asset('assets/frontend/js/bootstrap.min.js') }}></script>
<script src={{ asset('assets/frontend/js/script.js') }}></script>
<script src={{ asset("assets/js/user.js") }}></script>

<script type="text/javascript" src="{{ asset('assets/vendor/jsvalidation/js/jsvalidation.js') }}"></script>
<script>
    // $(".nav-menu .menu .menu-item a").click(function(){
    //     $(".nav-menu .menu .menu-item").removeClass("active");
    //     $(this).addClass("active");
    // });

    $('.pop-submit').click(function(){
        var text = $(this).text();
        if(text === "Enter")
        {

            if (!sessionStorage.getItem('shown-modal')){
                $(".modal_bouncer").hide();
                sessionStorage.setItem('shown-modal', 'true');

            }
        }
    });
    $(".btn-black").click(function(){
        var text = $(this).text();
        if(text === "Exit")
        {
            window.location.replace("https://www.fda.gov/regulatory-information");
        }
    })
</script>
