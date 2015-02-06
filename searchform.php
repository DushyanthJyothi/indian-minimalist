<?php
/**
 * The template for displaying search forms
 *
 * @package Indian-minimalist
 *
 */
$s = get_search_query();
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'indian_minimalist' ); ?></span>
		<input type="search" class="search-field" value="<?php echo esc_attr( ( !empty($s) ? get_search_query() : "Type something and hit enter")   );?>" onfocus="if(this.value=='Type something and hit enter')this.value='';" onblur="if(this.value=='')this.value='Type something and hit enter';" name="s" >
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'indian_minimalist' ); ?>">
</form>