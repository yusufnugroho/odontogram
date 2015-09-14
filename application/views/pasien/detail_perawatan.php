<div class="col-md-12">
	<div class="row">
		<?php
		if (!empty($res_perawatan)){
			foreach ($res_perawatan[0] as $key => $value) {
				?>
				<div class="col-md-6">
					<?php echo $key?>
				</div>
				<div class="col-md-6">
					: <?php echo $value?>
				</div>
				<?php
			}
		} else {
			?>
			<h2>Tidak ada data yang ditemukan</h2>
			<?php
		}
		?>
	</div>
</div>