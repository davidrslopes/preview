$(function () {
  // POPOVERS EVERYWHERE!
  $('[data-toggle="popover"]').popover()
  // TOOLTIPS EVERYWHERE!
  $('[data-toggle="tooltip"]').tooltip()

  $(".table-row").click(function() {
    window.document.location = $(this).data("href");
  });
});
