(function () {
    const timerBlock = document.querySelectorAll('.timer_count')
    const daysBlock = document.querySelector('.timer_days')
    const hoursBlock = document.querySelector('.timer_hours')
    const minutesBlock = document.querySelector('.timer_minutes')
    const secondsBlock = document.querySelector('.timer_seconds')


    let interval

    const numWord = (value, words) => {
        value = Math.abs(value) % 100
        const lastNum = value % 10

        if (value === 1) return words[0]

        return words[1]
    }

    const updateTimer = () => {
        const date = new Date()
        const dateDeadLine = new Date('28 April 2023').getTime()
        const timeRemaining = (dateDeadLine - date) / 1000

        const days = Math.floor(timeRemaining / 60 / 60 / 24)
        const hours = Math.floor((timeRemaining / 60 / 60) % 24)
        const minutes = Math.floor((timeRemaining / 60) % 60)
        const seconds = Math.floor(timeRemaining % 60)

        const fDays = days < 10 ? '0' + days : days
        const fHours = hours < 10 ? '0' + hours : hours
        const fMinutes = minutes < 10 ? '0' + minutes : minutes
        const fSeconds = seconds < 10 ? '0' + seconds : seconds


        daysBlock.textContent = fDays
        hoursBlock.textContent = fHours
        minutesBlock.textContent = fMinutes
        secondsBlock.textContent = fSeconds

        daysBlock.nextElementSibling.textContent = numWord(days, ['Day', 'Days'])
        hoursBlock.nextElementSibling.textContent = numWord(hours, ['Hour', 'Hours'])
        minutesBlock.nextElementSibling.textContent = numWord(minutes, ['Minute', 'Minutes'])
        secondsBlock.nextElementSibling.textContent = numWord(seconds, ['Second', 'Seconds'])

        if (timeRemaining <= 0) {
            clearInterval(interval)
            daysBlock.textContent = '00'
            hoursBlock.textContent = '00'
            minutesBlock.textContent = '00'
            secondsBlock.textContent = '00'

            timerBlock.forEach(block => {
                block.style.color = '#800000';
            })
        }
    }

    updateTimer()
    interval = setInterval(updateTimer, 500)
}());