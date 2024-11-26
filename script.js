clicks = 0;

function spied (){

    clicks+=1;

    console.log(clicks);
    document.getElementById("klikski").textContent = clicks;
    document.getElementById("input").value = clicks;
}

