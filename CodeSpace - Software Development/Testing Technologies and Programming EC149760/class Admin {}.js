class User {
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

class Admin extends User {
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

const admin = new Admin();
admin.username = "Balthazar";
console.log(admin.expressYourRole());

console.log("State your Name");
console.log(admin.username);
console.log(admin.sayHello()); 

