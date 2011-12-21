jQuery(document).ready(function() {

function positionFooter() {
  var docHeight = $(document.body).height() - $("#sticky-footer-push").height();
  if(docHeight < $(window).height()){
    var diff = $(window).height() - docHeight;
    var diff = diff - 20; // there is already a bottom padding of 45px everywhere;
    if (!$("#sticky-footer-push").length > 0) {
      $(footer).before('<div id="sticky-footer-push"></div>');
    }
    $("#sticky-footer-push").height(diff);
  }
}

footer = $("#sticky-footer-anchor");

positionFooter();

$(window)
  .scroll(positionFooter)
  .resize(positionFooter);

});