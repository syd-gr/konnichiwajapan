// script.js

// Get the toggle button and table
const toggleButton = document.getElementById('toggleButton');
const excelTable = document.getElementById('excelTable');

// Add event listener for the toggle button
toggleButton.addEventListener('click', () => {
    // Toggle the display of the table
    if (excelTable.style.display === 'none') {
        excelTable.style.display = 'table'; // Show the table
    } else {
        excelTable.style.display = 'none'; // Hide the table
    }
});

// Get the container where buttons will be added
const lessonButtonsContainer = document.getElementById('lessonButtonsContainer');

// Variable to keep track of the currently expanded lesson
let currentExpandedIframe = null;

// Function to create lesson buttons dynamically
function createLessonButtons() {
    for (let i = 1; i <= 50; i++) {
        // Create a button for each lesson
        const button = document.createElement('button');
        button.classList.add('lessonButton');
        button.textContent = `Lesson ${i}`;
        button.setAttribute('data-lesson', `lesson${i}.html`);
        
        // Create a container for the lesson iframe
        const iframeContainer = document.createElement('div');
        iframeContainer.id = `lessonContainer${i}`; // Unique ID for each lesson content

        // Create an iframe for the lesson
        const iframe = document.createElement('iframe');
        iframe.id = `lessonIframe${i}`;
        iframe.src = ""; // Initially empty
        iframe.style.display = 'none'; // Initially hidden
        
        iframeContainer.appendChild(iframe);
        
        // Add click event to the button to load lesson in iframe
        button.addEventListener('click', () => {
            const lessonPage = `lesson${i}.html`;

            // If the same lesson is clicked, toggle its visibility
            if (currentExpandedIframe === iframe) {
                iframe.style.display = 'none'; // Hide the iframe if already shown
                currentExpandedIframe = null; // Reset the current expanded iframe
            } else {
                // If a different lesson is clicked, hide the current one if it's open
                if (currentExpandedIframe) {
                    currentExpandedIframe.style.display = 'none';
                }
                
                // Set the iframe source and show it
                iframe.src = lessonPage;
                iframe.style.display = 'block'; // Show the iframe
                currentExpandedIframe = iframe; // Update the current expanded iframe
            }
        });
        
        // Append the button and iframe container to the lessonButtonsContainer
        lessonButtonsContainer.appendChild(button);
        lessonButtonsContainer.appendChild(iframeContainer); // Each iframe below its button
    }
}

// Call the function to create 50 lesson buttons
createLessonButtons();
