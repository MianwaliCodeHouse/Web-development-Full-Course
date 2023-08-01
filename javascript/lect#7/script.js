// for in loop (helps to display object data but it can also work with an array)

// syntax
// for (obj_key_var in obj_name) {
  // display obj_key 
// }
// for (arr_key_var in arr_name) {
  // display arr_key 
// }

// obj={
//   name:"yasir",
//   father_name:"sajid",
//   roll_no:2
// }
// for (obj_key in obj) {
//   document.write(obj_key+" is "+obj[obj_key],"<br>");
// }


// arr=["yasir","nasir","sajid","faheem","sultan"];
// for (arr_key in arr) {
//   document.write(arr_key+" is "+arr[arr_key],"<br>");
// }


// ------

// for of loop (helps to display array data and it does not work with object because object is not iterable)

// syntax
// for (arr_data of arr) {
  // display  arr_data
// }

// arr=["yasir","nasir","sajid","faheem","sultan"];
// for (arr_data of arr) {
//   document.write(arr_data,"<br>")
// }


// ------

// for each function (helps to display array data)
// syntax
// arr_name.forEach((element,index) => {
  
// });

// arr=["yasir","nasir","sajid","faheem","sultan","hasnat","junaid"];

// arr.forEach((element) => {
//   document.write(element,"<br>")
// });

// arr.forEach((element,index) => {
//   document.write(index,element,"<br>")
// });