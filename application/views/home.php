		<!-- Main component for a primary marketing message or call to action -->
		<div class="jumbotron">
			<h2><?php echo $person; ?>-ism <small><i>Unconventional Phrases &amp; Semantic Errors of Everyday Axioms.</i></small></h2>
			<p><strong>How it works:</strong> Type your favorite <?php echo $person; ?> quote in the box, and then click the 'Post' button. The quote will be saved and everyone can show their appreciation by giving a thumbs-up.</p>
			<div class="row">
				<form role="form">
				<div class="col-md-8 col-md-offset-1">
					<input type="text" class="form-control" />
				</div>
				<div class="col-md-1"><button type="submit" class="btn btn-primary"> <strong>Post</strong></button></div>
				</form>
			</div>
		</div>

		<!-- Begin Quotes-->
		<div id="freewall" class="free-wall">
		<?php
			foreach ($quotes->result() as $ism) {
    		echo '
					<div class="panel panel-default item">
						<div class="panel-body quoteCard">
							<p class="quoteText">'.$ism->QUOTE.'
							<br /><br />
							<button type="button" class="btn btn-success">
								<span class="glyphicon glyphicon-thumbs-up"></span>
							</button>
							<span class="badge">'.$ism->UP_VOTES.'</span>
						</div>
					</div><!-- End Item-->';
			}
		?>
		</div>
		<!-- End Quotes -->

		<script>
    	$(function() {
      	var wall = new freewall("#freewall");
      	wall.fitWidth();
    	});
  	</script>
