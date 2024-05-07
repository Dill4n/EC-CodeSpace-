class Car {
    // class constructor
    constructor(make, model) {
        this.make = make;
        this.model = model;
    }
    carinfo() {
        console.log("The make/model of your vehicle: ");
    }
}

const myCar = new Car('Peugeot,', '308CC');
myCar.carinfo();
console.log(myCar.make, myCar.model);