 
window.addEventListener('load',function(){
   
var ini=document.getElementById("ini_ses");
var divLogin = document.getElementById("mydiv");

ini.addEventListener('click',function(){
login();
})

function login(){
    divLogin.style.display='block'
}
var close_l=document.getElementById("close_login");
close_l.addEventListener('click',function(){
    close_login();
    })
function close_login(){
    divLogin.style.display='none'
}
});