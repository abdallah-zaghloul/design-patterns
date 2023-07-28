## Strategy
The Strategy's main goal is to define a family of algorithms
that perform a similar operation, each with a different
implementation.
The original object, called context, holds a reference to a
strategy object and delegates it executing the behavior. In
order to change the way the context performs its work, other
objects may replace the currently linked strategy
object with another one.