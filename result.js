window.addEventListener('load', () => {


    const title = sessionStorage.getItem('title');
 const date = sessionStorage.getItem('date');
 const venue = sessionStorage.getItem('venue');
 const time = sessionStorage.getItem('time');
 const theme = sessionStorage.getItem('theme');
  const message = sessionStorage.getItem('message');
    
    
    
    document.getElementById('result-title').innerHTML = title;
  document.getElementById('result-date').innerHTML = date;
  document.getElementById('result-venue').innerHTML = venue;
    document.getElementById('result-time').innerHTML = time;
        document.getElementById('result-theme').innerHTML = theme;
          document.getElementById('result-message').innerHTML = message;

         

})