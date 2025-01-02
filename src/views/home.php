<main class="">
    <header class="bg-cover relative min-h-screen grid place-items-center">
        <div class="absolute z-10 h-full w-full bg-gradient-to-b from-black to-transparent opacity-95"></div>
        <div class=" absolute z-20">
            <h1 class="text-5xl sm:text-7xl text-center text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-amber-600">
                Roulez sans limite, <br> réservez en un clic
            </h1>
            <form action="" method="post" class="bg-white p-3 flex flex-col gap-4 rounded-md shadow-md m-4 max-w-[30rem]">
                <div class="">
                    <h4 class="text-lg text-center">Sélectionnez le type de véhicule</h4>
                    <div class="flex flex-wrap gap-2">
                        <label for="sans-permis" class="flex flex-col justify-center gap-2">
                            <img src="./src/assets/images/sans-permis.png" alt="sans-permis" class="w-16 z-20">
                            <input type="checkbox" name="sans-permis" id="sans-permis" class="text-center rounded-full">
                        </label>    
                        <label for="citadine" class="flex flex-col justify-center gap-2">
                            <img src="./src/assets/images/citadine.png" alt="citadine" class="w-16 z-20">
                            <input type="checkbox" name="citadine" id="citadine" class="text-center rounded-full">
                        </label>
                        <label for="berline" class="flex flex-col justify-center gap-2">
                            <img src="./src/assets/images/berline.png" alt="berline" class="w-16 z-20">
                            <input type="checkbox" name="berline" id="berline" class="text-center rounded-full">
                        </label>
                        <label for="suv" class="flex flex-col justify-center gap-2">
                            <img src="./src/assets/images/suv.png" alt="suv" class="w-16 z-20">
                            <input type="checkbox" name="suv" id="suv" class="text-center rounded-full">
                        </label>
                        <label for="sportive" class="flex flex-col justify-center gap-2">
                            <img src="./src/assets/images/sportive.png" alt="sportive" class="w-16 z-20">
                            <input type="checkbox" name="sportive" id="sportive" class="text-center rounded-full">
                        </label>
                        <label for="camion" class="flex flex-col justify-center gap-2">
                            <img src="./src/assets/images/camion.png" alt="camion" class="w-16 z-20">
                            <input type="checkbox" name="camion" id="camion" class="text-center rounded-full">
                        </label>
                    </div>
                </div>
                <div class="flex gap-2 align-items-center justify-center w-full">
                    <div class="flex flex-col">
                        <label class="text-sm text-slate-500 text-center" for="debut">À partir du</label>
                        <input type="datetime-local" name="debut" id="debut" required class="focus:outline-none border-none rounded-sm p-1 text-base">
                    </div>
                    <div class="flex flex-col">
                        <label class="text-sm text-slate-500 text-center" for="fin">Jusqu'au</label>
                        <input type="datetime-local" name="fin" id="fin" required class="focus:outline-none border-none rounded-sm p-1 text-base">    
                    </div>
                </div>
                <div class="flex flex-col">
                    <label class="text-sm text-slate-500" for="identite">Nom Prénom</label>
                    <input type="text" name="identite" id="identite" required class="bg-slate-100 focus:bg-slate-50 focus:outline-none border rounded-sm p-1 text-base">
                </div>
                <div class="flex gap-2">
                    <div class="flex flex-col">
                        <label class="text-sm text-slate-500" for="email">Adresse e-mail</label>
                        <input type="email" name="email" id="email" required class="bg-slate-100 focus:bg-slate-50 focus:outline-none border rounded-sm p-1 text-base">
                    </div>
                    <div class="flex flex-col">
                        <label class="text-sm text-slate-500" for="telephone">Téléphone</label>
                        <input type="tel" name="telephone" id="telephone" required class="bg-slate-100 focus:bg-slate-50 focus:outline-none border rounded-sm p-1 text-base">
                    </div>
                </div>
                <button type="submit" class="bg-gradient-to-r from-red-600 to-amber-600 text-white px-4 py-2 rounded-sm shadow-md">
                    Demande de réservation
                </button>
            </form>
        </div>
    </header>
</main>






