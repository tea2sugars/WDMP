<div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  	<div class="container-fluid">
	  <div class="row">
		  <section class="col-xs-12">
		  	<?php print $content['jumbotron']; ?>
		  </section>
	  </div>
	</div>
	<div class="container">
	  <div class="row">
		  <section class="col-xs-12">
		  	<?php print $content['top']; ?>
		  </section>
	  </div>
	</div>
	<div class="container-fluid">
	  <div class="row">
		  <section class="col-xs-12">
		  	<?php print $content['products']; ?>
		  </section>
	  </div>
	</div>
	<div class="container">
	  <div class="row">
		  <section class="col-xs-12">
		  	<?php print $content['bottom']; ?>
		  </section>
	  </div>
	</div>
</div>
