//Dropdown list

$(".dropDown").on('mouseenter touchstart',function(e){

    $(".dropDown-menu").fadeIn(300);

    $(".dropDown-menu>li").each(function(index){
        $(this).delay(70*index).fadeIn(2000);
    });

});

$(".dropDown").on('mouseleave touchend',function(){

    $(".dropDown-menu").slideUp(800);
    

    $(".dropDown-menu>li").css('display','none');
    
});



//showing collapsed search field on mouseover

    var deviceWidth = $(window).width();
    
    var searchBarWidth = $(".header").width() - 45;

    //console.log(searchBarWidth);
            
    if(deviceWidth < 480){

            $("i#searchIcon.glyphicon.glyphicon-search").css({'background-color':'#2b2b2b', 'color':'white'});

            $("input#searchBar.form-control").css({'width': searchBarWidth + "px" , 'padding-left': '1em', 'border': '1px solid #2b2b2b'});	

    }        
        
    $("i#searchIcon.glyphicon.glyphicon-search").on('mouseover',function(){

        if(deviceWidth > 480){
                $(this).css({'background-color':'#479ce4', 'color':'white'});

                $("input#searchBar.form-control").animate({width: '200px', paddingLeft: '1em'},600);	
            
        }
    }); 

    $("input#searchBar.form-control").on('blur', function(){

        if(deviceWidth > 480){
            	$("i#searchIcon.glyphicon.glyphicon-search").css({'background-color':'#2a333e', 'color':'#A9ADB1'});

		    	$(this).animate({width: '0px', paddingLeft: '0em'},600);

        }
		

    });




