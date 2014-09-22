$(document).ready(function(){
var hoverSpan = $('.btn span');

$( ".btn" ).mouseenter(function() {
    //add class enter on hover
    
    $(hoverSpan).removeClass('reset').addClass('enter');
  
  })
  .mouseleave(function() {
    //remove class enter
    //add class leave and reset on complete
    
    $(hoverSpan).removeClass('enter').addClass('leave');
    
    setTimeout(function() {
      $(hoverSpan).removeClass('leave').addClass('reset');
    }, 200);

  });
});
