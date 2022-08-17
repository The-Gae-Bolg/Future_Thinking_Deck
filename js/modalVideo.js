$(document).ready(function () {

  /*---------Carrucel-----------------------*/

  //console.log($("#carousel"))

  $('#recipeCarousel').carousel({
    interval: 10000
  })

  $('.carousel .carousel-item').each(function () {
    var minPerSlide = 3;
    var next = $(this).next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i = 0; i < minPerSlide; i++) {
      next = next.next();
      if (!next.length) {
        next = $(this).siblings(':first');
      }

      next.children(':first-child').clone().appendTo($(this));
    }
  });

  /*---------Modal-----------------------*/
  var $videoSrc;
  var $type;

  $('.video-btn').click(function () {
    $videoSrc = $(this).data("src");
    $type = $videoSrc.slice(0, 3);

    if ($type === 'img') {
      $('#materialCont').attr("class", "embed-responsive");
      //generate img code
      var img = '<img class="img-fluid" id="video" src="' + $videoSrc + '" />';
      $('#materialCont').html(img);

      //descarga de imagen
      let link= document.createElement('a');
      link.setAttribute('href',$videoSrc);
      link.setAttribute('download',$(this).data("link"));
      link.click();
    } else {
      $('#materialCont').attr("class", "embed-responsive embed-responsive-16by9");
      //generate iframe code
      var iframe = '<iframe class="embed-responsive-item" id="video" src="' + $videoSrc + '?autoplay=1&amp;modestbranding=1&amp;showinfo=0"></iframe>';
      $('#materialCont').html(iframe);
    }

    $('#myModal').modal('show');
  });

  $('.close').click(function () {
    $('#myModal').modal('hide');
  });

  // when the modal is opened autoplay it  

  $('#myModal').on('shown.bs.modal', function (e) {

    // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get

  })

  // stop playing the youtube video when I close the modal
  $('#myModal').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $("#video").attr('src', "");
  })
  // document ready  
});
