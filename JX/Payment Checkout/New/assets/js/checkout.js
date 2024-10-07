//window.onload = initMap;

function increaseQuantity(productID){
    //let productClassInputID = `product${productID}-quantity`;
    let product = document.getElementById(`product${productID}-quantity`);
    let productValue = parseInt(product.value);
    let newValue = productValue + 1;
    product = newValue;
    console.log(productID, productValue, newValue);
    document.getElementById(`product${productID}-quantity`).value = product;
}

function decreaseQuantity(productID){
    //let productClassInputID = `product${productID}-quantity`;
    let product = document.getElementById(`product${productID}-quantity`);
    let productValue = parseInt(product.value);
    let newValue = productValue - 1;

    if(newValue <= 0){
        newValue = 0;
    }

    product = newValue;
    console.log(productID, productValue, newValue);
    document.getElementById(`product${productID}-quantity`).value = product;
}
document.addEventListener('DOMContentLoaded', function() {

let map, marker, userLat, userLng;

function initMap() {
    // Default location (center of the map)
    const defaultLocation = [51.505, -0.09]; // Latitude, Longitude

    // Initialize the map
    map = L.map('map').setView(defaultLocation, 13);

    // Load and display tile layer on the map (from OSM)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
    }).addTo(map);

    // Create a draggable marker and place it on the default location
    marker = L.marker(defaultLocation, {draggable: false}).addTo(map);

    // Allow users to click on the map to get the address
    map.on('click', function(event) {
        const lat = event.latlng.lat;
        const lng = event.latlng.lng;
        marker.setLatLng([lat, lng]); // Move marker to the clicked location
        updateLocation(lat, lng); // Fetch and display address
    });

    // Get user's current location if available
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            function(position) {
                userLat = position.coords.latitude;
                userLng = position.coords.longitude;
                map.setView([userLat, userLng], 13); // Center map on user's location
                marker.setLatLng([userLat, userLng]); // Move marker to user's location
                updateLocation(userLat, userLng);
            },
            function() {
                alert("Could not get your location. Showing default location.");
            },
            {
                enableHighAccuracy: true,
                timeout: 10000,
                maximumAge: 0
            }
        );
    }
}

function updateLocation(lat, lng) {
    //document.getElementById("location").textContent = `Latitude: ${lat}, Longitude: ${lng}`;
    //document.getElementById("lat").value = lat;
    //document.getElementById("lng").value = lng;
    getAddress(lat, lng);
}

function getAddress(lat, lng) {
    fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}`)
        .then(response => response.json())
        .then(data => {
            if (data && data.display_name) {
                //document.getElementById("address").textContent = data.display_name;
                //alert(`Location confirmed! Latitude: ${data.display_name}`);
                const address = data.address;

                // Extract specific address components
                const building = address.building || '';
                const shop = address.shop || '';
                const street = address.road || address.street || '';
                const city = address.city || address.town || address.village || '';
                const state = address.state || '';
                const zipcode = address.postcode || address.zipcode || '';
                const country = address.country || '';

                // Extract specific address components
                let formattedAddress = [
                    building,
                    shop,
                    street,
                ].filter(part => part !== '').join(', ');

                document.getElementById("inputAddress").value = formattedAddress;
                document.getElementById("inputCity").value = city;
                document.getElementById("inputZip").value = zipcode;
                document.getElementById("inputState").value = state;
                console.log(formattedAddress);
            } else {
                //document.getElementById("address").textContent = "No address found";
                alert(`Location confirmed! Latitude: No Address Found`);
            }
        })
        .catch(error => {
            //document.getElementById("address").textContent = "Geocoding failed: " + error;
            alert(`Geocoding failed: ` + error);
        });
}

//document.getElementById("useThisLocationBtn").addEventListener("click", function() {
    // const lat = document.getElementById("lat").value;
    // const lng = document.getElementById("lng").value;
    // const address = document.getElementById("address").textContent;
    // alert(`Location confirmed! Latitude: ${lat}, Longitude: ${lng}, Address: ${address}`);
    // Here you can submit the address and coordinates to your server or handle them as needed
//});

document.getElementById("showMap").addEventListener("click", function() {
    const mapContainer = document.getElementById("map");
    mapContainer.style.display = "block"; // Show the map container
    document.querySelectorAll('#searchContainer *').forEach(function(element) {
        element.style.display = 'block'; // Resets the display property
    });
    const confirmBtn = document.getElementById("confirm");
    //confirmBtn.style.display = "block"; // Show the map container

    if (!map) {
        initMap(); // Initialize map only if it hasn't been initialized yet
    }

    // Optional: Center the map on user's location if permission is granted
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            function(position) {
                const lat = position.coords.latitude;
                const lng = position.coords.longitude;
                map.setView([lat, lng], 13); // Center map on user's location
                marker.setLatLng([lat, lng]); // Move marker to user's location
                updateLocation(lat, lng);
            },
            function(error) {
                alert("Error getting your location: " + error.message);
            },
            {
                enableHighAccuracy: true,
                timeout: 10000,
                maximumAge: 0
            }
        );
    }
});

// Search function for the map, restricting to near user's location
document.getElementById("searchButton").addEventListener("click", function() {
    const query = document.getElementById("searchBox").value;

    if (!userLat || !userLng) {
        alert("Please allow location access to search near your current location.");
        return;
    }

    if (query) {
        // Define a bounding box around the user's location (e.g., 0.05 degree margin)
        const margin = 0.05; // 0.05 degrees is roughly 5-6 km
        const viewbox = `${userLng - margin},${userLat - margin},${userLng + margin},${userLat + margin}`;

        // Use Nominatim API to search for the location near user's current location
        fetch(`https://nominatim.openstreetmap.org/search?q=${encodeURIComponent(query)}&format=json&viewbox=${viewbox}&bounded=1`)
            .then(response => response.json())
            .then(data => {
                if (data && data.length > 0) {
                    const lat = data[0].lat;
                    const lon = data[0].lon;
                    map.setView([lat, lon], 13); // Center the map on the search result
                    marker.setLatLng([lat, lon]); // Move the marker to the search result
                    updateLocation(lat, lon); // Fetch and display the address
                } else {
                    alert("No results found for the given location.");
                }
            })
            .catch(error => {
                alert("Error occurred while searching: " + error);
            });
    } else {
        alert("Please enter a location to search.");
    }
});
});
