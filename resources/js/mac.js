const tipas = document.querySelector('.tipas'); // pigiausias arba brangiausias arnba default // 12 arba 24 arba 36 arba visi
const gridas = document.querySelector('.grid');  // vienas is konteineriu
const kiekis = document.querySelector('.quant');
const originalOrder = Array.from(document.querySelectorAll('.a'));
const data = Array.from(document.querySelectorAll('.a')).map(element => {
   return {
    element: element,
    kategorija: element.querySelector('.kategorija').innerText,
    screenSize: element.querySelector('.screenSize').innerText,
    screenType:  element.querySelector('.screenType').innerText,
    storage: element.querySelector('.storage').innerText,
    color: element.querySelector('.color').innerText,
    cpu: element.querySelector('.cpu').innerText,
    gpu: element.querySelector('.gpu').innerText,
    ram: element.querySelector('.ram').innerText,
    arYra: element.querySelector('.status').innerText,
    price: parseFloat(element.querySelector('.price').innerText),
};
    });


    function applyall()
    {
        const checkboxKategorija = Array.from(document.querySelectorAll('.checkbox-kategorija')).filter(ck => ck.checked).map(ck => ck.value);
        const checkboxScreenSize =  Array.from(document.querySelectorAll('.checkbox-screenSize')).filter(ck => ck.checked).map(ck => ck.value);
        const checkboxScreenType =  Array.from(document.querySelectorAll('.checkbox-screenType')).filter(ck => ck.checked).map(ck => ck.value);
        const checkboxCpu =  Array.from(document.querySelectorAll('.checkbox-cpu')).filter(ck => ck.checked).map(ck => ck.value);
        const checkboxGpu =  Array.from(document.querySelectorAll('.checkbox-gpu')).filter(ck => ck.checked).map(ck => ck.value);
        const checkboxRam =  Array.from(document.querySelectorAll('.checkbox-ram')).filter(ck => ck.checked).map(ck => ck.value);
        const checkboxColor =  Array.from(document.querySelectorAll('.checkbox-color')).filter(ck => ck.checked).map(ck => ck.value);
        const checkboxArYra =  Array.from(document.querySelectorAll('.checkbox-arYra')).filter(ck => ck.checked).map(ck => ck.value);
        const checkboxStorage =  Array.from(document.querySelectorAll('.checkbox-storage')).filter(ck => ck.checked).map(ck => ck.value);

        let filtered = data.filter(item => {
          
            const kategorijaMatch = checkboxKategorija.includes(item.kategorija) || checkboxKategorija.length === 0;
            const screenSizeMatch = checkboxScreenSize.includes(item.screenSize) ||  checkboxScreenSize.length === 0;
            const screenTypeMatch = checkboxScreenType.includes(item.screenType) || checkboxScreenType.length === 0;
            const storageMatch = checkboxStorage.includes(item.storage) || checkboxStorage.length === 0;

            const cpuMatch = checkboxCpu.includes(item.cpu) || checkboxCpu.length === 0;
            const gpuMatch = checkboxGpu.includes(item.gpu) || checkboxGpu.length === 0;
            const ramMatch = checkboxRam.includes(item.ram) || checkboxRam.length === 0;

            const colorMatch = checkboxColor.includes(item.color) || checkboxColor.length === 0;
            const arYraMatch = checkboxArYra.includes(item.arYra) || checkboxArYra.length === 0;
            

            return kategorijaMatch &&  screenSizeMatch &&  screenTypeMatch && storageMatch && cpuMatch && gpuMatch && ramMatch && colorMatch && arYraMatch;
        });   
        const limit = kiekis.value.toLowerCase() === 'all' ? filtered.length : parseInt(kiekis.value);

        data.forEach(item => {
            item.element.style.display = 'none';

        });

        filtered.slice(0,limit).forEach(item => {
            item.element.style.display = 'flex';
        });
        
    }

    

     function sortas()
     {
        if(tipas.value.toLowerCase() === 'pigus')
        {
            data.sort((a,b) =>  a.price - b.price );
             
           
            data.forEach(item =>gridas.appendChild(item.element));
        }
        else if (tipas.value.toLowerCase() === 'brangus')
        {
             data.sort((a,b) =>  b.price-a.price );
              data.forEach(item =>gridas.appendChild(item.element));
        }
        else if(tipas.value.toLowerCase() === 'default')
        {
            originalOrder.forEach(item => gridas.appendChild(item));
            
           
        }
        
        applyall();
     }

kiekis.addEventListener('change',applyall);
tipas.addEventListener('change',sortas);
document.querySelectorAll(".checkbox-kategorija, .checkbox-screenSize , .checkbox-screenType , .checkbox-cpu , .checkbox-gpu , .checkbox-ram , .checkbox-color , .checkbox-arYra , .checkbox-storage").forEach(ck => ck.addEventListener('change',applyall));
    
    
    
   