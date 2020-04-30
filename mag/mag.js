
let signBtn = document.getElementById('signbtn');
let hide = document.getElementById('movebox');
let show = document.getElementById('showbox');

signBtn.addEventListener('click', changeColor);
signBtn.addEventListener('click', moveLeft);

let options = {
    'effect': 'drop',
    'effectOptions': {
        'color': 'rgba(0,0,255,0.5)',
        'radius': 100
    }
};


let color = 'deepskyblue';
function changeColor(){  
    let point = document.getElementById('throw');
    if(point.style.visibility = "hidden"){
        $("showbox").fadeToggle("slow", "linear");
        point.style.visibility = "visible";
        point.style.opacity = "1";}  
    let postop = 5;
    let posleft =150;
    let id = setInterval(frame,5);
    function frame(){
    if(postop == 96){ 
    if(point.style.visibility = "visible"){
            point.style.visibility = "hidden";
            $("showbox").fadeToggle("slow", "linear");
            point.style.opacity = "0";}
    clearInterval(id);
    signBtn.style.background = color;
    } else {
    postop++;
    posleft++;
    point.style.right = posleft + 'px';
    point.style.bottom = postop + 'px';
    }
}

}

function moveLeft(){
setTimeout(function () {
let position = 460;    
let id = setInterval(frame, 4);    
    function frame(){   
        if(position == 460) {  
            if(hide.style.visibility = "visible"){
                hide.style.visibility = "hidden";
                hide.style.opacity = "0";
                $("movebox").fadeToggle("fast", "linear");
                if(show.style.visibility = "hidden"){
                    show.style.visibility = "visible";
                    show.style.opacity = "1";
                    $("showbox").fadeToggle("fast", "linear");      
        }
    }
}
if (position == 640) {
    clearInterval(id);
} else { 
position++;
hide.style.right = position + 'px';
}
}
}, 800);
}

