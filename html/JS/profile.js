
{/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> */}
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
    // $("#edit").hide();
    $('#profileform').on('submit', function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        console.log("Form :", formData);

        $.ajax({
            url: 'profile-action.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log("Response :", response)
                if (response.success) {
                    window.location.reload();
                } else {
                    $('#error-message').html(response.message).css("color", "#9e291c",).css("font-size","24px");
                }
            }
        });
    });
});
