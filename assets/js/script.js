window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("top").style.top = "-80px";
        document.getElementById("extend").style.top = "0px";
        document.getElementById("to-top").style.opacity = "1";
        document.getElementById("to-top").style.cursor = "pointer";
    } else {
        document.getElementById("top").style.top = "0px";
        document.getElementById("extend").style.top = "-80px";
        document.getElementById("to-top").style.opacity = "0";
        document.getElementById("to-top").style.cursor = "default";
    }
}

function scrollAbout() {
    window.scrollTo(0, 800);
}

function scrollTeam() {
    window.scrollTo(0, 1640);
}

function scrollPackages() {
    window.scrollTo(0, 2440);
}

function scrollContact() {
    window.scrollTo(0, 3000);
}

function toTop() {
    window.scrollTo(0, 0);
}


let modal = document.querySelector(".modal");
let closeButton = document.querySelector(".close");

function toggleModal(a,b,c,d,e,f,g,h,i,j,k,l,m,n) {

    let body = null;

    if (h == "empty") {
        body = "<div class=\"modal-body\">\n" +
            "            <p>" + b + "</p>\n" +
            "            <p>" + c + "</p>\n" +
            "            <h1>" + d + "</h1>\n" +
            "            <h2><i class=\"fas fa-check\"></i>" + e + "</h2>\n" +
            "            <h2><i class=\"fas fa-check\"></i>" + f + "</h2>\n" +
            "        </div>";
    }

    if (k == "empty" && h != "empty") {
        body = "<div class=\"modal-body\">\n" +
            "            <p>" + b + "</p>\n" +
            "            <p>" + c + "</p>\n" +
            "            <h1>" + d + "</h1>\n" +
            "            <h2><i class=\"fas fa-check\"></i>" + e + "</h2>\n" +
            "            <h2><i class=\"fas fa-check\"></i>" + f + "</h2>\n" +
            "            <h2><i class=\"fas fa-check\"></i>" + i + "</h2>\n" +
            "            <h2><i class=\"fas fa-check\"></i>" + j + "</h2>\n" +
            "        </div>";
    }

    if (k != "empty" && h != "empty") {
        body = "<div class=\"modal-body\">\n" +
            "            <p>" + b + "</p>\n" +
            "            <p>" + c + "</p>\n" +
            "            <p>" + l + "</p>\n" +
            "            <h1>" + d + "</h1>\n" +
            "            <h2><i class=\"fas fa-check\"></i>" + e + "</h2>\n" +
            "            <h2><i class=\"fas fa-check\"></i>" + f + "</h2>\n" +
            "            <h2><i class=\"fas fa-check\"></i>" + i + "</h2>\n" +
            "            <h2><i class=\"fas fa-check\"></i>" + j + "</h2>\n" +
            "            <h2><i class=\"fas fa-check\"></i>" + m + "</h2>\n" +
            "            <h2><i class=\"fas fa-check\"></i>" + n + "</h2>\n" +
            "        </div>";
    }

    let footer = "<div class=\"modal-footer\">\n" +
        "            <button>" + g + "</button>\n" +
        "        </div>";

    if (modal.style.display != "block") {
        modal.style.display = "block";
        document.querySelector(".modal-body").innerHTML = body;
        document.querySelector(".modal-footer").innerHTML = footer;
        document.querySelector(".header").innerHTML = a;
        setTimeout(function () {
            modal.style.opacity = "1";
        }, 1);

    } else {
        modal.style.display = "none";
        modal.style.opacity = "0";
    }
}

function windowOnClick(event) {
    if (event.target === modal) {
        toggleModal();
    }
}

closeButton.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick);
