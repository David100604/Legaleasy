document.getElementById("image-upload").addEventListener("change", function(event) {
    const reader = new FileReader();
    reader.onload = function() {
        const profileImage = document.getElementById("profile-image");
        profileImage.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
});
