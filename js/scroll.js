const checkScroll = () => {
    const header = document.querySelector('.header');
    if (window.innerWidth > 360) {
        if (window.scrollY > 50) {
            header
                .classList
                .add('scroll');
        } else {
            header
                .classList
                .remove('scroll');
        }
    }
};
window.addEventListener('scroll', checkScroll);
document.addEventListener('DOMContentLoaded', checkScroll);
