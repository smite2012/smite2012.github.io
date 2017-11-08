// preloader
$(window).on("load", function () {
	$(".preloader").delay(1000).fadeOut("slow");
})

// 
// FastClick.attach(document.body);
// $('#fullpage').fullpage();


// 4. Пишем скрипт который создаст и отобразит карту Google Maps на странице.

// Определяем переменную map
var map;

// Функция initMap которая отрисует карту на странице
function initMap() {

    // В переменной map создаем объект карты GoogleMaps и вешаем эту переменную на <div id="map"></div>
    map = new google.maps.Map(document.getElementById('map'), {
        // При создании объекта карты необходимо указать его свойства
        // center - определяем точку на которой карта будет центрироваться
        center: {lat: 36.8537044, lng: -75.9779731},
        // zoom - определяет масштаб. 0 - видно всю платнеу. 18 - видно дома и улицы города.
        zoom: 18,

        // Добавляем свои стили для отображения карты
        styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"on"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
    });

    // Создаем маркер на карте
    var marker = new google.maps.Marker({

        // Определяем позицию маркера
        position: {lat: 36.8537044, lng: -75.9779731},

        // Указываем на какой карте он должен появится. (На странице ведь может быть больше одной карты)
        map: map,

        // Пишем название маркера - появится если навести на него курсор и немного подождать
        title: 'Marker: Virginia Beach Electric Bike Center',

        // Укажем свою иконку для маркера
        // icon: 'http://rightblog.ru/wp-content/uploads/2016/07/theatre_icon.png'
    });

    // Создаем наполнение для информационного окна
    var contentString = '<div id="content">'+
          '<div>'+
          '</div>'+
          '<h1 style="font-size:20px; color: #000">BIKE YOUR DRIVE</h1>'+
          '<div class="VBebike" style="background: url(../img/VBebike.jpg) no-repeat scroll top; height: 115px; width:400px;">'+
          '<p><b>Web site:</b> <a href="http://vbelectricbikes.com/" target="_blank">vbelectricbikes.com</a>'+
          '</p>'+
          '</div>'+
          '</div>';

    // Создаем информационное окно
    var infowindow = new google.maps.InfoWindow({
       content: contentString,
       maxWidth: 400
    });

    // Создаем прослушивание, по клику на маркер - открыть инфо-окно infowindow
    marker.addListener('click', function() {
        infowindow.open(map, marker);
    });

}