// Minimum 2 caractères pour le nom et prénom
let identite = document.getElementById('identite');
identite.addEventListener('input', function() {
    if (identite.value.length < 2) {
        identite.classList.add('alert');
    } else {
        identite.classList.remove('alert');
    }
});

// Téléphone FR valide
// let telephone = document.getElementById('telephone');
// telephone.addEventListener('input', function() {
//     if (!/^\+33\s[0-9]{9}$/.test(telephone.value)) {
//         telephone.classList.add('alert');
//     } else {
//         telephone.classList.remove('alert');
//     }
// });