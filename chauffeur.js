function create() {
  const cr = document.querySelector(".creation");
  cr.style.display = "inherit";
  cr.style.position = "fixed";
  cr.style.top = "20%";
  cr.style.left = "35%";
  cr.style.opacity = "1";
  login.style.transition = "all 1s";
}

function cancel() {
  const cr = document.querySelector(".creation");
  cr.style.display = "none";
  cr.style.opacity = "0";
  login.style.transition = "all 1s";
}
