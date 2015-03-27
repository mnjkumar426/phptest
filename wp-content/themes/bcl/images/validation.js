function validate(){
   
   
	
    if(nameValidate('fn')){
      
            if(mobValidate('mob')){
              if(emailValidate('email')){ 
                 if(passValidate('pass','confpass')){ 
                      if(cpassValidate('confpass')){ 
                     if(genderValidate('gender')){
					 if(dateValidate('date')){
					 	 true;  
					 }else return false;	
					 	
					 }else return false;
					   
                  
                        
                  
                    }else return false;   
                  
                    }else return false; 
         
                
               
                }else return false;
              
           
    } else return false;
 
    
    } else return false;


}
    


function  nameValidate(name){
    var  name=document.getElementById(name).value;
        if(name==null||name=="") {  
        document.getElementById("n").innerHTML=" *name should not empty".fontcolor('red');
 document.getElementById('fn').className = "er";
        return false;}
   else {
       
       document.getElementById("n").innerHTML="";
  document.getElementById("fn").className ="none";
   
   return true;
      }
   }
    
    function mobValidate(mob){
    var  mob=document.my.mob.value;
      var numbers = /^[0-9]+$/;
        if(mob==null||mob=="") {  
        document.getElementById("m").innerHTML="* mob should not empty".fontcolor('red');
    document.getElementById('mob').className = "er";
        return false} else  if(!mob.match(numbers)){
   document.getElementById("m").innerHTML=" *mobile should be numeric".fontcolor('red');
         document.getElementById('mob').className = "er";
        return false;}
        else if(mob.length<10){
       document.getElementById("m").innerHTML="*mob should 10digit".fontcolor('red');
        document.getElementById('mob').className = "er";
       return false }else document.getElementById("m").innerHTML="";
   document.getElementById("mob").className ="none";
   return true;
   }
   function emailValidate(email){
       var  email=document.my.email.value;
        var a=email.indexOf("@");  
var d=email.lastIndexOf(".");  

        if(email==null||email=="") {  
        document.getElementById("e").innerHTML="* Email should not empty".fontcolor('red');
    document.getElementById('email').className = "er";
        return false;}else if (a<1 || d<a+2 || d+2>=email.length){  
    document.getElementById("e").innerHTML="not a valid email id".fontcolor('red');
   document.getElementById('email').className = "er";
  return false;  
  
      } else {
       document.getElementById("e").innerHTML="";
	 document.getElementById("email").className ="none";
	
	  }
   return true;
       
       
   } 
   
   function passValidate(pass){
    var  pass=document.my.pass.value;
        var confpass=document.my.confpass.value;
        
        if(pass.length<6) {  
        document.getElementById("p").innerHTML="* password should be greater then 6".fontcolor('red');
   
         document.getElementById('pass').className = "er";
        
       return false;  }
   else 
       
       document.getElementById("p").innerHTML="";
    //document.getElementById("c").innerHTML="";
             document.getElementById("pass").className ="none";
			return true;
        
   }
   function cpassValidate(pass,confpass){
    var  pass=document.my.pass.value;
        var confpass=document.my.confpass.value;
        
        if(pass!=confpass) {  
        document.getElementById("c").innerHTML="* password not match".fontcolor('red');
   
        
         document.getElementById('confpass').className = "er";
       return false;  }
   else 
       
       document.getElementById("c").innerHTML="";
     document.getElementById("confpass").className ="none";
            return true;
        
   } 
   
  function  useridValidate(uid){
     
        var  uid=document.my.uid.value;
        if(uid==null||uid=="") {  
        document.getElementById("u").innerHTML=" *userid should not empty".fontcolor('red');
   
        return false;
        
        }
   else {
       
       document.getElementById("u").innerHTML="";  
       
   return true;}
  
  
  }
  function genderValidate(gender){
  	//alert(gender);
  	 var gender=document.my.gender.value.trim();
 if(gender=='Gender'){
 	document.getElementById("g").innerHTML="  *Select Gender".fontcolor('red');
 document.getElementById('gender').className = "er";
 
 return false;
 
 
  }else {
  	document.getElementById("g").innerHTML="";
  document.getElementById('gender').className = "none";
  	return true;
  }
  	}
  	function dateValidate(dat){
  		 var data=document.getElementById(dat).value;
		if(data==null || data==""){
		
	 	
	 document.getElementById("d").innerHTML="*Enter DOB".fontcolor('red');
	 document.getElementById('date').className = "er";
	 return false;
	  }
		
	
	else{
		
		document.getElementById("d").innerHTML="";
  document.getElementById('date').className = "none";
		return true; 
		 }
		
		 }