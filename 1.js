function handleSubmit () {
    const title = document.getElementById('title').value;
   const date = document.getElementById('date').value;
    const venue = document.getElementById('venue').value;
    const time = document.getElementById('time').value;
      const theme = document.getElementById('theme').value;
      const message = document.getElementById('message').value;

    // to set into local storage
    /* localStorage.setItem("NAME", name);
    localStorage.setItem("SURNAME", surname); */
    
    sessionStorage.setItem("title", title);
  sessionStorage.setItem("date", date);
  sessionStorage.setItem("venue", venue);
   sessionStorage.setItem("time", time);
     sessionStorage.setItem("theme", theme);
     sessionStorage.setItem("message", message);
    
    

    return;
}