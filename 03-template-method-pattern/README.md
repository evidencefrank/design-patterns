<h2>The Template Method Pattern</h2>
<p>The template method is a method in a superclass, usually an abstract superclass, and defines the skeleton of an operation in terms of a number of high-level steps. These steps are themselves implemented by additional helper methods in the same class as the template method.</p>
<p>The Template method pattern is useful especially when we are worried about code duplication (in multiple classes) and so this pattern ensures that we dry up our code as possible.</p>

<p>The way we implement a Template method pattern is by extract all generic/duplicate methods to an abstract class (can be called a parent class) but then when it comes to specific differences we can defer to a Subclass.</p>
<p>Also by generalising some methods or functions in the parent class, we can defer to abstract methods. That way the Template (parent class) can be responsible for triggering these methods (abstract methods), however it doesn't need to be responsible for defining their behaviour.</p>
<p>Sub Classes are deferred to for anything that is unique and can change from class to class.</p>
<p>Ideally the algorithm(s) should be placed in the parent class when implementing the Template method patten.</p>