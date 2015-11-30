---
layout: docs
title: Coding style
group: goodwords
---

## Coding style

### Basis

The strong basis of the current coding style is [SMACSS: Scalable and Modular Architecture for CSS](https://smacss.com/).

Some ideas are borrowed from [BEM](https://css-tricks.com/bem-101/)

Also goot to know: 

* [Code Guide by @mdo](http://codeguide.co) by Mark Otto, maintainer of Bootstrap
* [About HTML semantics and front-end architecture](http://nicolasgallagher.com/about-html-semantics-front-end-architecture/) by Nicolas Gallagher


### Naming convention

Follow SMACSS naming convention. 

Create child tags classes with a dash:

```
.modal
.modal-body
.modal-content
```

Create modifiers classes with double dash:

```
.survey-answer
.survey-answer--horizontal
```

Try to give component names consisting of one single word. If you ca not think of a name consissting of one world: invent a poetic name like `meadow` or `backdrop`. It looks nicer and simplier than `sidebarColumnLayout`


### Wrappers

Use `-wrapper` for the very parent domnode. Use `-scope` for for the very child domnode. 

```
.componen-wrapper
.component
.component-scope
```
