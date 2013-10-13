# Design Patterns

Exploring design patterns and their uses.

## Observer Pattern

This is an event model, also referred to as "PubSub".

Observers are used so functionality that's not directly related to an action can still listen in and react to that action. For example, the action of creating a new user might entail:

1. Saving the user to a data store
2. Sending a welcome email to the new user

Saving the user to the data store is a direct function of creating a new user. However, the email is an ancillary action.  Using the Observer pattern, an application's email service could listen for a "user created" event in order to know when to send a welcome email.

In this way, the email service is not directly coupled to the code for creating of a new user.

**Note:** For this pattern, we could use PHP's built-in SPL [subject](http://de.php.net/manual/en/class.splsubject.php) and [observer](http://de.php.net/manual/en/class.splobserver.php) classes, but what fun is that? Learning about [SplObjectStorage](http://de.php.net/manual/en/class.splobjectstorage.php) is more fun.

## Decorator Pattern

The decorator pattern allows you to add behaviors or information to an object at run-time (vs "compile time"). This is used instead of inheritance, which can cause maintainability issues when new functionality is added.

Instead of modifying extending a class to add functionality, we can create classes which each encapsulate a new bit of functionality or data, and add it to our base object as needed.

An example is decorating a data-retrieval class with a **cache** implementation. You can wrap your data repository class in a decorator who's job is to attempt to retrieve requested data from cache. If the data does not exist in cache, it can pass the responsibility back the base data store class.

This can also be used with actions such as logging and profiling.