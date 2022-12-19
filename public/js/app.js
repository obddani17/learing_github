const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});
const sign_in_btn1 = document.querySelector("#sign-in-btn1");
const sign_up_btn1 = document.querySelector("#forgot-in-btn1");
const container1 = document.querySelector(".container");

sign_up_btn1.addEventListener("click", () => {
  container1.classList.add("forgot-in-mode");
});

sign_up_btn1.addEventListener("click", () => {
  container1.classList.add("forgot-in-mode");
});