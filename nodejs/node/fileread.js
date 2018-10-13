const fs = require('fs');
//readFileSync
var temp = fs.readFileSync('./sample.txt', 'utf8');
console.log(temp);

//readFile
fs.readFile('./sample.txt', 'utf8', (err, data) => {
  console.log(data);
})
