// Mobile toggle menu
let toggleMenu = document.querySelector('.toggle-menu');
let mainMenu = document.querySelector('#header .navbar ul');
toggleMenu.addEventListener('click',()=>{
    toggleMenu.classList.toggle('active');
    mainMenu.classList.toggle('active')

});

// Sticky header
let header = document.querySelector('#header');

window.addEventListener('scroll',()=>{
    header.classList.toggle('sticky',window.scrollY > 90);
});

 


//  Fixed social tooltip
// let socialIconLink = document.querySelectorAll('.fixed-social-icon a');
// let socialIconImg = document.querySelector('.fixed-social-icon a img');
// let socialIconText = document.querySelector('.fixed-social-icon a span');



// socialIconLink.forEach(link => {
//     imgAlt = link.firstElementChild.alt;

//     tooltipText = link.lastElementChild;


//     link.addEventListener('mouseover',()=>{
//         tooltipText = link.firstElementChild.alt;
//         link.lastElementChild.innerHTML = tooltipText;
        
//     })

  
    
// });



 // Lottie animation for contact
 let contactAnimBox = document.querySelector('.contact-left');

 let contactAnimation = bodymovin.loadAnimation({
     container: contactAnimBox,
     render: 'svg',
     loop: true,
     autoplay:true,
     path: 'assets/img/contact-animation.json'
 });

 // lottie animation for working process homepage
 let workingProcessAnimation = [
     'discussion',
     'search',
     'wireframe',
     'main-design',
     'development',
     'support'
 ] ;
 workingProcessAnimation.forEach(elem => {
     let animationDiscussionBox = document.querySelector(`.animation-${elem}`);
    
     let animationDiscussion = bodymovin.loadAnimation({
         container: animationDiscussionBox,
         render: 'svg',
         loop: true,
         autoplay:true,
         path: `assets/img/${elem}.json`
     });
 });


 // Portfolio filter 

 // init Isotope
// let $protfolioItems = $('.portfolio-container').isotope({
//     hiddenStyle: { opacity: 0 },
//   });
//    // filter items on li click
//   $('.portfolio-filter-menu').on( 'click', 'li', function(e) {
//     e.preventDefault();
//     var filterValue = $(this).attr('data-filter');
//    $protfolioItems.isotope({ filter: filterValue });
//   });

      
//   $('.portfolio-filter-menu li').on( 'click', 'li', function(e) {
//     e.preventDefault();
//     $(this).activeClass('active').sliblings.removeClass('active');
//    });


 

// // initialize isotope
// $isocontainer.isotope();

// $('#filters a').click(function(){
//     var selector = $(this).attr('data-filter');
//     $isocontainer.isotope({ filter: selector });
//     return false;
// });









 (function ($) {
    
 $(document).ready(function(){
    // Portfolio filter

    $('.portfolio-filter-menu li').click(function(){
        let dataValue = $(this).attr('data-filter');

        $(this).addClass('active').siblings().removeClass('active')

        if( dataValue == 'all'){
            $('.portfolio-container .portfolio-box').show('1000');
            
        }else{
            console.log('hi');
            $('.portfolio-container .portfolio-box').not('.'+dataValue).hide('1000');
            $('.portfolio-container .portfolio-box').filter('.'+dataValue).show('1000');
        }
    })
    // Scroll to top
    $(window).scroll(function(){
       if( $(this).scrollTop() > 250 ){
            $('#scroll-to-top').fadeIn();
        }else{
           $('#scroll-to-top').fadeOut();
       }
    });

    $('#scroll-to-top').click(function(){      
           $('html, body').animate({
             scrollTop: 0
         }, 1000)
     })
 });
  })(jQuery);