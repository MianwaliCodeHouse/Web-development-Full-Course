alert("this page is not secure!!!")
bool=confirm("Are you 18+?")
if(!(bool)){
  document.write("<a href='index.html' id='backhome'>Not Found</a>")
  backhome.click()
}
function feedback(){
  myvar=prompt("Enter your feedback?")
  Feedbacks.innerHTML+=`<h4> ${myvar} </h4>`
}

