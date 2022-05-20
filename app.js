$(document).ready(function(){
  $(window).scroll(function(){
    if(this.scrollY > 20){
      $('.nav-bar').addClass('.sticky');
    }
    else{
      $('.nav-bar').removeClass('.sticky');
    }
  })
});

function Show(){
  var nav = document.getElementById('ul');
  if (nav.style.right == '-100%') {
    nav.style.right = '0%';
    nav.style.display = 'block';
  }
  else {
    nav.style.right = '-100%';
  }
}
$(function(){
  $(#add).on("click", function(){
    var val = $("#get").val();
    if (val !== ''){
      var elem = $("<li></li>").text(val);
      $(elem).append("<button class='rem'>X</button>");
      $(#mylist).append(elem);
      $("#get").val("");
    }
  })
});
var show = document.getElementById('ShowImages');
var about = document.getElementById('about');
show.addEventListener(click, function(){
  show.style.display: block;
  show.style.display: none;
})
