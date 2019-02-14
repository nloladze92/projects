// --- Directions
// Print out the n-th entry in the fibonacci series.
// The fibonacci series is an ordering of numbers where
// each number is the sum of the preceeding two.
// For example, the sequence
//  [0, 1, 1, 2, 3, 5, 8, 13, 21, 34]
// forms the first ten entries of the fibonacci series.
// Example:
//   fib(4) === 3

function fib(n) {

    if (n < 2) {
        return n;
    }

    return fib(n - 1) + fib(n - 2);


    /* iteratitve solution
    const result = [0, 1];

    for (let i = 2; i <= n; i++) {
        const a = result[i - 1];
        const b = result[i - 2];
        result.push(a + b);
    }

    return result[result.length - 1];
    */
   
    /*
    var i = 2;
    const addIt = [0, 1, 1];
    var combine = i; 
    while (i <= n) {
    combine = addIt[i - 2] + addIt[i - 1];
    addIt.push(combine);
    i++;
    }
    return addIt.join(', ');
 */
}
console.log(fib(5));
module.exports = fib;
