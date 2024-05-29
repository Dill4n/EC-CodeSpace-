class User5 {
    constructor() {
        this._userName = "";
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