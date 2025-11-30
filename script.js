// script.js

// Navigation function
function navigateTo(page) {
    // Add navigation logic here
    console.log(`Navigating to ${page}`);
}

// API call function
async function fetchData(url) {
    try {
        const response = await fetch(url);
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        const data = await response.json();
        return data;
    } catch (error) {
        console.error(`Failed to fetch data: ${error}`);
    }
}

// Example usage
// navigateTo('home');
// fetchData('https://api.example.com/data');
