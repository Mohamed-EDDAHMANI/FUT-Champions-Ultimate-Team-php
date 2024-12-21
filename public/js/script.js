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

const num = document.getElementsByClassName('num')
const positionSelect = document.getElementById('positionSelect')
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

document.querySelectorAll('.redirect').forEach(item => {
  item.addEventListener('click', function () {
    const btnId = this.getAttribute('id')
    document.querySelectorAll('.redirect').forEach(container => {
      let btnId = container.getAttribute('id');
      document.getElementsByClassName(btnId)[0].style.display = 'none';
    })
    document.getElementsByClassName(btnId)[0].style.display = 'block'
  })
})

document.querySelectorAll('.sidebar-list-item').forEach(item => {
  item.addEventListener('click', function () {
    document.querySelectorAll('.sidebar-list-item').forEach(item => item.classList.remove('active'))
    this.classList.add('active')
  })
})

function updatePlayer(id) {
  console.log(id)
  fetch("update_player.php", {
    method: 'POST',
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify({id: id})
  })
    .then(res => res.json())
    .then(data => {
      console.log(data)
    })
    .catch(error => {
      console.log('Erreur:', error);
    });
}