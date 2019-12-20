<?php

require_once './PizzaStore.php';
require_once './NYPizzaStore.php';
require_once './ChicagoPizzaStore.php';
class PizzaTestDrive {
 
	public static function run() {
		$nyStore = new NYPizzaStore();
		$chicagoStore = new ChicagoPizzaStore();
 
		$pizza = $nyStore->orderPizza("cheese");
		echo "Ethan ordered a " . $pizza . "<br>\n";
 
		$pizza = $chicagoStore->orderPizza("cheese");
		echo "Joel ordered a " . $pizza . "<br>\n";

		$pizza = $nyStore->orderPizza("clam");
		echo "Ethan ordered a " . $pizza . "<br>\n";
 
		$pizza = $chicagoStore->orderPizza("clam");
		echo "Joel ordered a " . $pizza . "<br>\n";

		$pizza = $nyStore->orderPizza("pepperoni");
		echo "Ethan ordered a " . $pizza . "<br>\n";
 
		$pizza = $chicagoStore->orderPizza("pepperoni");
		echo "Joel ordered a " . $pizza . "<br>\n";

		$pizza = $nyStore->orderPizza("veggie");
		echo "Ethan ordered a " . $pizza . "<br>\n";
 
		$pizza = $chicagoStore->orderPizza("veggie");
		echo "Joel ordered a " . $pizza . "<br>\n";
	}
}

PizzaTestDrive::run();


/*
 *
--- Making a New York Style Cheese Pizza ---
Preparing New York Style Cheese Pizza
Bake for 25 minutes at 350
Cutting the pizza into diagonal slices
Place pizza in official PizzaStore box
Ethan ordered a ---- New York Style Cheese Pizza ----
Thin Crust Dough
Marinara Sauce
Reggiano Cheese

--- Making a Chicago Style Cheese Pizza ---
Preparing Chicago Style Cheese Pizza
Bake for 25 minutes at 350
Cutting the pizza into diagonal slices
Place pizza in official PizzaStore box
Joel ordered a ---- Chicago Style Cheese Pizza ----
ThickCrust style extra thick crust dough
Tomato sauce with plum tomatoes
Shredded Mozzarella

--- Making a New York Style Clam Pizza ---
Preparing New York Style Clam Pizza
Bake for 25 minutes at 350
Cutting the pizza into diagonal slices
Place pizza in official PizzaStore box
Ethan ordered a ---- New York Style Clam Pizza ----
Thin Crust Dough
Marinara Sauce
Reggiano Cheese
Fresh Clams from Long Island Sound

--- Making a Chicago Style Clam Pizza ---
Preparing Chicago Style Clam Pizza
Bake for 25 minutes at 350
Cutting the pizza into diagonal slices
Place pizza in official PizzaStore box
Joel ordered a ---- Chicago Style Clam Pizza ----
ThickCrust style extra thick crust dough
Tomato sauce with plum tomatoes
Shredded Mozzarella
Frozen Clams from Chesapeake Bay

--- Making a New York Style Pepperoni Pizza ---
Preparing New York Style Pepperoni Pizza
Bake for 25 minutes at 350
Cutting the pizza into diagonal slices
Place pizza in official PizzaStore box
Ethan ordered a ---- New York Style Pepperoni Pizza ----
Thin Crust Dough
Marinara Sauce
Reggiano Cheese
Garlic, Onion, Mushrooms, Red Pepper
Sliced Pepperoni

--- Making a Chicago Style Pepperoni Pizza ---
Preparing Chicago Style Pepperoni Pizza
Bake for 25 minutes at 350
Cutting the pizza into diagonal slices
Place pizza in official PizzaStore box
Joel ordered a ---- Chicago Style Pepperoni Pizza ----
ThickCrust style extra thick crust dough
Tomato sauce with plum tomatoes
Shredded Mozzarella
Black Olives, Spinach, Eggplant
Sliced Pepperoni

--- Making a New York Style Veggie Pizza ---
Preparing New York Style Veggie Pizza
Bake for 25 minutes at 350
Cutting the pizza into diagonal slices
Place pizza in official PizzaStore box
Ethan ordered a ---- New York Style Veggie Pizza ----
Thin Crust Dough
Marinara Sauce
Reggiano Cheese
Garlic, Onion, Mushrooms, Red Pepper

--- Making a Chicago Style Veggie Pizza ---
Preparing Chicago Style Veggie Pizza
Bake for 25 minutes at 350
Cutting the pizza into diagonal slices
Place pizza in official PizzaStore box
Joel ordered a ---- Chicago Style Veggie Pizza ----
ThickCrust style extra thick crust dough
Tomato sauce with plum tomatoes
Shredded Mozzarella
Black Olives, Spinach, Eggplant

 *
 */