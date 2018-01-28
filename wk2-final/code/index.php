<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Top 5 Movie's</title>
  <link rel="stylesheet" href="css/main.css">
  
  </head>
  <body>
	
	
<?php
// define all five arrays
	$movie1 = array(
		'title' => 'Sabrina',
		'imdbURL' => 'http://www.imdb.com/title/tt0047437/',
		'year' => 1954,
		'rottenTomatoesScore' => 3,
		'genre' => 'Romantic Comedy',
		'posterURL' => 'img/sabrina.jpg'
	);
	
	$movie2 = array(
		'title' => 'Breakfast at Tiffany\'s',
		'imdbURL' => 'http://www.imdb.com/title/tt0054698/',
		'year' => 1961,
		'rottenTomatoesScore' => 6,
		'genre' => 'Romantic Comedy',
		'posterURL' => 'img/breakfast.jpg'
	);
	
	$movie3 = array(
		'title' => 'The Life Aquatic with Steve Zissou',
		'imdbURL' => 'http://www.imdb.com/title/tt0362270/',
		'year' => 2004,
		'rottenTomatoesScore' => 89,
		'genre' => 'Comedy Drama',
		'posterURL' => 'img/steve.jpg'
	);
	
	$movie4 = array(
		'title' => 'Breathless',
		'imdbURL' => 'http://www.imdb.com/title/tt0053472/',
		'year' => 1960,
		'rottenTomatoesScore' => 2,
		'genre' => 'French newwave',
		'posterURL' => 'img/breath.jpg'
	);
	
	$movie5 = array(
		'title' => 'Pretty in Pink',
		'imdbURL' => 'http://www.imdb.com/title/tt0091790/',
		'year' => 1986,
		'rottenTomatoesScore' => 10,
		'genre' => 'Romantic Comedy',
		'posterURL' => 'img/pink.jpg'
	);
	
	// master movie array defined
	$movie_list = array();
	
	// array push function to add to list
	array_push($movie_list, $movie1, $movie2, $movie3, $movie4, $movie5);
	
	// function to have the info list
	function create_movie_lists() {
		foreach($movie_list as $current_movie) {
			make_one_movie_list($current_movie);
		}
	}
	
	function make_one_movie_list($movie_to_list) {
		echo "<ul>";
			echo "<li>$movie_to_list[title]</li>";
			echo "<li><a href=" . $movie_to_list['imdbURL']. " targets='_blank'>IMDB</a></li>";
				echo "<li>$movie_to_list[year]</li>";
			echo "<li>Rotten Tomatoes Score : " . $movie_to_list['rottenTomatoesScore'] . "</li>";
			echo "<li>$movie_to_list[genre]</li>";
		echo "<img src=" . $movie_to_list['posterURL'] . ">";
		echo "</ul>";
	}
	?>
	
	<main>
	<h1>The Silver Screen</h1>
	<h2>Ashley's Top 5 Favorite Movies of All Time</h2>
	
	<?php echo make_one_movie_list($movie1); ?>
	<?php echo make_one_movie_list($movie2); ?>
	<?php echo make_one_movie_list($movie3); ?>
	<?php echo make_one_movie_list($movie4); ?>
	<?php echo make_one_movie_list($movie5); ?>
	</main>
	


  </body>
</html>
