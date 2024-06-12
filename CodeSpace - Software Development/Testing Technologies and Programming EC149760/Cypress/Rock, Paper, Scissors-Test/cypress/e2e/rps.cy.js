describe('RPS Game', () => {

  // open URL (before each test)
  beforeEach(() => {
    cy.visit('http://127.0.0.1:5500/RPS.html')
    cy.get('[data-cy="rock"]').as('rock')
    cy.get('[data-cy="paper"]').as('paper')
    cy.get('[data-cy="scissors"]').as('scissors')

    cy.get('[data-cy="user-option"]').as('userOption')
    cy.get('[data-cy="computer-option"]').as('computerOption')
    cy.get('[data-cy="result"]').as('result')
  })


  // Test 'Rock'
  it('tests Rock option', () => {

    cy.get('@rock').should('exist').click()

    cy.get('@userOption').should('have.text', 'Rock')

    cy.get('@computerOption').then((option) => {
      if(option.text().includes("Rock")) {
        cy.get('@result').contains("It is a tie!")
      }
      else if (option.text().includes("Paper")) {
        cy.get('@result').contains("You lose!")
      }
      else {
       cy.get('@result').contains("You win!")
      }

    })
  })


  // Test 'Paper' 
  it('tests Paper option', () => {

    cy.get('@paper').should('exist').click()

    cy.get('@userOption').should('have.text', 'Paper')

    cy.get('@computerOption').then((option) => {
      if(option.text().includes("Paper")) {
        cy.get('@result').contains("It is a tie!")
      }

      else if (option.text().includes("Scissors")) {
        cy.get('@result').contains("You lose!")
      }

      else {
        cy.get('@result').contains("You win!")
      }
    })
  })  
  // Test 'Scissors'
  it('tests Scissors option', () => {
    cy.get('@scissors').should('exist').click()

    cy.get('@userOption').should('have.text', 'Scissors')

    cy.get('@computerOption').then((option) => {
      if(option.text().includes("Scissors")) {
        cy.get('@result').contains("It is a tie!")
      }

      else if (option.text().includes("Rock")) {
        cy.get('@result').contains("You lose!")
      }

      else {
        cy.get('@result').contains("You win!")
      }
  })
  })
})