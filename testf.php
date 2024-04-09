<script>
document.getElementById("marca").addEventListener("click", activateSecondLabel);

function activateSecondLabel() {
  document.getElementById("model").removeAttribute("disabled");
}
</script>