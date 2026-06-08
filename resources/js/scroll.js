const Iscroll = document.querySelector('.iphone-scroll');
const Mscroll = document.querySelector('.mac-scroll');

const Iprev = document.querySelector('.Iback');
const Inext = document.querySelector('.Inext');
const Mprev = document.querySelector('.Mback');
const Mnext = document.querySelector('.Mnext');

Iprev.addEventListener('click',()=>{
    
    Iscroll.scrollBy({ left: -500, behavior:'smooth'});
    updateIButtons();
});

Inext.addEventListener('click',()=>{
  
    Iscroll.scrollBy({ left: 500, behavior:'smooth'});
   updateIButtons();
});


Mprev.addEventListener('click',()=>{
   
    Mscroll.scrollBy({ left: -500, behavior:'smooth'});
    updateMButtons();
});

Mnext.addEventListener('click',()=>{
     
    Mscroll.scrollBy({ left: 500, behavior:'smooth'});
    updateMButtons();
});

function updateIButtons() {
    Iprev.style.visibility = Iscroll.scrollLeft < 1 ? 'hidden' : 'visible';
    Inext.style.visibility = Math.ceil(Iscroll.scrollLeft + Iscroll.clientWidth) >= Iscroll.scrollWidth ? 'hidden' : 'visible';
}
function updateMButtons() {
    Mprev.style.visibility = Mscroll.scrollLeft < 1 ? 'hidden' : 'visible';
    Mnext.style.visibility = Math.ceil(Mscroll.scrollLeft + Mscroll.clientWidth) >= Mscroll.scrollWidth ? 'hidden' : 'visible';
}


Iscroll.addEventListener('scroll', updateIButtons);
Mscroll.addEventListener('scroll', updateMButtons);
updateIButtons();
updateMButtons();