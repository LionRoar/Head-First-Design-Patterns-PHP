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

## MY-NOTES

### chapter 1:

* encapsulate what change and you will have flexible system.

* separate the code that will be changed.

* Program to an **interface** not an implementation : *an interface in this context could also refers to an abstract class or class that implements particular behavior*

* Represent the behavior of things and  not the thing.

* Think of behaviors as a set of algorithms.

* Composition over inheritance.

------------------

### chapter 2: Observer Pattern

* best usage when there's single source of truth one object with many unknown dependents

* This single source of truth is an Object's state that's many objects care of knowing it.

* defines one-to-many relationship between objects.

* the Publisher aka the **Subject** updates the observer using common interface.

* the Subscribers aka the **Observers** are loosely coupled and the subject no nothing about then except that they are implement the observer interface.

* STRIVE FOR LOOSELY COUPLE DESIGN BETWEEN OBJECT THAT INTERACT.

-------------------------
#### chapter 3 : Decorator Pattern (Design Eye for The Inheritance Guy)

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
