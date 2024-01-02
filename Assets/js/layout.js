$(document).ready(function(){
    $('.tab-content-item').hide();
    $('.tab-content-item:first-child').show();
    
    $('.nav-tabs li').click(function(){
        $('.nav-tabs li').removeClass('active');
        $(this).addClass('active');

        let tabId = $(this).find('a').attr('href');
        $('.tab-content-item').hide();
        $(tabId).fadeIn();
        return false;
    });
});
