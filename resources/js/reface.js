const HOST_URL = "http://sub.reface.local"; // backend host for now

function uploadFile() {
    let file = document.getElementById("file_to_upload").files[0];
    var formdata = new FormData();
    formdata.append("file1", file);
    var ajax = new XMLHttpRequest();

    ajax.onreadystatechange = function() {
        if (ajax.readyState === 4) {
            if (ajax.status === 200) {
                getProcessedImages();
            } else {
                console.log('failed');
            }
        }
    }
    ajax.upload.addEventListener("progress", progressHandler);
    ajax.open("POST", HOST_URL + "/api/process/images/store");
    ajax.send(formdata);

}

function progressHandler(ev) {
    let totalSize = ev.total; // total size of the file in bytes
    let loadedSize = ev.loaded; // loaded size of the file in bytes

    document.getElementById("loaded_n_total").innerHTML = "Uploaded " + loadedSize + " bytes of " + totalSize + " bytes.";

    // calculate percentage
    var percent = (ev.loaded / ev.total) * 100;
    document.getElementById("progressBar").style.display="";
    document.getElementById("progressBar").value = Math.round(percent);
}

function getProcessedImages() {
    $.ajax({
        url: HOST_URL + '/api/process/images',
        method: 'get',
        //dataType: 'html',
        //data: {text: 'Текст'},
        success: function(response){
            showProcessedImages(response.data.processed_images)
        }
    });
}

function showProcessedImages(images) {
    images.forEach((image) => { // TODO заменить для адаптации под старые системы
        $(".gallery").append('<img src="'+image+'" >');
    })
}
