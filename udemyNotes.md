# Web Dev Udemy Course

---

## Section 1 Notes: Front-End Web Development

### Getting the Most out of the course

- Don't do code along, or "note-take along" either. Watch at least 10 minutes at a time, and then try an replicate what has been coded, or take notes on what you have observed. This helps you acquire understanding rather than rotely copy down notes.
- Remember that struggle is good, and I will get stuck at points in this course. Use the tools that I know are in my toolbox to get a solution.
- Don't skip any of the tutorials, but feel free to speed them up if needed.

### Getting help when stuck

- Rewatch the video up until my code broke and compare.
- Download the instructor's code and compare, don't copy.
- Search StackOverflow
- Ask someone, using a 4 step approach
    1. What I expected
    2. What happened
    3. Screenshot of the code
    4. Screenshot of the debug console.

### Misc Notes

- Any computer that a user engages with is a "client" and the 24/7, big computers are "servers". They "serve" the clients the requested data. A request goes from a client to an ISP (internet service provide) and then to a DNS (domain name server). The DNS then sends back the requested data.
- Websites on browsers are just HTML, CSS, and Js files that are rendered locally using the browser.
- I can edit the HTML, CSS, or Js for a website that I am viewing for my browser, and those changes are local, because the browser page I currently have open is essentially my local copy of the website files.
- From what I have picked up, `index.html` is the standard name given to the homepage of a website. Just a common practice in the field.

---

## Section 2 Notes: Intro to HTML

### Heading elements

- Tags vs Elements: Tags are the specific opening and closing markers `<a>` and `</a>`. And HTML element is the entirety of the object, from the opening tag to the closing, and all of the attributes and content in between.
- Good practices: Don't have more than one `h1` element in an HTML doc. Also, move sequentially from one heading to another. Don't go from `h1` to `h3`.

### Paragraph elements

- Use [Lipsum](https://www.lipsum.com) to get placeholder text. There is also funny spin offs, like [Broipsum](https://www.broipsum.com).

### Void elements/Self closing tags

- Some elements have tags that are self closing, or are "void". This means that no content is placed inside of the tag.
- Two examples are the `<br/>`, break element, and the `<hr/>`, horizontal rule element.
- The break element creates a break in a paragraph, placing the following text on separate line. These should not be used to create separate paragraphs inside of one paragraph element. When new paragraphs are needed, to help screenreader functionality, use a new paragraph element every time.
- The horizontal rule element creates a line horizontally to divide elements in the doc.
- You can validly write void elements like this: `<br/>` or like this: `<br>`. HTML 5 can recognize the void elements and doesn't have to read for the forward slash. Writing the void elements with the forward slash is beneficial, however, for maintaining readability and comprehension of code.

---

## Section 3 Notes: Intermediate HTML

### List elements

- `<ul>` is the tag for unordered lists, which just uses bullet points, while `<ol>` is the tag for ordered lists, which uses numbers.
- The command `Emmet: Wrap with Abbrevation` in the VSC command pallet allows me to place the selected on the _inside_ of an HTML tag. _SUPER_ useful.
- Anytime that you save in VS Code, it automatically re-indents the code to be the most useful.

### Anchor elements

- Attributes always are declared inside the opening HTML tag. Example: `<a href= "mylink12345.com"> This is a link </a>`
- There are attributes that are specific to certain tags, but there are also global attributes, which are accessible by every HTML element. To look at them some more, go [here](https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes)
- Quotations are always used for the URL in the `href` attribute of `<a>` tags, to despecialize the text that is given.
- When dealing with element attributes that have boolean values, simply including them sets them to true, such as with `reversed` for `<ol>` tags. You don't have to explicitly state `reversed = true`. This is only true for attributes where the default value is false.

### Image elements

- [picsum](https://picsum.photos) is essentially a Lorem Ipsum bank for placeholder photos.
- You can make an image the source of a hyperlink, by simply placing the `img` element in between the tags of the anchor element. The href of the anchor element is used as normal to link to the desired place.

---

## Section 4 notes: Multipage Websites

### HTML Boilerplate

- The starting fundamental HTML is referred to as the boilerplate. This is what a standard boilerplate looks like:

```HTML
<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>Home</title>
    </head>
    <body>
        <h1>Home Page</h1>
    </body>
</html>
```

- The `head` element is for declaring important information about that page that will not be visible to the user. For example the `title` element is what displays on the tab in the browser that is rendering the page. The `meta` element is what dictates other important info, such as the character set used. Another important `meta` element is:
`<meta name = "viewport" content="width=device-width, initial-scale=1.0">`
This will render the page at the width of the device, regardless of what it is.

### Hosting a Website with GitHub

- Web Hosting is the process of taking the files that a website is made up of, and placing them on a web server that is connected directly to the Internet. This allows anyone connected to the Internet to access that webpage.
- GitHub repos can be used to host websites, using a feature called "GitHub Pages". When creating the repo, simply choose public instead of private.
- After creating the repo, go to 'Settings' and then to 'Pages' on the left sidebar. Under the 'Build and Deployment' section, make sure that the source is set to 'deploy from a branch'. Then set the Branch to deploy from to 'main' instead of 'None'.
- **Make sure** that your homepage is titled `index.html` otherwise the web hosting wont work.
- This process can take up to 10 minutes, so keep refreshing and checking back until a URL appears, and it works correctly.

---

## Section 5 Notes: Intro to CSS

### What is CSS?

- Stands for Cascading Style Sheet. Style Sheet is a type of language, just like Markup Language is (the ML in HTML). Other types include Sass (Syntactically Awesome Style Sheet), Less (Leaner CSS), and others.
- CSS is needed because handling the styling using HTML elements clutters up the HTML documents a ton. Keeping the HTML focused on content, and designating the CSS entirely for styling keeps things cleaner.

### Adding CSS

There are three ways to add CSS to HTML. Inline, Internal, and External.

- **Inline CSS** is done by assigning the value of the `style` attribute on a certain HTML element. This is a global attribute that all elements have. The value of this attribute is "css-property: value". Here is an example: `<html style = "background: blue"></html>`.
- Inline CSS is useful when adding CSS properties to a single element, or when doing testing to see what a certain CSS property value will look like.
- **Internal CSS** is done by adding a `<style>` element to your HTML document. Within the `<style>` tags you add the CSS code. This method, and External CSS, because they apply to more than on element, must include a 'selector' which designates which HTML elements the CSS code applies to. The syntax of a selector is `HTML element {CSS code}`. Internal CSS is good for when you want to apply CSS to all the elements in just 1 HTML document, but not for multipage websites.
- The `style` element is placed in the `head` element of the HTML document.
- **External CSS** is implemented by making an entirely different file, with the `.css` extension. Common names are styles.css or main.css. This file contains CSS code which follows the same syntax as that of Internal CSS. The file is attached and applied to the HTML documents by including a `link` element in the `head` element of each document it applies to.
- The `link` element is self-closing, and has two important attributes: `rel` meaining relationship, which explains the role of the item being linked, and `href` which gives the location of the linked item. The .css file is then attached by making the file path the value of the `href` attribute, and the `rel` attribute is usually set to "stylesheet" or something similar.
- External CSS is most common in web development, and is best for when working with multipage websites, as it applies the CSS code to entire websites.

### CSS Selectors

- Element Selectors:
    This is the most common type of selector, with the syntax of `element type {property:value;}` This will apply a CSS rule to all of the HTML elements of the designated type.
- Class Selectors:
    The `class` attribute is a global HTML attribute, which can be set to anything. Whatever the `class` attribute is set to is a class that is created. Then, a class selector can be made, which applies the CSS rule to any element, regardless of the type, that is of that class. The syntax is `.className{property: value;}`. The name of the HTML element is not included. The class name as declared in the HTML element's opening tag does not include the period in front of it.
- ID Selectors:
    The `id` attribute is another global HTML attribute, which can also be set to anything. This behaves the same as the `class` attribute, except that there can only be one element with each value of the `id` attribute. Each value of this attribute is unique. So, CSS rules declared in an ID selector will only apply to 1 element in a single HTML document, as opposed to class selectors, which can apply to many elements across many documents. The syntax is `#idName{property : value;}`.
- Attribute Selectors:
  - These are sort of a modification of Element Selectors. They allow you to apply a CSS rule to only elements that posses a certain attribute, or that posses a certain attribute with a certain value. The syntax is `element[attribute]{property: value;}`. The value will have to match exaclty with what it appears in the HTML, inlcuding quotes.
- Universal Selectors:
    Apply a CSS rule to all of the elements in an HTML document. The syntax is `*{property: value;}`

---

## Section 6 Notes: CSS Properties

### Color Properties

- If I am unsure about what a property does, check the MDN Web Docs.
- `background-color` adjusts the color of the whole webpage, while `color` is the text color. If you use `background-color` on a single element, that will just change the background color for the area of that element, not the whole webpage.
- There are lots of "named colors" in CSS, which can be applied by simply typing their name. You can also set a color by typing in a hexcode for an RGB value. Or, many IDEs let you adjust the RGB values and colors yourself using text input or GUIs.
- [Colorhunt](colorhunt.co) is a website made by developers with lots of professionally selected color palettes for websites. All of the colors include their hexcode, which can be copied to apply that color easily to the CSS.

### Font Properties

Methods of measuring font **size**:

- Pixels, denoted `px` is 1/96th of an inch. Example: `font-size: 20px;`
- Points, denoted `pt` is 1/72nd of an inch. This is the same as "point" sized fonts in Word.
- Em, which is a relative size. 1em is 100% of the parent element's font size. 2em would be 200%, and so on.
- Rem is another relative size. It functions the same as em, but is relative to the root element rather than the parent element.
- There are also some named font types that can be applied, such as `small`, `large`, or `xx-large`.
Font **weight**:
Font weight deals with the boldness of the text. There are three main ways to declare font weight in CSS:
- Keywords, such as `normal` or `bold`
- Relative to parent, `lighter` or `bolder`
- Specific value `700` or `400`. The range goes from 100-900.
When using relative weighting, `lighter` just decreases the child element's weight by 100, and `bolder` increases it by 100.

Font **families**
A font family is a way of selecting the typeface or appearance of the font, where the specific preferred font is typed, and then a generic, backup font is given after. An example of this CSS property being applied is:

```HTML
h1{
    font-family: Helvetica, sans-serif;
}
```

This would attempt to apply the typeface "Helvetica" to the h1 elements, and if that is not possible, it would apply the generic "sans-serif typeface.

Text **Align**
This property can have values assigned like `left`, `center`, `right`, or `start` and `end`.

### CSS Inspection

To inspect the CSS on a webpage, it is the same as inspecting the HTML. You can right click something and then hit "Inspect" or "Inspect Element" and that will bring up the developer tools. In the 'Elements' tab, you see the HTML on one side, and the CSS on another side. When you click on an element in the HTML, you can view on the right of it the applied CSS. You can look at it using the 'Styles' tab on the CSS half, which shows all of the CSS rules and where they come from. Some will be crossed out, because they are being overridden by another source. To view just the CSS that is being applied, switch to the 'Computed' tab on the CSS portion.
When using Chrome Developer Tools, there is also a handy tool called 'CSS Overview'. This is accessed by clicking the three dots > clicking 'More Tools' > then clicking 'CSS Overview'. This will automatically generate an overview of the colors and fonts used, giving names and/or hexcodes, and showing the frequency of their usages.

### The CSS Box Model

Five properties make up what is called the CSS Box Model, an important concept in Web Design. The height, width, margin, border, and padding of some content is what makes up an element's "box"

- `margin` is the distance on each side between the edge of the browsing window and the border.
- The `border` is set all the way the content, with its type, color, and thickness declared in the CSS.
- The `padding` is the distance between the border and the content within the border.

Different elements can be grouped together in "boxes" manually, using the HTML `div` element. This will group pieces of content together and apply CSS to them similarly, and is often done when two items go together contextually.

When doing arithmetic to figure out box layouts with CSS, remember that paddings, margins, and borders will almost always apply on both sides of something, so amounts being added will often need to be doubled.

## Section 7 Notes: Intermediate CSS

### The Cascade - Specificity and Inheritance

CSS has a sort of order of operations, or a hierarchy that dictates which rules get applied to the HTML elements when there are conflicts or collisions (to use the hashing term). This is described as the "cascade" of CSS (Cascading Style Sheets). This is a description of the cascade:
Position: The CSS rule that is lower down is what will be visible after execution
    ```
    li{
        color: red;
        color: blue;
    }
    ```
    In this example, the color blue would be visible on the live HTML document for the li elements.
Specificity: The CSS selector with the highest level of specificity is what will be visible and be the overider amongst conflicting rules. This is the order of specificity, from least to greatest:
    - Element selectors
    - Class selectors
    - Attribute selectors
    - ID selectors
Type: This one is similar to specificity. The method used to implement the CSS, or the type of CSS that it is (External, Internal, or Inline) dictates which one is active. This is the hierarchy, from lowest to highest:

- External CSS (lowest)
- Internal CSS
- Inline CSS
Importance: The importance of a CSS rule among conflicting rules is the most important factor. Importance is denoted by using a CSS keyword, which is `!important` in between the property value and the semi-colon of a CSS rule.

### Combining CSS Selectors

There are a few different method for combining CSS selectors, to target specific groups of content in your HTML document.

- Group:
    This will simply apply the following CSS rule to all of the indicated elements, delimited by commas. Here is an example:

    ```CSS
    h1,h2 {
        color: blueviolet;
    }
    ```

- Child:
    This will apply the CSS rule to the indicated element that is a direct child of the indicated parent element. Here is the syntax:

    ```CSS
    parent > child {
        property: value;
    }
    ```

- Descendant:
    This method of combining selectors has the following syntax:

    ```CSS
    ancestor descendant {
        property: value;
    }
    ```

    This will apply the CSS rule to any element that is a descendant of the specified element on the left side, regardless of how many generation deep.
- Chaining:
    Here is the syntax for this method of combining selectors:

    ```CSS
    selectorselector{
        property: value;
    }
    ```

    What this method does is apply the CSS rule where all selectors are true. So, combining an element selector, to only get elements with a certain id would look like this: `li.to-doItems{`. Or combining element, class, and id selectors would look like this: `p#id1.classname{` When chaining, always place the element selector first if one is being chained, because id and class selectors have the special characters to help denote themselves.

### CSS Positioning

The position attribute is a CSS property that is applied to HTML elements to determine their placement on the HTML document, and thus the webpage. There are 4 main types:

- Static:
    This is the default position for all HTML elements. It simply places an element below the proceeding element, in sequential order following the HTML syntax.
- Relative:
    This is positioning relative to _that element's static positioning_. So `p{position: relative; left: 50px; top 50px;}` would place the paragraph element 50 pixels from the left and down from where it would be in static positioning.
- Absolute:
    This positioning places an element relative to the closest positioned ancestor, or at the top left of the web page. This method may seem confusing at first. An element is considered "positioned" as long as the position property is set. Thus, the CSS rule `h1{position: absolute; left: 25px;}` would place all h1 elements either 25 pixels left of the position of their closest ancestor element with the position value set, or 25 pixels to the left of the top left of the web page. So, if the closest ancestor of that h1 tag, with a position set, is 2 generations up in a div tag, the position of the h1 is relative to the position of that div tag.
- Fixed:
    This positioning is one of the simplest. It places the element the specified amount in the top left of the browser window, and stays there no matter where you are on the webpage.
One important attribute to make note of with positioning is the `z-index` attribute. This dictates an element's position on the z-axis, which will determine if it is placed in front of or behind other elements on the page. The default z-index value for all elements is 0.

### Project: CSS Flag of Laos

- One interesting thing that I found was that I found a way to get the desired outcome, but it was significantly different from the provided solution. This is obviously just fine. What I found as interesting was that if I tried to take parts of the CSS from the provided solution, and replace the parts of my own CSS that served the same function, it wouldn't work the same.
I think the point that this may prove is that working with the CSS is very much like a scripted program or a larger scale function, not everything is just plug-and-play, because of interactions with other pieces and dependencies that are established.

## Section 8 Notes: Advanced CSS

### CSS Display Property

The Display property affects how different elements can display on a rendered webpage. There are three values for the display property: `block`, `inline` and `inline-block`. Here is a description of each:

- Block:
    Block elements will have their "box" take up the entire length of the the webpage, and no other other elements can be on the same line as them, regardless of the length of the content. This is the default value for the display property.
- Inline:
    Inline elements will only allow their "box" to take up the amount of space needed for the content of the element. The width and height of inline elements cannot be adjusted (they can be actually, they simply have no effect when rendered, however). Inline elements do get placed on the same line, given there is room enough for them. Thus, 2 `p` elements could be placed on the same line, appearing as if they are two sentences of the same paragraph, if they are inline elements.
- Inline-block:
    This is essentially a hybrid of the two previous display types. Elements will be placed on the same line if there is enough space, but the height at width can also be altered, regardless of the size of the element's content.

### CSS Float Property

This property is applied to certain elements, and dictates where other content is positioned relative to it.
For example, if the float property on an `img` selector is given the value of `left` then the image will be positioned to the left of other content, and the other content, like text for example, will wrap around that image on the right side.

To make an element disregard another element's float, to position it below in a new block as normally would happen, use the `clear` property. This property, if given a value of `left` for example, would cause the selected element to disregard all left floating elements, and render as normal. The same applies to elements with clear set to `right` with right floating elements. To make an element disregard all floats, use the value `both`.
> Side note: In modern web dev, the `float` property is really only utilized with `img` elements to make text wrap around them. In the past, float properties were manipulated to create complex website layouts, but now tools like Flexbox, Grid, and Bootstrap exist to hand the more complex layouts, so using the float property for those are less effective.

### Creating Responsive Webpages

Using CSS, it is possible to create webpages that are responsive to the size of the client device being used. That is, the same website, with the same html files can be rendered differently, depending on if it is rendered on a smartphone, tablet, laptop, or desktop. This can be done in one of 4 main ways:

1. Media Queries
2. CSS Grid
3. CSS Flexbox
4. External Frameworks, like Bootstrap

**Media Queries**
These are written in the CSS file in this way:

``` HTML
@media (max-width: 600px){
    /* The CSS rule written here would then be applied to all devices where the screen is less than or equal to 600 pixels wide */
}
```

The `@media` identifier is followed by what is called the "breakpoint" which is the condition on which the application of the following CSS depends on.

**CSS Grid**
This is a complex and widespanning method, so it will be covered more in-depth later.
The basic idea is that the container of a grid, which is created as a `div` element, can be given the `display` attribute of `grid` rather than block or inline. This allows the number of grid columns and rows to be set using attributes such as `grid-template-columns`, `grid-template-rows`. The elements inside of the `div` element that acts as the container become the contents of the columns and rows, and the properties of those rows and columns can be edited, such as changing the span of `grid-column` or `grid-row`.

**CSS Flexbox**
This method is also complex and widespanning, and will be covered more in-depth later.
This method essentially works one-dimensionally, where the width or the height of the content can be set to fulfill certain ratios, which by nature makes the page responsive,
as the dimension that is controlled by a flexbox is a ratio of the total avaliable dimension, rather than a set number.
This is implemented similarly to CSS Grid, where a parent `div` element will be given the value of `flex` to its `display` CSS attribute. Then, the children elements will have their `flex` attribute given a numerical value. A `flex` value of 1 will give that element the same dimension as all of the other elements, or it will evenly distribute the dimension among all of the elements in the flexbox. A `flex` value of 2, would give that element 2x the dimensional value as the standard amount (however much an element with a `flex` of 1 would have).

**Bootstrap Framework**
This is a framework, because it is external, unlike the previous 3 methods. The Bootstrap Framework is a library of prewritten CSS code, that is implemented by giving elements certain types of classes, such as `card`, `row`, or `container`. This will then apply the corresponding CSS rule when the Bootstrap framework is active. Bootstrap is built off of CSS Flexbox, so the responsiveness works similarly. It uses a 12 div system, so an element is given its ratio of a dimension by declaring how many of those 12 sections the element should use. For example, an element with the class `card-col-6` would use 6 of those divs, or a 50% ratio of the dimension, depending on the screen size.

### Media Queries

The description for how media queries work is given in part above. Essentially breakpoints are defined in the CSS file using different keywords to create overriding rules for certain screen sizes/orientations, or other use cases. For example, `max-width` will apply the corresponding CSS rule to all screens that are less than or equal to the list specified with this keyword. `min-width` works in the opposite direction. There is also the `orientation` keyword, which can apply CSS depending on if a device's screen is in portrait or landscape orientation.

Different keywords can be combined using `and` to target or exclude specific screen sizes and types as well. These are described really well on the MDN Doc for media queries.

### Project: Web Agency Website

Something that I noticed with this project, is that I felt a bit stymied in taking my own approach and being creative with the project. I was very focused on getting the CSS to work, and simply ended up copying the solution code. I tried to make sure I understood what each line did as I included it, but it still wasn't as deep of a learning experience as it would've been had I followed my own idea. I think what caused that hesitancy to participate was a lack of knowledge and experience. On the next project, I am going to try intentionally to do things independently, and get things to work on my own, without looking at or copying the solution code until I am completely finished.

I also was reminded that sometimes the simplest little errors can cause headaches. I could not get my images to resize correctly when on larger than mobile sized screens. After lots of static observation, I found out that it was because when I was declaring the `height` for the images in the CSS, I had typed `200` instead of `200px`. Aside from that, everything was perfectly correct.

## Section 9 Notes: Flexbox

### Display: Flex

As CSS developed, people found complex and roundabout ways to create website layouts using the 3 basic `display` attributes: `block`, `inline`, and `inline-block`, as well as the `float` attribute. Now this practice is discouraged in Web development, as much more sophisticated methods are avaliable for website layout, such as Flexbox, Grid, Bootstrap, and Tailwind. The `float` attribute and the 3 basic display methods should still be used for individual element styling, but not for overall website layout design.

To implement the Flexbox method, simply set the `display` attribute to a value of `flex`. This will create a block for the whole flex container. The `display` can also be set to `inline-flex` which will make the flexbox container span only as much as it needs to.

There are lots of attributes that are used to manipulate the flexbox, which can be found at length on MDN Web Docs for Flexbox. One example is the `gap` attribute, which determines the amount of space between each element in the flexbox.

### Flex Direction

One of the attributes of Flexbox is `flex-direction`. This can be set to 4 different values: `row` (this is the default value), `row-reverse`, `column`, and `column-reverse`. What these different values do is set the direction of the main axis and the cross axis. The main axis is the axis which delineates where the next element would be placed in the flexbox, and the cross axis is the axis perpendicular to that. For example, in the default situation of `flex-direction: row`, the main axis runs left to right, and the cross axis runs down and up. `row-reverse` would make the main axis run right to left, and the cross axis would remain the same. `column` would cause the main axis to run up to down, while the cross axis is now running left and right. This is important because it dictates the order in which the next element would be placed in the flexbox.

Also, certain flexbox attributes affect the elements differently depending on the direction of the main axis. For example, `flex-basis` is a property that determines the width of each element in the flexbox, when the `flex-direction` is set to `row`. When `flex-direction` is `column`, flex basis then affects the height of the elements.

And one practical note about `flex-basis`. This property is adjusted on each of the elements inside the flexbox container, not the container itself.

### Flex Layout

As I noticed in the exercise for the last lesson, something that can be problematic if not understood is whether a Flexbox attribute gets applied to the items in the Flexbox (called the children or flex items), or the Flexbox container (called the parent or simply, the container). In the example of the last exercise, the `flex-basis` attribute is one that is applied to the children, not the parent.

A couple of useful attributes for manipulating the layout of a Flexbox are `order` and `flex-wrap`. `order` is an attribute applied to the children, and the default value of this attribute is 0, meaning that the order of appearance simply follows the order of the HTML for the flex items. When a non-default value is applied to this attribute, the elements appear based on the size of the `order` attribute's value, from smallest to largest.

`flex-wrap` is a parent attribute, and the default value is `nowrap`. This means that any elements that do not have sufficient space on the page will be pushed off of it and will be rendered unviewable. The alternate is setting this attribute to `wrap` which will expand the block, wrapping the flex items to the new row/column once there is not enough space in the initial block. There is also the value `wrap-reverse` which will reverse the order of item wrapping.

>Important Note:
The shorthand way of writing the rule for flex-direction and flex-wrap simultaneously is `flex-flow`. The syntax is the direction first, then the wrap. An example would be: `flex-flow: column nowrap;`.

`justify-content` is another parent attribute, and it dictates the distribution of the flex items across the main axis of the flex container. Some of its potential values include: `flex-start` which is the default value, and distributes the flex items one after another from the very beginning of the flex container. `flex-end` does the same thing, but pushing all of the flex items to the end of the container. `center` will center all of the flex items on the main axis. `space-between` will space out the flex items to stretch across the entire main axis with spacing between each item, with the end items touching the edge of the container. `space-around` works the same as `space-between` but simply pushes the end items off of the container edge a little bit. Lastly, `space-evenly` works the same as `space-around`, but the spaces are adjusted to be equal between each item,

`align-items` is also a parent attribute, and it dictates the distribution of the items across the cross axis. Because the container by default has a height that is more-or-less "inline", meaning that it only takes up the cross-axis space needed for the content. Thus, to use `align-items`, at least when the cross-axis is vertical, the height must be set to something.
> A note about setting heights. One unit that can be used is `vh` which stands for "viewport height". This is given as a percentage of the browser window, with 100vh being the complete height of the browser window.

Major values for `align-items` are identical to `justify-content`: `flex-start`, `flex-end`, `center`,`space-between`,`space-around`, and `space-evenly`.
While `align-items` is a container value, individual flex items can have their alignment manipulated using the child attribute `align-self` which uses the same values as `align-items`.

Lastly, `align-content` behaves the same as `justify-content` but only when `flex-wrap` is set to `wrap` or `wrap-reverse`. This will apply layout rules to flex items that are being wrapped, while `justify-content` and `align-items`do not.

[CSS Tricks](https://css-tricks.com/snippets/css/a-guide-to-flexbox/) is a website with a great guide on how to utilize different flexbox attributes.

### Flex Sizing

In determining the size of flex items, there is an "order of operations" of sorts, that is followed. It goes as follows:

- `min-width`/`max-width` value
- `flex-basis` value
- `width` value
- Content width

These attributes are all child properties.

The default value for `max-width` when looking at the content's width is the length needed to fit all of the content on one line. The default for `min-width` when taking the content width is the width needed for the longest single word, Flexbox doesn't split up words at all.

A note when manually setting `max-width` and `min-width`. When a `max-width` is set, the flex items will grow or shrink, but only up to that value. So if there is a `flex-basis` property with a higher value, it will be ignored. Likewise, if a `min-width` is set, any values lower than that will be disregarded, and when shrinking flex items they will only be shrunk until they are at the min width. If the screen becomes too small, those items will simply be pushed off the browser window.

The properties that allow for growing and shrinking in Flexbox are ones that can actually be toggled in the CSS. `flex-grow` and `flex-shrink` are the property names, and their values are 0 or 1, for off or on, respectively. The default for Flexbox is that `flex-shrink` is turned on, and `flex-grow` is turned off. If shrink is turned off, then items will simply be pushed off of the window once there is not enough room for their applied size. If grow is turned on, then items will be given width beyond their max-width/the applied size, until the entirety of the window is utilized. When a value greater than 1 is given to flex-grow or flex-shrink, it gives that item a greater ratio of the avaliable space when growing or shrinking. So a flex-item with a flex-grow value of 2 would get double the size as an item with a flex-grow value of 1.

The default value of `flex-basis` is `auto` which will assess the amount of content in each flex item, and give a greater flex basis vaule to the items with more content, and less to the ones with less content. Setting `flex-basis` to 0 will disable this, and setting a numerical value as the flex-basis will set that was the basis for all flex-items.

The shorthand for setting the `flex-basis`, `flex-grow`, and `flex-shrink` properties is `flex: 1 1 0;` This would set flex-grow to 1, flex-shrink to 1, and flex-basis to 0. So, syntactically, the first number is the flex-grow value, the second the flex-shrink value, and the third the flex-basis value.

**Project: Flexbox Pricing Tables**
As I worked on this project, I was able to do most of it on my own without looking at the solution, which I am proud of. I did have to review my notes a bit, which is just fine. Even when I did look at the solution, I didn't just copy code over, I simply compared, and see what differences difference values made. 

The 3 things that I was stuck on were: getting the dynamic behavior to work properly (snapping instead of wrapping), getting the row to be in the center of the screen instead of the top, and getting the bullet points to be centered by the content center, not the start of the `li` element.

- The first one I solved by simply not setting the `flex-flow` attribute on the flex-container for the larger screen case. Something about setting it explicitly doesn't allow the media query to override it.
- The second one I solved by being reminded that, to alter the height/vertical alignment of anything in Flexbox, the height attribute must be set on the parent container. So, I set the height of the body to 100vh, and then the `align-items` attribute to `center` on the flex-container, and that did the trick.
- For the third one.

## Section 12: Intro to JavaScript

JavaScript is the language that runs the web. It is what makes websites able to do things, and it is among the top 3 most popular programming languages according to GitHub and Stack Overflow.

JavaScript is run on the 'client-side', meaning the users local computer, as opposed to a language like PHP which is run on the 'server-side', meaning the server that hosts the website. This is why JavaScript is so powerful, because it can interact with the user's computer directly.

One of the first functions I tried out was `alert`. This takes a string as an argument and outputs that string on a pop-up.

Another command is the `prompt()` command, which acts like an `alert`, but can receive input from the user.

Remember, when instatiating variable, the `var` keyword is necessary. That was an error that I ran into while first trying to do things in Javascript, one of those new language adjustments.

One method of the string data type in Js is `.length`, which returns the length of a string as a number.

The `.slice(x,y)` method allows me to access specific portions of a string. Similar to slicing with array indeces, the range passed in is the lower "fence" and the upper fence, which includes the bottom arguement but excludes the upper one. Also just like slicing with array indeces, if I typed `word.slice(4,)` this would select the word starting at the 5th character, up to and including the end. Or, if I typed `word.slice(,4)` that would slice from the beginning, up to, but not including the 5th character.

Two other useful methods are `toUpperCase()` and `toLowerCase` which convert the entirety of the strings that they are called on to upper or lower case.

**JavaScript Arithmetic**
This is the same as most programming languages, the basic arithmetic operators, `+`, `-`, `*`, `/`, and `%` for addition, subtraction, multiplication, division, and modulo, respectively. Both ++ and -- can be used to increment and decrement, as well as the `+=`, `-=`, `*=`, `/=`, and `%=` assignment operators.

Side note: `console.log()` is a method that will log text to the JS console, instead of a pop-up.
Side note: `Math.floor()` is a method to do floor division. It can also be used on a single argument to simply round that number down.
I do like the way that the instructor described three different types of functions: functions that take no parameters and have no output are like vanilla, functions that take parameters are like chocolate, and functions that take parameters and return values are like strawberry. 

`Math.random()` is a method that returns a random number between 0 and 1. There isn't a `randint()` method of any kind, so getting a random number between two arbitrary values can be trickier, but not very tough. You simply multiply the random deciaml by the max range value, then round that number down, and that is your random integer. 

> **Side Note:**
Because Math.random() excluded 1 from the number generation range, the max possible value from this method is one less than the desired max range. This can be resolved by keeping the same equation and multiplying the random number by the max range value plus 1, then rounding down. Or, if the bottom range is exclusive, you can multiple the random number by the max and then simply add one after rounding down.

**Comparison Operators**
These are the same as most programming languages:

- `==` is equal to (equality, not identity)
- `!=` is not equal to (non-equality, but not non-identity)
- `>` is greater than
- `<` is less than
- `>=` is greater than or equal to
- `<=` is less than or equal to
- `===` is equal to and the same type (equality and identity)
- `!==` is not equal to, or not the same type (non-equality and non-identity)

`typeof()` is a handy method that returns the data type of the argument passed in as a string.

**Control Flow**
This is the same as most programming languages, with `if`, `else if`, and `else` statements. The syntax is the same as well, with the curly braces denoting the code block that is executed if the condition is met. The `else if` statement is used to check for multiple conditions, and the `else` statement is used to execute code if none of the previous conditions are met. The `else` and `else if` statements are formatted similarly to PHP.

```JavaScript
if(condition){
    //code block
}else if(condition){
    //code block
}else{
    //code block
}
```

**Logical Operators**

- && is the logical AND operator
- || is the logical OR operator
- ! is the logical NOT operator

**Arrays**
Arrays are instantiated simply by typing `var myArray = [1,2,3,4,5]`. The data type, length, or fact that it is an array doesn't need to be specified, like in other languages. You just type the var keyword, and then include the square brackets. 
Useful array methods include the `.length` attribute (not a method!), which returns the length as an int, and the `.includes()` which returns a boolean value if the argument passed in is in the array. 
To add an item onto the array, use the `.push()` method, and to remove the last item, use the `.pop()` method. To remove the first item, use the `.shift()` method, and to add an item to the beginning, use the `.unshift()` method. 

**Loops**
The syntax for loops in JavaScript is the same as most programming languages. The `for` loop syntax is the same as non-Python languages, having initialization, then condition check (both of which are followed by semicolons) and then the iteration.
While loops are used more when a certain state or circumstance is being focused on, and for loops for when a certain number of iterations is needed.

## Section 16: DOM Manipulation

**Adding Javascript to HTML**
Similar to CSS, there are 3 ways to add JavaScript to an HTML document: inline, internal, and external.

- Inline is done by assigning values to certain HTML attributes that can take Javascript code as a value, such as the `onload` attribute of the `body` tag, which exectues its value's code on loading.
- Internal Javascript is added using the `script` element, where the JS code is written between the tags. The `type` attribute is not necessary to set, as the default value is `text/javascript`.
- External Javascript is added by using a `script` element as well, but instead the `src` attribute is set to the path of the external JS file.

As far as the placement of the CSS and the Js in the HTML document, the CSS should be placed in the `head` element, so that the styling will render first, and the elements won't render without styling, and then have styling applied later. This looks clunky and unprofessional, so always put the link to the CSS file in the `head` element.

Javascript is the opposite, in that the link to the Javascript should be placed at the last line before the closing `</body>` tag. This will ensure that the HTML renders before the Js tries to execute. If the Javascript is placed at the top of the document, it will be executed before the HTML is rendered, and thus will be trying to interact with HTML elements that don't exist yet.

**The Document Object Model (DOM)**
The Document Object Model is a way of visualizing and interacting with the HTML document as a tree structure. The root of the tree is the `document` object, and the branches are the elements of the HTML document. The `document` object has many methods and properties that can be used to interact with the HTML document. For example, if a website has an html element with a `head` element and a `body` element, the document object would be the root, and then its only child would be the `html` element, and then the `head` and `body` elements would be children of the `html` element.

This underlies the way that elements are interacted with using Js. `document` is an object that can be referenced in the Js code, and then the methods and properties of the `document` object can be used to interact with the HTML elements. For example, `document.firstElementChild` would return the first child of the `document` object, which would be the `html` element. Then, `document.firstElementChild.firstElementChild` would return the `head` element, and so on.

Remember a good way of describing objects is by thinking of them in terms of nouns, adjectives, and verbs. The objects are the nouns, the properties are the adjectives, and the methods are the verbs. Each html element is an object, and each object has properties and methods that can be used to interact with it. Such as the `innerHTML` property, which can be used to change the inner HTML of an element, or the `style` property, which can be used to change the style of an element. Examples of methods are `click()`, `setAttribute()` and `appendChild()`.

**Manipulating Elements**
Element selection methods:

- `document.getElementsbyTagName()` - this returns an array of _all_ of the elements with the tag name passed in as an argument.
- `document.getElementsByClassName()` - this returns an array of the elements with the class name passed in as an argument.
- `document.getElementById()` - this returns the element with the id passed in as an argument (remember that each id is unique, so this can only ever return one element).
- `document.querySelector()` - this returns the _first_ element that matches the CSS selector (id, class, or element selector, and combination selectors) passed in as an argument.
- `document.querySelectorAll()` - Functions the same as `querySelector()`, but returns an array of all of the matches instead of just the first one.

>Sidenote: The `firstChild` attribute is not the same as the `firstElementChild` attribute. I learned that as I was tinkering around in this lesson, so to get a child element, make sure to use `firstChildElement` or `lastChildElement`.

Something to keep in mind when manipulating style using Js, is that the CSS attribute names will appear slightly differently. Instead of being all lowercase with no dashes, they will camel cased, with no dashes in the Javascript code.

**Maintaining Separation of Concerns**
One key to maintaining readability and easy debugging of my web code is keeping the concerns of content, style, and behavior separated and compartmentalized into the HTML, CSS, and Javascript code, respectively. 
One of the keys to doing this, when the style or look needs to change dynamically, is by manipulating the `classList` attribute that applies to every Js object/HTML element. The `classList` is an attribute whose value is an array of all of the classes that are applied to the element. The `classList` attribute has methods that can be used to manipulate the classes of the element, such as `add()`, `remove()`, and `toggle()`. The `toggle()` method will add the class if it is not present, and remove it if it is present.

**Manipulating Text Content**
The `textContent` attribute is slightly different from the `innerHTML` attribute. The `textContent` attribute will return the text content of the element, without any of the HTML tags, and thus be used to manipulate that text. `innerHTML` will return the text content _and_ any HTML tags that are inside of the element.

**Manipulating Attributes**
Each HTML element/Js document object, has the `attributes` property, which has the value of a dictionary with all of the attributes and their values (the attributes are the keys and the values are the paired values). To manipulate these, use the `getAttribute()` method, while passing in the name of the attribute to get the value for, and the `setAttribute()` method, while passing in 2 arguments: the name of the attribute to set, and the value to set it to.
