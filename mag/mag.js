
let signBtn = document.getElementById('signbtn');
/* let bgBox = document.getElementsByClassName('bgbox'); */
let hide = document.getElementById('movebox');
signBtn.addEventListener('click', moveLeft);
signBtn.addEventListener('click', changeColor);

function changeColor(){  
    let pos = 0;
/*     let positionright = 0;  */
    let id = setInterval(frame, 5);    
    function frame(){
    let point = document.getElementById('throw');
    if(pos == 20){ 
    clearInterval(id);
} else { 
    pos++;
    point.style.right = pos + 'px';
    signBtn.classList.add('color_selected');
    }   
}
}

function moveLeft(){
let position = 460;    
let id = setInterval(frame, 5);    
    function frame(){   
        if(position == 640) {  
 /*        document.getElementsById('movebox'); */
        let hide = document.getElementById('movebox');
            if(hide.style.visibility = "visible"){
                hide.style.visibility = "hidden";
                var show = document.getElementById('showbox');
                if(show.style.visibility = "hidden"){
                    show.style.visibility = "visible";
        }
    }
}
/*     while (bgBox.firstChild){
    bgBox.removeChild(bgBox.firstChild);
    }
    signBtn.addEventListener('click', changeView);
    function changeView() {
    const newbox = document.createElement('div');  
    newbox.classList.add('blocktwo');
    bgBox.appendChild(newbox);
    } */
/*     const newbox = document.createElement('div');
    newbox.classList = 'showbox';
    newbox.innerHTML = 
    let newElem = document.getElementById('showbox');
    bgBox.replaceChild (newbox, box); */
if (position == 820) {
    clearInterval(id);
} else { 
position++;
hide.style.right = position + 'px';
}
}
}




