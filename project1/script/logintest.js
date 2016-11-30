function logintest(){
         if(userid.value!=="" && userpwd.value!==""){           
           return true;
         }else{
           alert("please input your account or password");
           return false;
         }
       }
