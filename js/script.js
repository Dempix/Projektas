$( document ).ready(function(){

  $(".button-collapse").sideNav();
})

$(document).ready(function()
{
    $(".gif").hover(
        function()
        {
          var src = $(this).attr("src");
          $(this).attr("src", src.replace(/\.png$/i, ".gif"));
        },
        function()
        {
          var src = $(this).attr("src");
          $(this).attr("src", src.replace(/\.gif$/i, ".png"));
        });
});

$(window).load(function(){
	console.log("labas");
	$('.gif').trigger("mouseover");
});