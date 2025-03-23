        // JavaScript for the subscribe popup
        const subscribePopup = document.getElementById("subscribePopup");
        const closeButton = document.getElementById("closeButton");
        
        // Show the popup when the page loads (for demonstration purposes)
        window.onload = function() {
            subscribePopup.style.display = "block";
        };
        
        // Close the popup when the close button is clicked
        closeButton.addEventListener("click", function() {
            subscribePopup.style.display = "none";
        });
        