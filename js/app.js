const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const containter = document.querySelector(".container");

sign_up_btn.addEventListener('click',()=>{
    containter.classList.add("sign-up-mode");
});
sign_in_btn.addEventListener('click',()=>{
    containter.classList.remove("sign-in-mode");
});

