# ES6 Templates - Separating The Data From the Presentation

>There's not a lot of art forms where you can control your presentation and your ideas. 

>~Gerard Way

You can admire the even simplest of c programs for separating the data from the presentation, or template that the variables are put into. Separating things that can change from things that should never change is a cornerstone of good coding.

<pre class=code_sample><code class="language-javascript">char greeting[] = "Good Morning";
char name[] = "Johnny";              

printf("Computer says: %s, how are you %s?", greeting, name);

//outputs Good Morning, how are you Johnny?</code></pre>

There's tons of libraries that enable this pattern in Javascript, such as Mustache, Handlebars, and Underscore, as well as frameworks like Angular and React of which easy templating is a major feature.

In ES6, core Javascript now has a way to achieve the same thing. While many libraries use the double curly bracket syntax, ES6 uses backticks (`) surrounding a string and ${} to embed variables into them.

<pre class=code_sample><code class="language-javascript">let greeting = "Good Evening";
let name = "Governor";

console.log(`${greeting}, how are you ${name}?`);

//outputs Good Evening, how are you Governor?</code></pre>

You can include new lines within the string, and you can also use logic within the curly braces.

<pre class=code_sample><code class="language-javascript">let numbers = [5,2,7,3,1,6]

console.log(`the highest number is ${Math.max(...numbers)}`)</code></pre>

There are special ways to capture and deconstruct the presentation elements in the template from the variable elements. It's by using a "tag function" that these pieces can be captured in arrays.

<pre class=code_sample><code class="language-javascript">let myTag = (template, ...values) => {
  let stringPrint = string => console.log(string);
  console.log("my template is :\n");
  template.forEach(stringPrint);
  console.log("my values are :\n")
  values.forEach(stringPrint);
}

let greeting = "Good Evening";
let name = "Governor";

myTag `Well ${greeting}, it's nice to see you ${name}!`;

/*
outputs
my template is :
Well 
, it's nice to see you 
!
my values are :
Good Evening
Governor
*/</code></pre>

It's interesting to see a function call without parenthesis, an arrow, or anything, but what this gives us is another place to process or modify the template. For example, if the template needed to be encoded, encrypted, or have certain characters removed, the tag function would be the right place to do that. It's also an ideal place to add all of the markup a repeating templated element would require.

<div class="list">to be continued</div>