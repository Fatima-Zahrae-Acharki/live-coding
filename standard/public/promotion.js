let search = document.querySelector("#search");
let  paragraph = document.querySelector("#paragraph");

search.addEventListener("keyup", () =>{
    fetch("search/" + search.value, {

        method: "GET"
    }).then((res) => {
        return res.json();
    })
    .then((data) => {
        console.log(data);
        paragraph.innerHTML ='';

        for(var i = 0; i < data.length; i++){
        paragraph.innerHTML +=`<tr>
        <p>${data[i]['name']}</p>


    </tr>
     `;
        }
    });

})