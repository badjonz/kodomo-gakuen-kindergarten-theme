"use strict";

// Phone Nav bar ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if (mediaQuery.matches) {
  const hamburgerToggle = document.querySelector(".hamburger-menu__check");
  const navPhone = document.querySelector("#nav-phone");
  const navMenu = navPhone.querySelector(".nav-menu__list");

  hamburgerToggle.addEventListener("change", function () {
    if (this.checked) {
      navPhone.style.width = "65vw";
      navMenu.style.visibility = "visible";
      navMenu.style.opacity = "1";
      console.log("you pressed");
    } else {
      navPhone.style.width = "0";
      navMenu.style.visibility = "hidden";
      navMenu.style.opacity = "0";
    }
  });

  // Close all Sub-menus when the hamburger menu is closed

  $(document).ready(function () {
    $(".hamburger-menu__check").change(function () {
      if (!$(this).is(":checked")) {
        $(".submenu-phone__list").slideUp();
      }
    });
  });

  // Open and closes the submenus when respective menu is clicked

  $(document).ready(function () {
    $(".nav-menu__item").click(function () {
      var submenu = $(this).find(".submenu-phone__list");
      $(".submenu-phone__list").not(submenu).slideUp();
      submenu.slideToggle();
    });
  });
}
