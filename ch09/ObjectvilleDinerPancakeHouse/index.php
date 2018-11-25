<?php

require_once './vendor/autoload.php';

//Create all menus
$pancakeHouseMenu = new Menu("PANCAKE HOUSE MENU", "Breakfast");
$dinerMenu =  new Menu("DINER MENU","Lunch");
$cafeMenu = new Menu("CAFE MENU", "Dinner");
$dessertMenu = new Menu("DESSERT MENU", "Dessert if course!");

//top level menu Root
$allMenus = new Menu("ALL MENUS", "All menus combined");

//composite add() to add each menu to the top level menu
$allMenus->add($pancakeHouseMenu);
$allMenus->add($dinerMenu);
$allMenus->add($cafeMenu);

//add pancake house menu items
$pancakeHouseMenu->add(new MenuItem("K&B’s Pancake Breakfast",
            "Pancakes with scrambled eggs, and toast ",
            true,
            2.99));

$pancakeHouseMenu->add(new MenuItem("Regular Pancake Breakfast",
            "Pancakes with fried eggs, sausage",
            false,
            2.99));

$pancakeHouseMenu->add(new MenuItem("Blueberry Pancakes",
            "Pancakes made with fresh blueberries",
            true,
            3.49));

//add dinermenu menu oitems
$dinerMenu->add(new MenuItem("Vegetarian BLT",
"(Fakin’) Bacon with lettuce & tomato on whole wheat", true, 2.99));

$dinerMenu->add(new MenuItem("BLT",
"Bacon with lettuce & tomato on whole wheat", false, 2.99));

$dinerMenu->add(new MenuItem(
    "Pasta","Spaghetti with Marinara Sauce, and a slice of sourdough bread",
    true, 3.89));

//add dessert menu to diner menu
$dinerMenu->add($dessertMenu);

//add dessert menu items
$dessertMenu->add(new MenuItem(
    "Apple Pie","Apple pie with a flakey crust, topped with vanilla ice-cream",
    true, 1.59));

$dessertMenu->add(new MenuItem(
    "Cheesecake","Creamy New York cheesecake, with a chocolate graham crust",
    true, 1.99));

$dessertMenu->add(new MenuItem(
    "Sorbet","A scoop of raspberry and a scoop of lime",
    true, 1.89));

//add cafe menu items
$cafeMenu->add(new MenuItem("Veggie Burger and Air Fries",
    "Veggie burger on a whole wheat bun, lettuce, tomato, and fries",
    true, 3.99));

$cafeMenu->add(new MenuItem("Soup of the day",
    "A cup of the soup of the day, with a side salad",
    false, 3.69));

$cafeMenu->add(new MenuItem("Burrito",
    "A large burrito, with whole pinto beans, salsa, guacamole",
    true, 4.29));

//call the waitress give her the hierarchy of menus for her to print
$waitress = new Waitress($allMenus);
//$waitress->printMenu();
$waitress->printVegetarianMenu();

