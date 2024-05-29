class User {
    constructor(firstName, lastName) {
        this.firstName = firstName;
        this.lastName = lastName;   
    }
hello() {
    console.log(`Hello ${this.firstName} ${this.lastName}`);
    }
}

const User1 = new User('John', 'Doe');
console.log(`${User1.firstName} ${User1.lastName}`);
User1.hello();

const User2 = new User('Jane', 'Doe');
User2.hello();



