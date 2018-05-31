function validate(userForm) {
    div = document.getElementById("emailAddMsg"); // #1
    div.style.color = "red"; // #2
    if (div.hasChildNodes()) // #3
    {
        div.removeChild(div.firstChild); // #4
    }
    regex = /(^\w+\@\w+\.\w+)/; // #5
    match = regex.exec(userForm.emailaddress.value);
    if (!match)
    {
        div.appendChild(document.createTextNode("Invalid Email")); // #6
        userForm.emailaddress.focus(); // #7
        return false; // #8
    }
    div = document.getElementById("passMsg");
    div.style.color = "red";
    if (div.hasChildNodes())
    {
        div.removeChild(div.firstChild);
    }
    if (userForm.password.value.length <= 5) // #9
    {
        div.appendChild(document.createTextNode("The password should be of at least size 6"));
        userForm.password.focus();
        return false;
    }
    div = document.getElementById("repassMsg");
    div.style.color = "red";
    if (div.hasChildNodes())
    {
        div.removeChild(div.firstChild);
    }
    if (userForm.password.value != userForm.repassword.value) // #10
    {
        div.appendChild(document.createTextNode("The two passwords don't match"));
        userForm.password.focus();
        return false;
    }
    var div = document.getElementById("fNMsg");
    div.style.color = "red";
    if (div.hasChildNodes())
    {
        div.removeChild(div.firstChild);
    }
    if (userForm.complete_name.value.length == 0) // #11
    {
        div.appendChild(document.createTextNode("First Name cannot be blank"));
        userForm.complete_name.focus();
        return false;
    }
    var div = document.getElementById("lNMsg");
    div.style.color = "red";
    if (div.hasChildNodes())
    {
        div.removeChild(div.firstChild);
    }
    if (userForm.complete_name.value.length == 0) // #11
    {
        div.appendChild(document.createTextNode("Last Name cannot be blank"));
        userForm.complete_name.focus();
        return false;
    }
    return true;
}
                