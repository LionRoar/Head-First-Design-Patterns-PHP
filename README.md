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

<h2 id="ch4">chapter 4 : The Factory pattern </h2>

`Factory method , Abstract factory , Dependency Inversion ?`


> **The Factory Method** Pattern defines an interface for creating an object, but lets subclasses decide which class to instantiate. Factory Method lets a class defer instantiation to subclasses.


![Factory-method](/ch04/factory-method.jpg)

```

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

> **Abstract Factory Pattern** provides an interface for creating families of related or dependent objects without specifying their concrete classes.


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

<h2 id="ch5">chapter 5 : Singleton</h2>


> The singleton pattern ensures a class has only one instance and provide global access to it .


### Singleton Pattern used when

for anything (object) that unique.

Singletons are used a lot where you need to provide a registry, or something like a thread pool. Logging is also another popular use of Singletons, providing one single access point to an applications log file.


* Singleton violates the _Single Responsibility Principle_ [read more on the downsides check this amazing article by **James Sugrue**](https://dzone.com/articles/design-patterns-singleton)

---

<h2 id="ch6">chapter 6 : Command Pattern</h2>


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

<h2 id="ch7">The Adapter and The Facade Patterns</h2>

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

