const kiekis = document.querySelector('.quant');
const tipas = document.querySelector('.tipas');
const gridas = document.querySelector('.grid');
const originalOrder = Array.from(document.querySelectorAll('.a'));

const data = Array.from(document.querySelectorAll('.a')).map(element => ({
    element: element,
    kategorija: element.querySelector('.kategorija').innerText,
    screenSize: element.querySelector('.screenSize').innerText,
    storage: element.querySelector('.storage').innerText,
    color: element.querySelector('.color').innerText,
    price: parseFloat(element.querySelector('.price').innerText),
    arYra: element.querySelector('.status').innerText,
}));
  

function applyAll() {
    const checkedKategorija = Array.from(document.querySelectorAll('.checkbox-kategorija')).filter(cb => cb.checked).map(cb => cb.value);
      
    const checkedScreenSize = Array.from(document.querySelectorAll('.checkbox-screenSize')).filter(cb => cb.checked).map(cb => cb.value);
    
    const checkedStorage = Array.from(document.querySelectorAll('.checkbox-storage')).filter(cb => cb.checked).map(cb => cb.value);
        

    const checkedColor = Array.from(document.querySelectorAll('.checkbox-color')).filter(cb => cb.checked).map(cb => cb.value);
        

    const checkedArYra = Array.from(document.querySelectorAll('.checkbox-arYra')).filter(cb => cb.checked).map(cb => cb.value);
        

    let filtered = data.filter(item => {
        const kategorijaMatch = checkedKategorija.length === 0 || checkedKategorija.includes(item.kategorija);
        const screenSizeMatch = checkedScreenSize.length === 0 || checkedScreenSize.includes(item.screenSize); 
        const storageMatch = checkedStorage.length === 0 || checkedStorage.includes(item.storage);
        const colorMatch = checkedColor.length === 0 || checkedColor.includes(item.color);
        const arYraMatch = checkedArYra.length === 0 || checkedArYra.includes(item.arYra);

        return kategorijaMatch && storageMatch && colorMatch && arYraMatch && screenSizeMatch;
    });

    const limit = kiekis.value.toLowerCase() === 'all' ? filtered.length : parseInt(kiekis.value);
    data.forEach(item => {
        item.element.style.display = 'none';
    });
        
    filtered.slice(0, limit).forEach(item => {
        item.element.style.display = 'flex'
    });
}

function sortas() {
    if(tipas.value.toLowerCase() === 'pigus') 
    {
        data.sort((a, b) => a.price - b.price);
        data.forEach(item => gridas.appendChild(item.element));
    } 
    else if(tipas.value.toLowerCase() === 'brangus') 
    {
        data.sort((a, b) => b.price - a.price);
         data.forEach(item => gridas.appendChild(item.element));
    }
    else if(tipas.value.toLowerCase() === 'default')
    {
        originalOrder.forEach(item => gridas.appendChild(item)); 
    }
   
    applyAll();
}

kiekis.addEventListener('change', applyAll);
tipas.addEventListener('change', sortas);
document.querySelectorAll('.checkbox-kategorija, .checkbox-storage, .checkbox-color, .checkbox-arYra, .checkbox-screenSize').forEach(cb => cb.addEventListener('change', applyAll));
    