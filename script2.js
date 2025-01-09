// script.js

// Log content changes in editable cells
document.addEventListener("input", (event) => {
    if (event.target.tagName === "TD" && event.target.isContentEditable) {
        console.log(`Cell updated: ${event.target.textContent}`);
    }
});
