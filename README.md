## Entity Behaviours

Provides some useful interfaces and traits that can be used with entities. The traits implement on
basic methods, and still require e.g. publish/unpublish to be implemented.

### Requirements

 * PHP 7+

### Installation

Install using composer, or checkout / pull the files from github.com.

 * composer require somnambulist/entity-behaviours

### Behaviours

Unlike the somnambulist/laravel-doctrine-behaviours package, these behaviours are intended to be used in a
much more controlled and DDD based system. As such they do not implement setters and in some cases even
the methods defined in the interfaces as these are core domain methods that should raise events within
your system.

 1. Activatable
 
    Adds `activate()`/`deactivate()` methods to an entity controlling if it is active or not. The entity should
    implement activate/deactivate methods so that Events can be raised.
 
 1. GloballyTrackable
  
    A collection of other interfaces: Identifiable, Nameable, Timestampable, UniversallyIdentifiable.

 1. Identifiable
 
    Adds an `id()` method that returns the primary identifier (int, string, object)
    
 1. IdentifiableWithTimestamps
 
    A combination of Identifiable and Timestampable
 
 1. Nameable
 
    Adds a `name()` method that returns the entity name component.

 1. NumericallySortable
 
    Adds an `ordinal()` and update method for adding a numerical sorting index to an entity.

 1. Publishable
 
    Adds `publish()`/`unpublish()` for controlling if an Entity is "published". Uses the DateTime value object.
    publish/unpublish are not implemented as they should raise events when used.
    
 1. Timestampable
 
    Adds `createdAt()`/`updatedAt()` methods. Not setters are not defined as the entity should update the
    updatedAt when it is changed through update calls and not rely on database behaviour.
    
 1. Trackable
 
    A collection of other interfaces: Identifiable, Nameable, Timestampable

 1. UniversallyIdentifiable
 
    Adds a `uuid()` method that returns a Uuid value object.
 
 1. Versionable
 
    Adds a `version()` and `incrementVersion()` methods for defining the current entity version. incrementVersion
    should be hooked in appropriate update methods when the entity is modified.
    
### Utilities

 * EntityAccessor
   
   Helper class for accessing property methods/properties. Intended to be used in unit tests only.
