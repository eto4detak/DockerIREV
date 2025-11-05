
function ChangeMenu(){

    let header_menu_items = document.getElementsByClassName("header_menu_item0");
    let item_name_array = [];

    let a;
    for (a = 0; a < header_menu_items.length; a++) {
        item_name_array.push(header_menu_items[a].dataset.dropdownTrigger);

    }

    let header_nav = document.getElementsByClassName("header_nav");
    let menuItems = document.getElementsByClassName("sub-menu");

    header_nav[0].innerHTML = header_nav[0].innerHTML + "<div class='nav_dropdown_container'></div>";
    let nav_dropdown_container = document.getElementsByClassName("nav_dropdown_container");

    let html = '';
    var step;
    for (step = 0; step < menuItems.length; step++) {
        html += '<div class="nav_dropdown" data-dropdown-content="'+item_name_array[step]+'" style="display: none;">';
        let element = menuItems[step];
        let sub_menu_link = element.getElementsByClassName("sub-menu-item");

        let i;
        for (i = 0; i < sub_menu_link.length; i++) {
            html += sub_menu_link[i].innerHTML;
        }

        html += '</div>';
    }

    nav_dropdown_container[0].innerHTML = nav_dropdown_container[0].innerHTML + html;

}

ChangeMenu();