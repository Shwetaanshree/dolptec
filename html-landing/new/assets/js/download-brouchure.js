    // Get the popup
    var popup = document.getElementById("popup");

    // Get the buttons that open the popup
    var btn1 = document.getElementById("download-brochure");
    var btn2 = document.getElementById("download-brochure1");
    var btn3 = document.getElementById("download-brochure2");
    var btn4 = document.getElementById("download-brochure3");

    // Get the <span> element that closes the popup
    var span = document.getElementsByClassName("close")[0];

    // Variables to store the PDF path
    var pdfPath = '';

    // When the user clicks on the button, open the popup
    btn1.onclick = function() {
        pdfPath = "./assets/pdf/aws-ebook-build-run-applications.pdf";
        popup.style.display = "block";
    }
    btn2.onclick = function() {
        pdfPath = "./assets/pdf/your_journey_to_the_cloud_google_cloud_smb.pdf";
        popup.style.display = "block";
    }

    btn3.onclick = function() {
        pdfPath = "./assets/pdf/Migrate-to-cloud.pdf";
        popup.style.display = "block";
    }

    btn4.onclick = function() {
        pdfPath = "./assets/pdf/SMB - PMC - Ebook - Simplify Cloud Migration and Modernization_SEP.pdf";
        popup.style.display = "block";
    }

    // When the user clicks on <span> (x), close the popup
    span.onclick = function() {
        popup.style.display = "none";
    }

    // When the user clicks anywhere outside of the popup, close it
    window.onclick = function(event) {
        if (event.target == popup) {
            popup.style.display = "none";
        }
    }

    // Handle form submission
     // Handle form submission
     document.getElementById('contact-form').addEventListener('submit', function(event) {
        // Prevent default form submission
        event.preventDefault();

        // Get form element
        var form = event.target;

        // Check if form is valid
        if (form.checkValidity()) {
            // Use AJAX to submit the form
            $.ajax({
                type: 'POST',
                url: form.action,
                data: $(form).serialize(),
                success: function() {
                    // Create anchor element for PDF download
                    var element = document.createElement("a");
                    element.href = pdfPath;
                    element.download = pdfPath.split('/').pop();

                    // Append to the body, trigger click and remove element
                    document.body.appendChild(element);
                    element.click();
                    document.body.removeChild(element);

                    // Close the popup
                    popup.style.display = "none";

                    // Redirect to the thank you page
                    window.location.href = 'thank-you.html';

                    // Redirect to the home page after 10 seconds
                    setTimeout(function() {
                        window.location.href = 'index.html';
                    }, 10000);
                },
                error: function() {
                    alert('Form submission failed.');
                }
            });
        } else {
            // If form is not valid, display validation errors
            form.reportValidity();
        }
    });