var post_text = document.querySelector(".post_text")
var noticia_post = document.querySelector(".noticia-post")
var limite = document.querySelector(".limite")
post_text.addEventListener('input',call)

function call(){
    if(post_text.value.length > 600){
        noticia_post.style.border = "2px solid red"
        limite.innerHTML = 600 - post_text.value.length

    }else{
        noticia_post.style.border = "2px solid var(--light)"
        limite.innerHTML = ""
    }
}
function erro(){
    if(post_text.value.length > 600){
        window.alert(`O texto pode ter no máximo 600 letras e o seu tem ${post_text.value.length}.`)
    }else if(post_text.value.length == 0){
        window.alert("Por favor escreva algo para enviar!")
    }
}