$(document).ready(function()
{
    $('#mobile-menu').smartmenus({
        mainMenuSubOffsetX: -1,
        subMenusSubOffsetX: 10,
        subMenusSubOffsetY: 0
    });
    $(".hamburger").on('click', function () {
        $(this).toggleClass('button-close')
        $(".mobile-menu").toggleClass('active')
    })


	$('.popup-with-zoom-anim').magnificPopup({
	    type: 'inline',
	    fixedContentPos: true,
	    fixedBgPos: true,
	    overflowY: 'auto',
	    closeBtnInside: true,
	    preloader: false,
	    midClick: true,
	    removalDelay: 300,
	    mainClass: 'my-mfp-zoom-in'
	  });

      $(document).on('click', '.bottom-offer .close', function(){
        $('.bottom-offer').removeClass('visible');
      });

    if (!$.cookie('was')) {
        setTimeout(function(){
            // $.magnificPopup.open({
            //     type: 'inline',
            //     fixedContentPos: true,
            //     fixedBgPos: true,
            //     overflowY: 'auto',
            //     closeBtnInside: true,
            //     preloader: false,
            //     midClick: true,
            //     removalDelay: 300,
            //     mainClass: 'my-mfp-zoom-in',
            //     items: {
            //         src: '#sub-modal'
            //     },
            // });
            $(".bottom-offer").addClass('visible')
        }, 10000)
        var date = new Date();
        var minutes = 10;
        date.setTime(date.getTime() + (minutes * 60 * 1000));
          $.cookie('was', true, {
            expires: date,
            path: '/'
        });
    }
    

    $("#sub-modal-form").goldCarrotForm({
        url: '/mail/sub-form.php'
    });

});