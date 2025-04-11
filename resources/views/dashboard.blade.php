<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-6">Admin Dashboard</h1>

        <!-- Dashboard Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div class="bg-blue-500 text-white p-4 rounded-lg shadow">
                <h5 class="text-lg font-semibold">Total Films</h5>
                <p class="text-2xl">120</p>
            </div>
            <div class="bg-green-500 text-white p-4 rounded-lg shadow">
                <h5 class="text-lg font-semibold">Active Users</h5>
                <p class="text-2xl">45</p>
            </div>
            <div class="bg-yellow-500 text-white p-4 rounded-lg shadow">
                <h5 class="text-lg font-semibold">Pending Reviews</h5>
                <p class="text-2xl">8</p>
            </div>
        </div>

        <!-- Create Film Button -->
        <button type="button" class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700" onclick="toggleModal()">
            Create New Film
        </button>

        <!-- Create Film Modal -->
        <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden" id="createFilmModal">
            <div class="bg-white rounded-lg shadow-lg w-96 p-6">
                <h2 class="text-xl font-bold mb-4">Create New Film</h2>
                <form>
                    <div class="mb-4">
                        <label for="filmTitle" class="block text-sm font-medium text-gray-700">Film Title</label>
                        <input type="text" id="filmTitle" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    </div>
                    <div class="mb-4">
                        <label for="filmDescription" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="filmDescription" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></textarea>
                    </div>
                    <div class="flex justify-end">
                        <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded shadow hover:bg-gray-600 mr-2" onclick="toggleModal()">Cancel</button>
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function toggleModal() {
            const modal = document.getElementById('createFilmModal');
            modal.classList.toggle('hidden');
        }
    </script>
</body>
</html>