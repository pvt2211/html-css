$(document).ready(function() {

  $(window).scroll(function() {
    $('.scroll-vertical').each(function() {
      var numCheck2 = 0;
      var oTop3 = $(this).offset().top - window.innerHeight;
      if (numCheck2 == 0 && $(window).scrollTop() > oTop3) {
        $(".pages-76-per").animate({width: '76%'},{duration: 1500});
        $(".pages-89-per").animate({width: '89%'},{duration: 1500});
        $(".pages-96-per").animate({width: '96%'},{duration: 1500});
        $(".pages-85-per").animate({width: '85%'},{duration: 1500});
        $(".pages-92-per").animate({width: '92%'},{duration: 1500});
        numCheck2 = 1;
      }
    });
  });

  $(window).scroll(function() {
    $('.counter').each(function() {
      var numCheck = 0;
      var oTop2 = $(this).offset().top - window.innerHeight;
      if (numCheck == 0 && $(window).scrollTop() > oTop2) {
        $(this).find('.counter-value').each(function() {
          var $this = $(this),
            countTo = $this.attr('data-count');
          $({
            countNum: $this.text()
          }).animate({
              countNum: countTo
            },
            {
              duration: 600,
              easing: 'swing',
              step: function() {
                $this.text(Math.floor(this.countNum));
              },
              complete: function() {
                $this.text(this.countNum);
                //alert('finished');
              }
            });
        });
        numCheck = 1;
      }
    });
  });
  var circumference = 0;
    setCircle();
  checkViewDiv();
  getCurrentPage(current_page);
  window.onscroll = function() {scrollFunction(); checkViewDiv();};
});
var element = document.getElementById("myNavbar");
var searchBlock = 0;
function scrollFunction() {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    element.classList.add("sticky");
    $("#home-5-header").css('opacity', 1);
  } else {
    element.classList.remove("sticky");
    $("#home-5-header").css('opacity', 0.9);
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

function dropdownNavMenu(page_name) {
  $('#' + page_name).slideToggle(300);
}

function getCurrentPage(page_name) {
  switch (page_name) {
    case "home":
      $("#main-page-home").addClass("dropdown-active");
      break;
    case "page":
      $("#main-page-pages").addClass("dropdown-active");
      break;
    case "port":
      $("#main-page-port").addClass("dropdown-active");
      break;
    case "shop":
      $("#main-page-shop").addClass("dropdown-active");
      break;
    case "blog":
      $("#main-page-blog").addClass("dropdown-active");
      break;
    case "contact":
      $("#main-page-contact").addClass("dropdown-active");
      break;
    default:
      break;
  }
}
function choosePriOption(x) {
  var optionList = document.getElementsByClassName("price-option");
  for(var i = 0; i < optionList.length; i++) {
    optionList[i].classList.remove("choosed-price");
  }
  x.classList.add("choosed-price");
}
function checkViewDiv() {
  var leftDivList = document.getElementsByClassName("left-div");
  var rightDivList = document.getElementsByClassName("right-div");
  var topDivList = document.getElementsByClassName("top-div");
  var bottomDivList = document.getElementsByClassName("bottom-div");
  var circleDivList = document.getElementsByClassName("circle-style");
  checkVecterView(leftDivList, "viewLeftToRight");
  checkVecterView(rightDivList, "viewRightToLeft");
  checkVecterView(topDivList, "viewUpToDown");
  checkVecterView(bottomDivList, "viewDownToUp");
  checkVecterView(circleDivList, "circle class");
}
function checkVecterView(listName, className) {
  var i = 0;
  if(listName.length > 0) {
    for(i = 0; i < listName.length; i++) {
      var bodyPos = Math.max($(window).scrollTop(), 600);
      var targetPos = listName[i].offsetTop;
      // console.log(bodyPos);
      // console.log(targetPos - 500);
      if(bodyPos >= targetPos - 500) {
        if(className == "circle class") {
          console.log('------------------');
          setCirclePercent();
          break;
        }
        listName[i].classList.add(className);
      }
    }
  }
}
function viewSearch(x) {
  if (x == 1) {
    $('#search-icon').fadeIn(300);
    $('body').css('overflow', 'hidden');
  } else if(x == 0 && searchBlock != 1) {
    $('#search-icon').fadeOut(300);
    searchBlock = 0;
    $('body').css('overflow', 'auto');
  } else if(x == 2) {
    searchBlock = 1;
  } else if(x == 0 && searchBlock == 1) {
    searchBlock = 0;
  }
}

function setCircle() {
  var tmpArray = $('circle');
  for(var i = 0; i < tmpArray.length; i++) {
    var radius = tmpArray[i].r.baseVal.value;
    circumference = radius * 2 * Math.PI;
    tmpArray[i].style.strokeDasharray = String(circumference) + " " + String(circumference);
  }
}
function setCirclePercent() {
  var tmpArray = $('circle');
  for(var i = 0; i < tmpArray.length; i++) {
    // console.log($(tmpArray[i]).attr('data-value'));
    setProgress(tmpArray[i], $(tmpArray[i]).attr('data-value'));
  }
}
function setProgress(element, percent) {
  const offset = ((100 - percent) / 100) * circumference;
  // element.style.strokeDasharray = String(offset) + " " + String(circumference);
  element.style.strokeDashoffset = offset;
}

