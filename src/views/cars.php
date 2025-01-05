<?php
// Données JSON des véhicules
$categorieVoitures = json_decode(file_get_contents(__DIR__ . '/../data/cars.json'), true);
?>

<main class="pb-10">
    <header class="bg-cover-car flex flex-col justify-center h-32 text-white shadow-md relative">
        <div class="abosulte bg-gradient-to-r from-red-900 to-amber-400 opacity-60 h-full w-full z-10 p-4"></div>
        <div class="absolute z-20 px-4">
            <h1 class="text-5xl sm:text-7xl shadow-sm">Nos véhicules</h1>
            <p class="text-xl italic shadow-sm">Vous trouverez forcément le modèle parfait.</p>
        </div>
    </header>

    <section>
        <div class="grid place-items-center mt-10">
            <div id="cars" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 sm:max-w-screen-xl">
                <?php foreach ($categorieVoitures as $categorie => $voitures): ?>
                    <?php foreach ($voitures as $voiture): ?>
                        <div class="rounded-lg shadow relative">
                            <img src="https://placehold.co/400x300?text=<?= urlencode($voiture['nom']) ?>"
                                alt="<?= $voiture['nom'] ?>"
                                class="w-full rounded-md shadow-sm">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-b from-transparent to-black text-white px-4 pt-5 pb-2 rounded-b-lg">
                                <h3 class="font-bold"><?= $voiture['nom'] ?></h3>
                                <p class="font-bold"><?= $voiture['prix'] ?>€ /jour</p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>