<?php
woly_elated_get_footer();
?>

<script type="text/javascript">
jQuery(document).ready(function (){
jQuery("#menu-vertical-menu > li.menu-item-has-children > a").click(function(){
    event.preventDefault();
	if(false == jQuery(this).next().is(':visible')) {
		jQuery('#menu-vertical-menu ul').slideUp(300);
	}
	jQuery(this).next().slideToggle(300);
	jQuery(this).toggleClass('neocollapsed');
});
});
</script>


