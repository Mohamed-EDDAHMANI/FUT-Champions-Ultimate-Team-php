document.querySelector(".jsFilter").addEventListener("click", function () {
    document.querySelector(".filter-menu").classList.toggle("active");
  });
  
  document.querySelector(".grid").addEventListener("click", function () {
    document.querySelector(".list").classList.remove("active");
    document.querySelector(".grid").classList.add("active");
    document.querySelector(".products-area-wrapper").classList.add("gridView");
    document
      .querySelector(".products-area-wrapper")
      .classList.remove("tableView");
  });
  
  document.querySelector(".list").addEventListener("click", function () {
    document.querySelector(".list").classList.add("active");
    document.querySelector(".grid").classList.remove("active");
    document.querySelector(".products-area-wrapper").classList.remove("gridView");
    document.querySelector(".products-area-wrapper").classList.add("tableView");
  });
  
  var modeSwitch = document.querySelector('.mode-switch');
  modeSwitch.addEventListener('click', function () {                      
   document.documentElement.classList.toggle('light');
   modeSwitch.classList.toggle('active');
  });

  positionSelect.addEventListener('change', () => {
    if (positionSelect.value === 'GK') {
        numInputsGK.style.display = 'flex'
        numInputs.style.display = 'none'
        const nums = [...num];
        nums.forEach(item => {
            item.display = 'none'
        });
    } else {
        numInputsGK.style.display = 'none'
        numInputs.style.display = 'flex'
        const nums = [...num];
        nums.forEach(item => {
            item.display = 'flex'
        });

    }
})

  // document.querySelector('.playersListContainer')