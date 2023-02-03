






submitButton();
function submitButton(){
$("button").click (function (){

    this.classList.add("pressed");
    setTimeout(() => {
        this.classList.remove("pressed")       
    },150);
   
    
    })
}