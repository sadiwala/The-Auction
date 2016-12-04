<?php include('user_header.php');?>
	<div class="container">
		<div class="col-lg-2">
			<h5 align="center"><u>Bided</u></h5>
			<ul>
				<?php
						foreach ($b as $player) {
							if($player['bid_price']>$player['base_price']){
				?>
				<li><h5><?php echo $player['name'];?></h5></li>
				<?php }
				}?>
			</ul>
		</div>
		<div id="portfolio" class="bg-light-gray">
			<div class="col-lg-8">
			
				<div class="row">
					<?php
						foreach ($p as $player) {
							$b='image/'.$player["name"].'.jpg';
							if($player['sold']==1)
							{
					?>
					<div class="col-lg-4 portfolio-item">
						
						<div class="portfolio-link">
						<img src="<?php echo base_url($b);?>" class="img-rounded img-responsive" height="150" width="150">
						</div>
						<div class="portfolio-caption">
							<h5 align="center"><?php echo $player['name'];?></h5>
							<div class="pull-left"><?php echo $player['country'];?></div>
							<div class="pull-right"><?php echo $player['info'];?></div>
							<br />
							<h6 align="center">Base Price:<?php echo $player['base_price'];?></h6>
							<?php 
								if($player['bid_price']>$player['base_price'])
								{
							?>
							<h6 align="center">Bided Price:<?php echo $player['bid_price'];?></h6>
							<?php } ?>
						</div>
					</div>
					<?php
						}
						}
					?>
				</div>
			</div>
		</div>
		<div class="col-lg-2">
			<h5 align="center"><u>Your team</u></h5>
			<ul>
				<?php
						foreach ($y as $player) {
							//if($player['bid_price']>$player['base_price']){
				?>
				<li><h5><?php echo $player['name'];?></h5></li>
				<?php //}
				}?>
			</ul>
		</div>
	</div>
<?php include('user_footer.php');?>