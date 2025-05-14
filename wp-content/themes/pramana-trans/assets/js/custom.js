const book_car_btn = document.querySelector('#book_car_btn'),
  book_tour_btn = document.querySelectorAll('.book_tour_btn');

let whatsapp_number = document.getElementById('whatsapp-number').getAttribute('data-wa');
whatsapp_number = whatsapp_number.replace(/\s/g, '').replace(/-/g, '');

book_car_btn.addEventListener('click', function(e) {
  const book_name = document.getElementById('book_name'),
    book_address = document.getElementById('book_address'),
    book_duration = document.getElementById('book_duration');
  
  let text = `Hello, saya ${book_name.value} beralamat di ${book_address.value} ingin booking mobil dengan durasi ${book_duration.value} `;

  window.location = 'https://wa.me/' + whatsapp_number + '?text=' + text; 
});

book_tour_btn.forEach(element => {
  element.addEventListener('click', function(event) {
    // const tour_name = this.closest('.card-header').textContent;
    const tour_item = this.closest('.card'),
      tour_name = tour_item.querySelector('.card-header').textContent.trim(),
      current_url = window.location.href;
    
    let text = `Hello, saya ingin booking paket tour ${tour_name} dari url ${current_url}.`;
    
    window.location = 'https://wa.me/' + whatsapp_number + '?text=' + text; 
  });
});