let form = document.getElementById('lobby__form')

let displayName = sessionStorage.getItem('display_name')
if (displayName) {
    form.name.value = displayName
}

form.addEventListener('submit', (e) => {
    e.preventDefault()

    sessionStorage.setItem('display_name', e.target.name.value)

    let inviteCode = window.prompt("Enter room name:");
    if (!inviteCode) {
        window.location = `./live.php`

        // inviteCode = String(Math.floor(Math.random() * 10000))
    } else {
        window.location = `./live_streaming.php?room=${inviteCode}`
    }

})