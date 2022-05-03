function change2() {
    const voy = document.querySelector(".voy");
    const res = document.querySelector(".res");
    res.style.opacity = "1";
    res.style.transition = "all 1s";
    voy.style.opacity = "0";
    voy.style.transition = "all 1s";
    voy.style.zIndex = "-1";
  }
  
  function change1() {
    const voy = document.querySelector(".voy");
    const res = document.querySelector(".res");
    voy.style.opacity = "1";
    voy.style.transition = "all 1s";
    voy.style.zIndex = "1";
    res.style.opacity = "0";
    res.style.transition = "all 1s";
  }
  
  function cancel() {
    const cr = document.querySelector(".confirm");
    cr.style.display = "none";
    cr.style.opacity = "0";
    res.style.transition = "all 1s";
  }
  
  const resBtn = document.querySelector("resBtn");
  const tbodyEl = document.querySelector("tbody");
  const table1 = document.querySelector(".tab1");
  const table2 = document.querySelector(".tab2");
  
  function onAddData(e) {
    e.preventDefault();
  }
  
  function onres(e) {
    if (!e.target.classList.contains("resBtn")) {
      return;
    }
  
    const cr = document.querySelector(".confirm");
    cr.style.display = "inherit";
    cr.style.position = "fixed";
    cr.style.top = "30%";
    cr.style.left = "40%";
    cr.style.opacity = "1";
    cr.style.transition = "all 1s";
  }
  
  function onDeleteRow(e) {
    if (!e.target.classList.contains("deleteBtn")) {
      return;
    }
  
    const btn = e.target;
    btn.closest("tr").remove();
  }
  
  //formEl.addEventListener("submit", onAddData);
  table1.addEventListener("click", onres);
  table2.addEventListener("click", onDeleteRow);