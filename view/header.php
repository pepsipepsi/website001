<header>
    <p>~~Codin' For The Heck Of It~~</p>
</header>
<script>
    $(window).scroll(function() {
        if ($(this).scrollTop() > 1){
            $('header').addClass("sticky");
        }
        else{
            $('header').removeClass("sticky");
        }
    });
</script>
