$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        items:1,
        loop:true,
        nav:true,
        dots:false,
        autoplay:true,
        responsive:{
            0:{
                items:1
            }
        },
        autopPlaySpeed:1000,
        autoPlayHoverPaused:true,
        navText:[$('.owl-navigation .owl-nav-prev'),$('.owl-navigation .owl-nav-next'),]
        

    });
    AOS.init();
    $(".move-up span").click(function(){
        $('html,body').animate({
            scrollTop:0
        },1000);
    })

});

let formbtn= document.querySelector('#login-btn');


let loginform= document.querySelector('.login-form-container');
let formclose= document.querySelector('.form-close');
console.log(formclose)
formbtn.addEventListener('click',()=>{
    loginform.classList.add('active');
    console.log("mmm");
   
});
formclose.addEventListener('click',()=>{
 
    loginform.classList.remove('active');
   
});





