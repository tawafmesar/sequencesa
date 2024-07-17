const openPop = document.querySelector('.open')
const closePop = document.querySelector('.close')
const wrapper = document.querySelector('.wrapper')

openPop.addEventListener('click', () => {
    wrapper.classList.add('active')
})

closePop.addEventListener('click', () => {
    wrapper.classList.remove('active')
})

