function func(){

    let username = document.getElementById("username");
    let password = document.getElementById("password");

    if(username.value == "" || password.value == "") {
        alert("Ensure you input a value in both fields!");
    } else {
        alert("This form has been successfully submitted");
        console.log(username.value)
        console.log(password.log)
        
        username.value = "";
        password.value = "";
    }
}