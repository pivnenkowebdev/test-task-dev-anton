const accordList = document.querySelector('#accordeon')

if (window.innerWidth >= 1920) {
    accordList.querySelector('[data-item]:first-child')?.classList.add('open');
}

const motionAccord = (e) => {
    const isListItem = e.target.closest('[data-item]')
    if (isListItem) {
        isListItem.classList.toggle('open')
    }
}

accordList.addEventListener('click', (e) => motionAccord(e))