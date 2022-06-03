elements = Array.from(document.querySelectorAll('svg #Run3, #Run4, #Run5, #Run6, #Run7'));

elements.forEach(function(el) {
    el.addEventListener("click", start);

})

// event listener functions


function start(e){
    let modal = document.querySelector(".modal-box--wrapper")
    let closeBtn = document.querySelector(".close-btn")
    let targetModal = document.getElementById('modal_' + this.id);
    let activeClass = document.querySelector(".modal-content")
    if (activeClass !== null) {
        activeClass.classList.remove("modal-content")
    }

    targetModal.classList.add('modal-content');


    modal.style.display = "block"



    closeBtn.onclick = function(){
        if (e.target == closeBtn) {
            modal.style.display = "none"
        }

    }
    window.onclick = function(e){
        if(e.target == modal){
            modal.style.display = "none"
        }
    }

}


//  tool tip functionality
function showTooltip(evt, text) {
    let tooltip = document.getElementById("tooltip");
    tooltip.innerHTML = text;
    tooltip.style.display = "block";
    tooltip.style.left = evt.pageX + 10 + 'px';
    tooltip.style.top = evt.pageY + 10 + 'px';


}

function hideTooltip() {
    var tooltip = document.getElementById("tooltip");
    tooltip.style.display = "none";
}




// onmouseenter="showTooltip(evt, 'Run #7');" onmouseout="hideTooltip();"