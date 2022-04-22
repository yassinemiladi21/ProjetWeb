function change1() {
  const signup = document.querySelector(".signup");
  const login = document.querySelector(".login");
  signup.style.opacity = "1";
  signup.style.transition = "all 1s";
  login.style.opacity = "0";
  login.style.transition = "all 1s";
  login.style.zIndex = "-1";
}

function change2() {
  const signup = document.querySelector(".signup");
  const login = document.querySelector(".login");
  login.style.opacity = "1";
  login.style.transition = "all 1s";
  login.style.zIndex = "1";
  signup.style.opacity = "0";
  signup.style.transition = "all 1s";
}

function passage()
{
  const tout=document.querySelector(".div");
  tout.style.display = "none";
  tout.style.opacity = "0";
}