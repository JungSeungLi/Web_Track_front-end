$(document).ready(function(){

	var slider_03 =	$('.bxslider_03').bxSlider({
			auto: true,controls:false,pager:false,maxSlides: 4,moveSlides:1,  slideWidth: 250,slideMargin:0,autoHover:true,
		});
		// 클릭시 멈춤 현상 해결 //
		$(document).on('click','.bx-next, .bx-prev',function() {
		slider.stopAuto();
		slider.startAuto();
		slider_01.stopAuto();
		slider_01.startAuto();
		});
		$(document).on('mouseover','.bx-pager, #bx-pager1',function() {
		slider.stopAuto();
		slider.startAuto();
		slider_01.stopAuto();
		slider_01.startAuto();
		slider_02.stopAuto();
		slider_02.startAuto();
		});	
});