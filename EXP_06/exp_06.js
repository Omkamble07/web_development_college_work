document.querySelector('.submit').addEventListener('click', () => {
    let name = document.getElementById('name').value
    let age = document.getElementById('age').value
    let dob = document.getElementById('dob').value
    let addhar_no = document.getElementById('addhar_no').value
    let address = document.getElementById('address').value
    let email = document.getElementById('email').value



    if (name == "" || name.length <= 10) {
        alert("enter valid name")
    } else if (age <= 18 || age == "") {
        alert("you are not eligible")
    } else if (isNaN(Date.parse(dob)) || dob == "") {
        alert("enter valid date")
    } else if (email == "" ) {
        alert("invlid email")
    } else if (addhar_no == "" || addhar_no === 12) {
        alert("invlid Addhar number")
    } else if (address == "" || address >= 6 || !isNaN(address)) {
        alert("invalid address")
    } else {
        alert("form submitted successfully")
    }
})