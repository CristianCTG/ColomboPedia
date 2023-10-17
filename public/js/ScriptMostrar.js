
document.addEventListener("DOMContentLoaded", function () {
    const passwordInput = document.querySelector("input[name='password']");
    const passwordToggle = document.querySelector(".password-toggle");

    passwordToggle.addEventListener("click", function () {
        if (passwordInput.type === "password") {
             passwordInput.type = "text";
            passwordToggle.setAttribute("class", "fa-regular fa-eye password-toggle");
            passwordToggle.style.transform = "translateX(1160%) translateY(-190%)";
        } else {
            passwordInput.type = "password";
            passwordToggle.setAttribute("class", "fa-regular fa-eye-slash password-toggle");
            passwordToggle.style.transform = "translateX(1040%) translateY(-190%)";
            
            
            
        }
    });
});
