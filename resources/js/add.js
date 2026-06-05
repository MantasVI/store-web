const add = document.querySelector('.add');
const remove = document.querySelector('.remove');
const count = document.querySelector('.counter');
const price = document.querySelector('.price').innerText; //649
let save = price * 1;
console.log(typeof (parseFloat(price)));

add.addEventListener('click', () => {

    count.value++;
    save = parseFloat(price) * count.value;
    console.log(save);
});

remove.addEventListener('click', () => {
    if (save < price * 1) {
        count.value++;
        alert('cannot be 0');
    }
    count.value--;
    save = parseFloat(price) * count.value;
    console.log(save);
});