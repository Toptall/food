function modalClose(modalSelector) {
    const modalWindow = document.querySelector(modalSelector);

    modalWindow.classList.add('hide');
    modalWindow.classList.remove('show');
    document.body.style.overflow = '';
}

function modalOpen(modalSelector, modalTimerId) {
    const modalWindow = document.querySelector(modalSelector);

    modalWindow.classList.add('show');
    modalWindow.classList.remove('hide');
    document.body.style.overflow = 'hidden';

    if(modalTimerId) {
        clearInterval(modalTimerId);
    }
    
}

function modal(triggerSelector, modalSelector, modalTimerId) {
    
    const modalWindow = document.querySelector(modalSelector),
          btnModal = document.querySelectorAll(triggerSelector)
          

    btnModal.forEach(btn => {
        btn.addEventListener('click', () => modalOpen(modalSelector, modalTimerId));
    });


    modalWindow.addEventListener('click', (event) => {
        if(event.target === modalWindow || event.target.getAttribute('data-close') == '') {
            modalClose(modalSelector);
        }
    });

    document.addEventListener('keydown', (event) => {
        if(event.code === 'Escape' && modalWindow.classList.contains('show')) {
            modalClose(modalSelector);
        }
    });

    

    function showModalByScroll() {
        if(window.pageYOffset + document.documentElement.clientHeight >= document.documentElement.scrollHeight) {
            modalOpen(modalSelector, modalTimerId);
            window.removeEventListener('scroll', showModalByScroll);
        }
    }

    window.addEventListener('scroll', showModalByScroll);
}

export default modal;
export {modalOpen};
export {modalClose};