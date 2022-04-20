function create() {
  const cr = document.querySelector(".creation");
  cr.style.display = "inherit";
  cr.style.position = "fixed";
  cr.style.top = "15%";
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

const formEl = document.querySelector("form");
const tbodyEl = document.querySelector("tbody");
const tableEl = document.querySelector("table");
function onAddData(e) {
  e.preventDefault();
  const nbpassagers = document.getElementById("nbpassagers").value;
  const depart = document.getElementById("depart").value;
  const arrivee = document.getElementById("arrivee").value;
  const prix = document.getElementById("prix").value;
  const date = document.getElementById("date").value;
  const heuredep = document.getElementById("heuredep").value;
  tbodyEl.innerHTML += `
            <tr>
                <td></td>
                <td>${nbpassagers}</td>
                <td>${depart}</td>
                <td>${arrivee}</td>
                <td>${prix}</td>
                <td>${date}</td>
                <td>${heuredep}</td>
                <td><button class="btn deleteBtn">Supprimer</button></td>
            </tr>
        `;
}

function onDeleteRow(e) {
  if (!e.target.classList.contains("deleteBtn")) {
    return;
  }

  const btn = e.target;
  btn.closest("tr").remove();
}

formEl.addEventListener("submit", onAddData);
tableEl.addEventListener("click", onDeleteRow);
