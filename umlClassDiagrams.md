# UML Class Diagrams

This type of UML diagram describes the types of objects in the system and the types of static relationships that are among them. Class diagrams show each class with a box divided into three sections: the top and bolded part is the class name, second: the attributes of the class, and third: the operations objects of that class can perform. Operations and attributes are referred to generally as features.

Properties represent the structural features of a class. They appear in 2 distinct notations: attributes and associations.
Attributes:
Attribute notation looks like this : visibility name: type multiplicity = default {property-string}
Visibility is either private ( - ) or public ( + )
The rest are pretty self-explanatory. Here is a real example: 

- name: String [1] = "Untitled" {readOnly}

Associations:
An association is depicted by a straight line from the source class, with the arrowhead at the target class, or the property, or just a line between two classes. 

Associations are generally used to denote a class of more significance, and attributes for those that are less generally significant.

Multiplicities:
The multiplicity of a property is how many instances of the property there may be. The most common ones are:

	- 1 (An order must have exactly 1 customer)
	- 0..1 (A corporate customer may or may not have exactly one sales rep)
	- The symbol * (Means there is no upper limit, essentially means 0..*)
More generally a multiplicity consists of an upper bound and a lower bound, such as 2..4, for example.

Interpretations of UML diagrams into code will vary widely based on how they are used. There is no hard and fast correspondence between code and UML, each team can set up their own precedents.

Aside from unidirectional associations, as described above, there are also bidirectional associations, typically denotes by a line with an arrowhead on each side. And example of this is a person who owns a car. The class Person, would have an attribute Cars, of which his car would be a member. Conversely, the class Car would have an attribute Owner, of which the person would be the value.

Operations are actions that a class can carry out. The most common form of operations are methods. They appear in the following syntax:
`visibility name (parameter-list) : return-type {property-string}`
The first two are the same as for attributes, and the 3rd is the list of the parameters. 4th is the data type of the return value. 5th is property values that apply to the operation. Parameters follow this syntax: 
`direction name: type = default value`
Name, type, and default value are the same as they appear in attributes
Direction indicates if the parameter input, output, or both. If none is given, input is assumed
A query is an operation that gets a value from a class without any side effects.
A modifier is an operation that does have side effects, or that alters the system state.
A getting method is an operation that gets a value from a field, and nothing else
A setting method is an operation that sets a value to a field and nothing else.
An operation is something invoked on an object, a method is the body of the procedure

Generalization is the ability to place all instances of a different subclasses into one overarching class, the supertype.
Substitutability is a main principle of inheritance. It reasons that you should be able to substitute any instance of the supertype for an instance of the subtype, and the program will function the same. Inheritance is denoted by a closed, unfilled arrowhead.

Notes are denoted by dotted lines in UML. In-line comments/notes are prefixed by two dashes, --like this.

A dependency between two classes exists if changes to the definition of one (the supplier) leads to changes in the other (the client).

Aggregation is a part-of relationship. For example, wheels and an engine are part-of the an object of the class Car. This is denoted by a unfilled diamond at the end of a line.
Composition is an object being potentially part of multiple different classes of objects. Though there may be many potential owner for an object, each instance of that object only has one owner. Composition is denoted by a filled-in diamond at the end of a line.

Associations/relationship can have attributes that belong to the association itself, not to either of the classes. These are denoted by a line with a diamond at the end, and the attributes are written in the diamond. An example would be the marriage date between two people. That is an attribute of the relationship, not of either person.