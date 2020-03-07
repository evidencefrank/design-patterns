<h2>The Adapter Pattern</h2>
<p>An Adapter allows you to translate or wrap one interface for use with another.</p>
<p>The key component is to create an adapter and have it implement the interface that you are trying to adapt. 
Then you inject your class (by use of a construct method) and then translate the original interfaces methods over to the new one.
By so doing you normalize the interfaces.</p>

Use of Adapter Pattern ensures that you can translate or wrap multiple interfaces to achieve pretty much similar functionality for those different interfaces (Normalisation).
