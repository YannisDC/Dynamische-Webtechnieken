# Dynamische Webtechnieken

## Index

### Semester 1
- [Les 1](#les-1) (Herhaling html+css)
- [Les 2](#les-2) (Bootstrap+grid system)
- [Les 3](#les-3) (Inleiding programmeren)
- [Les 4](#les-4) (Oefeningen programmeren)
- [Les 5](#les-5) ()
- [Les 6](#les-6) (jQuery)

### Semester 2
- [Inleiding](## Inleiding)


- [Les 2.1](#les-2.1)
- [Les 2.2](#les-2.2)
- [Les 2.3](#les-2.3)

# Semester 1
## Les 1

### Herhaling html
Zoals we allemaal weten begint de basis van een website bij de index.html. Dit bestand bevat de bouwstenen van onze website.

```html
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
  </head>
  <body>
  
  </body>
</html>

```
Bij het maken van deze file benoemen we eerst het type van het bestand. In dit geval is het doctype html (**H**yper**t**ext **M**arkup **L**anguage). Vervolgens maken we gebruik van specifieke [xml tags](http://www.w3schools.com/xml/xml_syntax.asp). Deze tags hebben altijd dezelfde opbouw.

Een **openingstag** met:
- De tagname of de naam van het element (zoals body of div).
- Een of meerdere attributen (zoals class, id, width, style).
- Bepaalde waarden voor elk van deze attributen.

en een **sluitingstag** met daarin weer de tagname.

```xml
<element attribute="value"></element>

<!-- For example -->
<div id="most-important" class="blue-boxes"></div>
```

Eens we dit door hebben kunnen we verschillende tags gaan nesten. Dit maken we duidelijk door de geneste tags iets naar links uit te lijnen. Hierboven zien we dat de *head* en de *body* tags zijn genest in de **html** tag.
En de *meta* en *title* tags zijn op hun beurt weer genest in de **head** tag.

> Merk op: buiten andere tags kunnen de tags ook tekst bevatten zoals de h1, p, a en button tags.

Ook in de onderstaande figuur wordt de boomstructuur weer duidelijk.

```
+-- html
    +-- head
    |   +-- meta
    |   +-- title
    +-- body
```
Naarmate onze website groter wordt groot deze boomstructuur, de **DOM** (**D**ocument **O**bject **M**odel) genoemd.



### Herhaling css
Waar html de kapstok waarop onze hele website steunt is css (**C**ascading **S**tyle **S**heet) de vormgeving die gaat bepalen hoe hij eruit ziet.
(Welke kleuren, dik of dun, afgeronde of scherpe hoeken?)

Door te spelen met css kan je een website een totaal verschillende look en feel geven.

```css
element {
	property: value;
}

/* For example */
h1 {
	font-family: "Times New Roman", Serif;
}
```

Buiten enkel de basis html tags te gaan aanspreken kunnen we ook selecteren op een klasse, een id of andere pseudo selectors.

#### Het verschil tussen id en class

De id en class zijn beiden attributen die bij zo goed als elke html5 tag gebruikt kunnen worden om deze te gaan onderscheiden van de rest. Het verschil is dat een **class** een groep elementen omschrijft met gezamelijke eigenschappen terwijl het **id** attribuut veel specifieker is en slechts 1 uniek element aanduidt. Elke id mag dus slecht 1 maal voorkomen in heel je .html file tewijl je een class met b.v. een bepaalde layout naar hartelust kan gaan hergebruiken.

Verschillende studenten kunnen in dezelfde klas zitten maar ieders heeft een unieke id (rijksregisternummer).

```html
<section id="container">
  <div id="first-div"  class="blue-box">Some content for div 1</div>
  <div id="second-div" class="blue-box">Some content for div 2</div>
  <div id="third-div"  class="blue-box">Some content for div 3</div>
</section>
```

```css
div.center-aligned {
  height: 50px;
  width: 50px;
  background-color: blue;
}
```

Een voorbeeld

```css
/* Het aanduiden van een id */
div#some-id {
  background-color: red;
}

/* Het aanduiden van een klasse */
div.some-class {
  background-color: blue;
}
```

Hoewel je zou denken dat de kleur van de klasse die van de id overschrijft doordat ze later wordt toegekend  is de id specifieker is krijgt deze voorrang op de class en wordt de achtergrond rood

```html
<div id="some-id" class="some-class">
  Some Content
</div>
```



#### Andere pseudo selectors

De element**[attribute="value"]** selector wordt gebruikt om elementen te filteren op atribuut en waarde.

In het onderstaande voorbeeld gaan we dus enkel het voornaam inputveld stylen 

```css
input[name="voornaam"] {
  width: 200px;
}
```

```html
<form name="input" action="" method="post">
  Voornaam:<input type="text" name="voornaam" value="Peter" size="20">
  Achternaam:<input type="text" name="achternaam" value="Griffin" size="20">
  <input type="button" value="Example Button">
</form>
```



## Les 2

### Bootstrap & gridsystem

Bij het ontwerpen van een website is de layout van groot belang. Om ons hierbij te helpen kunnen we gebruik maken van een grid system. Hierbij delen we de breedte van ons scherm in in **x**-aantal kolommen van de dezelfde dikte. Elk van onze UI (User Interface) elementen neemt hierbij een aantal kolommen in.

Bootstrap is een framework dat onder andere de mogelijkheid biedt zo'n grid te gebruiken. Het grid van Bootstrap bestaat uit 12 kolommen omdat dit gemakkelijk deelt door 2, 3 en 4. Zo blijft onze layout in evenwicht.

Bootstrap maakt het bijvoorbeeld mogelijk twee foto's op een groot scherm naast elkaar te zetten en ze ieders de helft van het scherm te laten innemen en indien het scherm kleiner wordt ze allebei de volledige breedte van het scherm te laten innemen maar onder elkaar te zetten.![Schermafbeelding 2016-11-27 om 20.02.04](Schermafbeelding%202016-11-27%20om%2020.02.04.png)



## Les 3

### Inleiding programmeren

Wanneer we onze webpagina willen gaan animeren of manipuleren is een basiskennis programmeren vereist. Deze is terug te vinden in de ZOOC PDF over **Leren Programmeren**.



## Les 4

### Oefeningen programmeren

#### Enkele Javascript voorbeelden

```javascript
// Verschillende soorten variabelen
var aantalStudenten = 5;
var aantalDocenten = 0;
var bankSaldo = 19.21;
var aanwezig = true;
var character = "t";
var string = "Dit is een verzameling van characters";
var studentenNummers = [1,2,3,4,5];
var studentenNamen = ["Jonas", "Kevin", "HyeJin", "Shqiponje", "Tessa"];

// Bewerkingen
var langeString = string + character;
var mensenIn304 = aantalStudenten + aantalDocenten;
console.log(string + character);

// Control Flow
if ((aantalStudenten == 5 && aantalDocenten == 1) || (aanwezig)) {
  console.log("Joepie er is zes man aanwezig!");
} else if( aantalStudenten == 4 ) {
  console.log("Joepie er is vier man aanwezig!");
} else {
  console.log("Er is een ander aantal studenten aanwezig.");
}

// Switch
var dag = "feestdag";

switch (dag) {
  case "maandag":
    console.log("Vandaag is het maandag!");
    break;
  case "dinsdag":
    console.log("Vandaag is het dinsdag!");
    break;
  case "woensdag":
    console.log("Vandaag is het woensdag!");
    break;
  case "donderdag":
    console.log("Vandaag is het donderdag!");
    break;
  case "vrijdag":
    console.log("Vandaag is het vrijdag!");
    break;
  default:
    console.log("Vandaag is het weekend");
}

// for (var i = 0; i < studentenNamen.length; i++) {
//   console.log("Student "+ (i+1) + " is " + studentenNamen[i]);
// }


// Veralgemeende functie met een abstracte beschrijving
function somOp(beschrijving, verzameling) {
  for (var i = 0; i < verzameling.length; i++) {
    console.log(beschrijving + " " + (i+1) + " is " + verzameling[i]);
  }
}

somOp("Student", studentenNamen);

var projectNamen = ["Bakker Website", "Dj logo", "Poster design"];
somOp("Project", projectNamen);

function changeContent() {
  var element = document.querySelector("#item");
  element.innerHTML = "<p>Some other content</p>"
}

$( document ).ready(function() {
    el = $("#item");
    //el.addClass("active");
    console.log(el);
});
```



#### Enkele php voorbeelden

```php
<?php

$integer = 3;
$float = 10.1;
$string = "Hello World";
$char = "!";
$result = array(
    "voornaam" => "Yannis",
    "achternaam" => "De Cleene",
    "email" => "yannisdcl@gmail.com"
);

// echo $result["voornaam"];

if ($integer == 5) {
  echo "Het is een vijf";
} elseif ($integer == 4) {
  echo "Het is een vier";
} else {
  echo "Het is een ander getal <br>";
}

$dag = "feestdag";

switch ($dag) {
  case 'maandag':
    echo "Vandaag is het maandag";
    break;
  case 'dinsdag':
    echo "Vandaag is het dinsdag";
    break;
  case 'woensdag':
    echo "Vandaag is het woensdag";
    break;
  case 'donderdag':
    echo "Vandaag is het donderdag";
    break;
  case 'vrijdag':
    echo "Vandaag is het vrijdag";
    break;

  default:
    echo "Vandaag is het weekend <br>";
    break;
}



function countNumbers($aantal) {
  for ($x = 1; $x < $aantal+1; $x++) {
      echo "The number is: $x <br>";
  }
}

countNumbers(20);

?>
```



## Les 5

Oefeningen Programmeren



## Les 6

Oefeningen Programmeren



## Les 7

### jQuery

Als javascript bibliotheek vol functies maakt jQuery het mogelijk meer te doen met minder code en dus sneller te werken. Waar jQuery vooral in uitblinkt is manipulatie van de DOM. Dit houdt in dat we bepaalde elementen in ons html bestand gaan opzoeken en deze aanpassen, verwijderen of toevoegen. Als er zich bijvoorbeeld een specifiek event voordoet zoals een muisklik kan een de UI worden geupdate.

```javascript
$( document ).ready(function() {
  var elementSelector = $('a'); // Selecteert de a tag en alles daarbinnen.
  var idSelector = $('div#menu'); // Selecteert de div met id menu en alles daarbinnen.
  var classSelector = $('div.dessert'); // Selecteert alle divs met class dessert en alles daarbinnen en maakt van deze DOMnodes een array.
});
```

Eens we de DOM node hebben die we zochten kunnen we er events aan koppelen of wijzigingen aan maken.

```javascript
idSelector.click(function(){
   $(this).hide(); // Verbergt de node wanneer men er op klikt.
});

idSelector.html("Hello <b>world</b>!"); // Wijzigt de inhoud van de DOM node.

idSelector.css({"background-color": "yellow", "font-size": "20px"}); //Wijzigt de achtergrondkleur en fontsize van de DOM node.
```

Dit zijn slechts enkele voorbeelden van wat je met jQuery kan. Op W3schools of de website van jQuery zelf vind je meer informatie over de wijzigingen die jij wil gebruiken.



## Les 8

### phpMyAdmin

PhpMyAdmin is een open-source programma waarmee je via je webbrowser een MySQL database kan beheren. Je kan databases aanmaken en verwijderen, tabellen aanmaken, aanpassen en verwijderen, records aanmaken, aanpassen en verwijderen en dit allemaal met een grafische interface.

We kunnen dus de data beheren zonder dat we iets moeten veranderen aan de look en feel van de eigenlijke website.



### Database

Een MySQL database is van het type: relationele database. Dit wil zeggen dat ze is opgebouwd uit tabellen die met elkaar zijn gelinked. Dit linken wordt gedaan om dubbel(zinnig)e data te vermijden. 

De tabellen zelf bestaan uit verschillende kolommen die de inhoud beschrijven en rijen die en invulling geven van mogelijke waarden.

| id   | price | name         | description       | imageurl             |
| ---- | ----- | ------------ | ----------------- | -------------------- |
| 1    | 15    | Sandwich     | Delicious bread.  | uploads/sandwich.png |
| 2    | 10    | Pumpkin Soup | Magnificent soup. | uploads/soup.png     |
| 3    | 12    | Ice Cream    | Heavenly dessert  | uploads/icecream.png |

In dit voorbeeld is de **id** auto incrementing (zelf optellend) en dus uniek. Indien men vanuit bv. de bestellingstabel naar een bepaalde menu wordt verwezen kan dit aan de hand van de id.



### SQL

SQL statements worden gebruikt om data aan te passen in de MySQL database vanuit php code. 

Hier enkele voorbeelden.

```sql
INSERT INTO menu (name, price, description, imageurl) VALUES ("Bread Tsatsiki", "15", "Some bread with delicious tsatsiki", "http://localhost:8888/uploads/menu1.jpg") 
/* Maakt een nieuwe record aan */

SELECT name, price, description, imageurl FROM menu 
/* Zoekt alle records in de menu table en geeft hun naam, prijs, beschrijving en afbeeldingslink terug */

SELECT * FROM menu WHERE price = "15"
/* Zoekt alle records in de menu table waarvoor de prijs 15 is en geeft al hun gegevens terug */
```



## Les 9

###  Layout & compositie

1. **Afstand:** Zet dingen die bij elkaar horen ook effectief bij elkaar.
2. **Negatieve ruimte:** Geeft je design ruimte om te ademen.
3. **Uitlijnen:** Geeft een goed overzicht en vormt harmonie. Consistentie is hier het belangrijkste. Denk hierbij aan een gridlayout of hulplijnen.
4. **Contrast:** Trekt de aandacht van de lezer. Dit kan worden behaald met kleur, grootte of lettertypen.
5. **Herhaling/consistentie:** Hergebruik van het kleurenpallet, tekststijl, uitlijning e.d. Dit zorgt voor een algemene samenhang.







###  Typografie

**Hierachy:** What's important is bigger, bolder or more special

**Leading:** Line spacing

**Tracking:** Character spacing

**Kerning:** Spacing between different characters

#### 9 basisregels

https://www.youtube.com/watch?v=QrNi9FmdlxY

1. **Uitlijnen:** Indien je twijfelt, lijn van links naar rechts uit. Zo kan het oog de linker lijn vinden en gemakkelijker beginnen lezen.
2. **Gebruik één font:** Het gebruik van meerdere fonts vereist een goede kennis van fontpairing. Gebruik best ook geen die beiden serif of beiden sans-serif omdat deze minder contrast bieden.
3. **Slaag een fontweight over:** Dit zorgt voor een groter contrast waardoor het onderscheid duidelijker wordt.
4. **Gebruik veelvouden:** Een goede vuistregel is om de fontsize van je titels (in pixels) dubbel zo groot te maken als van je body tekst. Voor een dramatischer effect kan je ook 3 à 4 maal zo groot proberen.
5. **Lijn uit op 1 as:** Lijn alleenstaande woorden zoals header links uit op 1 as. Dit zorgt voor een ordelijker overzicht.
6. **Kies een font:** Leer werken met 1 bepaalde font tot je weet hoe je het moet gebruiken in allerlei verschillende situaties eerder dan elk project een ander font te gebruiken.
7. **Groepeer adhv lijnen:** Lijnen of highlights kunnen gemakkelijk een onderscheid maken tussen verschillende blokken tekst.
8. **Vermijd de hoeken:** Probeer geen tekst in de hoeken of aan de rand van je ontwerp te zetten tenzij je expres delen tekst wil afsnijden. Lege ruimte is net zo belangrijk als gevulde ruimte.
9. **Mind the gap:** Je kan beter links uitlijnen voor een betere leesbaarheid dan dat er teveel witruimte tussen je woorden zit. Sluit een paragraaf niet af met een enkel woord. Laat na elk lesteken een spatie witruimte tot het volgende woord.

[Bron](https://www.youtube.com/watch?v=QrNi9FmdlxY)

> Font tips:
>
> - Start extreem, maak het vervolgens fijner
> - Groter/Contrast = Belangrijker
> - Beschouw typografie als een vorm in plaats van tekst



####  Identity design: Brand

https://www.youtube.com/watch?v=pR7tMnKghDs



#### Kleurentheorie



## Les 10

### Dynamische elementen inladen

#### via jQuery



**menu.html**

```html
<div id="wrap">
	<div class="container">
    	<div class="row">
        	<div class="col-xs-12 menu-block">
            	<div class="row menu-titel">
            		<h1>Menu</h1>
            	</div>
            	<div class="row menu-items">
              	</div>
         	</div>
        </div>
    </div>
</div>
```



**menus.js**

```javascript
$( document ).ready(function() {
    var menuBlock = $('.menu-block');
    var menuItems = $('.menu-items');

    $.get("http://localhost:8888/Restorant-master/menu.json", function(data, status) {
      for (var i = 0; i < data.menu.length; i++) {
        // var image = $(menuItem[i]).find('img');
        // image.attr("src",data.menu[i].image);
        //
        // var description = $(menuItem[i]).find('p');
        // description.html(data.menu[i].name);

        var menuItem ='<div class="col-xs-12 col-md-4 menu-item">'+
                      '<div class="row">'+
                      '<img src="'+data.menu[i].image+'" class="menu-image">'+
                      '</div>'+
                      '<div class="row">'+
                      '<p>'+data.menu[i].name+'</p>'
                      '</div>'+
                      '</div>';

        menuItems.append(menuItem);
      }
    })

});
```



**menu.json**

```json
{
	"menu": [
		{
			"name": "Brood met tsatsiki",
			"price": "29.00",
			"description": "Lorem ipsum",
			"image": "http://neophilia.be/food/menu1.jpg"
		},
		{
			"name": "Pasta Rucolla",
			"price": "27.00",
			"description": "Lorem ipsum",
			"image": "http://neophilia.be/food/menu2.jpg"
		},
      
		...
      
		{
			"name": "Bessentaart",
			"price": "15.00",
			"description": "Lorem ipsum",
			"image": "http://neophilia.be/food/menu8.jpg"
		}
	]
}
```





#### via php+html



# Semester 2

## Inleiding
Bij dynamische webtechnieken draait alles rond het principe van **DRY** code (**D**on't **R**epeat **Y**ourself). De bedoeling is dat we verschillende onderdelen van onze website gaan opdelen in bouwstenen. We maken deze bouwstenen 1 keer zodat ze vervolgens dynamisch kunnen worden samengevoegd wanneer een bezoeker een bepaalde pagina opvraagt.

Om gemakkelijk lokaal te werken met wordpress maken we gebruik van [MAMP](http://mamp.info).

## Les 2.1

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

## Les 2.2

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

## Les 2.3
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
