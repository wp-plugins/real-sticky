<div class="wrap">
	
	<?php echo '<h2>' . __('Real Sticky Options', 'real-sticky') . '</h2>'; ?>
		
    <div style="margin-left:0px;">
		
		<form method="POST" action="options.php"><?php wp_nonce_field('update-options'); ?>
			<div class="inside">
				<table class="form-table">
		<tr>
			<tr>
			<th><label for="real_sticky_page_title">
			<?php  _e('Set a Page Title:', 'real-sticky'); ?>	
			</label></th>
			<td><input type="text" size="80" name="real_sticky_page_title" value="<?php $real_sticky_page_title = get_option('real_sticky_page_title'); if(!empty($real_sticky_page_title)) {echo $real_sticky_page_title;} else {echo __('Real Sticky', 'real-sticky');}?>">
			
			<?php  _e('(Please NOT URL, just text)', 'real-sticky'); ?>			
			
			<?php  _e('e.g.,: -Real Sticky- or -Real Sticky1- or -Real Sticky B- or -My Page-', 'real-sticky'); ?>				
			
			</td>
			</tr>
					
					
					
				<th><label for="real_sticky_css_style">
				<?php  _e('Set Css Style:', 'real-sticky'); ?>
				</label></th>
				<td>
				
	<textarea name="real_sticky_css_style" id="real_sticky_css_style" rows="10" cols="80"><?php 

	$real_sticky_css_style = get_option('real_sticky_css_style'); 

	if($real_sticky_css_style == ''){
	
	echo '&lt;style type="text/css"&gt;
		
    #real-sticky  { border-bottom:2px solid #DDDDDD; padding-bottom:10px; }
    #real-sticky  h2{ font-weight:bold; font-size:20px; margin-bottom:10px; }
	#real-sticky  p{ font-size:15px;  }
	

	&lt;/style&gt;';
	}
	else{
	echo $real_sticky_css_style;
	}
	

	?></textarea>
				</td>
			</tr></table>
			</div>
    	<input type="hidden" name="action" value="update" />
        <input type="hidden" name="page_options" value="real_sticky_css_style , real_sticky_page_title" />
		<p class="submit"><input type="submit" name="Submit" value="<?php _e('Update Options', 'real-sticky') ?>" /></p>
		</form>      
	</div>
</div>