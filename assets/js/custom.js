/* Write here your custom javascript codes */
jQuery(document).ready(function() {
  	App.init();
    LayerSlider.initLayerSlider();
    StyleSwitcher.initStyleSwitcher();
    OwlCarousel.initOwlCarousel();
    OwlRecentWorks.initOwlRecentWorksV2();
    $(".accordion-toggle").click(function () {
        $(".widget_body_type").slideToggle("slow");
        ($(this).children(".edit-toggle").text() === "+") ?  $(".edit-toggle").text("+") && $(this).children(".edit-toggle").text("-") : $(".edit-toggle").text("+");
    });
    $(window).scroll(function() {
        if ($(this).scrollTop()>0)
         {
            $('.header-above').fadeOut();
         }
        else
         {
          $('.header-above').fadeIn();
         }
    });
});