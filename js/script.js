function togglePreview(previewElementId, openButtonId, closeButtonId) {
  const previewElement = document.getElementById(previewElementId);
  const openButton = document.getElementById(openButtonId);
  const closeButton = document.getElementById(closeButtonId);

  openButton.addEventListener("click", () => {
    previewElement.classList.add("active");
    document.body.style.overflow = "hidden";
  });

  closeButton.addEventListener("click", () => {
    previewElement.classList.remove("active");
    document.body.style.overflow = "scroll";
  });
}

togglePreview("prvw-mn", "btn-opn-prvw-mn", "btn-cls-prvw-mn");
togglePreview("prvw-slt-gms", "btn-opn-prvw-slt", "btn-cls-prvw-slt");
togglePreview("prvw-pkr-gms", "btn-opn-prvw-pkr", "btn-cls-prvw-pkr");
togglePreview("prvw-wof-gms", "btn-opn-prvw-wof", "btn-cls-prvw-wof");
togglePreview("prgs-frm", "btn-prgs", "btn-cls-prgs");

const closeErrButton = document.getElementById("btn-stsmdl");
const errModal = document.getElementById("stsmdl");

closeErrButton.addEventListener("click", () => {
  errModal.classList.remove("active");
});

const urlParams = new URLSearchParams(window.location.search);
const modalTitle = document.getElementById("mdl-ttl");
const modalContent = document.getElementById("mdl-ctnt");
const modalIcon = document.getElementById("mdl-icn");
const modalIconStatus = document.getElementById("mdl-icn-stts");

if (urlParams.has("stats") && urlParams.get("stats") === "phoneexisted") {
  modalIconStatus.classList.add("error");
  modalIcon.src = "./image/icon-close.png";
  modalTitle.innerHTML = "Contact Number Already Exists";
  modalContent.innerHTML =
    "The contact number you entered is already registered in our system. Please use a different contact number or log in to your account.";

  errModal.classList.add("active");
}

if (urlParams.has("stats") && urlParams.get("stats") === "success") {
  modalIconStatus.classList.add("success");
  modalIcon.src = "./image/icon-check.png";
  modalTitle.innerHTML = "Registration Successful";
  modalContent.innerHTML =
    "Your account has been successfully created! As a special welcome, you've received a 100 pesos bonus to get started.";

  errModal.classList.add("active");
}
