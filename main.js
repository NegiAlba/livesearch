//! Fonction qui va s'exécuter lors de l'entrée utilisateur
const search = (name) => {
    console.log(name)
    const radio = document.querySelector('input[name="category"]:checked');
    const category = radio.value;
    console.log(radio.value)
    fetchSearchData(name, category)
}

const fetchSearchData = (name, category) => {
    fetch('search.php', {
        method: 'POST',
        body: new URLSearchParams('name='+ name +'&category='+category)
    })
    .then(response => response.json())
    .then(response => viewSearchData(response))
    .catch(error=> console.error('Error:'+error))
    
}

const viewSearchData = (data) => {
    const datalist = document.querySelector("#data-list");

    datalist.innerHTML = "";

    for (const student of data) {
        const li = document.createElement("li");
        li.innerHTML = `${student.firstname} ${student.lastname} ${student.github}`;
        datalist.appendChild(li);
    }
}