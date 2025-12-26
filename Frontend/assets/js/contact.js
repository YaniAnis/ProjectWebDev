// FAQ Accordion Functionality
const faqItems = document.querySelectorAll(".faq-item")

faqItems.forEach((item) => {
  const question = item.querySelector(".faq-question")

  question.addEventListener("click", () => {
    // Close all other items
    faqItems.forEach((otherItem) => {
      if (otherItem !== item) {
        otherItem.classList.remove("active")
      }
    })

    // Toggle current item
    item.classList.toggle("active")
  })
})

// Form Submission
const contactForm = document.querySelector(".contact-form")

if (contactForm) {
  contactForm.addEventListener("submit", (e) => {
    e.preventDefault()

    // Get form values
    const formData = new FormData(contactForm)

    // Here you would typically send the form data to a server
    console.log("Form submitted with data:", Object.fromEntries(formData))

    // Show success message
    alert("Merci! Votre message a été envoyé avec succès. Nous vous répondrons dès que possible.")

    // Reset form
    contactForm.reset()
  })
}

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault()
    const target = document.querySelector(this.getAttribute("href"))
    if (target) {
      target.scrollIntoView({ behavior: "smooth" })
    }
  })
})
