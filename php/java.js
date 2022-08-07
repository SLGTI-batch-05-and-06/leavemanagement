const signupbtn = document.querySelector(".signupbtn");
const loginbtn = document.querySelector(".loginbtn");
const movebtn = document.querySelector(".movebtn");
const signup = document.querySelector(".signup");
const login = document.querySelector(".login");

loginbtn.addEventListener("click",()=>{
    movebtn.classList.add("rightbtn");
    login.classList.add("loginform");
    signup.classList.remove("signupform");
    movebtn.innerHTML = "Login";
})

signupbtn .addEventListener("click",()=>{
    movebtn.classList.remove("rightbtn");
    login.classList.remove("loginform");
    signup.classList.add("signupform");
    movebtn.innerHTML = "signup";
})