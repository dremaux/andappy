window.onload = () => {
    const FilterForm = document.querySelector("#filters");

    //on boucle sur les input
    document.querySelectorAll("#filters input").forEach(input => {
        input.addEventListener("change", () => {
            console.log("clic");
        })
    });
}