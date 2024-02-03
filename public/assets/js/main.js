const donation_volunteer_select = document.getElementById("donation_volunteer_select");
const donation_select = document.getElementById("donation-select");
const volunteer_select = document.getElementById("volunteer-select");

donation_volunteer_select.addEventListener('change',()=>{
    if(donation_volunteer_select.value == "donation"){
        volunteer_select.style.display="none";
        donation_select.style.display="block";
    }else{
        donation_select.style.display="none";
        volunteer_select.style.display="block";
    }
})

