		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/my_js.js');?>"></script>
		<?php 
						foreach ($p as $player) {
							if($player['sold']==0)
							{

							$abc=".".$player['id'];
							$c=$player['time_end'];
							echo '<script>
$(document).ready(function(){
	$("'; echo $abc; echo'").countdown';echo $player['id'];echo'({ date';echo $player['id'];echo': "';echo $c; echo '" },function(){
		$("';echo $abc; echo '").text("sold");
		});
	});</script>

		<script type="text/javascript">
//change function for the class
(function($) {
	$.fn.countdown';echo $player['id'];echo'=function(options,callback) {
		var settings = {"date": null};
		if(options) {
			$.extend(settings,options);
		}
		this_sel = $(this);
		function count_exec';echo $player['id'];echo'() {
			eventDate=   Date.parse(settings["date';echo $player['id'];echo'"])/1000;
			currentDate=  Math.floor($.now()/1000);
			if (eventDate<=currentDate) {
				callback.call(this);
				clearInterval(interval);
			}
			seconds  =  eventDate-currentDate;
			days=Math.floor(seconds/(60*60*24));
			seconds-=days*60*60*24;
			hours=Math.floor(seconds/(60*60));
			seconds-=hours*60*60;
			minutes=Math.floor(seconds/60);
			seconds-=minutes*60;
			days=(String(days).length!==2)?"0"+days:days;
			hours=(String(hours).length!==2)?"0"+hours:hours;
			minutes=(String(minutes).length!==2)?"0"+minutes:minutes;
			seconds=(String(seconds).length!==2)?"0"+seconds:seconds;
			if (!isNaN(eventDate)) {
				this_sel.find(".days';echo $player['id'];echo'").text(days);
				this_sel.find(".hours';echo $player['id'];echo'").text(hours);
				this_sel.find(".mins';echo $player['id'];echo'").text(minutes);
				this_sel.find(".secs';echo $player['id'];echo'").text(seconds);
			}
		}
		count_exec';echo $player['id'];echo'();
		interval=setInterval(count_exec';echo $player['id'];echo',1000);
	}
})(jQuery);
		</script>';
		}
}
?>

	</body>
</html>