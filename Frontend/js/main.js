"use strict"

document.addEventListener("DOMContentLoaded",()=>{
    
    window.addEventListener('scroll',function(){
        let scrollPos = window.scrollY;
        let logo = document.getElementById('logo');
        if(scrollPos > 10){
            logo.classList.add('reduce');
        }else{
            logo.classList.remove('reduce');
        }
    })
})