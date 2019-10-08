

function isValidNumber(str) {
  let num = Math.floor(Number(str))
  return (String(num) === str) && (num >= 0)
}

document.querySelector('form').addEventListener('submit', event => {
  let username = document.querySelector('input[name="username"]').value
  let password = document.querySelector('input[name="password"]').value
  let item_1 = document.querySelector('input[name="item-1"]').value
  let item_2 = document.querySelector('input[name="item-2"]').value
  let item_3 = document.querySelector('input[name="item-3"]').value



  // Validates password
  if(!password || 0 === password.length)
  {
    alert("Please enter a valid password.\nPasswords must be at least 1 character.")
    event.preventDefault()
  }
  // Validates item numbers
  else if(!isValidNumber(item_1) || !isValidNumber(item_2) || !isValidNumber(item_3) )
  {
    alert("All item quantities must be equal to or greater than 0.")
    event.preventDefault()
  }
})


document.querySelector(".reset-button").addEventListener('click', reset =>
{
  location.reload()
})
