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

if (urlParams.has("error") && urlParams.get("error") === "phoneexisted") {
  errModal.classList.add("active");
}
