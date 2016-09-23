# Dynamische Webtechnieken
## Index

- [Inleiding](## Inleiding)
- [Les 1](#les-1)
- [Les 2](#les-2)
- [Les 3](#les-3)

## Inleiding
Bij dynamische webtechnieken draait alles rond het principe van **DRY** code (**D**on't **R**epeat **Y**ourself). De bedoeling is dat we verschillende onderdelen van onze website gaan opdelen in bouwstenen. We maken deze bouwstenen 1 keer zodat ze vervolgens dynamisch kunnen worden samengevoegd wanneer een bezoeker een bepaalde pagina opvraagt.

Om gemakkelijk lokaal te werken met wordpress maken we gebruik van [MAMP](http://mamp.info).

## Les 1

### 1.0 De Basics
Wanneer we een nieuw thema maken voor wordpress zijn er 2 files van het uiterste belang: style.css en index.php

#### style.css
``` css
/*
	Theme Name: Syntra Example Theme
	Theme URI: http://yourwebsite.be/syntratheme
	Author: Your Name
	Author URI: http://yourwebsite.be
	Description: This is an example theme
	Version: 0.0.1
	Tags: black, white, responsive, one-column, featured-images, custom-menu, post-formats
*/
```
In de **style.css** file beschrijven we ons thema. Dit is de informatie over jou thema die jouw klant te zien krijgt in zijn wordpress dashboard.

#### index.php
``` html
<!doctype html>
<html lang="nl">
	<head>
		<meta charset="utf-8">
		<title>Syntra</title>
    	<meta name="description" content="A custom wordpress theme">
	</head>
    <body>
    	<h1>This is the unique page content.</h1>

    	<footer>
        	<p>Footer and copyright text.</p>
        </footer>
    </body>
</html>
```
De **index.php** wordt door wordpress automatisch herkend als de default template telkens we een nieuwe pagina aanmaken. We zien dat de inhoud de basis elementen van een website bevat. Een header en een body met content en een footer.

Stel nu dat we meerdere pagina templates hebben aangemaakt met ieders hun unieke content en we iets in de header of footer willen veranderen. Dan moeten we dit in alle pagina templates afzonderlijk gaan doen. Om deze overbodige klus te gaan voorkomen kunnen we de header en de footer opsplitsen tot onze eerste 2 bouwstenen.

#### header.php
``` html
<!doctype html>
<html lang="nl">
	<head>
		<meta charset="utf-8">
		<title>Syntra</title>
    	<meta name="description" content="A custom wordpress theme">
	</head>
    <body>
```

#### footer.php
``` html
    	<footer>
        	<p>Footer and copyright text.</p>
        </footer>
    </body>
</html>
```

Om ervoor te zorgen dat onze index.php template onveranderd blijft kunnen we de header en footer bouwstenen gaan inladen a.d.h.v. 2 wordpress functies genaamd get_header() en get_footer().

#### index.php
``` html
<?php get_header(); ?>

    	<h1>This is the unique page content.</h1>

<?php get_footer(); ?>
```

### 1.1 Functionaliteit
Stel dat we functionaliteit willen toevoegen aan ons wordpress thema dan doen we dit in de wordpress file genaamd **functions.php** . Functionaliteit kan gaan van custom css en js bestanden tot custom menus en banners.

Als eerste voegen we custom css en js bestanden toe om ons thema te stijlen en te animeren.

#### functions.php
``` php
<?php
function syntra_script_enqueue() {

	wp_enqueue_style('syntracss', get_template_directory_uri() . '/css/syntra.css', array(), '1.0.0', 'all');
	wp_enqueue_script('syntrajs', get_template_directory_uri() . '/js/syntra.js', array(), '1.0.0', true);

}

add_action( 'wp_enqueue_scripts', 'syntra_script_enqueue');
?>
```
De werkvolgorde in de **functions.php** file gaat steeds als volgt.
- we maken een functie aan met een zelfgekozen naam (neem best de naam van je thema als suffix)
- bepaal de functionaliteit van je functie.
- voer de functie uit a.d.h.v. **add_action** waarbij we het tijdstip van uitvoering meegeven en de naam van onze functie.

Op deze moment zijn de custom css en js bestanden al wel toegevoegd maar worden ze nog niet aangeroepen in onze webpagina. Aangezien naar gewoonte de css links worden gemaakt in de header en js links in de footer gaan we beiden bestanden moeten aanpassen.

#### header.php
``` html
<!doctype html>
<html lang="nl">
	<head>
		<meta charset="utf-8">
		<title>Syntra</title>
    	<meta name="description" content="A custom wordpress theme">
        <?php wp_head(); ?>
	</head>
    <body>
```
We voegen alle stylesheets dynamisch toe a.d.h.v. de **wp_head()** helper functie.

#### footer.php
``` html
    	<footer>
        	<p>Footer and copyright text.</p>
        </footer>

        <?php wp_footer(); ?>
    </body>
</html>
```
De javascript files voegen we in de footer toe a.d.h.v. de **wp_footer()** helper functie.

### 1.2 Menus

Wat in statisch webdesign vaak voorkomt is dat wanneer men meerdere pagina's met hetzelfde menu heeft en men iets aan het menu wil wijzigen dit men op alle pagina's afzonderlijk moet doen. Aangezien wordpress de mogelijkheid biedt snel pagina's aan te maken kunnen we ook aparte menus gaan registreren en deze oproepen waar we maar willen.

#### functions.php
``` php
<?php

...

function syntra_theme_setup() {

	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Header Menu');
	register_nav_menu('secondary', 'Footer Menu');

}

add_action('init', 'syntra_theme_setup');
?>
```
Onder de code van de custom css en javascript files voegen we onze custom menus toe.

Vervolgens maken we de menus aan in het Wordpress dashboard via **Creat new menu**. We geven het dezelfde naam als de menus die we net geregistreerd hebben, bv. **Primary Header Menu** en vinken bij **Menu Settings** he bijpassende menu aan. Als we nu pagina's toevoegen zullen ze in dit menu worden ingeladen.

#### header.php
``` html
<!doctype html>
<html lang="nl">
	<head>
		<meta charset="utf-8">
		<title>Syntra</title>
    	<meta name="description" content="A custom wordpress theme">
        <?php wp_head(); ?>
	</head>
    <body>

    	<?php wp_nav_menu(array('theme_location'=>'primary')); ?>
```

We voegen in de header aan de hand van **wp_nav_menu()** het menu toe met in dit geval de key *primary*.

#### footer.php
``` html
    <footer>
		<p>This is my footer</p>
		<?php wp_nav_menu(array('theme_location'=>'secondary')); ?>
	</footer>

	<?php wp_footer(); ?>

	</body>
</html>
```
En in de footer voegen we aan de hand van dezelfde **wp_nav_menu()** helper functie het menu toe met in dit geval de key *secondary*.

## Les 2

### 2.0 Page templates
Aangezien we als paginatemplate standaard de structuur van index.php krijgen stelt zich de vraag: Wat als ik een andere structuur wil? Hiervoor zijn er custom page templates.
#### page-about.php
``` html
<?php

/*
  Template Name: About Page
 */

get_header(); ?>

  <h1>This is my about page</h1>

  <?php
        if ( have_posts() ):
          while ( have_posts() ) : the_post();
            the_content();
          endwhile;
        endif;
  ?>

<?php get_footer(); ?>
```
In comments zetten we de naam van de page template zodat Wordpress deze kan herkennen. Door het **if** statement en de **while** loop te gebruiken kunnen we de inhoud van de pagina inladen. We kunnen deze gemakkelijk in het dashboard wijzigen. Deze structuur is nodig omdat pagina's in Wordpress een appart post type zijn.

### 2.1 De post loop
Aangezien Wordpress van oorsprong een blogplatform is zijn veel van de elementen of bouwstenen gebaseerd op blogposts. Dit wordt in Wordpress een **post type** genoemd. In deze les leren we de blogloop gebruiken en leren we werken met **post formats** zoals video, gallery enz.

#### functions.php
``` php
<?php

...

add_theme_support('post-thumbnails');
add_theme_support('post-formats', array( 'image', 'video', 'gallery' ));
?>
```
Omdat deze functionaliteit niet standaard in Wordpress geactiveerd is moeten we deze gaan activeren in **functions.php** .

#### index.php
``` html
<?php get_header(); ?>

	<h1>This is my index</h1>

	<!-- This is the post loop-->
    <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'category_name' => 'events'
        );

        $newsItem = new WP_Query($args);

        if( $newsItem->have_posts() ):
          while( $newsItem->have_posts() ): $newsItem->the_post();
    ?>
            <?php get_template_part('content', get_post_format()); ?>
    <?php endwhile;
        endif;

    ?>

<?php get_footer(); ?>
```
Net als bij het inladen van de pagina content gaan we ook hier kijken of er posts zijn en deze overlopen met een while loop. Om op voorhand te filteren gebruiken we een query. Het resultaat hiervan geven we mee in het if statement en de while loop. Om de content van de post te laten zien splitsen we op in post formats. Wanneer het format bij het aanmaken van een nieuwe post standaard blijft zal deze automatisch worden weergeven als **content.php**. Een post van het type video wordt weergeven als **content-video.php** enz.

#### content.php
``` html
<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>

<div class="thumbnail-img"><?php the_post_thumbnail('medium'); ?></div>

<small>Posted on: <?php the_time('F l j, Y'); ?> in <?php the_category(); ?></small>

<p><?php the_excerpt(); ?></p>
```

#### content-video.php
``` html
<h3><?php the_title(); ?></h3>

<small>Posted on: <?php the_time('F l j, Y'); ?></small>

<p><?php the_excerpt(); ?></p>
```
Dit toont dat verschillende types van posts op verschillende manieren kunnen worden weergeven in het overzicht, wat navigeren gemakkelijker maakt.

Tot slot kunnen we dan in het overzicht klikken op een apparte blogpost en deze bekijken via.

#### single.php
``` html
<?php get_header(); ?>

  <?php
    if( have_posts() ):
      while( have_posts() ): the_post(); ?>
        <small>By <?php the_author(); ?>
        <?php the_post_thumbnail('full'); ?></small>

        <h3><?php the_title(); ?></h3>
        <p><?php the_content(); ?></p>
<?php endwhile;
    endif;
  ?>

<?php get_footer(); ?>
```
Een gelijkaardige structuur als bij de page template komt hier weer terug. Uiteraard kan deze opmaak van binnen de while loop nog veel complexer en meer gelayout zijn.

### 2.2 Header optimalisatie
#### header.php
``` html
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
		<?php wp_head(); ?>
	</head>

  <?php

    if( is_front_page() ):
      $homepage_classes = array( 'homepage', 'my-class', 'extra-class' );
    else:
      $homepage_classes = array( 'no-homepage');
    endif;

  ?>

	<body <?php body_class( $homepage_classes ); ?> >

		<?php wp_nav_menu(array('theme_location'=>'primary')); ?>
```
Het dynamisch maken van de meta tags is belangrijk voor SEO doeleinden. De taal wordt nu ingegeven naargelang de taal van de Wordpress installatie. De bloginfo is aan te passen in de **customizer** en de title zorget ervoor dat we in de tab kunnen zien op welke pagina we ons bevinden.

Tot slot kunnen we de header nog dynamischer gaan maken door een custom class toe te voegen die enkel verschijnt als men zich op de homepagina bevindt.

## Les 3
### 3.0 Custom Post Types
Omdat we in Wordpress soms verzamelingen van objecten willen maken is er het custom post type. Dit is custom functionaliteit die we moeten aanmaken en dus doen we dit in **functions.php** .

#### functions.php
```php
...

function syntra_custom_post_type_werknemers (){
  $labels = array(
    'name' => 'Werknemer',
    'singular_name' => 'Werknemer',
    'add_new' => 'Voeg werknemer toe',
    'all_items' => 'Alle werknemers',
    'add_new_item' => 'Voeg werknemer toe',
    'edit_item' => 'Pas werknemer aan',
    'new_item' => 'Nieuwe werknemer',
    'view_item' => 'Bekijk werknemer',
    'search_item' => 'Zoek werknemer',
    'not_found' => 'Geen werknemers gevonden',
    'not_found_in_trash' => 'Geen werknemers gevonden in prullenmand',
    'parent_item_colon' => 'Bovenliggende werknemer'
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array(
      'title',
      'editor',
      'excerpt',
      'thumbnail',
      'revisions'
    ),
    'menu_position' => 5,
    'exclude_from_search' => false
  );
  register_post_type('werknemer', $args);
}
add_action('init','syntra_custom_post_type_werknemers');
```
Als we onze website refreshen kunnen we in het dashboard zien dat we nu een werknemer kunnen toevoegen. Nu kunnen we een pagina laten zien van al onze werknemers. Hiervoor gebruiken we een pagina template en een post loop.

#### page-werkenemers.php
```html
<?php

/*
  Template Name: Werknemers Page
 */

get_header(); ?>

    <?php
        $args = array(
          'post_type' => 'werknemer',
          'posts_per_page' => 3
        );

        $werknemers = new WP_Query($args);

        if( $werknemers->have_posts() ):
          while( $werknemers->have_posts() ): $werknemers->the_post();
    ?>
            <?php get_template_part('werknemersamenvatting'); ?>
    <?php endwhile;
        endif;

    ?>

<?php get_footer(); ?>
```

We maken de template. Voegen een pagina toe met deze template en nu hebben we een pagina waarop men al onze werknemers kan zien. We splitsen de steeds herhalende stuctuur van een werknemers af in **werknemersamenvatting.php** .

#### werknemersamenvatting.php
```html
<div class="werknemer">
  <h3><?php the_title(); ?></h3>
  <?php the_post_thumbnail('medium'); ?>
  <?php the_excerpt(); ?>
</div>
```
