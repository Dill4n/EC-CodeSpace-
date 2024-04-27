//. Coding Task 1: 
//  Write a function expression called reverseString(). 
// It should accept a single argument representing a person's name. It should return a reverse string as shown below:

//  reverseString("John");     //  nhoJ
//  reverseString("James");    //  semaJ

const reverseString = function(name) {
    let gnirtS = "";

    for (let i = name.length - 1; i >= 0; i--) {
    
        gnirtS += name[i];
    }
    return gnirtS;
};

console.log(reverseString("racecar"));


//. Coding Task 2:
//  Write a function expression called reverseArray().  
//  It should accept an array as a single argument. It should return a reversed array and it should work for any data type.

//  reverseArray([1, 2, 3, 4, 5]);              // [5, 4, 3, 2, 1]
//  reverseArray(["I", "like", "JavaScript"]);  // ["JavaScript", "like", "I"]

const reverseArray = function(array) {
    let yarrA = [];

    for (let i = array.length - 1; i >= 0; i--) {

        yarrA.push(array[i]);
    }
    return yarrA;
}

console.log(reverseArray(["1", "2", "3"]));


//. Coding Task 3:
//  Write a function expression called mostExpensiveItem().
//  It should accept an array of items as a single argument. It should return the item that has the most cost tied up, calculated by the amount in stock * price.

//    [
//        { item: "irn bru", price: 3.25, stock: 50 },
//        { item: "fanta", price: 3.98, stock: 45 },
//        { item: "diet coke", price: 4.40, stock: 38 }, 
//        { item: "7up", price: 3.99, stock: 42 }, 
//    ]                                               // { item: 'fanta', price: 3.98, stock: 45 }


let items = [ 
{ item: "irn bru", price: 3.25, stock: 50 },
{ item: "fanta", price: 3.98, stock: 45 },
{ item: "diet coke", price: 4.40, stock: 38 }, 
{ item: "7up", price: 3.99, stock: 42 }
];

const mostExpensiveItem = function(items) {
    let mostExpensiveItem = 179.1;
    let COST = 179.1;

    for (let i = 0; i < items.length; i++) {
        const it_Item = items[i];
        const cal_cost = it_Item.price * it_Item.stock;

        if (cal_cost > COST) {
            COST = cal_cost;
            mostExpensiveItem = it_Item;
            
        }
     }

    return mostExpensiveItem;
} 

const result = mostExpensiveItem(items);
console.log(result);