$(window).load(function() {
	setTimeout(function () {
		$(".loading").fadeOut("slow");
	},250);
});

new WOW().init();

$(document).ready(function() {
	$("#slides-1").owlCarousel(
		{
			autoPlay: true,
			items: 1,
			navigation:true,
			navigationText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
			dots: false,
			loop: true,
			itemsDesktop : [1199,1],
			itemsDesktopSmall : [980,1],
			itemsMobile : [479,1],
			itemsTablet: [768,1],
			itemsTabletSmall: false,
		}
	);
	$("#slides-2").owlCarousel(
		{
			autoPlay: true,
			items: 1,
			navigation:true,
			navigationText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
			dots: false,
			loop: true,
			itemsDesktop : [1199,1],
			itemsDesktopSmall : [980,1],
			itemsMobile : [479,1],
			itemsTablet: [768,1],
			itemsTabletSmall: false,
		}
	);
	$("#slides-3").owlCarousel(
		{
			autoPlay: true,
			items: 1,
			navigation:true,
			navigationText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
			dots: false,
			loop: true,
			itemsDesktop : [1199,1],
			itemsDesktopSmall : [980,1],
			itemsMobile : [479,1],
			itemsTablet: [768,1],
			itemsTabletSmall: false,
		}
	);
});

$(function(){

	$(".load-more").on("click", function(e){
		e.preventDefault();

		$(this).hide();
		$("#posts section").show();
	});

	/* Scroll to top */
	$(window).scroll(function(){
		( $(this).scrollTop() > 300 ) ? $("a#scroll-to-top").addClass('visible') : $("a#scroll-to-top").removeClass('visible');
	});

	$("a#scroll-to-top").click(function() {
		$("html, body").animate({ scrollTop: 0 }, "slow");
		return false;
	});

});

$(".maps").click(function() {
	$(".maps iframe").css("pointer-events", "auto");
});
 
$(".maps").mouseleave(function() {
	$(".maps iframe").css("pointer-events", "none");
});