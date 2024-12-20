// theme-switcher.js

document.addEventListener('DOMContentLoaded', () => {
    const cyberpunkButton = document.getElementById('cyberpunk-button');
    const lofiButton = document.getElementById('lofi-button');
    const themeStylesheet = document.getElementById('theme-stylesheet');

    cyberpunkButton.addEventListener('click', () => {
        themeStylesheet.setAttribute('href', 'cyberpunk.css');
    });

    lofiButton.addEventListener('click', () => {
        themeStylesheet.setAttribute('href', 'lofi.css');
    });
});



