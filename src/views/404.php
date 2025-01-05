<main class="min-h-screen bg-gray-100 flex items-center justify-center px-4">
    <div class="max-w-xl w-full text-center">
        <div class="mb-8">
            <h1 class="text-9xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-amber-600">
                404
            </h1>
            <p class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">
                Page introuvable
            </p>
            <p class="text-gray-600 mb-8">
                Désolé, la page que vous recherchez n'existe pas ou a été déplacée.
            </p>
        </div>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/"
                class="px-6 py-3 bg-gradient-to-r from-red-600 to-amber-600 text-white rounded-md shadow-md hover:shadow-lg transition-shadow">
                Retour à l'accueil
            </a>
            <a href="/cars"
                class="px-6 py-3 bg-white text-gray-800 rounded-md shadow-md hover:shadow-lg transition-shadow">
                Voir nos véhicules
            </a>
        </div>

        <div class="mt-12">
            <img src="./src/assets/images/404.png"
                alt="Illustration 404"
                class="max-w-sm mx-auto opacity-75"
                onerror="this.style.display='none'">
        </div>
    </div>
</main>