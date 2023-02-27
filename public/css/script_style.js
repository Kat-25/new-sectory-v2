$(document).ready(function(){
    
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    
    $(".next").click(function(){
        
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        
        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        
        //show the next fieldset
        next_fs.show(); 
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
    
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({'opacity': opacity});
            }, 
            duration: 600
        });
    });
    
    $(".previous").click(function(){
        
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        
        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        
        //show the previous fieldset
        previous_fs.show();
    
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
    
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({'opacity': opacity});
            }, 
            duration: 600
        });
    });
    
    $('.radio-group .radio').click(function(){
        $(this).parent().find('.radio').removeClass('selected');
        $(this).addClass('selected');
    });
    
    $(".submit").click(function(){
        return false;
    })
        
    });
    $(document).ready(function() {

    
        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
    
                reader.onload = function (e) {
                    $('.avatar').attr('src', e.target.result);
                }
        
                reader.readAsDataURL(input.files[0]);
            }
        }
        
    
        $(".file-upload").on('change', function(){
            readURL(this);
        });
    });
// FOR IMAGE ONCLICK EXPAND

        function expandImage() {
        // Get the image element that was clicked
        var image = event.target;

         // Create a new div element to display the expanded image
        var expandedImage = document.createElement("div");
        expandedImage.classList.add("expanded-image");

        // Create a new img element to display the expanded image
        var img = document.createElement("img");
        img.src = image.src;

        // Add the img element to the expandedImage div
        expandedImage.appendChild(img);

        // Add the expandedImage div to the body
        document.body.appendChild(expandedImage);

        // When the user clicks anywhere on the page, remove the expandedImage div
        window.onclick = function(event) {
        if (event.target == expandedImage) {
        document.body.removeChild(expandedImage);
        }
        }
    }
 