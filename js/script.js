$(document).ready(function(){


  // Initialize collapse button
  $(".button-collapse").sideNav({
      menuWidth: 250, // Default is 240
      edge: 'left', // Choose the horizontal origin
    });
$('.break-buttons .fancy').click(function(ev){
    // do whatever you want here

    ev.preventDefault();
    ev.stopPropagation();
});
});
