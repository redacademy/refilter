(function($) {


    $(".down-arrow-1").click(function() {
        $(".down-arrow-1").fadeOut(function(){
            $(".up-arrow").show().click(function(){
                    $(".down-arrow-1").show()
              $(".up-arrow").fadeOut()
              $(".staff-member-mobile-description").fadeOut()
              $(".mobile-fun-fact-header").fadeOut()
              $(".staff-member-mobile-fun-fact").fadeOut()
            });
          })
  $(".staff-member-mobile-description").show();
  $(".mobile-fun-fact-header").show();
  $(".staff-member-mobile-fun-fact").show();
  $(".down-arrow-1").show()
    });



})(jQuery);