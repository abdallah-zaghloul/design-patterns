#Singleton
ensures that only one object of its kind exists and provides a single point of access to it for any other code.

__Implementation__
- private constructor
- static creation method

|     | Pros                                                                               | Cons                                                                                             |
|-----|------------------------------------------------------------------------------------|--------------------------------------------------------------------------------------------------|
|     | - You can be sure that a class has only a single instance                          | - Violates the Single Responsibility Principle. The pattern solves two problems at the same time |
|     | - You gain a global access point to that instance                                  | - can mask bad design if component of the program know too much about each other                 |
|     | - The singleton object is initialized only when it’s requested for the first time. | - requires special treatment in a multi-threaded environment                                     |
|     |                                                                                    | - difficult to unit test                                                                         |
|     |                                                                                    | - Violates the Single Responsibility Principle. The pattern solves two problems at the same time |
