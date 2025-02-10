const mainElements = document.querySelectorAll(".main-elements");
const hoverColors = ["royalblue", "blue", "mediumvioletred", "yellowgreen"];

mainElements.forEach((el, i) =>{
    el.addEventListener("mouseover", () =>{
        el.style.backgroundColor = hoverColors[i];
    });
    el.addEventListener("mouseout", () =>{
        el.style.backgroundColor = "white";
    });
});