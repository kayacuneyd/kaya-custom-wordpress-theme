(function ($) {
  $(document).ready(function () {
    $(".default_sidebar > ul").addClass("list-group list-group-flush");
    $(".default_sidebar > ul > li").addClass("list-group-item");
    $(".default_sidebar > ul > li > a").addClass(
      "text-decoration-none text-dark"
    );

    //Footer Lists Unstyling
    $(".footer_widget > ul").addClass("list-unstyled");
    $(".footer_widget > ul > li > a").addClass(
      "text-decoration-none text-light"
    );

    $(".main-header img").addClass("rounded");
  });
})(jQuery);
