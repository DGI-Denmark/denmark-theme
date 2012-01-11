jQuery(document).ready(function() {
  //jQuery(".toggleable-solr-row").hide();
  //jQuery(".toggleable-solr-row").click(function()
  //{
  //  jQuery(this).toggleClass('hidden');
  //});
  jQuery(".toggle-solr-row").click(function()
  {
    jQuery(this).parent().next(".toggleable-solr-row").toggleClass('hidden');
    jQuery(this).toggleClass('toggle-plus');
    jQuery(this).toggleClass('toggle-minus');
  });
});
