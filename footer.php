	</div>
	<!-- <div class="green-dotted"></div> -->
	<footer>
		<div class="row">
			<div class="col-lg-2 col-centered text-center footer-logo">
				<a href="index.php"><img src="images/logo.png" alt="Logo"></a>
			</div>
		</div>
		<div class="row footer-bar">
			<div class="col-lg-4 col-md-4">
				<ul>
					<li>Privacy Policy</li>
					<li>Terms & Conditions</li>
				</ul>
			</div>
			<div class="col-lg-4 col-md-4 text-center copyright">
				2014 &copy; All Rights Reserved to outbox.ventures
			</div>
		</div>
	</footer>
</div>
</body>
</html>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$(window).scroll(function(){
		var scrollheight = $(window).scrollTop();
		var width = $( window ).width();
		// var height = $( window ).height();
		if( width > 1024 )
		{
			if(scrollheight >= '2')
			{
				$("#logo").addClass('fix-logo');
				$("header").children('.row').addClass('fix-header-row');
				$("#menu ul a li").addClass('fix-menu')
			}
			else
			{
				$("#logo").removeClass('fix-logo');
				$("header").children('.row').removeClass('fix-header-row');
				$("#menu ul a li").removeClass('fix-menu')

			}
		}

		var topheight = $('#index-line-1').offset().top;
		var scrollheight = $(window).scrollTop();
		var result = parseInt(topheight) - parseInt(scrollheight);
		
		if(result <= '335')
		{
			$("#home-3-image-1").addClass('nekoAnim-fadeInLeft nekoAnim-animated nekoAnim-visible');
			$("#home-3-content-1").addClass('nekoAnim-fadeInDown nekoAnim-animated nekoAnim-visible');
		}
		var topheight = $('#home-3-image-1').offset().top;
		var result = parseInt(topheight) - parseInt(scrollheight);
		if(result <= '250')
		{
			$("#home-3-image-2").addClass('nekoAnim-fadeInRight nekoAnim-animated nekoAnim-visible');
			$("#home-3-content-2").addClass('nekoAnim-fadeInDown nekoAnim-animated nekoAnim-visible');
		}
		var topheight = $('#home-3-image-2').offset().top;
		var result = parseInt(topheight) - parseInt(scrollheight);
		if(result <= '250')
		{
			$("#home-3-image-3").addClass('nekoAnim-fadeInLeft nekoAnim-animated nekoAnim-visible');
			$("#home-3-content-3").addClass('nekoAnim-fadeInDown nekoAnim-animated nekoAnim-visible');
		}
		var topheight = $('#home-3-image-3').offset().top;
		var result = parseInt(topheight) - parseInt(scrollheight);
		if(result <= '250')
		{
			$("#home-3-image-4").addClass('nekoAnim-fadeInRight nekoAnim-animated nekoAnim-visible');
			$("#home-3-content-4").addClass('nekoAnim-fadeInDown nekoAnim-animated nekoAnim-visible');
		}
		var topheight = $('#home-3-image-4').offset().top;
		var result = parseInt(topheight) - parseInt(scrollheight);
		if(result <= '250')
		{
			$("#home-3-image-5").addClass('nekoAnim-fadeInLeft nekoAnim-animated nekoAnim-visible');
			$("#home-3-content-5").addClass('nekoAnim-fadeInDown nekoAnim-animated nekoAnim-visible');
		}
		
		//fetch screen width..
		// var width = $( window ).width();
		// // var height = $( window ).height();
		// if( width > 1024 )
		// {
		// 	if(scrollheight >= '42'){
		// 		$(".logo").addClass('fix-logo');
		// 		$(".menu").addClass('fix-menu');
		// 		$(".header").addClass('fix-header');
		// 		$(".header").children('.row').addClass('fix-header-row');
		// 	}
		// 	else
		// 	{
		// 		$(".logo").removeClass('fix-logo');
		// 		$(".menu").removeClass('fix-menu');
		// 		$(".header").removeClass('fix-header');
		// 		$(".header").children('.row').removeClass('fix-header-row');
		// 	}
		// }
	});

	setTimeout(function(){
        $("#home-1").addClass('nekoAnim-fadeInUp nekoAnim-animated nekoAnim-visible');
     }, 80);
	setTimeout(function(){
        $("#home-2").addClass('nekoAnim-fadeInDown nekoAnim-animated nekoAnim-visible');
     }, 80);
});
</script>