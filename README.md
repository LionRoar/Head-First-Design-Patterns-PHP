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

## Notes index

* [chapter 1 : Strategy Pattern](#ch1)

* [chapter 2 : Observer Pattern](#ch2)

* [chapter 3 : Decorator Pattern (Design Eye for The Inheritance Guy)](#ch3)

* [chapter 4 : Factory method , Abstract factory , Dependency Inversion](#ch4)

* [chapter 5 : Singleton](#ch5)

* [chapter 6 : Command pattern](#ch6)

* [chapter 7 : The Adapter and The Facade Patterns](#ch7)

* [chapter 8 : Template Method Pattern [Encapsulating Algorithms]](#ch8)

* [chapter 9 : The Iterator and Composite Patterns **Well-Managed Collection**](#ch9)


---

# MY-NOTES

---


<h1 id="ch1">chapter 1: Strategy Pattern</h1>

`aka Policy Pattern`



> Defines a set of encapsulated algorithms that can be swapped to carry out a specific behavior.


## Strategy pattern used when

Strategy pattern is used when we have multiple algorithms for specific task and the client decides the actual implementation to be used at runtime.


* encapsulate what change and you will have flexible system.

* separate the code that will be changed.

* Program to an **interface** not an implementation : *an interface in this context could also refers to an abstract class or class that implements particular behavior*

* Represent the behavior of things and  not the thing.

* Think of behaviors as a set of algorithms.

* __Composition over inheritance__.

* **ShoppingCart example is not from the book**

---


<h1 id="ch2"> chapter 2: Observer Pattern</h1>

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


<h1 id="ch3" > chapter 3 : Decorator Pattern (Design Eye for The Inheritance Guy) </h1>


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


<h1 id="ch4">chapter 4 : The Factory pattern </h1>

`Factory method , Abstract factory , Dependency Inversion ?`


## The Factory Method Pattern
> The Factory Method Patter defines an interface for creating an object, but lets subclasses decide which class to instantiate. Factory Method lets a class defer instantiation to subclasses.


![Factory-method](/ch04/factory-method.jpg)

```css

    +----------------------+
    |      PizzaStore      |
    +----------------------+ <- abstract class defines
    |                      | abstract factory method `createPizza()`
    |    createPizza()     | that lets the sub-class decide for it.
    |                      |
    |    orderPizza()      |                         <abstract product>
    |                      |                             +-------+
    +-----^--------------^-+                             | Pizza |<-------+
          |              |                               +-^-----+        |
          |              |                                 |              |
          |              |                                 |              |
          |              |                                 |              |
          |              |                                 |              |
          |              |                                 |              |
+---------+------+      ++-----------------+      +------------------+    |
| NYPizzaStore   |      |ChicagoPizzaStore |      |ChicagoCheesePizza|    |
+----------------+      +------------------+      +--------^---------+    |
|  createPizza() |      |  createPizza()   |               |              |
|                |      |                  +--<creates>----+              |
+-------------+--+      +------------------+                              |
<creator>     |              <creator>            +-------------+         |
              +---------------------<creates>---->|NYCheesePizza|---------+
                                                  +-------------+

```

### Factory Method Pattern used when

When a client doesn't know what concrete classes it will be required to create at runtime, but just wants to get a class that will do the job.

---

### **Dependency Inversion Principle**

 `Depend upon abstractions. Do not depend upon concrete classes.`

---

* __You should Depend upon abstraction Not upon an implementation .__

* __High-level components should not depend on low-level components they should both depend on abstractions__.

* Instantiation is an activity that should not be in public and can often lead to coupling problems.

* `new` keyword __===__ an Implementation _(not an Interface)_.

* __IDENTIFY WHAT CHANGES__.

* Factories (encapsulate) handle details of object creation.

* **Factory method** relays on inheritance and delegates the object creation to subclasses which implements the factory method and create concrete objects.

* **Factory method** lets subclasses decide what class instantiate not because it allows rather than it does not know the product .


* **Strive for guidelines** `The following guidelines can help you avoid OO designs that violate the Dependency Inversion Principle` :

1. **No** variable should hold reference for a concrete class.
 `If you use new you’ll be holding a reference to a concrete class.
  Use a factory to get around that`

1. **No** class should derive form concrete class. `If you derive from a concrete class, you’re depending on a concrete class. Derive from an abstraction, like an interface or an abstract class`

1. **No** method should override method on base class if so then the base class not really an abstraction. `If you override an implemented method, then your base class wasn’t really an abstraction to start with. Those methods implemented in the base class are meant to be shared by all your subclasses.`

---

## Abstract Factory Pattern

> Abstract Factory Pattern provides an interface for creating families of related or dependent objects without specifying their concrete classes.


### Abstract Factory Pattern used when

it's used to construct objects such that they can be decoupled from the implementing system.
The pattern is best utilized when your system has to create multiple families of products or you want to provide a library of products without exposing the implementation details.

* The methods of the **abstract factory** are often _FACTORY METHODS_.

![Abstract-Factory](/ch04/abstract-factory.jpg)

---

* The job of an Abstract Factory is to define an interface for creating a set of products.

* Abstract factory and Factory method are both great in terms of decoupling application from specific implementation.

* **Factory method** uses **_Classes_** (inheritance).

* **Abstract Factory** uses **_Objects_** (objects composition).

---


<h1 id="ch5">chapter 5 : Singleton</h1>


> The singleton pattern ensures a class has only one instance and provide global access to it .


### Singleton Pattern used when

for anything (object) that unique.

Singletons are used a lot where you need to provide a registry, or something like a thread pool. Logging is also another popular use of Singletons, providing one single access point to an applications log file.


* Singleton violates the _Single Responsibility Principle_ [read more on the downsides check this amazing article by **James Sugrue**](https://dzone.com/articles/design-patterns-singleton)

---


<h1 id="ch6">chapter 6 : Command Pattern</h1>


> Encapsulate a request as an object, thereby letting you parameterize clients with different requests, queue or log requests, and support undoable operations.


### The command pattern used when

it's used to manage algorithms , relationships and responsibilities between objects.
1. When history of requests is needed.
1. You need a callback functionality.
1. Requests need to handled at variant times or in variant order.
1. The invoker should be decoupled from the object handling the invocation.

* Decouples the requester of an action from it's preformer.
* command pattern encapsulate requests as objects .
* The **client** will never bother about the `how` and the `what` commands will actually do.
* **The Bank Transaction example is not from the book**
* The command pattern forwards the request to a **specific** moudle.


---


<h1 id="ch7">The Adapter and The Facade Patterns</h1>


## Adapter Pattern

`aka Wrapper Pattern`

> **The Adapter Pattern** converts the interface of a class into another interface the client expects. Adapters lets classes work together that couldn't otherwise because of incompatible interfaces.

### Adapter Pattern used when

When a class that you need to use doesn't meet the requirements of an interface.
Exposed to legacy code may encounter an old interface needs to be converted to match new client code *Adapters* allows programming components to work together that otherwise wouldn't because of mismatched interfaces.

Adapter pattern motivation is that we can reuse existing software if we can modify the interface.

#### There are two kinds of Adapters

1. **Class Adapter**
    *uses `inheritance`* [multiple inheritance] *not supported in *java* nor *php*.
    can only wrap a class It cannot wrap an interface since by definition it must derive from some base class.

1. **Object Adapter**
    *uses `Object composition`* composition and can wrap classes or interfaces, or both. It can do this since it contains, as a private, encapsulated member,the class or interface object instance it wraps.

> "Because inheritance exposes a subclass to details of its parent's implementation, it's often said that 'inheritance breaks encapsulation'". (Gang of Four 1995:19)

* DON'T MIX _DECORATORS_ WITH _ADAPTERS_ THEY'RE BOTH WRAPPERS BUT
_DECORATORS_ ADD NEW RESPONSIBILITIES WHILE _ADAPTERS_ CONVERT AN INTERFACE.

---

## Facade Pattern

> The Facade Pattern provides a unified interface to a set of interfaces in subsystem. Facade defines a higher-level interface that make the subsystem easier to use.

### Facade used when

    when you want to simplify a complex system.

* Facades don't encapsulate .
* Facade Pattern allows to avoid tight coupling between client and subsystem.

* **Design Principle**
    Principle of Least Knowledge - talk only to your immediate friends.
    `{Least Knowledge principle} aka Law of Demeter`

Least Knowledge principle guidelines :
* take any object.
* from any method on that object we should only instantiate :
  * The object itself.
  * Objects passed as a parameter to the method.
  * Any object the method creates or instantiate.
  * Any components of the object *by instance variable **has-A-relationship***.
  * NOT TO CALL METHODS ON OBJECTS THAT WERE RETURNED FROM ANOTHER METHODS!.


```PHP

$Q = "What’s the harm in calling the method of an object we get back from another call?"

$A = "if we were to do that, then we’d be making a request
of another object’s subpart (and increasing the number of objects
we directly know). In such cases, the principle forces us to ask
the object to make the request for us; that way we don’t have
to know about its component objects
(and we keep our circle of friends small)."

```

Without the principle

```PHP

public function getTemp() : float {
    $thermometer = $this->station->getThermometer();
    //we get thermometer OBJECT for
    //the station then we call get temperature
    return $thermometer->getTemperature();
}

```

With Least Knowledge principle

```PHP

public function getTemp() : float {
    //we add a method to the station class with
    //that we reduce the number of classes we're dependent on
    return $this->station->getTemperature();
}

```

### Wrappers

PATTERN  | INTENT
---------|---------
Decorator|Doesn't alter the interface but adds responsibilities.
Adapter  |converts one interface to another.
Facade   |Makes an interface simpler.


---


<h1 id="ch8">Template Method Pattern [Encapsulating Algorithms] </h1>


### Template Method Pattern

`aka Hollywood pattern`

> The Template Method Pattern defines the skeleton of an algorithm in a method, deferring some steps to subclasses. Template Method lets subclasses redefine certain steps of an algorithm without changing the algorithm's structure.



 It's all about creating `Template` form an `Algorithm`

```PHP

$q =  "What's a `Template` ?"

$a = "it's just a method that defines an algorithm as steps"

```


### Hooked on Template

A **Hook** is a method that declared in the abstract class but given an empty on default implementation ; giving the subclass the ability to `hook into` _override_ the algorithm on various points.

When to use what ?
`abstract methods` _VS_`hooks.`
use __abstract methods__ when the implementation is a __MUST__ in the subclass.
for the __hooks__ it's optional for the subclass.


### Hollywood Principle

> Don't call us, we'll call you.

* **Hollywood principle** helps prevents `Dependency rot`. huh ..what!?

* **Dependency rot:** it's bad and a mess !
it's when high-level components depending on low-level components depending on high-level components ...and so on.
it's hard to understand system with such a flaw.


* **Hollywood principle :** is a `Technique` for building frameworks or components so that low-level components can be `Hooked` into the computation without creating dependency between the low-level components and high-level components.

* **Hollywood principle** guides us to put `decision-making` in high-level modules that can decide how and when to call low level modules.

* **The Factory Method is a specialization of Template Method**

### Who does what ?

Pattern         | Description
----------------|-------------
Template Method | Subclasses decide how to implement steps in an algorithm.
Strategy        | Encapsulate interchangeable behavior and use delegation to decide which behavior to use.
Factory Method  | Subclasses decide which concrete classes to create.

#### Bounce

another great example from [journaldev](https://www.journaldev.com/1763/template-method-design-pattern-in-java)

to understand the method template pattern

> suppose we want to provide an algorithm to build a house. The steps need to be performed to build a house are – building foundation, building pillars, building walls and windows. The important point is that the **we can’t change the order of execution** because we can’t build windows before building the foundation. So in this case we can create a template method that will use different methods to build the house.


### Template Method Pattern used when

* Template Methods are frequently used in general purpose frameworks or libraries that will be used by other developer.
* When the behavior of an algorithm can vary but not the order.
* When there's a code duplication *this is always gives a clear sign of bad design decisions and there's always room for improvement*.


---


<h1 id="ch9">The Iterator and Composite Patterns [Well-Managed Collection]</h1>

## Iterator Pattern

> The Iterator Pattern provides a way to access the elements of an aggregate object sequentially without exposing its underlying representation.

* Iterator provide a standard way to traverse through a group of Objects.

### checkout iterator branch

for iterator code

```bash

$ git checkout iteratorPattern
Switched to branch 'iteratorPattern'

 ```

![iterator](/ch09/iterator.png)

* The **Aggregate** defines an interface for the creation of the Iterator object.
* The **ConcreteAggregate** implements this interface, and returns an instance of the ConcreteIterator.
* The **Iterator** defines the interface for access and traversal of the elements, and the **ConcreteIterator** implements this interface while keeping track of the current position in the traversal of the Aggregate.

### Iterator used when

* When you need access to elements in a set without access to the entire representation.
* When you need a uniform traversal interface, and multiple traversals may happen across elements.


---

### implementations notes

Unlike java , PHP Array can be treated as an array, list, hash-table, stack, queue, dictionary, collection,...and probably more.

The original example uses both Java Array and ArrayList.

#### PHP implementation specifics

For the sake of **`Objectville`** example :
* I will use [SplFixedArray](http://php.net/manual/en/class.splfixedarray.php) to mimic (static)fixed size arrays.
* We will ignore the fact that both **normal php `array`** and **`SplFixedArray`** implement the [Traversable *interface*](http://php.net/manual/en/class.traversable.php)
and that both can be easily traversed using a [`foreach`](http://php.net/manual/en/control-structures.foreach.php).
* You cannot implement `Traversable` interface it's an abstract base interface, you can't implement it alone but you can implement interfaces called [`Iterator`](http://php.net/manual/en/class.iterator.php) or [`IteratorAggregate`](http://php.net/manual/en/class.iteratoraggregate.php) By implementing either of these interfaces you make a class `iterable` and `traversable` using `foreach`
* For the sake of this example we're going to make our own interface and we call it `IteratorInterface`.

---

### Single Responsibility Principle (**S**OLID)

> A Class should have only one reason to change.

Separating responsibilities in design is one of the most difficult things to do, to succeed is to be diligent in examining your designs and watchout for signals that a class is changing in more than one way as your system grows.


---


## The Composite Pattern

> The Composite Pattern allows you to compose objects into tree structures to represent part-whole hierarchies. Composite lets clients treat individual objects and compositions of objects uniformly.

## Is `Composite Pattern` really flow the single responsibility principle

The Composite Pattern

1. manages a hierarchy

1. performs operations related to Menus

that's __2__ responsibilities.