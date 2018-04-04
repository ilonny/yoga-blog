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
});
    
