/*-------------------------------------------
    Equal Heights
  -------------------------------------------*/
equalheight = function(e) {
  var t = 0,
    n = 0,
    r = [],
    i, s = 0;
  $(e).each(function() {
    i = $(this);
    $(i).height("auto");
    topPostion = i.position().top;
    if (n != topPostion) {
      for (currentDiv = 0; currentDiv < r.length; currentDiv++) r[currentDiv].height(t);
      r.length = 0;
      n = topPostion;
      t = i.height();
      r.push(i)
    } else {
      r.push(i);
      t = t < i.height() ? i.height() : t
    }
    for (currentDiv = 0; currentDiv < r.length; currentDiv++) r[currentDiv].height(t)
  })
};
$(window).load(function() {
  equalheight(".home-grid .box, .layout-resources .col")
});
$(window).resize(function() {
  equalheight(".home-grid .box, .layout-resources .col")
});
$(".controls").click(function() {
  $("body").toggleClass("blue");

});
$(".filter-client .dropdown-trigger").click(function() {

  $(".filter-client .filters").slideToggle()
});
$(".filter-category .dropdown-trigger").click(function() {
  $(".filter-category .filters").slideToggle()
});
$("[data-trigger-research]").click(function() {
  $(".filter-category .filters").slideUp();
  $(".filter-content").slideUp();
  $("[data-research]").slideToggle()
});
$("[data-trigger-planning]").click(function() {
  $(".filter-category .filters").slideUp();
  $(".filter-content").slideUp();
  $("[data-planning]").slideToggle()
});
$("[data-trigger-branding]").click(function() {
  $(".filter-category .filters").slideUp();
  $(".filter-content").slideUp();
  $("[data-branding]").slideToggle()
});
$("[data-trigger-advertising]").click(function() {
  $(".filter-category .filters").slideUp();
  $(".filter-content").slideUp();
  $("[data-advertising]").slideToggle()
});
$("[data-trigger-collateral]").click(function() {
  $(".filter-category .filters").slideUp();
  $(".filter-content").slideUp();
  $("[data-research]").slideToggle()
});
$("[data-trigger-measurement]").click(function() {
  $(".filter-category .filters").slideUp();
  $(".filter-content").slideUp();
  $("[data-measurement]").slideToggle()
});
$("[data-trigger-website]").click(function() {
  $(".filter-category .filters").slideUp();
  $(".filter-content").slideUp();
  $("[data-website]").slideToggle()
});
$("[data-trigger-content]").click(function() {
  $(".filter-category .filters").slideUp();
  $(".filter-content").slideUp();
  $("[data-content]").slideToggle()
});
$("[data-trigger-1]").click(function() {
  $(".thumb-item").removeClass("active");
  $(this).addClass("active");
  $(".main-block img").removeClass("active").hide();
  $("[data-img-1").show().addClass("active");
  $(".people-content").hide();
  $("[data-position-1]").show()
});
$("[data-trigger-2]").click(function() {
  $(".thumb-item").removeClass("active");
  $(this).addClass("active");
  $(".main-block img").removeClass("active").hide();
  $("[data-img-2").show().addClass("active");
  $(".people-content").hide();
  $("[data-position-2]").show()
});
$("[data-trigger-3]").click(function() {
  $(".thumb-item").removeClass("active");
  $(this).addClass("active");
  $(".main-block img").removeClass("active").hide();
  $("[data-img-3").show().addClass("active");
  $(".people-content").hide();
  $("[data-position-3]").show()
});
$("[data-trigger-4]").click(function() {
  $(".thumb-item").removeClass("active");
  $(this).addClass("active");
  $(".main-block img").removeClass("active").hide();
  $("[data-img-4").show().addClass("active");
  $(".people-content").hide();
  $("[data-position-4]").show()
});
$(".work-list p").click(function() {

  $(this).next(".filter-content").slideToggle();
  $(this).toggleClass("active")
});
