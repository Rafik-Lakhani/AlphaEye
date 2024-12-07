var men=document.querySelector("#men"); //here in image select
var women=document.querySelector("#women");
var unisex=document.querySelector("#uniseximg");

var mendiv=document.querySelector(".men"); // here in div select
var womendiv=document.querySelector(".women");
var unisexdiv=document.querySelector(".unisex");


men.addEventListener("click",()=>{
    mendiv.style.top="0";
    womendiv.style.top="200px";
    unisexdiv.style.top="400px";
}); 

women.addEventListener("click",()=>{
    mendiv.style.top="-200px";
    womendiv.style.top="0px";
    unisexdiv.style.top="200px";
}); 

unisex.addEventListener("click",()=>{
    mendiv.style.top="-400px";
    womendiv.style.top="-200px";
    unisexdiv.style.top="0px";
}); 


// here search div js code

var searchbtn=document.querySelector("#search-icon");
var searchdiv=document.querySelector(".search-sec");
var searchclose=document.querySelector("#closesearch")

searchbtn.addEventListener("click",()=>{
    searchdiv.style.display="block";
});


searchclose.addEventListener("click",()=>{
    searchdiv.style.display="none";
});

var menuopen=false;
document.querySelector("#user-logo").addEventListener("click",()=>{
    if(!menuopen){
        document.querySelector(".menu-div").style.right="20px";
        document.querySelector("#user-name-logo").style.display="none";
        document.querySelector("#userclose").style.display="block";
        document.querySelector("#user-logo").style.paddingLeft="3px";
        document.querySelector("#user-logo").style.paddingRight="3px";
        menuopen=true;
    }
    else{
        document.querySelector(".menu-div").style.right="-140px";
        document.querySelector("#user-name-logo").style.display="block";
        document.querySelector("#userclose").style.display="none";
        document.querySelector("#user-logo").style.paddingLeft="7px";
        document.querySelector("#user-logo").style.paddingRight="7px";
        menuopen=false;
    }
    
});



