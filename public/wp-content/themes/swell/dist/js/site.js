/*-------------------------------------------
  Equal Heights
-------------------------------------------*/


equalheight = function (container) {

  var currentTallest = 0,
    currentRowStart = 0,
    rowDivs = [],
    $el,
    topPosition = 0;
  $(container).each(function () {

    $el = $(this);
    $($el).height('auto');
    topPostion = $el.position().top;

    if (currentRowStart != topPostion) {
      for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
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
    for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
      rowDivs[currentDiv].height(currentTallest);
    }
  });
};

$(window).load(function () {
  equalheight('.home-grid .box, .layout-resources .col');
});


$(window).resize(function () {
  equalheight('.home-grid .box, .layout-resources .col');
});


$(".controls").click(function () {
  $("body").toggleClass("blue");
  console.log("click");

});




$(".filter-client .dropdown-trigger").click(function () {
  console.log("test");
  $(".filter-client .filters").slideToggle();
});


$(".filter-category .dropdown-trigger").click(function () {
  $(".filter-category .filters").slideToggle();
});


// $(".filter-category .filters a").click(function() {
//   $(".filter-category .filters").slideToggle();

// });

$("[data-trigger-research]").click(function () {
  $(".filter-category .filters").slideUp();
  $(".filter-content").slideUp();
  $("[data-research]").slideToggle();


});

$("[data-trigger-planning]").click(function () {
  $(".filter-category .filters").slideUp();
  $(".filter-content").slideUp();

  $("[data-planning]").slideToggle();

});

$("[data-trigger-branding]").click(function () {
  $(".filter-category .filters").slideUp();
  $(".filter-content").slideUp();

  $("[data-branding]").slideToggle();

});


$("[data-trigger-advertising]").click(function () {
  $(".filter-category .filters").slideUp();
  $(".filter-content").slideUp();

  $("[data-advertising]").slideToggle();

});


$("[data-trigger-collateral]").click(function () {
  $(".filter-category .filters").slideUp();
  $(".filter-content").slideUp();

  $("[data-research]").slideToggle();

});


$("[data-trigger-measurement]").click(function () {
  $(".filter-category .filters").slideUp();
  $(".filter-content").slideUp();

  $("[data-measurement]").slideToggle();

});


$("[data-trigger-website]").click(function () {
  $(".filter-category .filters").slideUp();
  $(".filter-content").slideUp();

  $("[data-website]").slideToggle();

});

$("[data-trigger-content]").click(function () {
  $(".filter-category .filters").slideUp();
  $(".filter-content").slideUp();

  $("[data-content]").slideToggle();

});


// var trigger = $("[data-trigger]");

// // User clicked on button
// trigger.click(function () {
//   // Remove all active classes for both the trigger and panel
//   $('[data-trigger]').removeClass('active');
//   $('[data-trigger-panel]').removeClass('active');

//   // Get the attr value of the clicked item
//   var triggerId = $(this).attr('data-trigger');
//   // Add active class to the button you just clicked
//   $(this).addClass('active');

//   // Find the panel with the same value
//   var panel = $('[data-trigger-panel="'+ triggerId +'"]');
//   // Add class to the panel with the same value as the button you just clicked
//   panel.addClass('active')
// });



$("[data-trigger-1] a").click(function () {
  $(".thumb-item").removeClass("active");
  $("[data-trigger-1]").addClass("active");

  $(".main-block img").removeClass("active").hide();
  $("[data-img-1]").show().addClass("active");
  $(".people-content").hide();
  $("[data-position-1]").show();
});

$("[data-trigger-2] a").click(function () {
  $(".thumb-item").removeClass("active");
  $("[data-trigger-2]").addClass("active");
  $(".main-block img").removeClass("active").hide();
  $("[data-img-2]").show().addClass("active");
  $(".people-content").hide();
  $("[data-position-2]").show();
});

$("[data-trigger-3] a").click(function () {
  $(".thumb-item").removeClass("active");
  $("[data-trigger-3]").addClass("active");
  $(".main-block img").removeClass("active").hide();
  $("[data-img-3]").show().addClass("active");
  $(".people-content").hide();
  $("[data-position-3]").show();
});


$("[data-trigger-4] a").click(function () {
  $(".thumb-item").removeClass("active");
  $("[data-trigger-4]").addClass("active");
  $(".main-block img").removeClass("active").hide();
  $("[data-img-4]").show().addClass("active");
  $(".people-content").hide();
  $("[data-position-4]").show();
});

$("[data-trigger-5] a").click(function () {
  $(".thumb-item").removeClass("active");
  $("[data-trigger-5]").addClass("active");
  $(".main-block img").removeClass("active").hide();
  $("[data-img-5]").show().addClass("active");
  $(".people-content").hide();
  $("[data-position-5]").show();
});

$("[data-trigger-6] a").click(function () {
  $(".thumb-item").removeClass("active");
  $("[data-trigger-6]").addClass("active");
  $(".main-block img").removeClass("active").hide();
  $("[data-img-6]").show().addClass("active");
  $(".people-content").hide();
  $("[data-position-6]").show();
});
$("[data-trigger-7] a").click(function () {
  $(".thumb-item").removeClass("active");
  $("[data-trigger-7]").addClass("active");
  $(".main-block img").removeClass("active").hide();
  $("[data-img-7]").show().addClass("active");
  $(".people-content").hide();
  $("[data-position-7]").show();
});
$("[data-trigger-8] a").click(function () {
  $(".thumb-item").removeClass("active");
  $("[data-trigger-8]").addClass("active");
  $(".main-block img").removeClass("active").hide();
  $("[data-img-8]").show().addClass("active");
  $(".people-content").hide();
  $("[data-position-8]").show();
});

$("[data-trigger-9] a").click(function () {
  $(".thumb-item").removeClass("active");
  $("[data-trigger-9]").addClass("active");
  $(".main-block img").removeClass("active").hide();
  $("[data-img-9]").show().addClass("active");
  $(".people-content").hide();
  $("[data-position-9]").show();
});
$("[data-trigger-10] a").click(function () {
  $(".thumb-item").removeClass("active");
  $("[data-trigger-10]").addClass("active");
  $(".main-block img").removeClass("active").hide();
  $("[data-img-10]").show().addClass("active");
  $(".people-content").hide();
  $("[data-position-10]").show();
});
$("[data-trigger-11] a").click(function () {
  $(".thumb-item").removeClass("active");
  $("[data-trigger-11]").addClass("active");
  $(".main-block img").removeClass("active").hide();
  $("[data-img-11]").show().addClass("active");
  $(".people-content").hide();
  $("[data-position-11]").show();
});
$("[data-trigger-12] a").click(function () {
  $(".thumb-item").removeClass("active");
  $("[data-trigger-12]").addClass("active");
  $(".main-block img").removeClass("active").hide();
  $("[data-img-12]").show().addClass("active");
  $(".people-content").hide();
  $("[data-position-12]").show();
});
$("[data-trigger-13] a").click(function () {
  $(".thumb-item").removeClass("active");
  $("[data-trigger-13]").addClass("active");
  $(".main-block img").removeClass("active").hide();
  $("[data-img-13]").show().addClass("active");
  $(".people-content").hide();
  $("[data-position-13]").show();
});
$("[data-trigger-14] a").click(function () {
  $(".thumb-item").removeClass("active");
  $("[data-trigger-14]").addClass("active");
  $(".main-block img").removeClass("active").hide();
  $("[data-img-14]").show().addClass("active");
  $(".people-content").hide();
  $("[data-position-14]").show();
});
$("[data-trigger-15] a").click(function () {
  $(".thumb-item").removeClass("active");
  $("[data-trigger-15]").addClass("active");
  $(".main-block img").removeClass("active").hide();
  $("[data-img-15]").show().addClass("active");
  $(".people-content").hide();
  $("[data-position-15]").show();
});



$('[data-trigger-filter]').on('click', function () {
  var id = $(this).attr('data-trigger-filter');
  $(".filter-category .filters").slideUp();
console.log('heyyy');
  $('[data-filter]').each(function () {
    var targetId = $(this).attr('data-filter');

    if (targetId == id) {
      $(this).slideDown();
    } else {
      $(this).slideUp();

    }

  });
})

$(".work-list p").click(function () {
  console.log($(this).next(".filter-content"));
  $(this).next(".filter-content").slideToggle();
  $(this).toggleClass("active");

});


function explode() {
  $("nav").removeClass("open");
}
setTimeout(explode, 2000);

$(document).ready(function () {

  if ($('#map').length) {
    var locations = new Array();

    // Loop through cms addresses and add to locations
    $('.js-address-fields').each(function () {
      var mapTitle = $(this).attr('data-map-title');
      var mapLatitude = Number($(this).attr('data-map-latitude'));
      var mapLongitude = Number($(this).attr('data-map-longitude'));

      locations.push([mapTitle, mapLatitude, mapLongitude]);
    });
    // var locations = [
    //   ['SWELL HQ', 39.9508394, -75.1584951, 10],
    //   ['SWELL HQ2', 40.267077, -76.887204, 5],
    // ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 7,
      //  center: new google.maps.LatLng(),
      center: new google.maps.LatLng(locations[1][1], locations[1][2]),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;
    var markers = new Array();

    for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      markers.push(marker);

      google.maps.event.addListener(marker, 'click', (function (marker, i) {
        return function () {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }

    function AutoCenter() {
      //  Create a new viewpoint bound
      var bounds = new google.maps.LatLngBounds();
      //  Go through each...
      $.each(markers, function (index, marker) {
        bounds.extend(marker.position);
      });
      //  Fit these bounds to the map
      map.fitBounds(bounds);
    }
    //  AutoCenter();
  }
});

