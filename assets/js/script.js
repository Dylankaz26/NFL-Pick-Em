var form = document.querySelector("form");

form.addEventListener("submit", function(event) {
  event.preventDefault();

  var username = document.querySelector("#username").value;
  var password = document.querySelector("#password").value;

  var data = {
    username: username,
    password: password
  };

  fetch("/login", {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify(data)
  })
  .then(function(response) {
    if (response.ok) {
      // Redirect the user to the home page or another authenticated page
      window.location.href = "/home";
    } else {
      // Display an error message
      var message = document.createElement("div");
      message.textContent = "Incorrect username or password";
      document.querySelector("form").appendChild(message);
    }
  });
});
