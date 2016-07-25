# ES6 Rest And Spread - Packing and Unpacking Simplified

A common need is to create functions that are intended to work with many arguments, single arguments, or no arguments equally well. All programming languages have ways of addressing this need, for example, in Java, we might just create 3 different versions of a method with the same name, each accepting a different number of arguments. For more than one argument, we would probably want to expect an array and iterate over the elements.

With Javascript, addressing these scenarios is simplified. The arguments object has been part of the language since version 1. You don't need to worry about packing additional elements into an array to accept a variable number of arguments.

<pre class=code_sample><code class="language-javascript">function variableArgs() {
  result = 0;
  for (var i = 0; i < arguments.length; i++) {
    result += arguments[i];
  }
  return result;
}

console.log(variableArgs()); // outputs 0
console.log(variableArgs(9)); // outputs 9
console.log(variableArgs(9,8,7)); // outputs 24</code></pre>

The problem with the arguments object is that while it looks like an indexed array, it actually isn't. You can't use forEach, sort, or map on the arguments object.

That's the use case for ES6's rest operator (...). It basically casts the arguments to the function 

<pre class=code_sample><code class="language-javascript">function variableArgs(...args) {
  result = 0;
  args.forEach(function(number){ result += number; });
  return result;
}

console.log(variableArgs()); // outputs 0
console.log(variableArgs(9)); // outputs 9
console.log(variableArgs(9,8,7)); // outputs 24</code></pre>

and by using the arrow function operator it can be even cleaner.

<pre class=code_sample><code class="language-javascript">let variableArgs = (...args) => {
  result = 0;
  let add = number => result += number;
  args.forEach(add);
  return result;
}


console.log(variableArgs()); // outputs 0
console.log(variableArgs(9)); // outputs 9
console.log(variableArgs(9,8,7)); // outputs 24</code></pre>

The only rule to remember with the rest operator is that it it's not the only argument, it needs to be last one.

The idea of being able to sort and map collections more easily is a re-occurring theme in ES6's new features, as well as Java 8's lambdas. While the arguments method of dealing with the same situation was certainly workable, I'm looking forward to using these types of expressions.

The spread operator is also represented by three periods (...) and does the opposite of the rest operator - instead of appearing in the function definition, it appears at the call site. Instead of "packing" an array for use in the function, the spread operator "unpacks" an array of arguments into separate variables in the function definition.


<pre class=code_sample><code class="language-javascript">let spreadEm = (x, y, z) => {
  let result = "";
  result += 'the location is \n';
  result += 'x: ' + x + '\n';
  result += 'y: ' + y + '\n';
  result += 'z: ' + z + '\n';
  return result;
}

console.log(spreadEm(...[80.4, 42.7, 56.1]));</code></pre>

Using the spread operator makes it so the values are implicitly inserted into the variables the function is expecting. If more parameters are supplied than what the function expects, they're thrown out.

The spread operator has another use case for inserting items into any position in an array. This would require more custom parsing without this shortcut.

<pre class=code_sample><code class="language-javascript">let firstArray = ['c','d','e','f','g'];
let secondArray = ['a','b', ...firstArray, 'h','i','j'];</code></pre>

Without the spread operator, you'd end up with one of these.

<pre class=code_sample><code class="language-javascript">["a", "b", Array[5], "h", "i", "j"]</code></pre>

While these aren't exactly mind-blowing features, the rest and spread operators are really nice for a lot of different scenarios. Features like this really helped Python gain popularity, and it's great to be able to extend those patterns to Javascript now.
