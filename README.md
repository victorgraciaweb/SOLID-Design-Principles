# SOLID-Design-Principles
These SOLID principles work together to promote the design of modular, easily understandable software that can adapt to changes without affecting the rest of the system.

What can you look? 
--

1. Single Responsibility Principle (SRP):

   This principle states that a class should have only one reason to change, meaning it should have only one responsibility or function in the system. If a class has more than one reason to change, it becomes harder to maintain and understand.

2. Open/Closed Principle (OCP):

   The Open/Closed Principle suggests that software entities (classes, modules, functions, etc.) should be open for extension but closed for modification. In other words, you should be able to add new features without changing existing code.

3. Liskov Substitution Principle (LSP):

   This principle refers to the ability to substitute objects of a base class with objects of its derived classes without affecting the integrity of the program. If a base class is replaced by a derived class, the program should still function correctly.

4. Interface Segregation Principle (ISP):

   ISP states that a class should not be forced to implement interfaces it does not use. Instead of having monolithic interfaces, smaller and more specific interfaces should be preferred, avoiding the need for classes to implement unnecessary methods.

5. Dependency Inversion Principle (DIP):

   The Dependency Inversion Principle suggests that high-level classes should not depend on low-level classes; both should depend on abstractions. Additionally, abstractions should not depend on details, but the other way around. This is achieved through the inversion of the direction of dependencies.