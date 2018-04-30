$(document).ready(function() {
	$('#leftbuttons button').click(function() {
		$('#texter > section').css('display','none')
		$('#'+this.getAttribute('app-id')).css('display','block')
	})
})