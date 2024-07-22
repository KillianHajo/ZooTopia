// Filtre de Recherche véhicules d'occasions.


const product = [
    {
        id: 0,
        image: 'image/Citroën-C1-Vti.jpg',
        title: 'Citroën C1 VTi 72 S&S Feel',
        price: 4000,
        km: '16 900 km',
        years: '2022'
    },
    {
        id: 1,
        image: 'image/volkswagen-golf-plus-3783176.jpg',
        title: 'Volkswagen Golf Plus',
        price: 7490,
        km: '148 800 km',
        years: '2010'
    },
    {
        id: 2,
        image: 'image/suzuki-grand-vitara-3707915.jpg',
        title: 'Suzuki Grand Vitara',
        price: 9990,
        km: '176 300 km',
        years: '2012'
    },
    {
        id: 3,
        image: 'image/volkswagen-golf-3788056.jpg',
        title: 'Volkswagen Golf',
        price: 6900,
        km: '60 000 Km',
        years: '2003'
    },
    {
        id: 4,
        image: 'image/audi-a4-3786274.jpg',
        title: 'Audi A4',
        price: 7990,
        km: '88997 Km',
        years: '2003'
    },
    {
        id: 5,
        image: 'image/peugeot-2008-3775588.jpg',
        title: 'Peugeot 2008',
        price: 7800,
        km: '100 002 km',
        years: '2018'
    },
    {
        id: 6,
        image: 'image/peugeot-107-3780706.jpg',
        title: 'Peugeot 107',
        price: 6800,
        km: '145 000 km',
        years: '2008'
    },
    {
        id: 7,
        image: 'image/opel-mokka-3745350.jpg',
        title: 'Opel Mokka',
        price: 8888,
        km: '88 888 km',
        years: '2020'
    },
    {
        id: 8,
        image: 'image/alfa-romeo-giulietta-3783314.jpg',
        title: 'Alfa Romeo Giulietta',
        price: 9090,
        km: '55 555 km',
        years: '2020'
    },
    {
        id: 9,
        image: 'image/opel-insignia-3775589.jpg',
        title: 'Opel Insignia',
        price: 10000,
        km: '19 999 km',
        years: '2022'
    },
    {
        id: 10,
        image: 'image/toyota-aygo-3783949.jpg',
        title: 'Toyota Aygo',
        price: 8888,
        km: '88 888 km',
        years: '2022'
    },
    {
        id: 11,
        image: 'image/peugeot-208-3780708.jpg',
        title: 'Peugeot 208',
        price: 10000,
        km: '10 988 km',
        years: '2022'
    },
];

const categories = [...new Set(product.map((item) => { return item }))]

document.getElementById('searchBar').addEventListener('keyup', (e) => {
    const searchData = e.target.value.toLowerCase();
    const filteredData = categories.filter((item) => {
        return (
            item.title.toLowerCase().includes(searchData)
        )
    })
    displayItem(filteredData)
});



window.onload = function(){
    slideOne();
    slideTwo();
}
let sliderOne = document.getElementById("slider-1");
let sliderTwo = document.getElementById("slider-2");
let displayValOne = document.getElementById("range1");
let displayValTwo = document.getElementById("range2");
let minGap = 0;
let sliderTrack = document.querySelector(".slider-track");
let sliderMaxValue = document.getElementById("slider-1").max;
function slideOne(){
    if(parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap){
        sliderOne.value = parseInt(sliderTwo.value) - minGap;
    }
    displayValOne.textContent = sliderOne.value;
    fillColor();
}
function slideTwo(){
    if(parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap){
        sliderTwo.value = parseInt(sliderOne.value) + minGap;
    }
    displayValTwo.textContent = sliderTwo.value;
    fillColor();
}
function fillColor(){
    percent1 = (sliderOne.value / sliderMaxValue) * 100;
    percent2 = (sliderTwo.value / sliderMaxValue) * 100;
    sliderTrack.style.background = `linear-gradient(to right, #dadae5 ${percent1}% , #3264fe ${percent1}% , #3264fe ${percent2}%, #dadae5 ${percent2}%)`;
}


const displayItem = (items) => {
    document.getElementById('root').innerHTML = items.map((item) => {
        var { image, title, price, km, years } = item;
        return (
            `<div class='box3'>
                <div class='img-box7'>
                    <img class='images4' src=${image}></img>
                </div> 
                <div class='bottom-shop'>
                    <p>${title}</p>
                    <h2>€ ${price}.00 </h2>
                    <p>${km}</p>
                    <p>${years}</p>
                <button class="shop-button">Ajouter au Panier</button>
                </div>
            </div>`
        )
    }).join('')
};
displayItem(categories);



        //---------------ne fonctionne pas filtre range



