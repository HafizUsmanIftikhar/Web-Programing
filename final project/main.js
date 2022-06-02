$(document).ready(function(){

  $('.fa-bars').click(function(){
    $(this).toggleClass('fa-times');
    $('.navbar').toggleClass('nav-toggle');
  });

  $(window).on('load scroll',function(){

    $('.fa-bars').removeClass('fa-times');
    $('.navbar').removeClass('nav-toggle');

    if($(window).scrollTop() > 30){
      $('header').addClass('header-active');
    }else{
      $('header').removeClass('header-active');
    }

    $('section').each(function(){
      var id = $(this).attr('id');
      var height = $(this).height();
      var offset = $(this).offset().top - 200;
      var top = $(window).scrollTop();
      if(top >= offset && top < offset + height){
        $('.navbar ul li a').removeClass('active');
        $('.navbar').find('[data-scroll="' + id + '"]').addClass('active');
      }
    });

  });


});

function valid_email()
{
  let str = document.getElementById("email").value;
  let err = document.getElementById("err");
  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(mailformat.test(str))
{
  err.innerText ="";
}
else
{
  err.innerText ="You have entered an invalid email address!";
}
}


function num() {
  let nme = document.getElementById("number").value;
  let err = document.getElementById("err1");
  if (nme.length < 11) {
      err.innerText = "your contant number is wrong";
  }
  else {
      err.innerText = "";
  }
}

function idnum() {
  let nme = document.getElementById("id").value;
  let err = document.getElementById("err2");
  if (nme.length < 13 ) {
      err.innerText = "your ID Card number is wrong";
  }
  else {
      err.innerText = "";
  }
}
