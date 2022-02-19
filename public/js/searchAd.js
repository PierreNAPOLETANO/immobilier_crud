function search_ad() {
    // Déclaration + initialisation 
    let input, filter, table, tr, td, i, txtValue; // J'utilisa "let" pour la portée de mes variabkes
    input = document.getElementById("searchAd"); // Je récupère l'élément de la page ayant l'id #searchAd auterement dit mon input
    filter = input.value.toUpperCase(); // Je met toute les valeur en majusucule pour favilité la recherche et evité de faire trop de conditions pour pouvoir recher un élement du tableau
    table = document.getElementById("ads"); // Je récupère mon tableau
    tr = table.getElementsByTagName("tr"); // Je récupère toutes mes lignes du tableau

    // je parcours tout moin tableau
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0]; // Je recupère le 1er élément de ma ligne en l'occurence
                                                  // la référence de mon bien
        
        // Si il y a un élément
        if (td) { 
            // Alors je récupère ça valeure
            txtValue = td.textContent || td.innerText;

            // Si la saisie correspond à qqch alors je renvoie le premier élément pour lequel on trouve un élément notre tableau
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else { // Sinon je n'affiche rien
                tr[i].style.display = "none";
            }
        }
    }
}