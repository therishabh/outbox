	</div>
	<!-- <div class="green-dotted"></div> -->
	<footer>
		<div class="row">
			<div class="col-lg-2 col-centered text-center footer-logo">
				<a href="index.php"><img src="images/logo.png" alt="Logo"></a>
			</div>
		</div>
		<div class="row footer-bar">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center terms-con">
				<ul>
					<li>Privacy Policy</li>
					<li>Terms & Conditions</li>
				</ul>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center copyright">
				2014 &copy; All Rights Reserved to outbox.ventures
			</div>
		</div>
	</footer>
</div>
</body>
</html>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$("#home-3-image-5 .home-3-img").mouseover(function()
    {
        $("#home-3-image-5 .img_2").show();
        $("#home-3-image-5 .img_1").hide();
    	$("#home-3-image-5 .img_3").hide();
    }).mouseout(function()
    {
        $("#home-3-image-5 .img_1").show();
        $("#home-3-image-5 .img_2").hide();
    	$("#home-3-image-5 .img_3").hide();
    }).mousedown(function() {
        $("#home-3-image-5 .img_1").hide();
        $("#home-3-image-5 .img_2").hide();
    	$("#home-3-image-5 .img_3").show();
    });
});
</script>