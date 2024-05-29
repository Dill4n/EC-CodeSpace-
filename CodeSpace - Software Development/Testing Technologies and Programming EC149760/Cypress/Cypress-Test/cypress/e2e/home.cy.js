describe('Visit and interact with example.cypress.io', () => {
  it('should visit the page, query for an element, interact with it, and assert content', () => {
      // Visit the specified URL
      cy.visit('https://example.cypress.io');

      // Query for the element with an increased timeout period and assert that it is visible
      cy.get('#query-btn', { timeout: 10000 }) // Increase timeout to 10 seconds
          .should('be.visible') // Check that the element is visible
          .click(); // Click the button

      // Continue with your assertions and interactions...
  });
});

