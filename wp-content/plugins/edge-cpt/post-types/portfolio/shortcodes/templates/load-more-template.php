<?php if($query_results->max_num_pages>1){ ?>
	<div class="edgtf-ptf-list-paging">
		<span class="edgtf-ptf-list-load-more">
			<a href="#"><?php esc_html_e('Load more','edge-cpt'); ?></a>
		</span>
		<div class="edgtf-3d-cube-holder">
			<div class="edgtf-3d-cube">
				<div class="edgtf-cube-face"></div>
				<div class="edgtf-cube-face"></div>
				<div class="edgtf-cube-face"></div>
				<div class="edgtf-cube-face"></div>
				<div class="edgtf-cube-face"></div>
				<div class="edgtf-cube-face"></div>
			</div>
		</div>
	</div>
<?php }