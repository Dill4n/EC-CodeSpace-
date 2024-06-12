// memory stuff

let memory = 0;

function storeToMemory() {
  let display = document.getElementById('display');
  memory = eval(display.value);
}

function recallFromMemory() {
  let display = document.getElementById('display');
  display.value += memory;
}

function clearMemory() {
  memory = 0;
}

// functionalitiez

function backspace() {
  let display = document.getElementById('display');
  display.value = display.value.slice(0, -1);
}

function clearDisplay() {
  document.getElementById('display').value = '';
}

function addToDisplay(value) {
  let display = document.getElementById('display');
  display.value += value;
}

function toggleBackground() {
  document.body.classList.toggle('dark-mode');
}
document.addEventListener('DOMContentLoaded', () => {
  const toggleBtn = document.querySelector('.toggleBtn');
  toggleBtn.addEventListener('click', toggleBackground);
});

// +/- (i'm assuming)

function toggleSign() {
  let display = document.getElementById('display');
  if (display.value.charAt(0) === '-') {
      display.value = display.value.substring(1);
  } else {
      display.value = '-' + display.value;
  }
}

// calculate dat shi!!!

function calculate() {
  let display = document.getElementById('display');
  try {
      let result = eval(display.value);
      display.value = result;
  } catch (error) {
      display.value = 'Err0r';
  }
}


function calculateSqr() {
  let display = document.getElementById('display');
  try {
      let result = Math.pow(eval(display.value), 2);
      display.value = result;
  } catch (error) {
      display.value = 'Err0r';
  }
}

function calculateSqrt() {
  let display = document.getElementById('display');
  try {
      let result = Math.sqrt(eval(display.value));
      display.value = result;
  } catch (error) {
      display.value = 'Err0r';
  }
}
















/*

// previous commitz

function addToDisplay(input) {
  var display = document.getElementById("display");
  display.setAttribute("type", "text");

  // Check if we can add a decimal point
  if (input === '.') {
    // Split the string by math symbols (+, -, *, /)
    let mathArray = display.value.split(/[\+\-\*\/]/);
    let lastItem = mathArray.pop();
    
    if (!/\./.test(lastItem)) {
        // Last operand does not contain already a decimal point
        // We can append it at the end of the display
    } else {
        // Last operand contains a decimal point
        // We don't allow to add a new one
        return;
    }
  }

  // Append new input to display
  var newText = display.value + input;
  // Update display
  display.setAttribute("value", newText);
}

function calculate() {
  var display = document.getElementById("display");
  display.setAttribute("value", eval(display.value));
}
*/let memory = 0;

function storeToMemory() {
    let display = document.getElementById('display');
    memory = eval(display.value);
  }
  
  function recallFromMemory() {
    let display = document.getElementById('display');
    display.value = memory;
  }
  
  function clearMemory() {
    memory = 0;
  }

// functionalitiez
  
  function backspace() {
    let display = document.getElementById('display');
    display.value = display.value.slice(0, -1);
  }
  
  function clearDisplay() {
    document.getElementById('display').value = '';
  }
  
  function addToDisplay(value) {
    let display = document.getElementById('display');
    display.value += value;
  }
  
function toggleBackground() {
  var body = document.body;
  body.style.backgroundColor = body.style.backgroundColor === "white" ? "black" : "white";
}

function addToHistory(expression) {
  let historyDiv = document.getElementById('history');
  let p = document.createElement('p');
  p.textContent = expression;
  historyDiv.appendChild(p);
}

function clearHistory() {
  let historyDiv = document.getElementById('history');
  historyDiv.innerHTML = '';
}
  
  // +/- 
  
  function toggleSign() {
    let display = document.getElementById('display');
    if (display.value.charAt(0) === '-') {
        display.value = display.value.substring(1);
    } else {
        display.value = '-' + display.value;
    }
  }
  
  // calculate dat shi!!!
  
  function calculate() {
    let display = document.getElementById('display');
    try {
        let result = eval(display.value);
        result = Math.round(result * 100) / 100;
        addToHistory(display.value + " = " + result);
        display.value = result;        
    } catch (error) {
        display.value = 'Err0r';
    }
  }
  
  function calculateSqr() {
    let display = document.getElementById('display');
    try {
        let value = eval(display.value);
        let result = Math.pow(value, 2);
        addToHistory(value + '² = ' + result);
        display.value = result;
    } catch (error) {
        display.value = 'Err0r';
    }
}

function calculateSqrt() {
    let display = document.getElementById('display');
    try {
        let value = eval(display.value);
        let result = Math.sqrt(value);
        addToHistory('√(' + value + ') = ' + result);
        display.value = result;
    } catch (error) {
        display.value = 'Err0r';
    }
  }
