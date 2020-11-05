# Head-First-Design-Patterns-PHP

## Head First Design Patterns : A Brain-Friendly Guide book examples code in PHP

---

**The original code in the book is in java.**

**I chose this book because it has a really unique way of describing things and making them easy to understand maybe somebody else will find it useful.**

---

## Run the code

First you have to generate the auto loader with composer

note: __*Do this step for each folder that have composer.json within*__

 > *All examples are tested with php7.2*

``` bash
    $ composer dump-autoload
    $ php index.php
```

e.g: if we want to run the `simUDuck` example of chapter 1 `ch01` then

 ``` bash
    1. $ cd /ch01/simUDuck
    2. $ composer dump-autoload
    3. $ php index.php

```

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

* [chapter 10 : The State Pattern *The State of Things* ](#ch10)

* [chapter 11 : The Proxy Pattern *Controlling Object Access* ](#ch11)

---

# MY-NOTES

---


<h1 id="ch1">chapter 1: Strategy Pattern</h1>

`aka Policy Pattern`

> Defines a set of encapsulated algorithms that can be swapped to carry out a specific behavior.

__more formal definition:__

> The Strategy Pattern defines a family of algorithms, encapsulates each one, and makes them interchangeable.
> Strategy lets the algorithm vary independently from
clients that use it.

## Strategy pattern used when

Strategy pattern is used when we have multiple algorithms for specific task and the client decides the actual implementation to be used at runtime.

### Notes

* `CHANGE` is the one constant in software development.

* The Example in the book shows that when inheritance hasn’t worked out very well, since the behavior keeps changing across the subclasses and it's not appropriate for all subclasses to have those behaviors, The interface solution sounds promising and can be done in PHP using [Traits](https://www.php.net/manual/en/language.oop5.traits.php) but cant be done in java because java have no code reuse so in java if there's a change you have to track down all the subclasses where that behavior is defined *probably introducing new bugs along the way!*

> 1.Design Principle **Enacapsulate** : 
> Identify the aspects of your application that vary and separate them from what stays the same.
> Another way to think about this principle:
> take the parts that vary and encapsulate them, so that later you can alter or > extend the parts that vary without affecting those that don’t.

* Encapsulate what change and you will have flexible system.

* Separate the code that will be changed.

* When you have subclasses that differ in a behavior(s) pull out what varies and (encapsulate) create new set of classes to represent each behavior.

> 2.Design Principle : 
> Program to an **interface** not an implementation
> *An interface in this context could also refers to an abstract class or class that implements particular behavior*


* Use an interface to represent each behavior and Each implementation of a *behavior* will implement one of those interface.

* if you can add more behaviors without modifying any of the existing behavior classes or touching any of the superclasses we've achieved a good strategy design pattern.

* Represent the behavior of things and not the thing. themselves

* Think of *set of behaviors* as a *set of algorithms*.

> 3.Design Principle : 
> Favor composition over inheritance

* creating systems using composition gives you a lot more flexibility. it lets you encapsulate a family of algorithms into their own set of classes, and lets you change behavior at runtime as long as the object you’re composing with implements the correct behavior interface.

* The principles and patterns can be applied at any stage of the
development lifecycle.

* Design patterns don’t go directly into your code, they fi rst go into your BRAIN.

![LoadPatternsIntoYourBrain](/resources/intoyourbrain.png)

* The secrets to creating maintainable OO systems is thinking about how they might change in the future.

---
Strategy Pattern examples:

* SimUDuck app

* Bounce+ **ShoppingCart example is not from the book**

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

### The Power of Loos Coupling 

When two objects are loosely coupled, the can interact, but have very little knowledge of each other.

The Observer Pattern provides an object design where subject and observers are loosely coupled.

>4. Design Principle : 
> STRIVE FOR LOOSELY COUPLE DESIGN BETWEEN OBJECT THAT INTERACT

* best usage when there's single source of truth one object with many unknown dependents.

* This single source of truth is an Object's state that's many objects care of knowing it.

* defines one-to-many relationship between objects.

* the Publisher aka the **Subject** updates the observer using common interface.

* the Subscribers aka the **Observers** are loosely coupled and the subject no nothing about then except that they are implement the observer interface.

---


<h1 id="ch3" > chapter 3 : Decorator Pattern (Design Eye for The Inheritance Guy) </h1>

> Attaches additional responsibilities to an object dynamically.

> Decorators provide a flexible alternative to sub-classing for existing functionality.


Allows for the dynamic wrapping of objects in order to modify their existing responsibilities and behaviors.

>5. Design Principle : (The Open-Closed Principle) :
> Classes should be open for extensions, but closed for modifications.


### Decorator used when

Decorator pattern is best used when we introduced to existing code that we want to extend its functionality, Or when we want to extend the functionality for the clients without exposing the code.

Since Decorators are basically wrappers around objects PHP I/O classes same as Java I/O uses decorator pattern to add more functionality to the stream. read more on [Wrappers in php](http://php.net/manual/en/wrappers.php) and you can register a custom wrapper (decorators) to add your own filter/wrapper to I/O stream. @see [this example](https://github.com/LionRoar/Head-First-Design-Patterns-PHP/tree/master/ch03/PHP_IO_DECORATOR) on chapter 03.

* Inheritance is one form of extension, but not necessarily the best way to achieve flexibility in our designs. 

* Inheritance makes static behavior but Composition make the behavior dynamic and it can change at runtime .

* Decorator gives the object new responsibility/functionality dynamically at runtime by using composition.

* It's Vital for Decorators to have the same type (superclass/interface) as the objects the are going to decorate/wrap.

* Decorator reduce the chance of bugs and side effects in legacy code.

* General speaking design patterns add abstraction level that's in result adds some level of complexity to the code, that's why we should always use it on the parts that changes and don't overusing it.

* Decorators can result in many small objects in our design, and overuse can be complex.

* Introducing Decorators can increase the complexity of the code; because not only you need to instantiate the component, but also wrap it with (n) number of decorators this can be tackled by using `Factory` and `Builder` Patterns.

---


<h1 id="ch4">chapter 4 : The Factory pattern </h1>

`Factory method , Abstract factory , Dependency Inversion ?`

## Contents
1. Factory Method Pattern.
2. Abstract Factory Pattern.

There's more to making objects than just using the `new` operator, instantiation is an activity that shouldn't always done in public and can often lead to `coupling problems`.

The Problem : When you have a code that requires you to make a lot of concrete classes this code probably will need to add new classes and thus will NOT be `Closed for Modification`.

All Factory Patterns encapsulate object creation.

## The Factory Method Pattern

> The Factory Method Patter defines an interface for creating an object, but lets subclasses decide which class to instantiate. Factory Method lets a class defer instantiation to subclasses.

The Factory Method Pattern encapsulates object creation by letting subclasses decide what objects to create.

A Factory Method handles the object creation and encapsulates it in a subclass.

![Factory-method](/ch04/factory-method.jpg)

```php

    +----------------------+
    |      PizzaStore      | <- [abstract creator]
    +----------------------+ <- abstract class defines
    |                      | abstract factory method `createPizza()`
    |abstract createPizza()| that the sub-class implements to produce product.
    |                      |
    |    orderPizza()      |                         <abstract product>
    |                      |                             +-------+
    +-----^--------------^-+                             | Pizza |<-------+
          |              |                               +-^-----+        |
          |              |                                 |              |
          |              |_______                          |              |
          |                      |                         |              |
          |                      |                         |              |
[concrete creator]       [concrete creator]                |              |
+---------+------+      +------------------+      +------------------+    |
| NYPizzaStore   |      |ChicagoPizzaStore |      |ChicagoCheesePizza|    |
+----------------+      +------------------+      +--------^---------+    |
|  createPizza() |      |  createPizza()   |               |              |
|                |      |                  +--[creates]->>-+              |
+-------------+--+      +------------------+                              |
    [creator] |              [creator]            +-------------+         |
              +---------------------[creates]--->>|NYCheesePizza|---------+
                                                  +-------------+

```

### Factory Method Pattern used when

When there's a need to make a lot of concrete classes or a desire to add new concrete classes in the future we isolate the creation of the classes to an abstract method in an abstract class to obligate the creation to the subclasses.

In other words it's used to decouple your client code from the concrete classes you need to instantiate, or if you don’t know ahead of time all the concrete classes you are going to need

---

>6. Design Principle : The Dependency Inversion Principle 
> Depend upon abstraction. Do not depend upon concrete classes.

#### **Dependency Inversion Principle**

 `Depend upon abstractions. Do not depend upon concrete classes.`

* High-level components should not depend on low-level components; rather, they should _both_ depend on abstractions.

* Instantiation is an activity that should not be in public and can often lead to coupling problems.

* `new` keyword __===__ an Implementation _(not an Interface)_.


* Factory method lets subclasses decide what class instantiate not because it allows rather than it does not know the product .

* **Strive for guidelines** `The following guidelines can help you avoid OO designs that violate the Dependency Inversion Principle` :

    1. **No variable should hold reference for a concrete class.** If you use `new` you’ll be holding a reference to a concrete class, Use a factory to get around that

    1. **No class should derive form concrete class.** If you derive from a concrete class, you’re depending on a concrete class. Derive from an abstraction, like an interface or an abstract class.

    1. **No method should override method on base class.** if so then the base class not really an abstraction. If you override an implemented method, then your base class wasn’t really an abstraction to start with. Those methods implemented in the base class are meant to be shared by all your subclasses.

---

## Abstract Factory Pattern

Abstract Factory encapsulates the creation of a `family` of products by providing an interface for the product creation.

> Abstract Factory Pattern provides an interface for creating families of related or dependent objects without specifying their concrete classes.

![Abstract-Factory](/ch04/abstract-factory.jpg)

![Abstract-Factory](/ch04/abstract-factory-2.jpg)

The methods of an Abstract Factory are implemented as **factory methods**.

### Abstract Factory Pattern used when

it's used to construct objects such that they can be decoupled from the implementing system.
The pattern is best utilized when your system has to create multiple families of products or you want to provide a library of products without exposing the implementation details.

whenever you have families of products you need to create and you want to make sure your clients create products that belong together.

* The methods of the **Abstract Factory** are often **Factory Methods**.


---

* The job of an Abstract Factory is to define an interface for creating a set of products.

* Both the **Abstract factory** and **Factory method** are great in terms of decoupling application from specific implementations.

* **Factory method** create objects using (inheritance), while **Abstract Factory** creates objects using (composition). that means to create object using Factory method you need to *extend* class and override a factory method, and for the Abstract Factory it provides an abstract type for creating family of products subclasses define how those products are created and to use the factory you instantiate it and inject it to code written against the abstract type.

---


<h1 id="ch5">chapter 5 : Singleton</h1>

> The singleton pattern ensures a class has only one instance and provide global access to it .

The one, only and unique object.

* The Singleton Pattern ensures you have at most one instance of a class in your application.

* The Singleton Pattern also provides a global access point to that instance.

### Singleton Pattern used when

When we only need one object such as: thread pools, caches, dialog boxes, objects that handle
preferences and registry settings, objects used for logging, and objects that act as device drivers to devices like printers and graphics cards, for many of these types of objects, if we were to instantiate more than one we’d run into all sorts of problems like incorrect program behavior, overuse of resources, or inconsistent results.

We use the singleton pattern in order to restrict the number of instances that can be created from a resource consuming class to only one.

Resource consuming classes are classes that might slow down our website or cost money. For example:

    Some external service providers (APIs) charge money per each use.
    Some classes that detect mobile devices might slow down our website.
    Establishing a connection with a database is time consuming and slows down our app.

### Singleton **violates** the *Single Responsibility Principle* “One Class, One Responsibility”

```

The singleton pattern is probably the most infamous pattern to exist, and is considered an anti-pattern because it creates global variables that can be accessed and changed from anywhere in the code.

Yet, The use of the singleton pattern is justified in those cases where we want to restrict the number of instances that we create from a class in order to save the system resources. Such cases include data base connections as well as external APIs that devour our system resources.

```

I encourage you to read more about the Singleton pattern [in this article by Joseph Benharosh](https://phpenthusiast.com/blog/the-singleton-design-pattern-in-php)

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

* Iterator provide a standard way *common interface* to traverse through a group of Objects *aggregate*.
* Iterator allows access to an aggregate's elements without exposing its internal structure.
### checkout iterator branch for iterator implementation

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

`We should strive to assign only one responsibility to each class.`

---


## The Composite Pattern

> The Composite Pattern allows you to compose objects into tree structures to represent part-whole hierarchies. Composite lets clients treat individual objects and compositions of objects uniformly.

![Composite](/ch09/composite_pattern.png)

```

The << Component >> abstract class define all objects in composed system.
The Leaf has no children.
The Composite contains components.

```

* Composite pattern comes into play when developing a system where a component could either be an individual object or a representation of a collection of objects.

* Composite pattern provides a structure to hold both individual objects an composites.

* A **Component** is any object in a **Composite structure**.

* **Components** may be other *composites* or *leaf* nodes.

* Remember to balance `transparency` and `safety`.


## Is `Composite Pattern` really follow the single responsibility principle

The Composite Pattern

1. manages a hierarchy

1. performs operations related to Menus

that's __2__ responsibilities.

The Composite Pattern trades **Single Responsibility Principle** for *transparency*

Transparency: Since the Composite interface contain child management operations and the leaf _(items non iterable)_ operations The client can treat both the composites and leaf nodes uniformly, both are _transparent_ to the client.

Having both operations in the Component class will cause a bit loss of *safety* because the client might try to do Composite related operation e.g _add_ to a leaf _item_ which is invalid.


## Composite Pattern used when

* Graphics frameworks are the most common use of this pattern.
* The Composite pattern is frequently used for abstract syntax tree representations.
* when dealing with tree structures *Anything that can be modelled as a tree structure can be considered an example of Composite*.
* when you have collection of objects with whole-part relationships and you want to be able to treat those objects uniformly.

### `what's whole-part relationships ?`

also known as `aggregation relationship` it's a relationship between two classes in which one represent the larger class (whole) that consists of smaller classes (parts)

---

* We call components that contain other components `composite objects` and components that don't contain other components `leaf objects`.

* By treating objects uniformly that means there's a common methods can be called on both `composite` or `leaf` that implies that both must have the same `interface`.

---

### Who does what ?

Pattern         | Description
----------------|-------------
Strategy        | Encapsulate interchangeable behavior and use delegation to decide which behavior to use.
Adapter         | Changes the interface of one or more classes.
Iterator        | Provides a way to traverse a collection of objects without exposing the collection's implementation.
Facade          | Simplifies the interface of a group of classes.
Composite       | Clients treat collections of objects and individual objects uniformly.
Observer        | Allow a group of objects to be notified when some state changes.

---

<h1 id="ch10">chapter 10: The State Pattern *The State of Things*</h1>

> Allows an object to alter its behaviour when its internal state changes. The object will appear to change its class.

---

![State](/ch10/state_pattern.png)

* The **Context** have number of internal states.
* The **State** << interface >> defines a common interface for all concrete states.
* Each *Behavior* correspond with **ConcreteState** implements its own logic for the request.
* When **Context** changes state a different **ConcreteState** associate with it.
* Simply change the state object in context to change the behavior.

This is similar to **Strategy Pattern** except changes happens internally rather than the client deciding the strategy.

key-points:
Think of Strategy Pattern as a flexible alternative to sub-classing.
Think of State Pattern as an alternative to putting lots of conditionals.

## State Pattern used when

* You need a class to behave differently based on some condition.
* If you are using *if-else* condition block to perform different actions based on the state.

### Who does what ?

Pattern         | Description
----------------|-------------
State           | Encapsulate state-based behavior and delegate behavior to the current state.
Strategy        | Encapsulate interchangeable behavior and use delegation to decide which behavior to use.
Template Method | Subclasses decide how to implement steps in an algorithm.

---

<h1 id="ch11">The Proxy Pattern *Controlling Object Access* </h1>

