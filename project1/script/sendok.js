function sendok(){
         if(username.value!=="" && usergen.value!=="" && userem.value!=="" && usersch.value!=="" && userid.value!=="" && userpwd.value!==""){
        //   localStorage.userid=userid.value;
        //   sessionStorage.userpwd=userpwd.value;
           return true;
         }else{
           alert("please input your account or password");
           return false;
         }
       }
