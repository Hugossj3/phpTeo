const formulario = document.getElementById("loginForm");

formulario.addEventListener("submit", function (event) {
    event.preventDefault();


    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;


    fetch("login.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: `username=${username}&password=${password}`,
    }).then(response => response.json())
        .then(data => {
            if (data.success) {
                window.location.href = `welcome.php?nombre=${username}`;
            } else {
                alert("Inicio de sesion frallido, Por favor, intentelo de nuevo");
            }
        })
        .catch(error => {
            console.log(error);
            alert("Upss... Acaba de petar la base de datos")
        });
})