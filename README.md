# css-template
Some CSS classes to help start projects

## These classes are free to use if you would like. I have dirived a few ideas from other CSS Frameworks I like, such as Tailwind. These have been very useful to me and I absolutely love working with the Grid class. 

### Grid
This can be swapped out with Grid--Flex, and it will work exactly the same. The only difference is that it will be using Flexbox instead of Css Grids. 

#### To use:
You need the parent element to have a class of Grid. If you want the grid to have spacing between (set in the _variables.scss file `grid-gutter`) add `is-spaced` to the class. You may also tell it how many columns you want in the grid to begin with. Just add `has-4-columns` for 4 columns. 

The interior is `Column` classes. Here you can tell the column how wide you want it to be. `Column is-6-wide` Based on a twelve column grid, that would be half the container. You can also use breakpoints to have a more flexable use of the column. For instance `Column is-12-wide md:is-6-wide lg:is-4-wide`

I will be making a small webpage (this is actually in the views of this. If you want to quickly check it out, just clone it. No DB required) to help show the different classes. 

Please let me know what you think, or make a pull request on anything you would like to add!  :)
