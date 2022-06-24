// SVG Paths - Click
elements = Array.from(document.querySelectorAll('svg #Run3, #Run4, #Run5, #Run6, #Run7'));
elements.forEach( function(el) {
    el.addEventListener("click", start);
});

// ZipLine Runs - Hover
let ziplineRuns = Array.from(document.querySelectorAll('.svg_zipline_run'));
ziplineRuns.forEach( (el) => {

    // Run hover
    el.addEventListener('mouseenter', () => {
        ziplineRuns.forEach( (newEl) => {
            if ( newEl !== el ) {
                newEl.style.opacity = 0.5;
            }
            // newEl.classList.add('svg_zipline_run--reduce-opacity');
        } );
        // el.classList.remove('svg_zipline_run--reduce-opacity');
    });

    // Run mouseout
    el.addEventListener('mouseleave', () => {
       ziplineRuns.forEach( (newEl) => {
           newEl.style.opacity = 1.0;
           // newEl.classList.remove('svg_zipline_run--reduce-opacity');
       });
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
        if( e.target == modal ){
            modal.style.display = "none"
        }
    }

}