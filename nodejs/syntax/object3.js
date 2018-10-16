var v1 = 'v1';
// 100000 code
v1 = 'egoing';
var v2 = 'v2';

var o = {
  v1: 'v1',
  v2: 'v2'
}

function f1() {
  console.log(this.v1);
}
// 10000 code
/*
function f1() {
}
*/
function f2() {
  console.log(this.v2);
}

o.f1 = function() {
  console.log(this.v1);
}

o.f2 = function() {
  console.log(this.v2);
}

console.log(o);
o.f1();
o.f2();
