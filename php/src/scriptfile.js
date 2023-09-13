function validateform()
        {

            var sname=document.pform.sname.value; 
            var fname=document.pform.fname.value;
            var mname=document.pform.mname.value;
            var foccu=document.pform.foccu.value;
            var moccu=document.pform.moccu.value;
            var nation=document.pform.nation.value;
            var sno=document.pform.sno.value;
            var fno=document.pform.fno.value;
            var mno=document.pform.mno.value;
            var smail=document.pform.smail.value;
            var fmail=document.pform.fmail.value;
            var mmail=document.pform.mmail.value;
            if (sname==null || sname=="" || sname.search(/^[a-zA-Z]+ [a-zA-Z]+$/))
            {  
                alert("Student name: enter only alphabets");  
                return false;  
            }
            else if (fname==null || fname=="" || fname.search(/^[a-zA-Z]+ [a-zA-Z]+$/))
            {  
                alert("Father name: enter only alphabets");  
                return false;  
            }
            else if (foccu==null || foccu=="" || foccu.search(/^[a-zA-Z]+ [a-zA-Z]+$/))
            {  
                alert("Father occupation: enter only alphabets");  
                return false;  
            }
            else if (mname==null || mname=="" || mname.search(/^[a-zA-Z]+ [a-zA-Z]+$/))
            {  
                alert("Mother name: enter only alphabets");  
                return false;  
            }
            else if (moccu==null || moccu=="" || moccu.search(/^[a-zA-Z]+ [a-zA-Z]+$/))
            {  
                alert("Mother occupation: enter only alphabets");  
                return false;  
            }
            else if (nation==null || nation=="" || nation.search(/^[a-zA-Z]+ [a-zA-Z]+$/))
            {  
                alert("Nationality: enter only alphabets");  
                return false;  
            }
            else if(sno.search(/[0-9]{10}/))
            {  
                alert("Student phone number: Enter a valid mobile number");  
                return false;  
            } 
            else if(fno.search(/[0-9]{10}/))
            {  
                alert("Father phone number: Enter a valid mobile number");  
                return false;  
            }  
            else if(mno.search(/[0-9]{10}/))
            {  
                alert("Mother phone number: Enter a valid mobile number");  
                return false;  
            }   
            else if(smail.search(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/))
            {  
                alert("Student mail: Enter a valid mail id");  
                return false;  
            }  
            else if(fmail.search(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/))
            {  
                alert("Father mail: Enter a valid mail id");  
                return false;  
            }  
            else if(mmail.search(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/))
            {  
                alert("Mother mail: Enter a valid mail id");  
                return false;  
            }  
            
                
        }