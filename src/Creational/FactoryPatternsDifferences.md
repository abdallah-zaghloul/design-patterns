#Factory Patterns Differences

|                | Abstract Factory                                                  | Static Factory                                                                 |
|----------------|-------------------------------------------------------------------|--------------------------------------------------------------------------------|
| Implementation | Create a list of related Objects with one function for each class | Create a list of related Objects with only one static function for all classes |                                
| Can be Mocked  | yes                                                               | No                                                                             |                                


|                | Factory Method                                                                                   | Simple Factory                                                                                                                                          |
|----------------|--------------------------------------------------------------------------------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------|
| Implementation | Define an interface for creating an object, but let subclasses decide which class to instantiate | A class simply creates the object you want to use, This allows interfaces for creating objects without exposing the object creation logic to the client |                                
