$(".dropDown").on('mouseenter',function(e){

    $(".dropDown-menu").fadeIn(300);

    $(".dropDown-menu>li").each(function(index){
        $(this).delay(70*index).fadeIn(2000);
    });

});

$(".dropDown").on('mouseleave',function(){

    $(".dropDown-menu").slideUp(800);
    

    $(".dropDown-menu>li").css('display','none');
    
//    $(".dropDown-menu>li").each(function(index){

  //      $(this).delay(70*index).fadeIn(2000);
    //});
});

