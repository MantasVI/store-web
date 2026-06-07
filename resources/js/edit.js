const add = document.querySelector('.add');
const remove = document.querySelector('.remove');
const count = document.querySelector('.counter');

add.addEventListener('click', () => {

    count.value++;
});

remove.addEventListener('click', () => {
    if (count.value <= 1) {
        alert('cannot be 0');
        return;
    }
    count.value--;
   
});