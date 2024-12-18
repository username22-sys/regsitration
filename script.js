function validateForm() {
    const email = document.getElementById('email').value;
    const bio = document.getElementById('bio').value;

    // Check email pattern
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    // Check bio length
    if (bio.length < 10) {
        alert("Bio must be at least 10 characters long.");
        return false;
    }

    return true; // Form is valid
}
