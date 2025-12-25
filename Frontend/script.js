// Function to toggle password visibility
function togglePassword() {
  const passwordInput = document.getElementById("password")
  if (passwordInput.type === "password") {
    passwordInput.type = "text"
  } else {
    passwordInput.type = "password"
  }
}

// Get the tab buttons and login card
const signinTab = document.getElementById("signin-tab")
const signupTab = document.getElementById("signup-tab")
const loginCard = document.querySelector(".login-card")

// Add click event listener to Sign up tab
signupTab.addEventListener("click", () => {
  // Toggle active/inactive classes
  signinTab.classList.remove("active")
  signinTab.classList.add("inactive")
  signupTab.classList.remove("inactive")
  signupTab.classList.add("active")

  // Add slide-right class to move the card to the right
  loginCard.classList.add("slide-right")
})

// Add click event listener to Sign in tab
signinTab.addEventListener("click", () => {
  // Toggle active/inactive classes
  signupTab.classList.remove("active")
  signupTab.classList.add("inactive")
  signinTab.classList.remove("inactive")
  signinTab.classList.add("active")

  // Remove slide-right class to move the card back to the left
  loginCard.classList.remove("slide-right")
})
