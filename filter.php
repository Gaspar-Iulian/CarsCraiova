<form id="cautare-form">
    <div class="form-group">
        <!-- <label id="marca" for="marca">Marca:</label> -->
        <select id="marca" name="marca">
        <?php
        var_export($marcaForSelectType);
        foreach ($marcaForSelectType as $marca)  {
            echo 
            '<option value='.$marca['id'].'>'.$marca['denumire'].'</option>';
        }
        ?>
</select>

<!-- <label id="model" for="model">Model:</label> -->
<select id="model" name="model">
    <option>Selectați marca...</option>
</select>

<script>

    document.getElementById("marca").addEventListener("change", function() {
        alert(1)
    var selectedValue = this.value;
    console.log(selectedValue)
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "http://localhost/carscraiova/?filters=getMarca&items=all", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
        //var response = JSON.parse(xhr.responseText);
        //populateSecondSelect(response);
        console.log(xhr);
        }
    };
    xhr.send();
    });


function populateSecondSelect(data) {
  var secondSelect = document.getElementById("secondSelect");
  secondSelect.innerHTML = ""; // Clear existing options
  
  data.forEach(function(item) {
    var option = document.createElement("option");
    option.value = item.value;
    option.textContent = item.label;
    secondSelect.appendChild(option);
  });
}
</script>