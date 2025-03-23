document.getElementById("newEntryButton").addEventListener("click", function() {
    document.getElementById("newEntryModal").style.display = "block";
});

document.getElementsByClassName("close-button")[0].addEventListener("click", function() {
    document.getElementById("newEntryModal").style.display = "none";
});

/*document.getElementById("saveEntryButton").addEventListener("click", function() {
    // Code to save the journal entry to the backend
    // For demonstration purposes, let's just log the entry for now
    var entryDate = document.getElementById("entryDate").value;
    var entryContent = document.getElementById("entryContent").value;
    console.log("Date: " + entryDate);
    console.log("Entry: " + entryContent);

    document.getElementById("newEntryModal").style.display = "none";
});
// JavaScript for dynamically displaying form entries*/

// JavaScript for displaying journal entries on the same page
const journalForm = document.getElementById("journalForm");
const journalEntriesDiv = document.getElementById("journalEntries");

document.getElementById("saveEntryButton").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent form submission

    // Get form values
    const date = document.getElementById("entryDate").value;
    const entry = document.getElementById("entryContent").value;

    // Create a new div to display the journal entry
    const entryDiv = document.createElement("div");
    entryDiv.classList.add("entry");
    entryDiv.innerHTML = `
        <h3>${date}</h3>
        <p style="color:black;font-size:25px;font-weight:600;">${entry}</p>
    `;

    journalEntriesDiv.appendChild(entryDiv);
    journalForm.reset();
    document.getElementById("newEntryModal").style.display = "none";
     // Clear the form after displaying the journal entry
});
