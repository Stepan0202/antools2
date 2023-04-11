let delButtons = document.querySelectorAll(".button__admin_delete");
let editButtons = document.querySelectorAll(".button__admin_edit");
delButtons.forEach(element => {
    element.addEventListener('click', (e) =>{
        let id = e.target.dataset['id'];
        location = "/php/phpConfigs/deleteUser.php?id=" + id;
    })
});
editButtons.forEach(element => {
    element.addEventListener('click', (e) => {
        let id = e.target.dataset['id'];
        location = "/php/phpConfigs/editUser.php?id=" + id;
    })
})