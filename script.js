const container = document.querySelector('.container');
const seats = document.querySelectorAll('.row .seat:not(.occupied)');
const count = document.getElementById('count');
const total = document.getElementById('total');
const movieSelect = document.getElementById('movie');
let totalamount;
let ticketPrice = parseInt(movieSelect.value);


//save selected movie index and price

function setMovieData(movieIndex , moviePrice){
    localStorage.setItem('selectedMovieIndex',movieIndex);
    localStorage.setItem('selectedMoviePrice',moviePrice);
}

//update total and count
function updateSelectedCount(){
    const selectedSeats = document.querySelectorAll('.row .seat.selected');
    

    //To Store the information in localStorage
    
    const seatsIndex = [...selectedSeats].map((seat)=>{
        return [...seats].indexOf(seat)
    })

    localStorage.setItem('selectedSeats',JSON.stringify(seatsIndex));

    const selectedSeatsCount = selectedSeats.length;
    count.innerText = selectedSeatsCount;
    total.innerText = selectedSeatsCount*ticketPrice;
}


//get data from localstorage and populate UI 
function populateUI(){
    const selectedSeats = JSON.parse(localStorage.getItem('selectedSeats'));
    
    if(selectedSeats !== null && selectedSeats.length > 0){
        seats.forEach((seat,index)=>{
            if(selectedSeats.indexOf(index) > -1){
                seat.classList.add('selected');
            }
        })

    }

    const selectedMovieIndex = localStorage.getItem('selectedMovieIndex');
    if(selectedMovieIndex !== null){
        movieSelect.selectedIndex = selectedMovieIndex;
    }

}
populateUI()


//Movie Select event

movieSelect.addEventListener('change',(e)=>{
    ticketPrice = +e.target.value;
    updateSelectedCount();
})



//Seat click Event 
container.addEventListener('click',(e)=>{
    if(e.target.classList.contains('seat') && !e.target.classList.contains('occupied')){
        e.target.classList.toggle('selected');
        setMovieData(e.target.selectedIndex,e.target.value);
        updateSelectedCount();
    }
})

//initial count and total set
updateSelectedCount();
localStorage.setItem("totalamount",total);
localStorage.setItem("priceofticket",ticketPrice);
let a=localStorage.getItem("selectedSeats");
                var old= JSON.parse(localStorage.getItem('selectedSeats'));
                
            
                var l=old.length;
                var i=l*ticketPrice;
                localStorage.setItem("GrandTotal",i);