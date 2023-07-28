## State
The pattern extracts state-related behaviors into separate
state classes and forces the original object to delegate the
work to an instance of these classes, instead of acting on its
own.
Encapsulate varying behavior for the same routine based on
an object's state. This can be a cleaner way for an object to
change its behavior at runtime without resorting to large
monolithic conditional statements.