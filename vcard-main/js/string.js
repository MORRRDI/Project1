let a = 12;
console.log(typeof(a));
a = toString(a);
console.log(typeof(a));
const song = 'любая';
const output = `Мне нравится песня ${song}. Я оценил ёё.`;
console.log(output);
const output2 = 'Мне нравится песня ' + song +'\n. Я оценил ёё.';
console.log(output2);
const output3 = `Мне нравится эта песня.
  Я оценил её на 90%.`;
console.log(output3);
console.log(output3.length);
console.log(output3.indexOf("%"));
console.log(output3.slice(output3.indexOf("%")+1));
console.log(output3.replace('%', ' процентов'));
console.log(output3.toLowerCase());
