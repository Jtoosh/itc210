# UML Activity Diagrams

A UML activity diagram shows a certain workflow, process, or business procedure, and allows for parallel processes. The initial node is the starting point of the diagram, followed by an initial action. Actions in Activity diagrams are shown by rectangular nodes with text to show the name of the action. A *fork* is a horizontal bar that shows when to parallel processes begin/stem out of a single flow. The lines/arrows on the diagrams are called *flows* or *edges*. When forking flows/parallel flows need to be joined back together before proceeding, a *join* is used, which is also denoted by a horizontal bar which shows 2 inflowing edges and 1 outputted edge. A key characteristic of joins is that, even though forked flows may be carried out asynchronously, all forking flows must be completed before the activity can move forward past the join point.

Conditional logic is shown with a diamond, called a *decision*. Each flow on a decision has a guard, or condition, shown inside brackets [ ]. When a block/flow of conditional logic has finished, the different conditional flows are joined back together and consolidated using a merge, which is also denoted by a diamond.

An activity can be thought of as a process composed of actions, as an Activity diagram is composed of action nodes.

Actions can be thought of as sub-activities, and broken down into their own activity diagrams. When this is done, a box generally is placed encompassing the diagram with the name of the sub-activity/action in it. An action that has a sub-activity diagram is denoted on the main activity diagram with a rake symbol.

Activity diagrams generally focus simply on behavior, not on the practice. So, they often don't denote who does what, or what class carries out certain parts of the program. This isn't necessarily a problem, but it can be addressed by creating partitions to define who does what in the flow of the activity. There are various kinds, the one shown in the text book with horizontal lines is called swim lanes.

Activity diagrams also display the concept of signals which communicates that the activity receives an event from an outside process. For example, a time signal can be shown by an hourglass type symbol with text specifying the amount of time. After that amount of time, a signal is sent to the connecting action that triggers it.  Certain actions can also send a signal to a process outside the activity, and others can wait to execute until receiving/accepting a signal from an outside process. Sending actions are denoted by pointed rectangular nodes, and accepting actions are denoted by indented, flag looking nodes.

The term token refers to the idea of the activity or process. The initial node creates a token when the activity is begun, and each action takes in that token and executes on it. A fork takes in one token, and outputs two. Conversely, a join takes in two tokens, and once it have both of them, it outputs one token.

The term flow and edge are synonymous; the both describe the connection between two nodes. The simplest and most common type of edge is just a simple arrow. You can name and edge if you'd like, but most of the time it is not needed.

An expansion region is a notation that describes an action that needs to be performed more than once, upon the several items of a collection, after being triggered by a preceding action. This would be how activity diagrams display loops. An expansion region is denoted by a dashed line around the nodes in the loop. An input collection is shown at the beginning of the region, and an output collection is shown at the end of it. The loop finished when all of the items in the input collection are moved to the output collection. Expansion regions contain a keyword which describes the behavior of the actions in the region. Concurrent means the actions are performed in parallel for all of the collection items, and iterative means the actions are performed on each individually, one at a time.

A flow final is a way to denote the end of a particular flow, without ending the activity as a whole. This is a way that items can be filtered out, particularly when used in expansion regions, when the output collection is smaller than the input collection. A flow final is denoted by a circle with an X through it.

A join specification is a way to write a certain rule, a Boolean expression, which upon satisfaction will output the token to continue the flow. This is useful when a condition is desire that is more complex than simply both of the input tokens arrive.
