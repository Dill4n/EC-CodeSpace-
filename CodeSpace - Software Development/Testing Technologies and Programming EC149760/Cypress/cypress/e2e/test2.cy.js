describe('cypress test 2', () => {
    it('This will access the Cypress page, type an email address, and asserts the input field', () => {
      cy.visit('https://example.cypress.io/commands/actions')
  
      

      cy.get('.action-email').type('dylan@g.co')
      cy.get('.action-email').should('have.value', 'dylan@g.co')
    })
  })