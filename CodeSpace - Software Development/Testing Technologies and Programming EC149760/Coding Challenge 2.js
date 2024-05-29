// 1. 

class Userz {
    constructor(firstName, lastName) {
        this.firstName = firstName;
        this.lastName = lastName;   
    }
hello() {
    console.log(`Hello ${this.firstName} ${this.lastName}`);
    }
}

const user1 = new Userz('John', 'Doe');
console.log(`${user1.firstName} ${user1.lastName}`);
user1.hello();

const user2 = new Userz('Jane', 'Doe');
user2.hello();



// 2. Encapsulation

class User2 {
    
    constructor() {
        
      this._firstName = "";
      this._lastName = "";
    }
    
    get firstName() {
      return this._firstName;
    }

    set firstName(firstName) { 
        this._firstName = firstName;
    }

    get lastName() {
        return this._lastName;
    }
    
    set lastName(lastName) {
        this._lastName = lastName;
    }

    hello() {
        return "Hello World!";
      }  
}

const user = new User2()
user.firstName = "Dylan";
user.lastName = "Lowrie";

let fullName = user.firstName + " " + user.lastName;
console.log(user.hello());
console.log("My name is " + fullName);



// 3. Inheritance

class User3 {
    constructor() {
        this._username = "";
    }
    
    get username() {
        return this._username;
    }
    
    set username(username) {
        this._username = username;
    }


}

class Admin extends User3 {
    constructor() {
        super();
    }

    expressYourRole() {
        return "Admin";
    }

    sayHello() {
        return `Hello Admin, ${this.username}`;
    }
}
console.log("State your Business");

const admin1 = new Admin();
admin1.username = "Balthazar";
console.log(admin1.expressYourRole());

console.log("State your Name");
console.log(admin1.username);
console.log(admin1.sayHello()); 



// 4. Polymorphism

class User4 {
    constructor() {
      this._numberOfArticles = 0;
    }

    get numberOfArticles() {
        return this._numberOfArticles;
    }

    set numberOfArticles(numberOfArticles) {
        this._numberOfArticles = numberOfArticles;
    }

    calcScores() {
        return "Calculaton: " + this._numberOfArticles;
    }
  }

class Author extends User4 {
    constructor() {
        super();
    }
    calcScores() {
        return this.numberOfArticles * 10 + 20;
    }
}

class Editor extends User4 {
    constructor() {
        super();
    }

    calcScores() {
       return this.numberOfArticles * 6 + 15;
    }
}

const author = new Author();
author.numberOfArticles = 8;
console.log(author.calcScores());

const editor = new Editor();
editor.numberOfArticles = 15;
console.log(editor.calcScores());



// 5. Abstraction

class User5 {
    constructor() {
        this._userName = "";

        if (this.constructor === User5) {
            throw new Error('Invalid User');
        }
    }

    get userName() {
        return this._userName;
    }

    set userName(userName) {
        this._userName = userName;
    
    }

    stateYourRole() {
        return "Admin";
    }
}

class Admin2 extends User5 {
    constructor() {
        super();
    }
    
    
    stateYourRole() {
    return "Admin";
    }
}

class Viewer extends User5 {
    constructor() {
        super();
    }
    
    stateYourRole() {
        return "Viewer";
        }
}

const admin = new Admin2();
admin.userName = "Balthazar";
console.log(admin.userName);
console.log(admin.stateYourRole());

const viewer = new Viewer();
viewer.userName = "Melchior";
console.log(viewer.userName);
console.log(viewer.stateYourRole());