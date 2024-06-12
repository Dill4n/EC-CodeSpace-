describe('Calculator tests', () => {

  beforeEach(() => {
    cy.visit('index.html');
  });

  it('should display operands and operators when clicked', () => {
    // We click the buttons to enter the sequence of operands and operators
    // 9*(8-1)+7/3.5
    // Testing most of the digits
    // parenthesis
    // division
    // multiplication
    // substraction
    // addition
    // toggle sign
    // decimal point
    // backspace
    cy.get(".button").contains("9").click();
    cy.get("[cy-data='toggle-sign'").click();
    cy.get("[cy-data='multiplication'").click();
    cy.get("[cy-data='open-parenthesis").click();
    cy.get(".button").contains("8").click();
    cy.get("[cy-data='substraction'").click();
    cy.get(".button").contains("1").click();
    cy.get("[cy-data='close-parenthesis").click();
    cy.get("[cy-data='addition'").click();
    cy.get(".button").contains("7").click();
    cy.get("[cy-data='division'").click();
    cy.get(".button").contains("3").click();
    cy.get(".button").contains(".").click();
    cy.get(".button").contains("5").click();
    cy.get(".button").contains("7").click();
    cy.get("[cy-data='backspace'").click();
    
    // The display should reflect what has been clicked
    cy.get("#display").should("have.value","-9*(8-1)+7/3.5")
  })

  it('should add two numbers', () => {
    // 9+7=16
    cy.get(".button").contains("9").click();
    cy.get("[cy-data='addition'").click();
    cy.get(".button").contains("7").click();
    cy.get(".calculateBtn").click();
    
    // The display should reflect what has been clicked
    cy.get("#display").should("have.value","16")
  })

  it('should substract two numbers', () => {
    // 9-7=2
    cy.get(".button").contains("9").click();
    cy.get("[cy-data='substraction'").click();
    cy.get(".button").contains("7").click();
    cy.get(".calculateBtn").click();
    
    // The display should reflect what has been clicked
    cy.get("#display").should("have.value","2")
  })

  it('should multiply two numbers', () => {
    //9*7=63
    cy.get(".button").contains("9").click();
    cy.get("[cy-data='multiplication'").click();
    cy.get(".button").contains("7").click();
    cy.get(".calculateBtn").click();
    
    // The display should reflect what has been clicked
    cy.get("#display").should("have.value","63")
  })

  it('should divide two numbers', () => {
    // 8/4=2
    cy.get(".button").contains("8").click();
    cy.get("[cy-data='division'").click();
    cy.get(".button").contains("4").click();
    cy.get(".calculateBtn").click();
    
    // The display should reflect what has been clicked
    cy.get("#display").should("have.value","2")
  })

})