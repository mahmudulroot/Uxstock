<?php

 get_header();
 
?>
<?php 
	$sections = cs_get_option('remix_sorter');
	foreach ($sections['enabled'] as $section=>$sortervalue){
	switch($section){
		case 'slider' : get_template_part('layout/slider');
		break;
		case 'blog' : get_template_part('layout/blog');
		break;	
		case 'about' : get_template_part('layout/about');
		break;	
		case 'work' : get_template_part('layout/work');
		break;	
		case 'add' : get_template_part('layout/add');
		break;
		case 'video' : get_template_part('layout/video');
		break;	
		case 'clients' : get_template_part('layout/clients');
		break;
		case 'portfolio' : get_template_part('layout/portfolio');
		break;
		case 'pricing' : get_template_part('layout/pricing');
		break;
		case 'service' : get_template_part('layout/service');
		break;
		case 'team' : get_template_part('layout/team');
		break;
		
		}
	}



?>

<?php get_footer();?>