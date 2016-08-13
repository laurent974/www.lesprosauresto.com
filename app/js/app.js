$('.sub-menu').bind('touchstart', function(event){
        event.stopPropagation(); //Make all touch events stop at the .filters ul.children container element
});
