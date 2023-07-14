## Composite
lets you compose objects into
tree structures and then work with these structures as if they
were individual objects.
The greatest benefit of this approach is that you don't need
To care about the concrete classes of objects that compose
The tree. You can treat them all the same via the common
Interface. When you call a method, the objects
Themselves pass the request down the tree.