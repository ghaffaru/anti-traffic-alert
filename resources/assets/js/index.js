const loading = document.querySelector(".upload");
const submitBtn = document.querySelector(".submitBtn");

submitBtn.addEventListener("click", function (e) {
  e.preventDefault();
  loading.style.display = "block";
});
