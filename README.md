# Head-First-Design-Patterns-PHP


## Head First Design Patterns : A Brain-Friendly Guide book examples code in PHP
_______________________________________

**The original code in the book is in java.**

**I chose this book because it has a really unique way of describing things and making them easy to understand maybe somebody else will find it useful.**

-----------------
## Run the code

First you have to generate the auto loader with composer

note: __*do this step for each file that have composer.json*__

*All examples are tested with php7.2*

```$ composer dump-autoload ```

---------------
Notes index:
* [chapter 1: Strategy Pattern](#ch1)

* [chapter 2: Observer Pattern](#ch2)

* [chapter 3 : Decorator Pattern (Design Eye for The Inheritance Guy)](#ch3)

* [chapter 4 : Factory method , Abstract factory , Dependency Inversion](#ch4)

* [chapter 5 : Singleton](#ch5)

* [chapter 6 : Command pattern](#ch6)
---------------

## MY-NOTES

<h2 id="ch1">chapter 1: Strategy Pattern</h2>

* encapsulate what change and you will have flexible system.

* separate the code that will be changed.

* Program to an **interface** not an implementation : *an interface in this context could also refers to an abstract class or class that implements particular behavior*

* Represent the behavior of things and  not the thing.

* Think of behaviors as a set of algorithms.

* Composition over inheritance.

------------------
<h2 id="ch2"> chapter 2: Observer Pattern</h2>

* best usage when there's single source of truth one object with many unknown dependents

* This single source of truth is an Object's state that's many objects care of knowing it.

* defines one-to-many relationship between objects.

* the Publisher aka the **Subject** updates the observer using common interface.

* the Subscribers aka the **Observers** are loosely coupled and the subject no nothing about then except that they are implement the observer interface.

* STRIVE FOR LOOSELY COUPLE DESIGN BETWEEN OBJECT THAT INTERACT.

-------------------------
<h2 id="ch3">chapter 3 : Decorator Pattern (Design Eye for The Inheritance Guy)</h2>

* Decorator pattern is better used when we introduced to existing code that we want to extend its functionality

* Decorator reduce the chance of bugs and side effects in legacy code .

* Decorator it gives the object new responsibility dynamically at runtime using composition .

* It follows the open-close principle .

* General speaking design patterns add abstraction level that's add complexity to code that's way we should always use it on the parts that change and overusing it .

* In other words ALWAYS IDENTIFY WHAT CHANGES.

* Again ALWAYS IDENTIFY WHAT GOING TO CHANGE.

* Decorators must have the same superclass as the object they decorate.

* FAVOR COMPOSITION OVER INHERITANCE .

* Inheritance makes static behavior but Composition make the behavior dynamic and it can change at runtime .

------------------------------------
<h2 id="ch4">chapter 4 : Factory method , Abstract factory , Dependency Inversion</h2>

* Instantiation is an activity that should not be in public.

* _new_ keyword means === an Implementation (not an Interface).

* IDENTIFY WHAT CHANGES.

* Factories (encapsulate) handle details of object creation.

* **Factory method** relays on inheritance and delegates the object creation to subclasses which implements the factory method and create concrete objects.

* Factory method lets subclasses decide what class instantiate not because it allows rather than it does not know the product .

* Depend upon abstraction Not upon an implementation .

* High-level components should not depend on low-level components.

* **Strive for guidelines** :

    * No variable should hold reference for a concrete class.

    * No class should derive form concrete class.

    * No method should override method on base class if so then the base class not relly an abtraction .

* **Abstract Factory Pattern** provide an _interface_ for creating families of related objects.

* The methods of the abstract factory are often FACTORY METHODS .

* Abstract factory and Factory method are both great in terms of decoupling application from specific implementation.

* Factory method uses _Classes_ (inheritance).

* Abstract Factory uses _Objects_ (objects composition).

------------------------------------
<h2 id="ch5">chapter 5 : Singleton</h2>

* The singleton pattern ensures a class has only one instance and provide global access to it .

* Singleton violates the _Single Responsibility Principle_

-------------------------------------
<h2 id="ch6">chapter 6 : Command Pattern</h2>

* Decouples the requester of an action from it's preformer.
* command patter encapsulate requests as objects .
* The client will never bother about how and what the commands will actually do.
* -> **BankTransaction example is not from the book**