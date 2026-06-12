//SCRIPT PRE ZAPAMÄTANIE SI COOKIES
//KREATÍVNY BOD
window.addEventListener("load", function() {
    const cookieConsent = document.getElementById("cookieConsent");
    const acceptCookies = document.getElementById("acceptCookies");

    if (!cookieConsent || !acceptCookies) {
        return;
    }

    if (!sessionStorage.getItem("cookiesAccepted")) {
        cookieConsent.style.display = "block";
    }

    acceptCookies.addEventListener("click", function() {
        cookieConsent.style.display = "none";
        sessionStorage.setItem("cookiesAccepted", "true");
    });
});
