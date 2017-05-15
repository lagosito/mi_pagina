<!-- BEGIN FOOTER -->
<p class="copyright">2016 &copy; Studio Tigres</p>
<a href="#index" class="go2top">
    <i class="icon-arrow-up"></i>
</a>
<script src="<?php echo URL::asset('js/cerrarsesion/jquery-lazymouse.js'); ?>" type="text/javascript"></script>
<script>
	$(document).ready(function(){
		$("body").bind("mouse.active",function(){
			
		});
		$("body").bind("mouse.inactive",function(){
			location.href = "{!!url('/salir')!!}";
		});

		$.LazyMouse({
			delay:1500000
		});
	});
</script>
<!-- END FOOTER -->