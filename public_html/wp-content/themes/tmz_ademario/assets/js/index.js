$(function(){
    $grid = $('.posts').masonry({
       itemSelector: '.post.list'
    });
    $grid.imagesLoaded().progress( function(){
        $grid.masonry('layout');
    });

    //alert('opa');
});