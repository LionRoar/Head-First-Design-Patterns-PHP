<?php

class CafeMenu implements Menu {
    private $menuItems; //hash-table ;)
    private $name = "Dinner";
    public function __construct(){

        $this->addItem("Veggie Burger and Air Fries",
            "Veggie burger on a whole wheat bun, lettuce, tomato, and fries",
            true, 3.99);

        $this->addItem("Soup of the day",
            "A cup of the soup of the day, with a side salad",
            false, 3.69);

        $this->addItem("Burrito",
            "A large burrito, with whole pinto beans, salsa, guacamole",
            true, 4.29);
    }


    public function addItem(string $name, string $description,
        bool $vegetarian, float $price) {

        $item = new MenuItem($name, $description, $vegetarian, $price);
        $this->menuItems[$name] = $item;
    }

    // public function getMenuItems() : array {
    //     return $this->menuItems;
    // }

    public function createIterator() : IteratorInterface {
        return new CafeMenuIterator($this->menuItems);
    }

    public function getName() : string {
        return $this->name;
    }

}