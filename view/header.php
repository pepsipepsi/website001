<header>
    <p>~~Codin' For The Hack Of It~~</p>
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
