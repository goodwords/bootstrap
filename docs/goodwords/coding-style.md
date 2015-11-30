---
layout: docs
title: Coding style
group: goodwords
---

## Coding style

The strong basis of the current coding style is [SMACSS: Scalable and Modular Architecture for CSS](https://smacss.com/). 

Since the Styleguide is build atop Bootstrap, the borrowed parts of CSS follow [Code Guide by @mdo](http://codeguide.co) from Mark Otto, a creator of Bootstrap.

Also goot to know: 

* [About HTML semantics and front-end architecture](http://nicolasgallagher.com/about-html-semantics-front-end-architecture/) by Nicolas Gallagher
* Some ideas are borrowed from [BEM: Block, Element, Modifier](https://css-tricks.com/bem-101/) methodology.


### Naming convention

Follow SMACSS naming convention as the basis.

Create child tags classes with a dash:

{% highlight css %}
.modal {}
.modal-body {}
.modal-content {}
{% endhighlight %}

Create modifiers classes with double dash:

{% highlight css %}
.survey-answer {}
.survey-answer--horizontal {}
{% endhighlight %}

Try to give component names consisting of one single word. If you ca not think of a name consissting of one world: invent a poetic name like `meadow` or `backdrop`. It looks nicer and simplier than `sidebarColumnLayout`


### Naming convention for wrapper classes

Use `-wrapper` for the very parent DOMnode. Use `-scope` for for the very child DOMnode. 

{% highlight css %}
.componen-wrapper {}
.component {}
.component-scope {}
{% endhighlight %}
