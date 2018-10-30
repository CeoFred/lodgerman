
function showNav(){
  const sideNav = document.getElementById('sideNav')
  if(sideNav.style.display == 'block'){
    sideNav.classList.remove('slideInLeft')
    sideNav.classList.add('slideOutLeft')
    sideNav.style.display = 'none'
  }else{
    
    sideNav.className = 'card animated slideInLeft'
    sideNav.style.display = 'block'
  }

}

function showOverlay(){
    
                      
  $("#body").LoadingOverlay("show");
                  
      
  $("#body").LoadingOverlay("hide");
                  
  
    }
    

(function() {
    'use strict';
   
    if ('serviceWorker' in navigator) {
      navigator.serviceWorker
               .register('./service-worker.js')
               .then(function() { console.log('Service Worker Registered'); });
    }
  })();

 