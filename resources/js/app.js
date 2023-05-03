// main function, wait for a full load page
window.onload = () => {
    getPath(window.location.pathname.slice(1));
    let sections = document.querySelectorAll(".menu__link");
    let main = document.querySelector('.main');
    let open = document.querySelector('.open');

    open.onclick = () => {
        main.classList.toggle('active');
    }

    sections.forEach((section) => {
        section.onclick = (e) => {
            getPath(e.srcElement.id);
        };
    });
};

// variable for start and stop animations
let interval;

// filter the page name and call find to get a fetch request
function getPath(path) {
    if (interval) {
        clearInterval(interval);
    }
    let title = document.querySelector(".content__title");
    addClass(".change", "active", true);
    addClass(".menu__link", "active", false);

    setTimeout(() => {
        switch (path) {
            case "project":
                find("http://curriculum.test/api/projects");
                title.innerText = "Projects";
                addClass("#project", "active", true);
                break;
            case "contact":
                find("http://curriculum.test/api/contact");
                title.innerText = "Contact";
                addClass("#contact", "active", true);
                break;
            case "skill":
                find("http://curriculum.test/api/skill");
                title.innerText = "Skills";
                addClass("#skill", "active", true);
                break;
            case "about":
                find("http://curriculum.test/api/about");
                title.innerText = "About me";
                addClass("#about", "active", true);
                break;
            default:
                find("http://curriculum.test/api/home");
                title.innerText = " ";
                addClass("#home", "active", true);
                setTimeout(() => {
                    interval = animation();
                }, 500);
        }
    }, 200);
}

// search an element for the api
function find(url) {
    let main = document.querySelector(".content--container");
    if (main.querySelector("div")) {
        main.querySelector("div").remove();
    }
    fetch(url)
        .then((e) => e.json())
        .then((res) => {
            insert(res, main);
        })
        .catch((error) => {
            let title = document.querySelector(".content__title");
            title.innerText = "Error";
            addClass(".change", "active", false);
        });
}

// Insert a element
async function insert(item, container) {
    let element = document.createElement(item.element);
    element.classList.add(item.className);
    if (item.link) {
        element.setAttribute("href", item.link);
        element.setAttribute("target", "__blank");
    }

    if (item.img) {
        element.setAttribute("src", item.img);
    }

    if (typeof item.content == "object") {
        let ids = Object.keys(item.content);
        for (var i = 0; i < ids.length; i++) {
            insert(item.content[ids[i]], element);
        }
    } else {
        element.innerHTML = item.content;
    }

    container.appendChild(element);

    addClass(".change", "active", false);
}

// add or remove a class
function addClass(item, name, add) {
    let elements = document.querySelectorAll(item);

    if (add) {
        elements.forEach((element) => {
            element.classList.add(name);
        });
    } else {
        elements.forEach((element) => {
            element.classList.remove(name);
        });
    }
}

// animation of home
function animation() {
    let name = document.querySelector(".home");
    if (name) {
        let moreT = false;
        let moreR = false;

        name.style.top = "10rem";
        name.style.left = "10rem";
        let interval = setInterval(() => {
            let width = document.querySelector(".content").scrollWidth;
            let height = document.querySelector(".content").scrollHeight;
            [name.style.top, moreT] = move(
                parseInt(name.style.top),
                height - name.scrollHeight,
                moreT
            );
            [name.style.left, moreR] = move(
                parseInt(name.style.left),
                width - name.scrollWidth,
                moreR
            );
        }, 15);

        return interval;
    }
}

// animation move in home
function move(value, max, more) {
    if (more) {
        if (value >= max) {
            return [(value += 2) + "px", false];
        }
        return [(value += 2) + "px", true];
    } else {
        if (value < 1) {
            return [(value -= 2), true];
        }
        return [(value -= 2) + "px", false];
    }
}

