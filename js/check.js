/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function chkname(form){
    if (form.name.value==""){
        name1.innerHTML="font color=#FF0000> Username is required.</font>";
    }
    else{
        var user = form.name.value;
        var url="checkname.php?user="+user;
        xmlhttp.open("GET",url,true);
        xmlhttp.onreadystatechange=function(){
            if (xmlhttp.readyState==4){
                var msg=xmlhttp.responseText;
                if (msg=='3'){
                    name1.innerHTML="<font color=#FF0000> Username taken.</font>";
                    return false;
                }
                else if (msg=='2'){
                    name1.innerHTML="<font color=green> Valid Username.</font>";
                    form.c_name.value="yes";
                }
                else name1.innerHTML="<font color=green> Unexpected Error.</font>";
            }
        }
        xmlhttp.send(null);
    }
}

function chkinput(form){
    if(form.name.value==""){
        form.name.focus();
        return false;
    }
    if(form.c_name.value == "not"){
        form.name.select();
        return false;
    }
}
