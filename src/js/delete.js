let buttons = document.querySelectorAll(".button__admin_delete");
buttons.forEach(element => {
    element.addEventListener('click', (e) =>{
        let id = e.target.dataset['id'];
        location = "/php/phpConfigs/deleteUser.php?id=" + id;
    })
});