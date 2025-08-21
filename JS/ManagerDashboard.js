function previewImage(event) {
    const file = event.target.files[0];
    const preview = document.getElementById("imagePreview");
    const reader = new FileReader();

    reader.onload = function(e) {
        preview.src = e.target.result;
        preview.style.display = "block"; // Show preview
    }

    if (file) {
        reader.readAsDataURL(file);
    }
}
