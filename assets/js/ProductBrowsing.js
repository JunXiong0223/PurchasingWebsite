let data = [
    { name: "Perodua Axia Battery Base Modification", url: "Filtered_BrowseProduct?filter=battery-modification" },
    { name: "Perodua Axia D74A E/G 2023 - Present", url: "Filtered_BrowseProduct.php?filter=d74a-eg" },
    { name: "Perodua Axia D74A SE/ADV 2023 - Present IdleStop", url: "Filtered_BrowseProduct.php?filter=d74a-adv" },
    { name: "Perodua Axia MK1 2014 - 2023", url: "Filtered_BrowseProduct.php?filter=mk1-2014-2023" }
];

document.getElementById("searchInput").addEventListener("input", function() {
    let searchTerm = this.value.toLowerCase();
    let suggestions = document.getElementById("suggestionsList");
    
    suggestions.innerHTML = ""; // Clear previous suggestions
    
    if (searchTerm.length > 0) {
        let searchResults = data.filter(item => item.name.toLowerCase().includes(searchTerm));
        
        searchResults.forEach(result => {
            let suggestionItem = document.createElement("a");
            suggestionItem.className = "dropdown-item";
            suggestionItem.href = result.url;  // Link to filteredpage.php with parameters
            suggestionItem.innerText = result.name;
            suggestions.appendChild(suggestionItem);
        });
    }
});