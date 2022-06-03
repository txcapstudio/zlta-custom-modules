// SVG Paths - Click
elements = Array.from(document.querySelectorAll('svg #Run3, #Run4, #Run5, #Run6, #Run7'));
elements.forEach(function(el) {
    el.addEventListener("click", start);
});

// ZipLine Runs - Hover
let ziplineRuns = Array.from(document.querySelectorAll('.svg_zipline_run'));
ziplineRuns.forEach( (el) => {
   el.addEventListener('mouseenter', () => {
        console.log('reduce opacity on any not hovered');
        ziplineRuns.forEach( (newEl) => {
            newEl.classList.add('svg_zipline_run--reduce-opacity');
        } );
        el.classList.remove('svg_zipline_run--reduce-opacity');

        // For tooltip
        // Get ID of el
        // Show {elId}_Tooltip
   });

   el.addEventListener('mouseout', () => {
       ziplineRuns.forEach( (newEl) => {
           newEl.classList.remove('svg_zipline_run--reduce-opacity');
       } );

       // For tooltip
       // Just hide all tooltips
   });

});

// Close Button
document.querySelector('.modal-box--wrapper a.close-btn').addEventListener('click', (e) => {
    e.preventDefault();
    let modal = document.querySelector(".modal-box--wrapper");
    modal.style.display = "none";
});

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


    modal.style.display = "block";

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