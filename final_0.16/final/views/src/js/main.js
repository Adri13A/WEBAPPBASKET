document.getElementById('file').onchange=function(e){
    let preview=document.getElementById('preview');
    preview.innerHTML = ''; // clear the preview div

    let files = e.target.files;
    for (let i = 0; i < files.length; i++) {
        let reader=new FileReader();
        reader.readAsDataURL(files[i]);
        reader.onload=function(){
            let image=document.createElement('img');
            image.src=reader.result;
            image.style.width="70px";
            preview.append(image);
        }
    }
}