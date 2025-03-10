const mainElements = document.querySelectorAll(".main-elements");
const hoverColors = ["royalblue", "blue", "mediumvioletred", "yellowgreen"];
const signOutBtn = document.querySelector(".sign-out");

const singOutPopup = new Popup({
    id: "sign-out-popup",
    title: "Are you sure you want to sign out?",
    content: `{btn-confirm}[Sign out]`,
});

mainElements.forEach((el, i) =>{
    el.addEventListener("mouseover", () =>{
        el.style.backgroundColor = hoverColors[i];
    });
    el.addEventListener("mouseout", () =>{
        el.style.backgroundColor = "white";
    });
});

signOutBtn.addEventListener("click", () =>{
    singOutPopup.show();
    const confirmBtn = document.querySelector(".confirm");
    confirmBtn.addEventListener("click", () =>{
        document.cookie = "user=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        location.reload();
    });
});