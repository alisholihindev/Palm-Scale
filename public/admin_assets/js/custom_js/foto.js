$(function() {
   $("#fileToUpload").on('change', function(){
        readURL(this,"preview");
        validateFileSize(this);
   });
});

function validateFileSize(el) {
    var file_size = $(el)[0].files[0].size;
    if(file_size>2097152) {
        alert("Ukuran file tidak boleh melebihi 2MB");
        $(el).val('');
        return false;
    } 
    return true;
}

function readURL(input , tar) {  
    if (input.files && input.files[0]) { // got sth
    // Clear image container
    $("#" + tar ).removeAttr('src'); 
    $.each(input.files , function(index,ff)  // loop each image 
    {
        var reader = new FileReader();
        // Put image in created image tags
        reader.onload = function (e) {
            $('#' + tar).attr('src', e.target.result);
        }
        reader.readAsDataURL(ff);
    });
    }
}