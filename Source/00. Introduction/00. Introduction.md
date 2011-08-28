Getting Started: What is MooTools?
==================================

MooTools is a lightweight abstraction layer between the browser and the code you write (this is really the definition of nearly every js framework out there - Prototype, Dojo, jQuery, YUI, etc). It offers more functionality and richer tools for writing javascript, taking what has historically been painful and fraught with buggy environments (the browsers) and presenting you with a much more reliable environment. By adding it to your environment (i.e. including the script in your page) you are able to write succinct, readable, and reusable code more effectively and efficiently than without it.

MooTools at its core re-creates pseudo-classical inheritance with Classes that allow for extensible and reusable behaviors. Additionally, it provides its own set of classes to allow you to quickly and easily describe effects such as resizing, fading, moving, dragging, and more (ajax, json, etc). The code to make something transition from one state to another (fading, moving, resizing, etc.) is very succinct and MooTools does the rest. 

MooTools also provides extensive DOM tools to allow you to select elements from the document, create new elements, and alter them. There are also shortcut helper functions (like $, $type, $chk, $random, etc.) that help you with common tasks.

With MooTools in your environment, you still write Javascript when it comes to basic syntax, but to a great extent you are NOT writing Javascript anymore; you're writing MooTools. The benefit here is that not only is the framework doing a lot of the work (and you don't run into nearly as many cross-browser issues), but if there is a bug or a change because of a new browser release, the framework can be altered without requiring you to rewrite all your code.

These levels of abstraction enable you to write far richer clientside applications.

Getting Started
---------------

Sounds great! So what do I have to do to get started? Well, for starters, you need to know javascript. MooTools isn't something you can just add to your pages and suddenly they come alive. MooTools is a javascript library and it gives you access to all these cool functions, but you still have to tell it what to do.