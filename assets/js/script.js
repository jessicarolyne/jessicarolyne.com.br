feather.replace();
let selectedMenuId = 3;

const menu = document.getElementById("menu");
const bordaE = document.getElementById("bordaE");
const bordaD = document.getElementById("bordaD");
const caixa = document.getElementById("caixa");
const banner = document.getElementById("banner");

const listaImagem = [
    {img: "assets/images/banner.png"},
    {img: "assets/images/banner-estudos.png"},
    {img: "assets/images/banner-tec.png"},
]

//document.getElementById("bl-1").scrollIntoView();
menu.addEventListener("click", changeContent);

function changeContent(event){
    const target = event.target.id;
    
    
    if(target === "menu" || target === "" || target == selectedMenuId){
        return;
    }
    
    //seleção menu
    document.getElementById(target).classList.add("selected");
    document.getElementById(selectedMenuId).classList.remove("selected");
    
    //scroll dos boards
    const offset = selectedMenuId - target;
    bordaE.scrollTop -= offset * 370;
    bordaD.scrollTop += offset * 370;
    console.log(selectedMenuId, target);
    console.log(offset);

    //controle da caixa
    caixa.classList.add("caixa-fechada");
    setTimeout(function(){
        banner.src = listaImagem[target-1].img;
        caixa.classList.remove("caixa-fechada");
        caixa.classList.add("caixa-aberta");
    }, 500);

    selectedMenuId = target;
}