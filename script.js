function appendNumber(number) {
    document.getElementById('result').value += number;
}

function appendOperator(operator) {
    document.getElementById('result').value += ' ' + operator + ' ';
}

function clearResult() {
    document.getElementById('result').value = '';
}

function calculate() {
    document.querySelector('form').submit();
}
