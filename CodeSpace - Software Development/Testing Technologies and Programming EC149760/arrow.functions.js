// 1.

let greet = (n) => "Hi, my name is *chicka* *chicka* " + n + "!";

console.log(greet("Slim Shady"));

// 2.

let isEven = (num) => num % 2 === 0;

console.log(isEven(8));

// 3.

let counterFunc = (counter) => { 
    if (counter > 100) {
    counter = 0;
  } else {
    counter++;
  }

return counter;
};

console.log(counterFunc(68));

// 4.

let nameAge = (name, age) => {
  console.log("Hello " + name);
    console.log("You are " + age + " years old");
}

nameAge("Dylan", "22");

// 5.

let printOnly = () => {
    console.log("printing... printing... still printing...")
}

printOnly();

// 6.

let sum = (num1, num2) => num1 + num2;

console.log(sum(6, 3));

