
function toggleSubmenu(el) {
    el.parentElement.classList.toggle("open");
}

function toggleSidebar() {
    document.body.classList.toggle("sidebar-open");
}
// Dashboard Card Counter
function animateCount(el) {
    if (!el) return;

    const target = parseInt(el.getAttribute('data-target'), 10);
    if (isNaN(target)) return;

    const duration = 1500;
    const startTime = performance.now();

    function update(now) {
        const progress = Math.min((now - startTime) / duration, 1);
        const value = Math.floor(progress * target);

        el.textContent = `${value.toLocaleString()}`;

        if (progress < 1) {
            requestAnimationFrame(update);
        } else {
            el.textContent = `${target.toLocaleString()}`;
        }
    }

    requestAnimationFrame(update);
}

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-target]').forEach(el => {
        animateCount(el);
    });
});
