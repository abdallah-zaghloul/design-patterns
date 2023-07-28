## Chain Of Responsibility
lets you pass requests
along a chain of handlers. Upon receiving a request, each
handler decides either to process the request or to pass it to
the next handler in the chain.
To build a chain of objects to handle a call in sequential
order. If one object cannot handle a call,
It delegates the call to the next in the chain and so forth.