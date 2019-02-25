// --- Directions
// Given the root node of a tree, return
// an array where each element is the width
// of the tree at each level.
// --- Example
// Given:
//     0
//   / |  \
// 1   2   3
// |       |
// 4       5
// Answer: [1, 3, 2]

function levelWidth(root) {
    
    const arr = [root, 'stopgap'];
    const counterArray = [];
    const counter = 0;

    while (arr.length > 1) {
        //increment by 1
        counter++;
        //push stopgap
        //arr.push('stopgap');
        //push children of array
        arr.push([...root.children]);
        var check = arr.unshift();
        if (check === "stopgap") {
            counterArray.push(counter);
            counter = 0;
            arr.push("stopgap");
        }
    }
    
    return counterArray;

}

module.exports = levelWidth;
