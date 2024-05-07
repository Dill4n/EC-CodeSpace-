class Animal {
    constructor(name) {
        this.name = name;
    }
    sound() {
        console.log(`${this.name} makes a sound.`);
    }
}

class Dog extends Animal {
    sound() {
        console.log(`${this.name} barks.`);
    }
}

const myAnimal = new Animal ('Lion');
myAnimal.sound();