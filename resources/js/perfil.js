import Dropzone from "dropzone";
 
Dropzone.autoDiscover = false;

const dropzone = new Dropzone(".dropzone", {
    dictDefaultMessage: "Perfil aqui",
    acceptedFiles: ".png,.jpg,.jpeg,.gif,.avif",
    addRemoveLinks: true,
    dictRemoveFile: "Borrar archivo",
    maxFiles: 1,
    uploadMultiple: false,
    init: function(){
        if(document.querySelector('[name = "imagen"]').value.trim()){
            const imagenP = {}
            imagenP.size = 1234;
            imagenP.name = document.querySelector('[name = "imagen"]').value;

            this.options.addedfile.call(this, imagenP)
            this.options.thumbnail.call(this, imagenP, '/PerfilUsuarios/' + imagenP.name);

            imagenP.previewElement.classList.add('dz-succes', 'dz-complete')
        }
    }
});

dropzone.on("success", function(file , response){
    document.querySelector('[name = "imagen"]').value = response.imagen;
});
dropzone.on("error", function(file , message){
    console.log("Error al subir imagen")
});
dropzone.on("removedfile", function(){
    document.querySelector('[name = "imagen"]').value = "";
});