
function toggleSubmenu(el) {
    el.parentElement.classList.toggle("open");
}

function toggleSidebar() {
    document.body.classList.toggle("sidebar-open");
}

// Set current year in footer
document.getElementById("year").textContent = new Date().getFullYear();