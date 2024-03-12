function responsive(maxWidth){
  if (maxWidth.matches) {
    $('.navadjust').css({
      'margin': 0
    });
  }else{
    window.addEventListener('scroll', customScroll);
  }
}

var maxWidth = window.matchMedia("(max-width: 600px)");
responsive(maxWidth);
maxWidth.addListener(responsive);

function customScroll() {
  var ypos = window.pageYOffset;
  if(ypos > 90) {
    $('.navadjust').css({
      'margin': 0,
      'transition': 'all 0.5s'
    });
  }
  else {
    $('.navadjust').css({
      'margin': '20px 30px 0px 30px'
    });
  }
}



//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}