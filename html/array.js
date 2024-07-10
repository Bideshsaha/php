let arr1 = ["onion_1","Capcicum_2","corn_3","chilli-flex_4","white-sauce_5","red-sauce_6","tomato_7","lemon_8","sugar_9","chilli_10"];
// arr2=arr1.toString();
// console.log(arr2);
// arr3 = arr2.split(',');
// console.log(arr3);
// arr3.map((element, index) => {
//     console.log("Element: ", element);
//     console.log("index: ", index);
// });


// let result = arr1.map(item => item.split('_'));
// console.log(result);
// console.log(result[0][1]);


let size = arr1.length;
const arr3 = [];
for(let i=0;i<size;i++){
    var arr2 =arr1[i].split('_');
    arr3.push(arr2[1]);
}

console.log(arr3);







