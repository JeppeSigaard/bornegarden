$(function(){
    
    $('.site-nav').on('click',function(e){
        var t = $(e.target);
        
        if(t.is('.toggle-sub>a')){
            e.preventDefault();
            var li = t.parent('li');
            li.toggleClass('show-sub-menu');
        
            if(li.hasClass('show-sub-menu')){
                li.find('.sub-menu').stop().slideDown(250);
            }
            
            else {
                li.find('.sub-menu').stop().slideUp(250);
            }
        }
        
    });
    
});