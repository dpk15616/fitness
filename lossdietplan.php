<?php
session_start();
if(!isset($_SESSION['email']))
{header('location:login.php');
}
?>

<!DOCTYPE html>
<html class="no-js">
	<head>
	<title>Weight Loss Diet</title>
	<?php include "metalink.php"; ?>
	</head>
	<body>
		<?php include "header1.php"; ?>
		<center><img src="images/diet.jpg" alt="gym" height="350px;" width="100%;"></center>
	<h1 align="center" style="margin-top:30px;"><u>DIET PLAN FOR WEIGHT LOSS</u></h1>
		<center><h2> <u>WEEK 1</u></h2></center>
		<h3 id= "hd">  Early Morning</h3>
		<p id="marg">
		 1 fruit of your choice + 3-4 mixed seeds such as watermelon, flax, sesame, melon to name a few.
		</p>
		<h3 id= "hd">  Breakfast</h3>
		<p id="marg">Open paneer sandwich with mint chutney / 2 idlis with sambhar / Akki roti with dill leaves and sambhar / 2 egg omelette with
		2 whole grain bread slices / 2 multigrain mixed vegetable parathas + 1 glass of vegetable juice of your choice.
		</p>
		<h3 id= "hd"> Mid-morning</h3>
		<p id="marg">4 walnuts and 2 dates / Fruit of your choice/tender coconut water with malai.
		</p>
		<h3 id= "hd">Pre-lunch </h3>
		<p id="marg"> 1 plate of preferred salad with vinegar dressing. Recipe suggestion from blog.
		</p>
		<h3 id= "hd"> Lunch</h3>
		<p id="marg">2 multigrain roti / 1 Katori red or brown rice + 1 bowl dal / pulses like rajma / Egg bhurji / non-veg subji + 1 bowl low-fat curd.
		<h3 id= "hd">Snack </h3>
		<p id="marg">1 fruit of your choice / 1 glass whey protein drink /1 bowl Sprouts bhel.
		</p>
		<h3 id= "hd"> Dinner</h3>
		<p id="marg">1 bowl chicken gravy + 1 bowl rice / 2 multigrain rotis + salad + 1 bowl low-fat curd / 1 bowl vegetable dalia upma or 
		1 bowl millet vegetable upma + 1 bowl sambhar + 1 bowl of salad or soup.
		</p>
		<h3 id= "hd">Post-dinner (if you are up late) </h3>
		<p id="marg">4-5 pieces of nuts/ 1 glass warm low-fat milk.
		</p>
		<center><h2> <u>WEEK 2</u></h2></center>
		<h3 id= "hd">Early Morning </h3>
		<p id="marg"> 10 ml wheatgrass juice + 5 to 6 almonds and walnuts
		</p>
		<h3 id= "hd">Breakfast </h3>
		<p id="marg">medium vegetable uthappam with sambhar / 1 bowl vegetable dalia upma + chutney / 2 medium paneer, oats 
		and ragi dosa with sambhar / 1 bowl fruit, flaxseed and oats porridge / 1 bowl red rice or brown rice pulse-mixed pongal
		+ 1 bowl sambhar / 1 sprouted red rice poha + 1 glass vegetable juice of choice
		</p>
		<h3 id= "hd"> Mid-morning</h3>
		<p id="marg">1 glass Whey protein shake with milk / assorted fruit platter / Trail mix/Tender coconut juice with the malai.

		</p>
		<h3 id= "hd"> Pre-lunch</h3>
		<p id="marg"> 1 bowl minestrone soup with more veggies and less of pasta.

		</p>
		<h3 id= "hd"> Lunch</h3>
		<p id="marg">2 multigrain roti + 1 bowl vegetable subji / non-veg subji + 1 bowl boiled pulse chaat 
		(rajma, chana, black chana, green moong etc) / 1 bowl red or brown rice + 1 bowl mixed vegetable subji + 1 vegetable egg omlette.
		</p>
		<h3 id= "hd">Snack </h3>
		<p id="marg"> 2 multigrain flour khakras  / 1 fruit of your choice + 1 cup green tea / Trail mix with mixed seeds. 
		</p>
		<h3 id= "hd">Dinner </h3>
		<p id="marg">1 bowl vegetable brown rice basmati chicken biryani/ vegetable pulao + 1 bowl vegetable raita + 1 bowl
		vegetable or chicken salad of choice / 1 bowl steamed red rice + 1 bowl mixed vegetable sambhar + 1 bowl non-veg / vegetable 
		subji + 1 bowl salad of choice / 2 multigrain roti + 1 bowl mixed spiced dals / fish curry + 1 bowl curd.
		</p>
		<h3 id= "hd"> Post-dinner</h3>
		<p id="marg">1 glass of whey protein shake if missed during snack or simply a glass of warm milk.

		</p>
		<center><h2> <u>WEEK 3</u></h2></center>
		<h3 id= "hd">Early Morning </h3>
		<p id="marg">10 Spirulina or green leafy veggie juice + 1 fruit of your choice

		</p>
		<h3 id= "hd">Breakfast </h3>
		<p id="marg">1 bowl vegetable sprout poha with chutney / 3-4 dal paddu with sambhar / 2 oats idli + sambhar / 2 methi parantha with 
		low-fat curd / 2 mixed vegetable adai uttapams + 1 bowl mixed veg sambhar.

		</p>
		<h3 id= "hd"> Mid-morning</h3>
		<p id="marg">1 fruit of your choice/fistful of Assorted nuts / 2 tbsp of trail mix

		</p>
		<h3 id= "hd"> Pre-lunch</h3>
		<p id="marg">1 bowl sprout salad of choice / 1 bowl mixed veggies chunky soup.

		</p>
		<h3 id= "hd"> Lunch</h3>
		<p id="marg"> multigrain roti + 1 bowl veg or non-veg (seafood, fish, chicken) subji of choice + 1 bowl of thick dal / 1 bowl red rice
		+ 1 bowl mixed vegetable sambhar + 1 bowl subji + 1 bowl low-fat curd

		</p>
		<h3 id= "hd">Snack </h3>
		<p id="marg">Til or peanut chikki with 1 cup spirulina and mixed veggie juice.

		</p>
		<h3 id= "hd">Dinner </h3>
		<p id="marg">1 bowl fruit and veggie mixed salad of choice + 2 bran rotis (wheat roti or oat bran) + 1 
		bowl of non-veg subji / 1 bowl red rice or brown rice + 1 bowl dal + 1 bowl curd

		</p>
		<h3 id= "hd"> Post-dinner</h3>
		<p id="marg">1 glass of whey protein shake
		</p>
		<center><h2> <u>WEEK 4</u></h2></center>
		<h3 id= "hd">Early Morning </h3>
		<p id="marg">10 ml Amla juice + 3-4 walnuts and almonds mix.
		</p>
		<h3 id= "hd">Breakfast </h3>
		<p id="marg">2 medium dal paranthas (made from leftover dal if any) + 1 bowl low-fat curd / 2 Ragi veggies paddus with peanut chutney
		/ 2 small and fluffy vegetable pancakes / 2 paranthas + 1 bowl vegetables raita / Paneer and vegetable rice bath (from leftover rice) 
		+ 1 bowl curd / 2 idlis with sambhar

		</p>
		<h3 id= "hd"> Mid-morning</h3>
		<p id="marg">Amaranth seeds chikki / 3-4 dry fruits / 1 bowl cut fresh fruits of choice

		</p>
		<h3 id= "hd"> Pre-lunch</h3>
		<p id="marg">1 bowl sprout salad / 1 bowl grilled chicken or fish salad

		</p>
		<h3 id= "hd"> Lunch</h3>
		<p id="marg">1 bowl millet and dal khichdi + 1 bowl mixed vegetable kadhai / 2 multigrain roti + 1 bowl non-veg subji or egg bhurji +1
		glass of spiced buttermilk / 2 vegetable millet uttapams + 1 bowl sambhar.

		</p>
		<h3 id= "hd">Snack </h3>
		<p id="marg"> 1 cup spiced boiled corn or 1 corn on the cob + 1 cup coffee, tea or green tea/ 1 Fruit of choice / 1 glass whey protein drink

		</p>
		<h3 id= "hd">Dinner </h3>
		<p id="marg">1 bowl vegetable and mixed seeds salad + 2 multigrain roti + 1 non-veg subji or dal of your choice / 1 bowl
		red or brown rice + 1 bowl mix veg sambhar + 1 egg bhurji.

		</p>
		<h3 id= "hd"> Post-dinner</h3>
		<p id="marg"> 1 glass warm milk.
		</p>
		<h3 align="center"style="padding:60px; color:navy;"><i>Best of luck!!</i></h3>
	<?php include "footer1.php"; ?>
	</body>
	</html>