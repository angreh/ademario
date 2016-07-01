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

});