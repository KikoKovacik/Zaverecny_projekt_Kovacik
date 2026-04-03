//SCRIPT PRE ZAPAMÄTANIE SI COOKIES
//KREATÍVNY BOD
window.addEventListener("load", function() {
    if (!sessionStorage.getItem("cookiesAccepted")) {
        document.getElementById("cookieConsent").style.display = "block";
    }

    document.getElementById("acceptCookies").addEventListener("click", function() {
        document.getElementById("cookieConsent").style.display = "none";
        sessionStorage.setItem("cookiesAccepted", "true");
    });
});

//SCRIPT PRE UPOZORNENIA V KONTAKTNOM FORMULÁRI A PRESMEROVANIE NA THANKYOU
document.getElementById("kontaktForm").addEventListener("submit", function(e) {
    e.preventDefault();
    const meno = document.getElementById("meno").value.trim();
    const email = document.getElementById("email").value.trim();
    const sprava = document.getElementById("sprava").value.trim();
    const suhlas = document.getElementById("suhlas").checked;
    if (meno === "" || email === "" || sprava === "") {
        alert("Prosím, vyplňte všetky polia.");
        return;
    }
    if (!suhlas) {
        alert("Musíte súhlasiť so spracovaním osobných údajov.");
        return;
    }
    window.location.href = "thankyou.html";
});