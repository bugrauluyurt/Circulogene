/* Write here your custom javascript codes */
jQuery(document).ready(function() {
  	App.init();
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