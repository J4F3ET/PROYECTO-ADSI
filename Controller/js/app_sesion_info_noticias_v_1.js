document.getElementById('formulario_noticias').addEventListener('submit', function(e){
    const info =document.getElementById('edit_noticia_1').value
    // "myFile.txt".file = fopen(getScriptPath("myFile.txt"), 0);
    // console.log(info);
    // document.read
    // document.getElementById('informacion_de_la_noticia_seleccionada').innerHTML=info;
});
const noticia = document.getElementById('div_img_notcia_1')
noticia.addEventListener('click',()=>{
    let req
    if(window.XMLHttpRequest()){
        req= new XMLHttpRequest
    }else{
        req= new ActiveXObject("Microsoft.XMLHTTP")
    }
    req.open('GET','../archivos-txt/texto_noticia_1.txt')
    req.addEventListener('load',(data)=>{
        const info_noticia= console.log(data.target)
        console.log(info_noticia)
    })
    
    req.send()
});
