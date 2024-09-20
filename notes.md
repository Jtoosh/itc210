# IT & C 210: Web Systems and Security

## 1. Introduction

**Command Line Interface**
Some basic CLI commands that are new to me:

- `ifconfig` : show the configurations for the current IP address
- `passwd` : change the password for the current user
- `apt-get` : package manager for Ubuntu
- `chmod` : change the permissions for a file or directory
- `chown` : change the owner of a file or directory
- `ssh` : secure shell to connect to a remote server (remote into another machine securely)
- `scp` : secure copy to copy files from one machine to another

- A note about the `chmod` command:
mode: Specifies the permissions to set. You can define these either in numeric form or symbolic form:
Numeric (octal) mode: Permissions are represented by a three-digit number (e.g., 755, 644).
- 4 = Read (r)
- 2 = Write (w)
- 1 = Execute (x)

For git commands, one way to connect a local repository to a remote repository is to use the `git remote add origin <url>` command. This will add a remote repository to the local repository, and then you can use the `git push` command to push the local repository to the remote repository. Sometimes the command `git push origin main` is needed. Also try using the `-u` flag with the `git push` command to set the upstream branch.
**Lecture 9/4 Introduction**
This is a gateway class, not a weed-out class. Prof. Redd doesn't like or believe in weed-out courses which is good.

IT requires self-learning. All of the programming languages used in this class, with exception to SQL, Professor Redd had to learn after he graduated, outside of a formal programming class. I will likely have to do the same in my career.

Prof Redd actually expects me to jump on Google and find things out in the moment during class. Give myself a green light to go and do that.

Expectations for the readings are that they are not required, they are simply to supplement what I learn in class and give me extra help for homework and labs if I need it.

> As I looked at the syllabus, I had a moment of anxiety about the pace of the class, if it is too fast, and about if I will really be able to learn all that I don't know. I remembered and recognized that not knowing much of the subject matter on day 1 is exactly the point! If I knew it all on day 1, that would make this whole following semester a waste of my time. The first day/week *should* be full of not knowing the subjects, but getting glimpses and ideas of what I will learn and what those things mean. Then I simply take those and learn with diligent, enthusiam, curiousity, and meekness/humility.

**Rhythm of the Class:**

- Monday:
    Lecture, Demo, live Q&A
    Lab period
- Wednesday:
    Lecture
    Lab period, TA Kickoff the next lab
    Lab pass-off due for the previous lab
- Friday:
    Lecture
    In-class quiz (some weeks)
    Homework or Lab write-up due (alternating weeks)

Keys to success: ***Integrity and Persistence***

### Some HTML Stuff

HTML is a declarative language, which means that information is simply given, and then something else (in this case a browser) interprets and renders the information that is "declared" in the HTML file.

A useful website is the [Markup Validation Service](https://validator.w3.org/), which will check your HTML code for errors and give you feedback on how to fix them, based on widely accepted web standards.

The `DOCTYPE` usually is where the HTML version is declared. Typing `html` simply defaults the DOCTYPE to the latest version of HTML. This is important because the version of HTML affects some of the default structures.

> There is no good reason to use a previous HTML version, according to Prof. Redd.

A good way to think about `head` and `body` elements, is that the `head` element contains metadata, and the `body` contains data.

> Git submodules are a way to include a repository within another repository.

## Lecture Notes

### Lecture 9/6: HTML and CSS

HTML
: Runtime Model: interpreted (parsed into Document Object Model)
Object oriented: each HTML element becomes an object in the DOM

HTML elements can be roughly grouped into 4 groups:

1. Metadata: includes elements like `title`, `meta`, `link`, `style`, and `script`. These all appear in the `head` element.
2. Functional and Structural Markup: Dictatces the function and structure of the document. Includes `html`, `head`, `body`, `header`, `footer`, `div`, `span` and others
3. Semantic Markup: Includes elements like `h1` to `h6`, `p`, `code` and others.
4. Visual markup: `bold`, `italic`, `u`, `em`,`strong`, `</br>` and others. These are generally not used, because CSS is used to style the document instead.

Some terminology:
An HTML element is all of the tags and content between the opening and closing tags. The attributes are extra information stated in the opening tag of an element.

A CSS styling statement is called a *rule*. A rule has a *selector*, which focuses in on a *property* and then gives it a *value*.

Super good website for CSS tutorials: [W3Schools CSS Tutorial](https://www.w3schools.com/css/default.asp)

The `transition` property in CSS is used to change the property of an element gradually. It is a shorthand property for the four transition properties: `transition-property`, `transition-duration`, `transition-timing-function`, and `transition-delay`.
An example of this property being used in a CSS rule is:

```css
div {
  width: 100px;
  height: 100px;
  background: red;
  transition: width 2s;
}

div:hover {
  width: 300px;
}
```

What this does is make the width of the `div` element change from 100px to 300px over a 2 second period when the mouse hovers over the `div` element. The syntax for the transition property is `transition: property duration timing-function delay;`.

### Lecture 9/8: Git, Markdown, WSL and Docker

Git is a VCS (Version Control System). It is like the Google Drive of programming (according to Reagan lol). It tracks all of the changes made to tracked files, saves you from mistakes and hardware/software failures, allows with collaborations, and allows you to go back to previous versions of your code.

Some lingo:

- Remote: a shared copy of a repo on a managed service like GitHub or GitLab
- Push: copying commits from a local to a remote
- Pull: retrieve *and* merge commits from a remote
- Sync: pull and then push
- Branch: commits in the same repo, but not on or affecting the main branch
- Fork: A copy of the entire repo, on a remote
- Pull request: a request for a repo manager to merge in commits from a branch or a fork.

Git Remote Hosts:

- GitHub (most popular)
- Atlassian Bitbucket (also quite popular)
- SourceForge
- GitLab

**Docker:**

Containers
: Like a lightweight virtual machine in which libraries and aapplications can be installed. This isolates the application from the host machine, to prevent conflicts. Containers are also less resource-intensive than VMs.

Unlike a VM, a container can share resources with the host machine, like the RAM, CPU, and storage.
Docker is the most popular container host.

- Docker-compose.yml files load one or more containers and connect them using virtural networks or shared file mappings.
- DOCKERFILE is a set of instructions to create a new container, usually by editing an existing container.

### Lecture 9.11.24: CSS

Reminder of CSS selectors: [Basic Selectors](./udemyNotes.md#css-selectors) and [Combining Selectors](./udemyNotes.md#combining-css-selectors)

Reminder of CSS units: [CSS Units](www.w3schools.com/cssref/css_units.asp)

To set variables in CSS, use the `--` prefix. For example:

```css
body{
  --main-bg-color: #ff0000;
  background-color: var(--main-bg-color);
}
```

Remember, the first line in that CSS rule doesn't actually do anything, because it is not in 'property: value' format. It is simply setting a variable. The second line is what actually uses the variable and sets its value to a property.

Usually I'll want to set variables in the `body` element, because that will make their scope the entirety of the visible content. The scope of CSS varibles is the element in which they are set, and all of its children.

I already know about `block` and `inline` display types, but I learned that there are certain html elements that have default display types. Block elements include `div`, `p`, and `table`. Inline elements include `span`, `a`, `em`, and `img`.

Reminders on margin, border, and padding:

- Margin is the space from the border of an element to the border of the next element, or the edge of the screen.
- Border is the line that surrounds the element.
- Padding is the space between the border of an element and the content of the element.

>Something interesting that I noticed as I worked on hw2 was the annoying dependency that was created between element positions when I used absolute positioning. Anytime I wanted to slightly edit an element, I would have to edit the position of several others. Something I'll need to look out for in the future is avoiding that, and knowing how to manage it. I think a better understanding of how the CSS positioning properties work will help me with that.

To get a decent walkthrough on getting a 5-box layout using different CSS methods, [click here](https://byu-itc-210.github.io/walkthrough/FiveBoxCss)

### Lecture 9.13.24: Javascipt Intro

**`var`, `let`, and `const`**

| **Keyword** | **Scope**       | **Hoisting** | **Redeclarable** | **Reassignable** |
|-------------|-----------------|--------------|------------------|------------------|
| `var`       | Function scope  | Yes          | Yes              | Yes              |
| `let`       | Block scope     | No           | No               | Yes              |
| `const`     | Block scope     | No           | No               | No               |

Just like CSS, Javascript can be place inline using certain Javascript attributes (like `onmouseover`), internally using a `script` element, or externally by having a `link` element to a `.js` file.

Hoisting
: The process of moving variable and function declarations to the top of their containing scope during the compilation phase. *Initialization*, or initial assignment, is not hoisted. So, a variable can be accessed without throwing a breaking error, but the value will be `undefined`.

Only variables can be declared or instantiated more than once. Functions can only be declared once, but can be reassigned.

Using `use strict` at the top of a script will make the script run in strict mode, which will not allow variables to be declared without the `var`, `let`, or `const` keywords.

`let` and `const` don't get hoisted, so they can't be accessed before they are declared. This is a good thing, because it prevents bugs.

According to Prof. Redd, functions are just code assigned to variables.

### Lecture 9.16.24: DOM and DOM Events

W3C
: World Wide Web Consortium. The main international standards organization for the World Wide Web.

Any time `innerHTML` is used, it is a security risk, so be aware of that. Someone could inject malicious code into the `innerHTML` property of an element.

Be careful of `getElementsbyName` and `getElementsbyTagName`. The naming can be deceiving, as `getElementsbyName` returns based on the `name` attribute, and `getElementsbyTagName` returns based on the name of the actual HTML element.

Anatomy of Event Handling:

```javascript
<button onclick= "PlayMusic()">
```

- `button` is the DOM element, or the HTML element that the event is attached to.
- `onclick` is the event that is being listened for, or the thing that triggers the code to execute.
- `PlayMusic()` is the code that is executed when the event is triggered.

There are lots of events that can be listened for, like `click`, `mouseover`, `mouseout`, `keydown`, `keyup`, `keypress`, `load`, `resize`, `scroll`, `select`, `submit`, `change`, `focus`, `blur`, and many others.

An event listener is a function that performs an action based on a specific event. It waits for an event to occur, and then executes the code that is associated with that event. This code example above is an example of an event listener.

The method `addEventListener()` is used to attach an event handler to an element. The other way to attach an event handler is to use the `on` attribute in the HTML element. So, the actual event name is `click`, and 'onclick' is an attribute that is used to attach an event handler to an element inline.

`document.createElement()` is a method that creates an HTML element. Created elements are not displayed until they are added to the DOM tree by using the `appendChild()` method.

`window` is the global object in a browser, and it represents the browser window. It can be accessed and manipulated in the DOM.

>Random Markdown note: when making internal links, use # and then the name of the heading, in all lowercase and with spaces replaced by hyphens. For example, to link to the heading "DOM and DOM Events", use `#dom-and-dom-events`. Only one # is needed, regardless of the heading level.

### Lecture 9.18.24: Javascript Object Notation (JSON)

JSON
: JavaScript Object Notation. A "syntax for storing and exchanging text information". Similar to XML, but faster, easier to parse, and like XML is language and platform independent.

JSON info from language card:

- Property names are case sensitive and dynamically typed
- It is a declarative language since it is just data representation, runtime model is interpreted
- For sytanx, each 'object' is represented by braces `{}` and arrays are represented by brackets `[]`. The property name and value must be in double quotes, and a colon always separates the property from the value, and a comma separate a pair from another pair: `{ "Name": "John", "Name": "Simon: }`.
- Pure JSON doesn't allow comments, but lots of JSON parsers allow JS comments.
- JSON is object oriented in that it defines objects and arrays to be manipulated by another programming language.
- JSON is a subset of JS and can be embedded directly into JS code. It is likely the most popular data representation language, right up there with CSV.

- JavaScript has a JSON object that has its own methods. A JavaScript object can be converted to JSON using the `JSON.stringify()` method, and a JSON object can be converted to a JavaScript object using the `JSON.parse()` method.

- When JSON is converted to a JavaScript object, because JSON uses objects and properties, the JavaScript object functions just like any other programming class/object, and the properties can be accessed using dot notation.

- The `preventDefault()` method is used to prevent the default action of an event from happening. For example, if a form is submitted, the default is to send the data to the server and refresh, but sometimes that is not desired.

- The `.target` property of an event object is a reference to the object that dispatched or triggered the event.

- The `Object` object is a global object that is used to create objects. It has a number of built-in methods that are used to manipulate objects. For example, the `.fromEntries()` method is used to create an object from an array of key-value pairs. When passed in a `FormData` it will return an object with a property for each of the entries, with the value being the value of the entry.

localStorage
: String data that can be stored on a webpage between page refreshes and browser sessions. It is stored in the browser, and can be accessed using the `localStorage` object. Each distinct URL has its own local storage, and the data is stored as key-value pairs.

sessionStorage
: String data similar to localStorage, with the exception that it is cleared when the browser is closed. Different tabs have different sessionStorages, even if they are on the same URL. Similar to localStorage, it is accessed using the `sessionStorage` object.

The storage for a website can be viewed in the browser's developer tools, under the `Application` tab.

### Lecture 9.20.24: Networking

Local Area Network (LAN)
: A set of computers connected by some medium (wire, radio, hub, router, etc.). Each device on the LAN can access any other device on the LAN, and can broadcast to all other devices on the LAN.

An internet
: A set of LANs connected by routers. Routers bridge between each LAN, deciding where to send certain packets, and which packets don't move.

The Internet
: the internet that connects most of the world.

Tier 1 Network/ISP
: The top level of Internet Protocol (IP) networks, which can reach each other without paying for transit. They are the backbone of the internet. Examples include AT&T, Verizon, and Sprint in the USA, and others like NTT in Japan. A full list can be found [here](https://en.wikipedia.org/wiki/Tier_1_network).

MA: Multiple Access
: A communication protocol that allows multiple devices to share a single communication line or channel. Capacity is limited because too many packets being sent at once can cause collisions.

CSMA: Carrier Sense Multiple Access
: A protocol that listens to the channel before transmitting data. If the channel is busy, the device waits for a random amount of time before trying again. This one change increases the capacity of the channel significantly from simple MA

CSMA/CD: Carrier Sense Multiple Access with Collision Detection
: Behaves the same as CSMA, listening before transmitting, but also listens while transmitting. If what is heard during transmission is different from what is sent, a collision has occurred. The device then stops transmitting and waits a random amount of time before trying again.

CSMA/CD + Switches: Contemporary Local Area Networks (LAN)
: Get definition later

Other MA Protocols:

- FDMA: Frequency Division Multiple Access
  Always a part of wireless/broadband systems
- TDMA: Time Division Multiple Access
  Used in 2G cell phone systems
- CDMA: Code Division Multiple Access
  Used in 3G cell phone systems
- OFDMA: Orthogonal Frequency Division Multiple Access
  Used in 4G, 5G cell phone systems and WiFi 6.

OSI model: Open Systems Interconnection model
: A conceptual framework that standardizes the functions of a telecommunication or computing system into seven abstraction layers. Each layer serves the layer above it and is served by the layer below it. The layers are: Physical, Data Link, Network, Transport, Session, Presentation, and Application. 

Turns out that OSI is all theory and not practiced. Only TCP/IP is used in practice.

TCP/IP model: Transmission Control Protocol/Internet Protocol model
: A model that is used to describe the functions of a networking system. It is a five-layer model that includes the Application, Transport, Internetwork(IP), Link(Network accesss), and Physical layers. The TCP/IP model is used to describe the functions of the internet.

Layer 4 and up is mostly software. Layer 3 is where routing happenes. Networks, hubs, switches, and access points are all layer 2 devices. Layer 1 is the physical layer, and is the actual hardware that is used to transmit data, like cables, fiber, and radio waves.

Hub vs Switch:

- Hub: Broadcasts all packets to all devices on the network. 
- Switch: Only sends packets to the device that the packet is intended for.
- Switches are more efficient than hubs, because they don't broadcast all packets to all devices.
- Switches are more complicated than hubs, and they need to know the MAC address of the devices on the network to send packets to the correct device.
- Max capacity of a hub is the capacity of the network, because it broadcasts all packets to all devices. The max capacity of a switch is the capacity of the network times the number of ports on the switch times 2.

Switch vs Router:

- Switches are used to connect devices on the same network, and routers are used to connect devices on different networks.
- Switches are a layer 2 device, and routers are a layer 3 device.
- Switches use MAC addresses to send packets to the correct device, and routers use IP addresses to send packets to the correct network.

Layer 3 Network:

- Also known as Internet Protocol (IP)
- Data is sent in packets, thus a packet-switched network
- Packets may take different routes to the destination, and may even arrive out of order

Layer 4 Transport:

UDP: Universal Datagram Protocol vs TCP: Terminal Control Protocol

- Both rely on IP
- TCP is reliable (retries as needed), and UDP is not (best-effort)
- TCP is connection-oriented, and UDP is message-oriented
- Ordered delivery is guaranteed with TCP, but UDP is unordered delivery
- TCP has flow control, but UDP does not
- TCP includes a port number, UDP just adds a port number to the Ip address


In a packet-switched network, each router needs to decide which router to send the packet to next. This is done by looking at the destination IP address of the packet, and then looking at the routing table to decide which router to send the packet to next.

IPv4 Addresses
: IP addresses with 4 binary bytes, or 32 bits. Each byte is separated by a period, and each byte can have a value between 0 and 255. There are 2^32 possible IPv4 addresses, but many are reserved for special purposes.

IPv6 Addresses
: IP addresses with 8 hexadecimal bytes, or 128 bits. Each byte is separated by a colon, and each byte can have a value between 0 and FFFF. There are 2^128 possible IPv6 addresses, which is a lot more than IPv4.

Network Ports
: A 16 bit, 2 byte number that is used to identify a specific process or network service. Used by TCP and UDP, in combination with an IP address, to identify a specific transfer process on a specific device.

Some CLI commands for networks:

- `ifconfig` : show the configurations for the current IP address
- `ping <domain name or IP address>` : send a packet to the passed domain or IP address to see if the device is reachable, and in how long
- `traceroute <domain name or IP address>` : show the route that packets take to get to the passed domain or IP address, and how long each hop takes
- `netstat` : show the network connections, routing tables, interface statistics, masquerade connections, and multicast memberships

