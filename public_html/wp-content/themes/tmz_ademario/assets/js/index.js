$(function()
{
    if( $( '.post.list' ).length )
    {
        $grid = $('.posts').masonry({
            itemSelector: '.post.list'
        });
        $grid.imagesLoaded().progress( function(){
            $grid.masonry('layout');
        });
    }

    if( $( '.ngg-albumoverview' ).length )
    {
        $grid2 = $('.ngg-albumoverview').masonry({
            itemSelector: '.ngg-album-compact'
        });
        $grid2.imagesLoaded().progress( function(){
            $grid2.masonry('layout');
        });
    }

    $('#header_mobile_menu').on('click', function(){
        $("#mobile_bg").show(0);
        $("#mobile_menu").css({'margin-right':'0px'});
    });

    $('#mobile_bg').on('click',function(){
        $("#mobile_bg").slideUp(300);
        $("#mobile_menu").css({'margin-right':'-300px'});
    });

});