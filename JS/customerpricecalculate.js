document.getElementById("calculate-btn").addEventListener("click", function() {
    var distance = parseFloat(document.getElementById("distance").value);
    if (isNaN(distance) || distance <= 0) {
        alert("Please enter a valid distance");
        return;
    }
    var totalPrice = distance * pricePerKm;
    document.getElementById("total-price").innerText = totalPrice.toFixed(2);
});
