/**
 * ------------------------------------------------------------------------------------------------- 
 * Responsive navigation reveal
 * Found: http://stackoverflow.com/questions/20997687/javascript-hiding-and-showing-div-tag-with-a-toggle-button
 * JSFiddle: http://jsfiddle.net/fyUJc/31/
 * -------------------------------------------------------------------------------------------------
 */

var show_menu = document.querySelector('.show_menu_btn');

show_menu.addEventListener('click', function(event) {
    var target = document.querySelector(show_menu.getAttribute('data-target'));

    if (target.style.display == "none") {
        target.style.display = "block";
        show_menu.innerHTML = show_menu.getAttribute('data-shown-text');

    } else {
        target.style.display = "none";
        show_menu.innerHTML = show_menu.getAttribute('data-hidden-text');
    }
});