#Pool
Uses a set of initialized objects kept ready to use ...
the client will request an object from the pool and
perform operations on the returned object. When the client
has finished, it returns the object, which is a specific type of
factory object, to the pool rather than destroying it.