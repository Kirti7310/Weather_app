$(document).ready(function()
{
  const apiKey = 'e11b9766d26bd9c7fed3dafec0290439';
  $('#get-weather').on('click',function()
{
  let city = $('#city').val();
  if(city == '')
  {
    $.alert(
      {
        title:'OOPS!',
        content:'You have not mentioned the city',
        button:
        {
          ok: function() {
              window.location.href = 'index.php';
          }
        }
      }
    )
  }
  else 
  {

    $.ajax(
      {
        url: `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`, 
        method : 'GET',
        dataType:'json',
        success :function(response)
        {
           console.log(response);

           let temperature = response.main.temp;
           let description = response.weather[0].description;
           let icon = response.weather[0].icon;


           $('#weather-info').html
           (
            `
            <div class="weather">
                  <img src="https://openweathermap.org/img/wn/${icon}.png" alt="${description}" />
                  <h1 class="temp">${temperature}°C</h1>
                  <p>${description}</p>
                </div>
            `
           );


        },
        error:function()
        {
          console.log("error");
        }
      }
    )



  }




});





});