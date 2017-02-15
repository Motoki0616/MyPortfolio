# My Portfolio
A personal portflio built with Wordpress, GSAP, smoothState.js, fullpage.js.  
see http://motokinaito.com for more details.

* HTML
* CSS
* SASS
* Wordpress
* [GSAP](https://greensock.com/gsap) - Javascript Animation
* [smoothState.js](https://github.com/miguel-perez/smoothState.js) - jQuery plugin that progressively enhances pages to behave more like a single-page application.
* [fullpage.js](https://github.com/alvarotrigo/fullPage.js) - Simple plugin for creating fullscreen scrolling websites.
* Gulp

## My web design process
### 1. Planning
**Setting a Goal** - My goal is to tell What I can do and Who I am through this portfolio site.　　
**Color** - As a main color, I used dark blue that symbolizes trust because It's important for me to build trust with clients and coworkers. As a key color, I used dark yellow that is complementary color of blue.

### 2. Design
**Wireframe** - I usually make a wireframe using a pen and paper because There's nothing quicker than grabbing a pen and paper.
**Mock-up** - Photoshop

### 3. Development
**Coding** - A text editor I'm using is Atom.
**Why GSAP** - GSAP is literally up to 20x faster than jQuery. It's even faster than CSS3 animations and transitions in many cases. I can avoid browser bugs.
**Why smoothState.js** - Changing from one page to another will often cause this interruption by showing a white flash of no content.Transitions between pages can enhance the experience by retaining the user’s context, maintaining their attention, and providing visual continuity so I used smoothState.js and GSAP for page transtion animation.

## Code architecture for CSS
* BEM (http://getbem.com/naming)
* SMACSS (https://smacss.com)

### BEM
The Block, Element, Modifier methodology (commonly referred to as BEM) is a popular naming convention for classes in HTML and CSS.
* When we want to make a new style of a component, we can easily see which modifiers and children already exist.
* When we are reading the markup instead of CSS, we can quickly get an idea of which element depends on another.
* Designers and developers can consistently name components for easier communication between team members.

### SMACSS
SMACSS stands for Scalable and Modular Architecture for CSS.
* Ease of demonstration and handover
* Ease of reading
* Scalable for all projects
