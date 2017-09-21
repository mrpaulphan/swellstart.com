

  /*-------------------------------------------
    Equal Heights
  -------------------------------------------*/


  equalheight = function(container){

  var currentTallest = 0,
       currentRowStart = 0,
       rowDivs = [],
       $el,
       topPosition = 0;
   $(container).each(function() {

     $el = $(this);
     $($el).height('auto');
     topPostion = $el.position().top;

     if (currentRowStart != topPostion) {
       for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
         rowDivs[currentDiv].height(currentTallest);
       }
       rowDivs.length = 0; // empty the array
       currentRowStart = topPostion;
       currentTallest = $el.height();
       rowDivs.push($el);
     } else {
       rowDivs.push($el);
       currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
    }
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
   });
  };

  $(window).load(function() {
    equalheight('.home-grid .box, .layout-resources .col');
  });


  $(window).resize(function(){
  	equalheight('.home-grid .box, .layout-resources .col');
  });


  $(".controls").click(function() {
    $("body").toggleClass("blue");
    console.log("click");
    
  });


    

$(".filter-client .dropdown-trigger").click(function() {
  console.log("test");
  $(".filter-client .filters").slideToggle();
});


$(".filter-category .dropdown-trigger").click(function() {
  $(".filter-category .filters").slideToggle();
});


// $(".filter-category .filters a").click(function() {
//   $(".filter-category .filters").slideToggle();

// });

$("[data-trigger-research]").click(function() {
  $(".filter-category .filters").slideUp();
  $(".filter-content").slideUp();
  $("[data-research]").slideToggle();


});

$("[data-trigger-planning]").click(function() {
  $(".filter-category .filters").slideUp();
    $(".filter-content").slideUp();

  $("[data-planning]").slideToggle();

});

$("[data-trigger-branding]").click(function() {
  $(".filter-category .filters").slideUp();
    $(".filter-content").slideUp();

  $("[data-branding]").slideToggle();

});


$("[data-trigger-advertising]").click(function() {
  $(".filter-category .filters").slideUp();
    $(".filter-content").slideUp();

  $("[data-advertising]").slideToggle();

});


$("[data-trigger-collateral]").click(function() {
  $(".filter-category .filters").slideUp();
    $(".filter-content").slideUp();

  $("[data-research]").slideToggle();

});


$("[data-trigger-measurement]").click(function() {
  $(".filter-category .filters").slideUp();
    $(".filter-content").slideUp();

  $("[data-measurement]").slideToggle();

});


$("[data-trigger-website]").click(function() {
  $(".filter-category .filters").slideUp();
    $(".filter-content").slideUp();

  $("[data-website]").slideToggle();

});

$("[data-trigger-content]").click(function() {
  $(".filter-category .filters").slideUp();
    $(".filter-content").slideUp();

  $("[data-content]").slideToggle();

});


$("[data-trigger-1] a").click(function(){
  $(".thumb-item").removeClass("active");
    $("[data-trigger-1]").addClass("active");

  $(".main-block img").removeClass("active").hide();
  $("[data-img-1]").show().addClass("active");
  $(".people-content").hide();
  $("[data-position-1]").show();
});

$("[data-trigger-2] a").click(function(){
  $(".thumb-item").removeClass("active");
  $("[data-trigger-2]").addClass("active");
  $(".main-block img").removeClass("active").hide();
  $("[data-img-2]").show().addClass("active");
  $(".people-content").hide();
  $("[data-position-2]").show();
});

$("[data-trigger-3] a").click(function(){
  $(".thumb-item").removeClass("active");
  $("[data-trigger-3]").addClass("active");
  $(".main-block img").removeClass("active").hide();
  $("[data-img-3]").show().addClass("active");
  $(".people-content").hide();
  $("[data-position-3]").show();
});


$("[data-trigger-4] a").click(function(){
  $(".thumb-item").removeClass("active");
  $("[data-trigger-4]" ).addClass("active");
  $(".main-block img").removeClass("active").hide();
  $("[data-img-4]").show().addClass("active");
  $(".people-content").hide();
  $("[data-position-4]").show();
});

$("[data-trigger-5] a").click(function(){
  $(".thumb-item").removeClass("active");
  $("[data-trigger-5]" ).addClass("active");
  $(".main-block img").removeClass("active").hide();
  $("[data-img-5]").show().addClass("active");
  $(".people-content").hide();
  $("[data-position-5]").show();
});

$("[data-trigger-6] a").click(function(){
  $(".thumb-item").removeClass("active");
  $("[data-trigger-6]" ).addClass("active");
  $(".main-block img").removeClass("active").hide();
  $("[data-img-6]").show().addClass("active");
  $(".people-content").hide();
  $("[data-position-6]").show();
});


$(".work-list p").click(function(){
  console.log($(this).next(".filter-content"));
  $(this).next(".filter-content").slideToggle();
  $(this).toggleClass("active");
  
});


function explode(){
  $("nav").removeClass("open");
}
setTimeout(explode, 2000);