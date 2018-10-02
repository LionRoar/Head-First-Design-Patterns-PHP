# Head-First-Design-Patterns-PHP

## Head First Design Patterns : A Brain-Friendly Guide book examples code in PHP

---

**The original code in the book is in java.**

**I chose this book because it has a really unique way of describing things and making them easy to understand maybe somebody else will find it useful.**

---

## Run the code

First you have to generate the auto loader with composer

note: __*do this step for each file that have composer.json*__

 > *All examples are tested with php7.2*

```$ composer dump-autoload```

---

Notes index:
* [chapter 1: Strategy Pattern](#ch1)

* [chapter 2: Observer Pattern](#ch2)

* [chapter 3 : Decorator Pattern (Design Eye for The Inheritance Guy)](#ch3)

* [chapter 4 : Factory method , Abstract factory , Dependency Inversion](#ch4)

* [chapter 5 : Singleton](#ch5)

* [chapter 6 : Command pattern](#ch6)

---

## MY-NOTES

---

<h2 id="ch1">chapter 1: Strategy Pattern</h2>

`aka Policy Pattern`

> Defines a set of encapsulated algorithms that can be swapped to carry out a specific behavior.

### Strategy pattern used when

Strategy pattern is used when we have multiple algorithms for specific task and the client decides the actual implementation to be used at runtime.

* **ShoppingCart example is not from the book**

* encapsulate what change and you will have flexible system.

* separate the code that will be changed.

* Program to an **interface** not an implementation : *an interface in this context could also refers to an abstract class or class that implements particular behavior*

* Represent the behavior of things and  not the thing.

* Think of behaviors as a set of algorithms.

* __Composition over inheritance__.

---
<h2 id="ch2"> chapter 2: Observer Pattern</h2>

`aka Pub/Sub`

According to GoF, observer design pattern intent is;

> Define a one-to-many dependency between objects so that when one object changes state, all its dependents are notified and updated automatically.

### Observer used when

State changes in one or more objects should trigger behavior in other object
one-to-many relationship between objects so that when one object changes state all it's dependents are notified and updated automatically.

PHP provides Stander PHP Library (SPL) Observer Pattern through [SplObserver interface](http://php.net/manual/en/class.splobserver.php) and [SplSubject interface](http://php.net/manual/en/class.splsubject.php)

Model-View-Controller (MVC) frameworks also use Observer pattern where _Model_ is the __Subject__ and _Views_ are __observers__ that can register to get notified of any change to the model.


* best usage when there's single source of truth one object with many unknown dependents

* This single source of truth is an Object's state that's many objects care of knowing it.

* defines one-to-many relationship between objects.

* the Publisher aka the **Subject** updates the observer using common interface.

* the Subscribers aka the **Observers** are loosely coupled and the subject no nothing about then except that they are implement the observer interface.

* __STRIVE FOR LOOSELY COUPLE DESIGN BETWEEN OBJECT THAT INTERACT.__

---

<h2 id="ch3" > chapter 3 : Decorator Pattern (Design Eye for The Inheritance Guy) </h2>

> Allows for the dynamic wrapping of objects in order to modify their existing responsibilities and behaviors.

Attach additional responsibilities to an object dynamically.
Provide a flexible alternative to sub-classing for existing functionality.

### Decorator used when


Decorator pattern is best used when we introduced to existing code that we want to extend its functionality.

since decorators are basically wrappers around objects the PHP I/O classes same as Java uses decorator pattern to add more functionality to the stream to read more [Wrappers in php](http://php.net/manual/en/wrappers.php) and you can even register a custom wrapper (decorators) to add your own filter/wrapper to I/O stream see [this example.](https://github.com/LionRoar/Head-First-Design-Patterns-PHP/tree/master/ch03/PHP_IO_DECORATOR)


* Decorator reduce the chance of bugs and side effects in legacy code .

* Decorator it gives the object new responsibility dynamically at runtime using composition .

* It follows the open-close principle .

* General speaking design patterns add abstraction level that's add complexity to code that's way we should always use it on the parts that change and overusing it .

* In other words __ALWAYS IDENTIFY WHAT CHANGES__.

* Again __ALWAYS IDENTIFY WHAT's GOING TO CHANGE__.

* Decorators must have the same super-class as the object they decorate.

* __FAVOR COMPOSITION OVER INHERITANCE__ .

* Inheritance makes static behavior but Composition make the behavior dynamic and it can change at runtime .

---

<h2 id="ch4">chapter 4 : Factory method , Abstract factory , Dependency Inversion</h2>

* Instantiation is an activity that should not be in public.

* `new` keyword __===__ an Implementation _(not an Interface)_.

* __IDENTIFY WHAT CHANGES__.

* Factories (encapsulate) handle details of object creation.

* **Factory method** relays on inheritance and delegates the object creation to subclasses which implements the factory method and create concrete objects.

* Factory method lets subclasses decide what class instantiate not because it allows rather than it does not know the product .

* Depend upon abstraction Not upon an implementation .

* High-level components should not depend on low-level components.

* **Strive for guidelines** :

  * No variable should hold reference for a concrete class.

  * No class should derive form concrete class.

  * No method should override method on base class if so then the base class not really an abstraction .

* **Abstract Factory Pattern** provide an _interface_ for creating families of related objects.

* The methods of the abstract factory are often FACTORY METHODS .

* Abstract factory and Factory method are both great in terms of decoupling application from specific implementation.

* Factory method uses _Classes_ (inheritance).

* Abstract Factory uses _Objects_ (objects composition).

---

<h2 id="ch5">chapter 5 : Singleton</h2>

* The singleton pattern ensures a class has only one instance and provide global access to it .

* Singleton violates the _Single Responsibility Principle_

---

<h2 id="ch6">chapter 6 : Command Pattern</h2>

* Decouples the requester of an action from it's preformer.
* command patter encapsulate requests as objects .
* The client will never bother about how and what the commands will actually do.
* -> **BankTransaction example is not from the book**