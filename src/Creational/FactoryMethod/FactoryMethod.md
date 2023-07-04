#Factory Method
define an interface for creating an object, but let subclasses decide which class to instantiate 
... lets a class defer instantiation to subclasses.

|            | Factory Method                                         | Abstract Factory                                                          |
|------------|--------------------------------------------------------|---------------------------------------------------------------------------|
| Immutable  | Method                                                 | Object                                                                    |
| Changeable | Object                                                 | Method                                                                    |
| Apply      | Inheritance                                            | Composition                                                               |
| Example 1  | ```$brand = (new BMWBrandFactory())->buildBrand(); ``` | ```$car = (new CarAbstractFactory(500000))->createBMWCar(); ```           |
| Example 2  | ```$brand = (new BenzBrandFactory())->buildBrand();``` | ```$car = (new CarAbstractFactory(200000,10000))->createMercedesCar();``` |
