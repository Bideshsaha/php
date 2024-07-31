
//jquery image upload section 
$(document).ready(function() {
    $('#profile-image').on('click', function() {
        $('#profile_pic').click();
    });

    $('#profile_pic').on('change', function(event) {
        var file = event.target.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#profile-img').attr('src', e.target.result);
            };
            reader.readAsDataURL(file);
        }
    });
});