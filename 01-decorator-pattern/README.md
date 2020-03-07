<h2>The Decorator Pattern</h2>
<p>A decorator allows us to dynamically extend the behavior of a particular object at runtime, without needing to resort to unnecessary inheritance.
       With Decorators you can build classes at runtime.</p>
<ul>
<li>They are used for stacking responsibilities to base classes (core services). 
    Both the Base class and the Decorators need to implement the same contract (interface) and also they need to have the same contract methods. </li>
<li>In order for a decorator to work it would need some kind of (Base class instance) instance which you can inject to it by use of construct method. 
    By So doing the decorator class can have the ability of extending the base class methods (declared in the contract interface)</li>
<li>Decorators can be build by using contracts (use of interface classes)</li>
</ul>

Open-Closed Principle (OCP):
 => An Object or Component should be open for extension but closed for modification.
 
 Use of Decorators can ensure that a developer abide by the OCP principles.
