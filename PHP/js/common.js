// JavaScript Document
$(document).ready(function(){
	
	$('.az').click(function(){
		$('div.loginBox').removeClass('dspN');
		$('div.loginBox').addClass('dspB');
		$('div.op').addClass('disable');
		$('div.op').addClass('opcty');
		
		preventDefault();
  	});
		
		$('#ay').click(function(){
		$('div.loginBox').removeClass('dspB');
		$('div.loginBox').addClass('dspN');
		$('div.op').removeClass('disable');
		$('div.op').removeClass('opcty');
		
		preventDefault();
  	});
});