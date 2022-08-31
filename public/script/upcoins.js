window.onload = () => {
    const FiltersForm = document.querySelector("#filters");

    //on boucle sur les input
    document.querySelectorAll("#filters input").forEach(input => {
        input.addEventListener("change", () => {
            //console.log("clic");

            const Form = new FormData(FiltersForm);

            const Params = new URLSearchParams();

            Form.forEach((value, key) => {
                Params.append(key, value);
            });

            const Url = new URL(window.location.href);
            //console.log(Url);

            fetch(Url.pathname + "?" + Params.toString() + "&ajax=1", {
                headers:{
                    "X-requested-With":"XMLHTTPRequest"
                }
            }).then(response => 
                response.json()
            ).then(data => {
                console.log(data)
            }).catch(e => alert(e));

        });
    });
}