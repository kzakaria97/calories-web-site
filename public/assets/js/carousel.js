document.body.onload = function () {
    nbr = 4;
    p = 0;
    container = document.getElementById("container");
    gauche = document.getElementById("gauche");
    droit = document.getElementById("droit");
    container.style.width = 700 * nbr + "px";
    for (i = 1; i <= nbr; i++) {
        div = document.createElement("div");
        div.className = "photo";
        div.style.backgroundImage =
            "url('../assets/image/carousel/img" + i + ".jpg')";
        container.appendChild(div);
    }
};
droit.onclick = function () {
    if (p > -nbr + 1) {
        p--;
        container.style.transform = "translate(" + p * 700 + "px)";
        container.style.transition = "all 0.5s ease";
    }
};
gauche.onclick = function () {
    if (p < 0) {
        p++;
        container.style.transform = "translate(" + p * 700 + "px)";
        container.style.transition = "all 0.5s ease";
    }
};
