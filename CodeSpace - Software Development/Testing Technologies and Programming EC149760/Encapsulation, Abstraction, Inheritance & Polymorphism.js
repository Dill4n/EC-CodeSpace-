// 1. Encapsulation

// Encapsulation is the bundling of data (attributes) and methods (functions) that operate on the data into a single unit, i.e., a class. 
// This helps in hiding the internal state of an object and only exposing what is necessary.

Example:


class Circle {
    constructor(radius) {
      this._radius = radius;
    }
  
    get radius() {
      return this._radius;
    }
  
    set radius(radius) {
      this._radius = radius;
    }
  
    calculateArea() {
      return Math.PI * this._radius ** 2;
    }
  }
  
  const myCircle = new Circle(8);
  console.log(myCircle.radius);
  console.log(myCircle.calculateArea());
  
  myCircle.radius = 7;
  console.log(myCircle.radius);
  console.log(myCircle.calculateArea());



// 2. Abstraction

// Abstraction involves simplifying complex systems by modelling classes based on the essential properties and behaviours an object should have. 
// It hides the unnecessary details from the user.

Example:
  


