var button = document.getElementById('openCollapse');
var collapse = document.getElementById('collapse');
var closeBtn = document.getElementById('closeCollapse');

button.addEventListener('click', () => {
    collapse.classList.replace('hidden', 'flex');
});
closeBtn.addEventListener('click', () => {
    collapse.classList.replace('flex', 'hidden')
});


// Filtre catégorie de formation
var getFilterBtn = document.getElementById('dropdownDefault');
var getDropdown = document.getElementById('dropdown');
getFilterBtn.addEventListener("click", () => {
    getDropdown.classList.replace('hidden', 'flex')
})

//Filter bar 
