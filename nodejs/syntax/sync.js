var fs = require('fs');
console.log('A');
var data = fs.readFileSync('node/sample.txt', 'utf8');
console.log(data);
console.log('C');

console.log('--------------');
console.log('A');
fs.readFile('node/sample.txt', 'utf8', (err, data) => {
  console.log(data);
});
console.log('C');
