#ProtoType
Uses one standard object for each class then clone that object to create new instances without coupling to their specific classes
to avoid creating objects cost.

#Clone types
|             | Shallow                           | Deep                            |
|-------------|-----------------------------------|---------------------------------|
| Copy object | pass by reference                 | pass by value                   |
| Implement   | already implemented (php default) | override magic method __clone() |

Prototypes design pattern uses Deep Clone for creating diff instances