var args = process.argv;
/*
args.forEach((val, index, array) => {
  console.log(index + ': ' + val);
});
*/

console.log('A');
console.log('B');
if (args[2] === '1') {
  console.log('C1');
} else {
  console.log('C2');
}
console.log('D');
