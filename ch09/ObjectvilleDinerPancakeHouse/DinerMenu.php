<?php

class DinerMenu implements Menu {

    const MAX_ITEMS = 6;

    private $numberOfItems = 0;
    private $fixedArray;

    private $name = "Lunch";

    public function __construct() {

        $this->fixedArray = new SplFixedArray(self::MAX_ITEMS);

        $this->addItem("Vegetarian BLT",
            "(Fakin’) Bacon with lettuce & tomato on whole wheat", true, 2.99);

        $this->addItem("BLT",
            "Bacon with lettuce & tomato on whole wheat", false, 2.99);

        $this->addItem("Soup of the day",
            "Soup of the day, with a side of potato salad", false, 3.29);

        $this->addItem("Hotdog",
            "A hot dog, with saurkraut, relish, onions, topped with cheese",
            false, 3.05);

        $this->addItem("Steamed Veggies and Brown Rice",
            "Steamed vegetables over brown rice",
            true, 3.99);

        $this->addItem("Pasta",
            "Spaghetti with Marinara Sauce and a slice of sourdough bread",
            false, 3.89);
    }

    public function addItem(string $name, string $description,
        bool $vegetarian, float $price) {

        $item = new MenuItem($name, $description, $vegetarian, $price);
        if ($this->numberOfItems >= self::MAX_ITEMS) {
            echo "Sorry, menu is full! Can't add item to menu\n";
            return;
        }
        $this->fixedArray[$this->numberOfItems++] = $item;
    }

    // public function getMenuItems() : SplFixedArray {
    //     return $this->fixedArray;
    // }

    public function createIterator() : IteratorInterface {
        return new DinerMenuIterator($this->fixedArray);
    }

    public function getName() : string {
        return $this->name;
    }
}