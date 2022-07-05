function toast() {
    Toastify({
        text: "Dziękujemy za pobranie naszego kasyna :))",
        duration: 3000,
        newWindow: false,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
            background: "#f6ff00",
            zIndex: "99999999",
            color: "black",
        },
        onClick: function () { } // Callback after click
    }).showToast();
}