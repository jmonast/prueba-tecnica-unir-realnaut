document.addEventListener("DOMContentLoaded", () => {
    const toggle = document.querySelector('.header__toggle');
    const menu = document.querySelector('.header--mobile .header__menu');
    const listItems = document.querySelectorAll('.header--mobile .header__menu__nav > li');

    listItems.forEach(item => {
        const subMenu = item.querySelector('.sub-menu');
        if (subMenu) {
            const arrow = document.createElement('div');
            arrow.classList.add('arrow');
            item.appendChild(arrow);

            item.addEventListener('click', () => {
                const isOpen = subMenu.style.display === 'block';
                subMenu.style.display = isOpen ? 'none' : 'block';
                const color = isOpen ? '#ffffff' : '#FFC72C';
                item.querySelector('a').style.color = color;
                arrow.style.borderColor = color;
                arrow.style.transform = isOpen ? 'rotate(45deg)' : 'rotate(225deg)';
                arrow.style.top = isOpen ? '10px' : '18px';
            });
        }
    });

    if (toggle && menu) {
        toggle.addEventListener('click', () => {
            document.querySelector('.header--mobile .header__branding__aux').classList.toggle('active');
            toggle.classList.toggle('active');
            menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
        });
    }
});