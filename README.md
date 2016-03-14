# Dynamische Webtechnieken
## Index

- [Inleiding](## Inleiding)
- [Les 1](## Les 1)
- [Les 2](## Les 2)
- [Les 3](## Les 3)

## Inleiding
Bij dynamische webtechnieken draait alles rond het principe van **DRY** (**D**on't **R**epeat **Y**ourself). De bedoeling is dat we verschillende onderdelen van onze website gaan opdelen in bouwstenen. We maken deze bouwstenen 1 keer zodat ze vervolgens dynamisch kunnen worden samengevoegd wanneer een bezoeker een bepaalde pagina opvraagt.

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

(fotos van aanmaken menu)

## Les 2


## Les 3

