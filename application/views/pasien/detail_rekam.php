<div class="col-lg-12">
	<div class="row">

		<?php
		if (!empty($res_gigi)){
			foreach ($res_gigi[0] as $key => $value) {
				if (!empty($value)){
					?>
					<h3>
					<div class="row">
						<div class="col-md-6">
								<?php
								echo str_replace('_',' ',$key);
								?>
						</div>
						<div class="col-md-6">
							: <?php 
							echo str_replace('-','',$value);
							?>
						</div>
					</div>
					</h3>
					<?php
				}
			}
		}
		else{
			?>
			<h3> Data Tidak Terisi </h3>
			<?php
		}
		?>
	</div>
</div>