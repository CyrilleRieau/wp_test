<?php
/*
Template Name: Accueil
*/
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage WP-advocate
 * @since 1.0
 * @version 1.0
 */

get_header(); 
$image = get_field('image-principale');
$imagesec = get_field('image-secondaire');
?>
<main>
	<section>
        <img class="imgPrincipaleFloat" src="<?php echo $image['url']?>" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>" />
        <p><?php the_field('texte_modif');?></p>
        <img class="imgSecFloat" src="<?php echo $imagesec['url']?>" alt="<?php echo $imagesec['alt'] ?>" title="<?php echo $imagesec['title'] ?>" />
    </section>	
		<a href="/promo/emmanuel/khirkinchu-website/wp-login">Connexion</a>
</main>  
<?php get_footer(); ?>
