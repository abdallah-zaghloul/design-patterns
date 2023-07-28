## Command
is a behavioral design pattern that turns a request into a
stand-alone object that contains all information about the
request.
We have an Invoker and a Receiver. This pattern uses a
"Command" to delegate the method call against the Receiver
and presents the same method “execute”. Therefore, the
Invoker just knows to call "execute" to process
the Command of the client. The Receiver is decoupled
from the Invoker.