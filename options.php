<div class="wrap">
	<h2>Real Sticky Options</h2>
		
    <div style="margin-left:0px;">
		
		<form method="POST" action="options.php"><?php wp_nonce_field('update-options'); ?>
			<div class="inside">
				<table class="form-table"><tr>
					<th><label for="css_style">Set Css Style:</label></th>
				<td>
				
	<textarea name="css_style" id="css_style" rows="10" cols="80"><?php 

	$css_style = get_option('css_style'); 

	if($css_style==''){
	
	echo '&lt;style type="text/css"&gt;
		
    #real-sticky  { border-bottom:2px solid #DDDDDD; padding-bottom:10px; }
    #real-sticky  h2{ font-weight:bold; font-size:20px; margin-bottom:10px; }
	#real-sticky  p{ font-size:15px;  }
	

	&lt;/style&gt;';
	}
	else{
	echo $css_style;
	}
	

	?></textarea>
				</td>
			</tr></table>
			</div>
    	<input type="hidden" name="action" value="update" />
        <input type="hidden" name="page_options" value="css_style" />
		<p class="submit"><input type="submit" name="Submit" value="<?php _e('Update Options') ?>" /></p>
		</form>      
	</div>
</div>