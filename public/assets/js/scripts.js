// sliders Produits Phares
let virtualWrap = document.querySelector(".virtual-wrap-slide");
let virtualSlide = document.querySelectorAll(".virtual-slide-cat");
let virtualPrev = document.querySelector("#virtual-prev");
let virtualNext = document.querySelector("#virtual-next");

let virtualCounter = 0;
let virtualSize = virtualSlide[0].clientWidth;
virtualPrev.disabled = true;
virtualPrev.style.opacity = "0.4";


virtualWrap.style.transform = 'translateX(' + (-virtualSize * virtualCounter) + 'px)';

virtualNext.addEventListener("click", () => {

    virtualWrap.style.transition = "transform 0.4s ease-in-out";
    virtualCounter++;
    virtualWrap.style.transform = 'translateX(' + (-virtualSize * virtualCounter) + 'px)';
    if (virtualSlide[virtualCounter].id === "lastvirtual-cat") {
        virtualNext.disabled = true;


    };
});

virtualPrev.addEventListener("click", () => {
    virtualWrap.style.transition = "transform 0.4s ease-in-out";
    virtualCounter--;
    virtualWrap.style.transform = 'translateX(' + (-virtualSize * virtualCounter) + 'px)';
    if (virtualSlide[virtualCounter].id === "firstvirtual-cat") {
        virtualPrev.disabled = true;
    }
});

virtualWrap.addEventListener("transitionend", () => {
    if (virtualSlide[virtualCounter].id === "lastvirtual-cat") {
        virtualWrap.style.transition = "none";
        virtualNext.style.opacity = "0.4";
        virtualNext.style.cursor = "default";

    }
    else {
        virtualNext.style.opacity = "1";
        virtualNext.style.cursor = "pointer";
        virtualNext.disabled = false;
    }

    if (virtualSlide[virtualCounter].id === "firstvirtual-cat") {
        virtualWrap.style.transition = "none";
        virtualPrev.style.opacity = "0.4";
        virtualPrev.style.cursor = "default";
    }
    else {
        virtualPrev.style.opacity = "1";
        virtualPrev.style.cursor = "pointer";
        virtualPrev.disabled = false;
    }
})

// Slider populaire

let virtualWrapPop = document.querySelector(".virtual-wrap-slide-pop");
let virtualSlidePop = document.querySelectorAll(".virtual-slide-pop");
let virtualPrevPop = document.querySelector("#virtual-prev-pop");
let virtualNextPop = document.querySelector("#virtual-next-pop");

let virtualCounterPop = 0;
let virtualSizePop = virtualSlide[0].clientWidth;
virtualPrevPop.disabled = true;
virtualPrevPop.style.opacity = "0.4";


virtualWrapPop.style.transform = 'translateX(' + (-virtualSize * virtualCounter) + 'px)';

virtualNextPop.addEventListener("click", () => {

    virtualWrapPop.style.transition = "transform 0.4s ease-in-out";
    virtualCounter++;
    virtualWrapPop.style.transform = 'translateX(' + (-virtualSize * virtualCounter) + 'px)';
    if (virtualSlidePop[virtualCounter].id === "lastvirtualpop") {
        virtualNextPop.disabled = true;


    };
});

virtualPrevPop.addEventListener("click", () => {
    virtualWrapPop.style.transition = "transform 0.4s ease-in-out";
    virtualCounter--;
    virtualWrapPop.style.transform = 'translateX(' + (-virtualSize * virtualCounter) + 'px)';
    if (virtualSlidePop[virtualCounter].id === "firstvirtualpop") {
        virtualPrevPop.disabled = true;
    }
});

virtualWrapPop.addEventListener("transitionend", () => {
    if (virtualSlidePop[virtualCounter].id === "lastvirtualpop") {
        virtualWrapPop.style.transition = "none";
        virtualNextPop.style.opacity = "0.4";
        virtualNextPop.style.cursor = "default";

    }
    else {
        virtualNextPop.style.opacity = "1";
        virtualNextPop.style.cursor = "pointer";
        virtualNextPop.disabled = false;
    }

    if (virtualSlidePop[virtualCounter].id === "firstvirtualpop") {
        virtualWrapPop.style.transition = "none";
        virtualPrevPop.style.opacity = "0.4";
        virtualPrevPop.style.cursor = "default";
    }
    else {
        virtualPrevPop.style.opacity = "1";
        virtualPrevPop.style.cursor = "pointer";
        virtualPrevPop.disabled = false;
    }
})