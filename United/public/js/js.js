


/*carousel*/
 $('#myCarousel').carousel({
    interval: 3000,
 })
/*end carousel*/

$(document).ready(function() {
    $('#Carousel').carousel({
        interval:500
    })
});


$('#myModal').modal('show');



/*pop up*/
function centerModal() {
    $(this).css('display', 'block');
    var $dialog = $(this).find(".modal-dialog");
    var offset = ($(window).height() - $dialog.height()) / 2;
    // Center modal vertically in window
    $dialog.css("margin-top", offset);
}

$('.modal').on('show.bs.modal', centerModal);
$(window).on("resize", function () {
    $('.modal:visible').each(centerModal);
});

/*end pop up*/



   wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };


    /*highligted products*/

    $(document).ready(function() {
    $('#Carousel').carousel({
        interval: 5000
    })
});

    /*product-details*/


   $(document).ready(function(){
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
   
  
    /* end  product-details*/

   