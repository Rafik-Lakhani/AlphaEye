console.log("hello");

const firstimg=document.querySelector("higlight-img");
const secimg=document.querySelector("#higlight-img-2");
const thrimg=document.querySelector("#higlight-img-3");

secimg.addEventListener("click", () => {
    firstimg.style.width="25%";
})