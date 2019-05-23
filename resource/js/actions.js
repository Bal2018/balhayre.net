

(function(){

    // SCROLL POSITION PROGRESS BAR

    window.addEventListener('scroll',function(){

        requestAnimationFrame(function(){
            let scrollPosition = $(window).scrollTop(),
                documentHeight = $(document).height(),
                windowInnerHeight = $(window).height();

            let scrollPercent = (scrollPosition / (documentHeight - windowInnerHeight)) * 100;

            $(".scroll-progress").width(scrollPercent + "%");
        });

    });


    // MOVE CARD

    $("body").on("click",".pop-card",function () {

        $(".top-level-card").remove();

        let that = $(this);

        let dummyCard = $("<div class='top-level-card'/>");

        let leftMargin = (window.innerWidth - 1080) / 2;
        let topOffset = Math.round(that.parents(".row").position().top) + "px";

        let that_width = that.width();
        let that_height = that.height();
        let that_offset_left = that.offset().left - leftMargin;

        dummyCard.html( that.html() );

        that.parents("section").append( dummyCard );

        dummyCard.css({
            position: "absolute",
            left: that_offset_left,
            top: topOffset,
            width: that_width,
            height: that_height,
            display: "flex",
            alignItems:"center",
            justifyContent:"center",
            flexDirection:"column"
        });

        dummyCard.find("img").css({
            width: "100%",
            maxWidth:"200px",
        });

        $(".pop-card img").fadeOut(1);

        dummyCard.addClass("visible");

        dummyCard.css({
            left: 0,
            width: "100%",
            maxWidth: "1080px",
            height:"auto",
            top: (Math.round(that.parents(".row").position().top) - 50) + "px"
        });

        dummyCard.append("<div class='close'><i class=\"fas fa-times\"></i></div>");

        dummyCard.find('.close').on('click',function(){

            dummyCard.removeClass("visible");

            dummyCard.find("*:not(img)").hide();

            dummyCard.css({
                position: "absolute",
                left: that_offset_left,
                top: topOffset,
                width: that_width,
                height: that_height,
                display: "flex",
                alignItems:"center",
                justifyContent:"center",
                flexDirection:"column"
            });

            // dummyCard.find("*:not(img)").fadeOut(200);

            setTimeout(()=>{
                $(".pop-card img").fadeIn(300,function(){
                    dummyCard.remove();
                });
            },500);

        });

    });


    // NAV MOVE

    $(document.body).on("click","nav a",function(e){

        e.originalEvent.preventDefault();

        let targetSelector = $(this).attr("href");

        if (targetSelector.indexOf("/") === 0){
            location.href = targetSelector;
        }
        else{
            let targetElement = $( targetSelector );
            $('html, body').animate({
                scrollTop: targetElement.offset().top
            }, 350);
        }

    });
})();

