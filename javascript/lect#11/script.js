//? BOM (Browser Object Model)
// The Browser Object Model allows JavaScript to "talk to" the browser.
// Window object and all others that are inside the window object are the parts of BOM 
// Window object is a very large object which contains many methods and objects but it exist on the front-end side means window object does not exist on back-end javascript

//? DOM (Document Object Model)
// When a web page is loaded, the browser creates a Document Object Model of the page.
// Document object is the part of BOM
// JavaScript can access and change all the elements of an HTML document.



//! start BOM 

//? Window Object:
// It represents the browser's window.
// All global JavaScript objects, functions, and variables automatically become members of the window object means:
    // 1) When you create function in javascript automatically become the part of window object 
    // 2) All front-end build-in function are in window object but you don't need to acess these functions using window object . you can use window's methods and objects without using window object 

// window.open() - //?open a new window
// windowName.close() - //?close the current window
// window.moveTo() - //?move the current window
// window.resizeTo() - //?resize the current window