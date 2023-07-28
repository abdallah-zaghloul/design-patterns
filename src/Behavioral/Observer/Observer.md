## Observer
is a behavioral design pattern that lets you define a
subscription mechanism to notify multiple objects about any
events that happen to the object they're observing.
To implement a publish/subscribe behaviour to an object,
whenever a "Subject” object changes its state, the attached
"Observers" will be notified. It is used to shorten the amount
coupled objects and uses loose coupling instead.