const book_car_form = document.querySelector('#book_car_form'),
  book_tour_form = document.querySelector('#book_tour_form'),
  book_car_btn = document.querySelectorAll('.book_car_btn'),
  book_tour_btn = document.querySelectorAll('.book_tour_btn');

let whatsapp_number = document.getElementById('whatsapp-number').getAttribute('data-wa');
whatsapp_number = whatsapp_number.replace(/\s/g, '').replace(/-/g, '');

if ( book_car_form ) {
  book_car_form.addEventListener('submit', function(e) {
    e.preventDefault();

    const book_name = document.getElementById('book_name'),
      book_phone = document.getElementById('book_phone'),
      book_car = document.getElementById('book_car'),
      book_duration = document.getElementById('book_duration');
    
    let text = `Halo, saya mau sewa mobil %0a%0a` +
      `Nama: ${book_name.value} %0a` +
      `No. Telp / WA: ${book_phone.value} %0a` +
      `Car: ${book_car.value} %0a` +
      `Durasi: ${book_duration.value} %0a`;

    window.location = 'https://wa.me/' + whatsapp_number + '?text=' + text; 
  });
}

if ( book_tour_form ) {
  book_tour_form.addEventListener('submit', function(e) {
    e.preventDefault();

    const book_name = document.getElementById('book_name'),
      book_qty = document.getElementById('book_qty'),
      book_packet = document.getElementById('book_packet'),
      book_start_date = document.getElementById('book_start_date'),
      book_pickup_time = document.getElementById('book_pickup_time'),
      book_pickup_location = document.getElementById('book_pickup_location');
    
    let text = `Halo, saya mau booking tour %0a%0a` +
      `Nama: ${book_name.value} %0a` +
      `Qty: ${book_qty.value} %0a` +
      `Paket Tour: ${book_packet.value} %0a` +
      `Tanggal Mulai Tour: ${book_start_date.value} %0a` +
      `Tanggal Penjemputan: ${book_pickup_time.value} %0a` +
      `Lokasi Penjemputan: ${book_pickup_location.value} %0a`;
  
    window.location = 'https://wa.me/' + whatsapp_number + '?text=' + text; 
  });
}

book_car_btn.forEach(element => {
  element.addEventListener('click', function(event) {
    const car_name = this.getAttribute('data-car');
    
    document.querySelector('#book_car').value = car_name;
    document.querySelector('#booking-form-section').scrollIntoView({behavior: 'smooth'});
  });
});

book_tour_btn.forEach(element => {
  element.addEventListener('click', function(event) {
    const tour_name = this.getAttribute('data-tour');
    
    document.querySelector('#book_packet').value = tour_name;
    document.querySelector('#booking-form-section').scrollIntoView({behavior: 'smooth'});
  });
});