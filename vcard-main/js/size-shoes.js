console.log(document.querySelector("#qual-shoes").value);
let arr = new Map([
  [40, 3],
  [41, 2],
  [43, 1]
]);
let submitShoes = document.querySelector("#submit-shoes")
let submit_form_shoes = document.querySelector("#submit_form_shoes")
submit_form_shoes.addEventListener('submit', function(event) {event.preventDefault();
  let key = document.querySelector("#size-shoes").value * 1;
  let value = document.querySelector("#qual-shoes").value * 1;
  set_size(arr, key, value, event)})

console.log(arr)
//key = 40
//value = prompt('Введите приход или продажу') * 1// умножением привели к числу
//value = 2

  
  function set_size(arr, key, value, event){
    
    event.preventDefault()
      console.log(arr.get(key))
      arr.get(key) + value < 0 ? //начался тернарный оператор
      alert('Остаток на складе ' + arr.get(key) +"\n Вы ввели недопустимое значение")
        : arr.set(key, arr.get(key) + value); //закончился тернарный оператор
      // if(arr.get(key) + value < 0)
      //   alert('Остаток на складе ' + arr.get(key) +"\n Вы ввели недопустимое значение")
      // else
      // arr.set(key, arr.get(key) + value);
      console.log(arr)
      
  }
  // const formData = new FormData(document.querySelector('#submit_form_shoes'));
  // formData.forEach((value, key) => console.log(`${key}: ${value}`));
// arr.set('key4','value4');
// console.log(arr.get(40))
// console.log(arr.size)
// console.log(arr.delete(40))// true
// console.log(arr.has(40))// true)
// arr.forEach(function(value,key) {
//   console.log('key = ' + key +', value = ' + value);    
// });