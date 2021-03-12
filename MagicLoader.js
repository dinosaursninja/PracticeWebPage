//This creates a side navigator collapsible and functional, and shows my site under constr.
$(document).ready(function(){
  $('.sidenav').sidenav({draggable: true});

  // Site under construction message
  M.toast({html: "Site under construction", classes: "rounded"});

  //about us header
  $('.parallax').parallax();
  
  //register login
  $('.tabs').tabs();

});