<section id="events" class="events-section">	
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php echo kirbytext($data->text()) ?>
				
				<div class="row">
					
					<?php foreach($data->children()->visible() as $event): ?>
					
					<div class="col-sm-6 col-md-4 project">
	
						<div class="events">

							<?php snippet('map', array(
							    'address' => 'Denver International Airport, USA',
							    'zoom'    => 10,
							    'width'   => 350,
							    'height'  => 275
								));
							?>

							<a href="<?php echo $event->images()->first()->url() ?>" class="popup" title="Zoom">												
								<img src="<?php echo $event->images()->first()->url() ?>" class="img-responsive">
							</a>

							<?php if ($event->location() !=""): ?>

							
								<a href="<?php echo html($event->location()) ?>" title="Launch Website" target="_blank">
								<?php echo html($event->title()) ?></a>
							

							<?php else : ?>

							
								<?php echo html($event->title()) ?>
							

							<?php endif ?>
						
						</div>
			
					</div><!-- end col -->
				
				<?php endforeach ?>
				
				</div><!-- end row -->
			
			</div><!-- end col -->
		</div><!-- end row -->
	</div><!-- end container -->

</section>
