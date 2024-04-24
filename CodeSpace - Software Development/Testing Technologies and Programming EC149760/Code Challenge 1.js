//. Coding Task 1: 
//  Write a function expression called reverseString(). 
// It should accept a single argument representing a person's name. It should return a reverse string as shown below:

//  reverseString("John");     //  nhoJ
//  reverseString("James");    //  semaJ

const reverseString = function(name) {
    let reversedString = "";

    for (let i = name.length - 1; i >= 0; i--) {
    
    
    reversedString += name[i];
    }
    return reversedString;
};

console.log(reverseString("Dillin'"));

