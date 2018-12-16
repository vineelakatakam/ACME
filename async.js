async function smallStuff() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML = this.responseText;
            console.log(this.responseText);
        }
    };
    xhttp.open('GET', 'check.php?fname=Henry&lname=Ford', true);
    xhttp.send();
    await sleep(1000);

}

async function readys() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo1").innerHTML = this.responseText;
            console.log(this.responseText);
        }
    };
    xhttp.open('GET', 'check.php?fname=tony&lname=Ford', true);
    xhttp.send();
    await sleep(1000);

}

 function rea() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo11").innerHTML = this.responseText;
            console.log(this.responseText);
        }
    };
    xhttp.open('GET', 'acmeServer.php?content=tony', false);
    xhttp.send();

}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

function myAjax() {

    $.ajax({
        type: "POST",
        url: '/CS-PROJECT1/acmeServer.php',
        data:{action:'call_this'},
        async: false,
        success:function(html) {
           console.log(html);

        }

    });

}