describe('cypress test 1', () => {
  it('This will access the Cypress page, queries an element, and inserts it into a document', () => {
    cy.visit('https://example.cypress.io')

    cy.get('.home-list').contains('Querying').click()

    cy.url().should('include', '/commands/querying')
    cy.get('h1').should('contain', 'Querying')
  })
})