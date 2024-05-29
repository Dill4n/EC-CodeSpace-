describe('cypress test 2', () => {
    it('This will access the Cypress page, type an email address, and asserts the input field', () => {
      cy.visit('https://example.cypress.io/commands/actions')  
      
      cy.get('.action-btn').click()

      cy.get('#action-canvas').click()

      cy.get('#action-canvas').click('topLeft')

      cy.get('#action-canvas').click('bottomRight')
      
    })
  })