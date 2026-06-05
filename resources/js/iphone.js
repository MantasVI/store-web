const quantity = document.querySelector('.quant');
const tipas = document.querySelector('.tipas');
const gridas = document.querySelector('.grid');

const data = Array.from(document.querySelectorAll('.a')).map(element => ({
    element: element,
    kategorija: element.querySelector('.kategorija').innerText.trim(),
    storage: element.querySelector('.storage').innerText.trim(),
    color: element.querySelector('.color').innerText.trim(),
    price: parseFloat(element.querySelector('.price').innerText.trim()),
    arYra: element.querySelector('.status').innerText.trim(),
}));

function applyAll() {
    const checkedKategorija = Array.from(document.querySelectorAll('.checkbox-kategorija'))
        .filter(cb => cb.checked).map(cb => cb.value.trim());

    const checkedStorage = Array.from(document.querySelectorAll('.checkbox-storage'))
        .filter(cb => cb.checked).map(cb => cb.value.trim());

    const checkedColor = Array.from(document.querySelectorAll('.checkbox-color'))
        .filter(cb => cb.checked).map(cb => cb.value.trim());

    const checkedArYra = Array.from(document.querySelectorAll('.checkbox-arYra'))
        .filter(cb => cb.checked).map(cb => cb.value.trim());

    let filtered = data.filter(item => {
        const kategorijaMatch = checkedKategorija.length === 0 || checkedKategorija.includes(item.kategorija);
        const storageMatch = checkedStorage.length === 0 || checkedStorage.includes(item.storage);
        const colorMatch = checkedColor.length === 0 || checkedColor.includes(item.color);
        const arYraMatch = checkedArYra.length === 0 || checkedArYra.includes(item.arYra);

        return kategorijaMatch && storageMatch && colorMatch && arYraMatch;
    });

    const limit = quantity.value.toLowerCase() === 'all' ? filtered.length : parseInt(quantity.value);
    data.forEach(item => item.element.style.display = 'none');
    filtered.slice(0, limit).forEach(item => item.element.style.display = 'block');
}

function sortas() {
    if(tipas.value === 'Pigus') {
        data.sort((a, b) => a.price - b.price);
    } else if(tipas.value === 'Brangus') {
        data.sort((a, b) => b.price - a.price);
    }
    data.forEach(item => gridas.appendChild(item.element));
    applyAll();
}

quantity.addEventListener('change', applyAll);
tipas.addEventListener('change', sortas);
document.querySelectorAll('.checkbox-kategorija, .checkbox-storage, .checkbox-color, .checkbox-arYra').forEach(cb => cb.addEventListener('change', applyAll));
    