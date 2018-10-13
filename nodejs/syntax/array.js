//CRUD
var arr = ['A', 'B', 'C', 'D'];
arr.forEach((val, index, array) => {
  console.log(index + ': ' + val);
});

console.log('--------');

arr.push('E');
for (var i = 0; i < arr.length; i++) {
  console.log(i + ': ' + arr[i]);
};

console.log('--------');

arr[2] = 5.9;
var j = 0;
while (j < arr.length) {
  console.log(j + ': ' + arr[j]);
  j = j + 1;
}

console.log('--------');

var number = [1, 400, 12, 34];
var i = 0;
var total = 0;
while (i < number.length) {
  total = total + number[i];
  i = i + 1;
};
console.log(`total: ${total}`);
