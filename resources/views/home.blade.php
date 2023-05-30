<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Page</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="antialiased h-screen">
    <div class="bg-blue-500 p-4 text-2xl text-white mb-4">Home Page</div>
    <div class="items-center justify-center flex w-screen h-3/4">

        <form class=" w-1/2 h-3/4">
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="person" required>
            </div>
            <div class="mb-6">
                <label for="text-msg" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                <input type="text" id="text-msg" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@email.com" required>
            </div>
            <div class="mb-6">
                <label for="text-msg" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Reciepients</label>
                <input type="text" id="text-msg" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="member1@email.com,member2@email.com,member3@email.com" required>
            </div>

            <div class="mb-6">
                <label for="pay-tier" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Free Tier</label>
                <select name="tiers" id="tiers" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="tier-1">Tier 1</option>
                    <option value="tier-2">Tier 2</option>
                    <option value="tier-3">Tier 3</option>
                </select>
            </div>
            <div class="mb-6">
                <label for="groups" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Groups</label>
                <select name="groups" id="groups" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" multiple>
                    <option value="group-1">Group 1</option>
                    <option value="group-2">Group 2</option>
                    <option value="group-3">Group 3</option>
                </select>
            </div>



            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>

    </div>

</body>

</html>