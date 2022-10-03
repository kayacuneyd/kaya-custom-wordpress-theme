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
    $("#comments #reply-title").addClass("fs-5 fw-bold text-dark");
    $("#commentform > p").addClass("m-0");
    $(
      "#commentform #comment, #commentform #author, #commentform #email, #commentform #url"
    ).addClass("form-control form-control-sm");
    $("#commentform #submit").addClass("btn btn-success btn-sm");
    $(".comment-form-cookies-consent").addClass("mb-2");

    $(".section-three h2").addClass("fs-4 fw-bold");

    $(".features h3").addClass("fs-6 fw-bold");
  });
})(jQuery);
