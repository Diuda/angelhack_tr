$flag=1;
$( document ).ready(function() {
	var s=$("#back_top").scrollTop();
	console.log(s);
$("#dw").click(function() {
	if($flag==1){
    $('html,body').animate({
        scrollTop: $(".head").offset().top},
        'slow');
    $("#dw").css("left","70%");
    $('#dw').css("transform","rotate(180deg)");
	$flag=0;
	}
	else
	{
		$('html,body').animate({
        	scrollTop: $(".back_top").offset().top},
        	'slow');
		$("#dw").css("left","24.5%");
		$('#dw').css("transform","rotate(0deg)");
		$flag=1;
	}
});
if(s==null)
{
	console.log("haha");
	$("#dw").css("left","24.5%");
    $('#dw').css("transform","rotate(0deg)");
}
});
