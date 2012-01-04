jQuery(document).ready(function() {
//  jQuery(".toggleable-solr-row").hide();
  //toggle the componenet with class msg_body
  jQuery(".toggleable-solr-row").click(function()
  {
    jQuery(this).toggleClass('hidden');
  });
  jQuery(".toggle-solr-row").click(function()
  {
    jQuery(this).next(".toggleable-solr-row").toggleClass('hidden');
  });
});
