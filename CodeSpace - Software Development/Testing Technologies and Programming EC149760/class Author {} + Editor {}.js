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