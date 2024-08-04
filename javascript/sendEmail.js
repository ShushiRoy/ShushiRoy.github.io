function sendEmail() {
    var name = document.getElementById("name").value;
    var subject = document.getElementById("subject").value;
    var message = document.getElementById("message").value;
    
    var mailtoLink = "mailto:info@shushitalroy.ca" +
                     "?subject=" + encodeURIComponent(subject) +
                     "&body=" + encodeURIComponent(message);
    
    window.location.href = mailtoLink;
}