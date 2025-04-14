<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Preview</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 min-h-screen">

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Film Hero Section -->
        <div class="relative rounded-xl overflow-hidden mb-8">
            <!-- Background Image (Blurred) -->
            <div class="absolute inset-0 bg-cover bg-center"
                style="background-image: url('http://localhost:8000/storage/placeholder-bg.jpg'); filter: blur(8px); opacity: 0.3;">
            </div>

            <!-- Content -->
            <div class="relative z-10 p-6 md:p-8 flex flex-col md:flex-row items-start">
                <!-- Poster -->
                <div class="flex-shrink-0 mb-6 md:mb-0 md:mr-8 w-full md:w-auto">
                    <img id="film-image" src="http://localhost:8000/storage/placeholder.jpg" alt="Film poster"
                        class="w-full md:w-80 h-auto rounded-lg shadow-lg">
                </div>

                <!-- Film Info -->
                <div class="flex-1">
                    <h1 id="film-title" class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">Film Title</h1>

                    <div class="flex flex-wrap items-center mb-6">
                        <span id="film-genre"
                            class="px-3 py-1 bg-rose-100 text-rose-800 text-sm rounded-full mr-3 mb-2">Genre</span>
                        <div class="flex items-center mr-4 mb-2">
                            <i class="fas fa-clock text-rose-600 mr-2"></i>
                            <span id="film-duration" class="text-gray-700">120 min</span>
                        </div>
                        <div class="flex items-center mb-2">
                            <i class="fas fa-star text-yellow-500 mr-2"></i>
                            <span class="text-gray-700">8.5/10</span>
                        </div>
                    </div>

                    <div class="mb-6">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2">Synopsis</h2>
                        <p id="film-description" class="text-gray-700 leading-relaxed">
                            Film description will appear here. This is a placeholder text that will be replaced with the
                            actual film description from the database.
                        </p>
                    </div>

                    <div class="flex flex-wrap">
                        <a href="#showtimes"
                            class="px-6 py-3 bg-rose-600 text-white rounded-lg hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-rose-500 mr-3 mb-3 flex items-center">
                            <i class="fas fa-ticket-alt mr-2"></i> Book Tickets
                        </a>
                        <a href="#trailer"
                            class="px-6 py-3 bg-gray-800 text-white rounded-lg hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-500 mb-3 flex items-center">
                            <i class="fas fa-play mr-2"></i> Watch Trailer
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trailer Section -->
        <div id="trailer" class="bg-white rounded-xl shadow-md p-6 md:p-8 mb-8">
            <h2 class="text-2xl font-semibold text-gray-900 mb-4">Trailer</h2>
            <div class="aspect-w-16 aspect-h-9">
                <div id="film-trailler" class="w-full rounded-lg bg-black h-0 pb-[56.25%] relative">
                    <!-- Placeholder for video - in a real implementation, this would be an iframe with the actual trailer -->

                </div>
            </div>
        </div>

        <!-- Showtimes Section -->
        <div id="showtimes" class="bg-white rounded-xl shadow-md p-6 md:p-8 mb-8">
            <h2 class="text-2xl font-semibold text-gray-900 mb-6">Showtimes</h2>


            <!-- Showtimes Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Theater 1 -->
                <div class="border rounded-lg p-4">
                    <h3 class="font-semibold text-gray-900 mb-3">Theater 1 - Standard</h3>
                    <div class="flex flex-wrap gap-2">
                        <a href="#"
                            class="px-3 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 rounded-md text-sm">10:30
                            AM</a>
                        <a href="#"
                            class="px-3 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 rounded-md text-sm">1:15 PM</a>
                        <a href="#"
                            class="px-3 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 rounded-md text-sm">4:00 PM</a>
                        <a href="#"
                            class="px-3 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 rounded-md text-sm">6:45 PM</a>
                        <a href="#"
                            class="px-3 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 rounded-md text-sm">9:30 PM</a>
                    </div>
                </div>

                <!-- Theater 2 -->
                <div class="border rounded-lg p-4">
                    <h3 class="font-semibold text-gray-900 mb-3">Theater 2 - IMAX</h3>
                    <div class="flex flex-wrap gap-2">
                        <a href="#"
                            class="px-3 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 rounded-md text-sm">11:00
                            AM</a>
                        <a href="#"
                            class="px-3 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 rounded-md text-sm">2:30 PM</a>
                        <a href="#"
                            class="px-3 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 rounded-md text-sm">5:45 PM</a>
                        <a href="#"
                            class="px-3 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 rounded-md text-sm">8:15 PM</a>
                    </div>
                </div>

                <!-- Theater 3 -->
                <div class="border rounded-lg p-4">
                    <h3 class="font-semibold text-gray-900 mb-3">Theater 3 - VIP</h3>
                    <div class="flex flex-wrap gap-2">
                        <a href="#"
                            class="px-3 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 rounded-md text-sm">12:00
                            PM</a>
                        <a href="#"
                            class="px-3 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 rounded-md text-sm">3:30 PM</a>
                        <a href="#"
                            class="px-3 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 rounded-md text-sm">7:00 PM</a>
                        <a href="#"
                            class="px-3 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 rounded-md text-sm">10:15
                            PM</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Similar Films -->
        <div class="mb-8">
            <h2 class="text-2xl font-semibold text-gray-900 mb-6">You Might Also Like</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
                <!-- Similar Film 1 -->
                <a href="#" class="group">
                    <div class="rounded-lg overflow-hidden shadow-md bg-white">
                        <img src="https://via.placeholder.com/300x450" alt="Movie poster"
                            class="w-full h-64 object-cover group-hover:opacity-80 transition-opacity">
                        <div class="p-3">
                            <h3 class="font-medium text-gray-900 group-hover:text-rose-600">Interstellar</h3>
                            <p class="text-sm text-gray-500">Sci-Fi</p>
                        </div>
                    </div>
                </a>

                <!-- Similar Film 2 -->
                <a href="#" class="group">
                    <div class="rounded-lg overflow-hidden shadow-md bg-white">
                        <img src="https://via.placeholder.com/300x450" alt="Movie poster"
                            class="w-full h-64 object-cover group-hover:opacity-80 transition-opacity">
                        <div class="p-3">
                            <h3 class="font-medium text-gray-900 group-hover:text-rose-600">The Matrix</h3>
                            <p class="text-sm text-gray-500">Sci-Fi</p>
                        </div>
                    </div>
                </a>

                <!-- Similar Film 3 -->
                <a href="#" class="group">
                    <div class="rounded-lg overflow-hidden shadow-md bg-white">
                        <img src="https://via.placeholder.com/300x450" alt="Movie poster"
                            class="w-full h-64 object-cover group-hover:opacity-80 transition-opacity">
                        <div class="p-3">
                            <h3 class="font-medium text-gray-900 group-hover:text-rose-600">Tenet</h3>
                            <p class="text-sm text-gray-500">Action, Sci-Fi</p>
                        </div>
                    </div>
                </a>

                <!-- Similar Film 4 -->
                <a href="#" class="group">
                    <div class="rounded-lg overflow-hidden shadow-md bg-white">
                        <img src="https://via.placeholder.com/300x450" alt="Movie poster"
                            class="w-full h-64 object-cover group-hover:opacity-80 transition-opacity">
                        <div class="p-3">
                            <h3 class="font-medium text-gray-900 group-hover:text-rose-600">Shutter Island</h3>
                            <p class="text-sm text-gray-500">Thriller</p>
                        </div>
                    </div>
                </a>

                <!-- Similar Film 5 -->
                <a href="#" class="group">
                    <div class="rounded-lg overflow-hidden shadow-md bg-white">
                        <img src="https://via.placeholder.com/300x450" alt="Movie poster"
                            class="w-full h-64 object-cover group-hover:opacity-80 transition-opacity">
                        <div class="p-3">
                            <h3 class="font-medium text-gray-900 group-hover:text-rose-600">Memento</h3>
                            <p class="text-sm text-gray-500">Mystery, Thriller</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </main>



    <script>
        const filmId = "{{ $filmId }}";

        document.addEventListener("DOMContentLoaded", function() {
            const token = localStorage.getItem("token");

            if (!token) {
                window.location.href = "/login";
                return;
            }

            fetch(`http://localhost:8000/api/film/${filmId}`, {
                    headers: {
                        'Authorization': 'Bearer ' + token,
                        'Accept': 'application/json'
                    }
                })
                .then(res => res.json())
                .then(response => {
                    const film = response.film;

                    document.getElementById("film-title").textContent = film.title;
                    document.getElementById("film-image").src = `http://localhost:8000/storage/${film.image}`;
                    document.getElementById("film-description").textContent = film.description;
                    document.getElementById("film-genre").textContent = film.genre;
                    document.getElementById("film-duration").textContent = film.duration + " min";
                    const rawTrailerLink = film.trailer_url;
                    const embedLink = convertYouTubeToEmbed(rawTrailerLink);
                    console.log(embedLink);
                    if (embedLink) {
                        document.getElementById("film-trailler").innerHTML = `
        <iframe width="1425" height="800"
            src="${embedLink}" 
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen>
        </iframe>
    `;
                    } else {
                        document.getElementById("film-trailler").textContent = "Invalid trailer URL.";
                    }
                })
                .catch(error => {
                    console.error("Error fetching film:", error);
                });
        });

        function convertYouTubeToEmbed(url) {
            try {
                // Handle short "youtu.be" URL
                if (url.includes("youtu.be")) {
                    const videoId = url.split("/").pop().split("?")[0];
                    return `https://www.youtube.com/embed/${videoId}`;
                }

                // Handle standard "youtube.com/watch?v=..." URL
                if (url.includes("youtube.com/watch")) {
                    const urlObj = new URL(url);
                    const videoId = urlObj.searchParams.get("v");
                    return `https://www.youtube.com/embed/${videoId}`;
                }

                // Handle embed URL (already in embed format)
                if (url.includes("youtube.com/embed")) {
                    return url;
                }

                // Return null if URL does not match any valid YouTube format
                return null;
            } catch (error) {
                console.error("Invalid URL:", error);
                return "Invalid URL"; // Return a message if there was an error
            }
        }
    </script>
</body>

</html>
