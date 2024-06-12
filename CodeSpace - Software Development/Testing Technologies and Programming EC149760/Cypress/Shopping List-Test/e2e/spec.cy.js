describe('template spec', () => {
  beforeEach(() => {
    cy.visit('http://127.0.0.1:5500/index.HTML');
  });

  it('can add an item to the shopping list', () => {
    cy.get('#writeList').type("carrots");
    cy.get('button').contains('Add').click();

    cy.get('#shoppingList').should('contain', "carrots");
  });

  it('can delete an item', () => {

    cy.get('#writeList').type("bread");
    cy.get('button').contains('Add').click();

    cy.get('#writeList').clear().type("carrots");
    cy.get('button').contains('Add').click();

    // Delete the item
    cy.get('button').contains('x').eq('0').click();

    // Verify the item is removed from the list
    cy.get('#shoppingList').should('not.contain', "bread");
  });


})