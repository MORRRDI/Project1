arr1 = ['one', 'second', ['2-0', '2-1', '2-2'], 4, 5]
console.log(arr1)
console.log(arr1[0])
console.log(arr1.length)
console.log(arr1[4] = 'five')
console.log(arr1[2][0] = '2-zero')
arr1.push(6)
console.log(arr1)
arr1.pop()
arr1.unshift('pre-one')
console.log(arr1)
arr1.shift()
console.log(arr1)
console.log(arr1.length)
console.log(arr1[arr1.length-1]) // получаем последний элемент массива
var myData = "Manchester,London,Liverpool,Birmingham,Leeds,Carlisle";
var myArray = myData.split(",");
console.log(myArray);
//////////////////////////////// MAP array
size = [40,41,42,43]
var arr = new Map([
    [40, 3],
    [41, 2],
    [43, 1]
  ]);  
console.log(size)
console.log(arr.size)
console.log(arr)
arr.set('key4','value4');
arr
  .set('key5','value5')
  .set('key6','value6');
console.log(arr)
arr.set('key4','new-value4');
console.log(arr)
console.log(arr.get(40))
console.log(arr.delete(40))// true
console.log(arr.has(40))// true)
//console.log(arr.clear()) // очищаем массив arr
//console.log(arr.size) // 0 (число элементов)
console.log(arr) // 0 (число элементов)
arr.forEach(function(value,key) {
  console.log('key = ' + key +', value = ' + value);    
});

