var members = ['egoing', 'k8805', 'hoya'];
console.log(members[1]); // k8805
members.forEach((val, index, array) => {
  console.log(index + ': ' + val);
});

var roles = {
  'programmer': 'egoing',
  'designer': 'k8805',
  'manager': 'hoya'
};

console.log(roles.designer); // k8805

for(var name in roles) {
  console.log('object => ', name, 'value => ', roles[name]);
}
