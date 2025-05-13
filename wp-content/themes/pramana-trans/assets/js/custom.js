const book_btn = document.getElementById('book_car_btn');

book_btn.addEventListener('click', function(e) {
  const book_name = document.getElementById('book_name'),
    book_address = document.getElementById('book_address'),
    book_duration = document.getElementById('book_duration');
  
  let whatsapp_number = document.getElementById('whatsapp-number').getAttribute('data-wa');
    whatsapp_number = whatsapp_number.replace(/\s/g, '').replace(/-/g, '');

  let text = `Hello, saya ${book_name.value} beralamat di ${book_address.value} ingin booking mobil dengan durasi ${book_duration.value} `;

  window.location = 'https://wa.me/' + whatsapp_number + '?text=' + text; 
});