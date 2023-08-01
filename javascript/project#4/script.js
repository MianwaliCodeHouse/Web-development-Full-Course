// Asked Questions
std_name=prompt("Enter the Student Name:")
std_roll_no=prompt("Enter the Student Roll No:")
eng_marks=prompt("Enter "+std_name+"'s Marks in english , out of 100")
mmarks=prompt("Enter "+std_name+"'s Marks in Math , out of 100")
cmarks=prompt("Enter "+std_name+"'s Marks in Computer , out of 200")
// Put "Gotten data" to the table
sname.innerHTML=std_name;
rollNo.innerHTML=std_roll_no;
eMarks.innerHTML=eng_marks;
mMarks.innerHTML=mmarks;
cMarks.innerHTML=cmarks;

// tatal marks of student 
tatol_marks=eval(eng_marks+"+"+mmarks+"+"+cmarks);
ttmarks.innerHTML=tatol_marks;

// Student Percentages
eper=(eng_marks/100)*100;
mper=(mmarks/100)*100;
cper=(cmarks/200)*100;
ePercentage.innerHTML=eper+"%";
mPercentage.innerHTML=mper+"%";
cPercentage.innerHTML=cper+"%";

// student Grade 
t_o_m_p=(tatol_marks/400)*100;
if (t_o_m_p>90) {
    tGrade.innerHTML="A+"
}else if (t_o_m_p>80) {
    tGrade.innerHTML="A"
}else if (t_o_m_p>70) {
    tGrade.innerHTML="B"
}else if (t_o_m_p>60) {
    tGrade.innerHTML="C"
}else if (t_o_m_p>50) {
    tGrade.innerHTML="D"
}else{
    tGrade.innerHTML="F"
}
