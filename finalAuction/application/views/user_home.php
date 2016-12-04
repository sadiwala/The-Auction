<?php include('user_header.php');?>
	<div class="container">
		<div class="col-lg-2">
			<h5 align="center"><u>Bided</u></h5>
			<ul>
				<?php
						foreach ($b as $player) {
							if($player['bid_price']>$player['base_price']&&$player['sold']==0){
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
							if($player['sold']==0)
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
							<?php $timeE = date('h:i:s',strtotime('+0 hour +5 minutes',strtotime($player['time_start'])));?>
							<h6 align="center">Time Remaining:</h6>
							<div class="<?php echo $player['id'];?>">
								<?php $c='days'.$player['id'];
									  $e='hours'.$player['id'];
									  $f='mins'.$player['id'];
									  $g='secs'.$player['id']; ?>
								<span class="<?php echo $c;?>">00</span>d
								<span class="<?php echo $e;?>">00</span>h
								<span class="<?php echo $f;?>">00</span>m
								<span class="<?php echo $g;?>">00</span>s
							</div>
							<?php } ?>
							<?php 
								if($player['bid_price'] <= $player['base_price'])
								{
							?>
							<h6 align="center">Bided Price:Not yet bided</h6>
							<h6 align="center">Time Remaining:
							<h6 align="center">Not start</h6>
							<?php } ?>
							<form action="<?php echo base_url('index.php/bid/insert');?>" method="post">
								<div class="form-group">
									<input type="number" name="<?php echo $player['name'];?>" class="form-control" placeholder="bid here" />
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-success">BidIt</button>
								</div>
							</form>
						</div>
					</div>
					<?php $time=time();$plyrid=$player['id']; $t_id=$player['team_id']; $m_id=intval($t_id/8); $m_id="players_info".$m_id;  $q="UPDATE `$m_id` SET `sold` = 1 WHERE `id` = '$plyrid' AND `timeE`<'$time'";
					mysql_query($q);
				 ?>
					<?php
						}
						}
					?>
				</div>
			</div>
		</div>
		<div class="col-lg-2">
			<h5 align="center"><u>Your leading bids</u></h5>
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