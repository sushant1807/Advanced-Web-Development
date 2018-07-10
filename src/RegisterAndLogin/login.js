
function hello(){
var flag=true;
            var x=document.forms["form1"];
            if(x["name"].value=="")
                {
                    document.getElementById("errname").innerHTML="Name cannot be empty";
                    flag=false;
                }
 else
                {
                    document.getElementById("errname").innerHTML="";
                }
            if(x["surname"].value=="")
                {
                    document.getElementById("errsurname").innerHTML="Surname cannot be empty";
                    flag=false;
                }
            else
                {
                    document.getElementById("errsurname").innerHTML="";
                }
            if(x["username"].value=="")
                {
                    document.getElementById("errusername").innerHTML="Username cannot be empty";
                    flag=false;
                }
            else
                {
                    document.getElementById("errusername").innerHTML="";
                }
            if(x["password"].value=="")
                {
                    document.getElementById("errpassword").innerHTML="Password cannot be empty";
                    flag=false;
                }
            else
                {
                    document.getElementById("errpassword").innerHTML="";
                }
            if(x["rollno"].value>4980 || x["rollno"].value<1000)
                {
                    document.getElementById("errrollno").innerHTML="Invalid roll no.";
                    flag=false;
                }
            else
                {
                    document.getElementById("errrollno").innerHTML="";
                }
           return flag;
}
