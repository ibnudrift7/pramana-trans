// const book_car_form = document.querySelector('#book_car_form'),
//   book_tour_form = document.querySelector('#book_tour_form'),
//   book_car_btn = document.querySelectorAll('.book_car_btn'),
//   book_tour_btn = document.querySelectorAll('.book_tour_btn');

let whatsapp_number = document.getElementById('whatsapp-number').getAttribute('data-wa');
whatsapp_number = whatsapp_number.replace(/\s/g, '').replace(/-/g, '');

jQuery( document ).ready(function($) {
  $('#book_car_form').on('submit', function(e) {
    e.preventDefault();

    const book_name = $('#book_name').val(),
      book_phone = $('#book_phone').val(),
      book_car = $('#book_car').val(),
      book_duration = $('#book_duration').val();

    let text = `Halo, saya mau sewa mobil %0a%0a` +
      `Nama: ${book_name} %0a` +
      `No. Telp / WA: ${book_phone} %0a` +
      `Car: ${book_car} %0a` +
      `Durasi: ${book_duration} %0a`;

    window.open( 'https://wa.me/' + whatsapp_number + '?text=' + text, '_blank');
  });

  $('#book_tour_form').on('submit', function(e) {
    e.preventDefault();

    const book_name = $('#book_name').val(),
      book_qty = $('#book_qty').val(),
      book_packet = $('#book_packet').val(),
      book_start_date = $('#book_start_date').val(),
      book_pickup_time = $('#book_pickup_time').val(),
      book_pickup_location = $('#book_pickup_location').val();
    
    let text = `Halo, saya mau booking tour %0a%0a` +
      `Nama: ${book_name} %0a` +
      `Qty: ${book_qty} %0a` +
      `Paket Tour: ${book_packet} %0a` +
      `Tanggal Mulai Tour: ${book_start_date} %0a` +
      `Tanggal Penjemputan: ${book_pickup_time} %0a` +
      `Lokasi Penjemputan: ${book_pickup_location} %0a`;
  
    window.open( 'https://wa.me/' + whatsapp_number + '?text=' + text, '_blank');
  });

  $('.book_car_btn').on('click', function(e) {
    const car_name = $(this).attr('data-car');
    
    $('#book_car').val(car_name);
    document.querySelector('#booking-form-section').scrollIntoView({behavior: 'smooth'});
  });

  $('.book_tour_btn').on('click', function(e) {
    const tour_name = $(this).attr('data-tour');
    
    $('#book_packet').val(tour_name);
    document.querySelector('#booking-form-section').scrollIntoView({behavior: 'smooth'});
  });

  $('.carModalBtn').on('click', function () {
    const $this = $(this),
      modal = $('#carModal'),
      ajaxUrl = ajax_vars.ajax_url,
      params = {
        action: 'get_car_details',
        post_id: $this.data('post_id'),
        row_index: $this.data('row_index'),
        target_field: $this.data('target_field')
      };

    $.post(ajaxUrl, params, function(response) {
      var response = JSON.parse(response);

      if (response.status) {
        modal.find('.modal-title').html(response.data.modal_title);
        modal.find('.modal-body').html(response.data['modal_' + params.target_field]);

        var carModal = new bootstrap.Modal(modal[0]);
        carModal.show();
      } else {
        console.error('Error:', response.data);
      }
    }).fail(function(err) {
      console.error('Request failed:', err);
    });
  });

  // Hide modal
  $('.close-modal').on('click', function () {
    var modal = $('#carModal');
    modal.removeClass('show').hide();
  });

  // Add collapse items
  if ($(window).width() <= 992) {
    $('.car-rent-section .container .cars-row')
      .addClass('collapse-mobile-items')
      .addClass('hide-cars');
    $('.tour-packages-section .container .tours-row')
      .addClass('collapse-mobile-items')
      .addClass('hide-tours');
  } 
  else {
    $('.car-rent-section .container .cars-row')
      .removeClass('collapse-mobile-items')
      .removeClass('hide-cars');
    $('.tour-packages-section .container .tours-row')
      .removeClass('collapse-mobile-items')
      .removeClass('hide-tours');
    $('.collapse-mobile-items-btn').removeClass('active');
  }

  $(window).on("resize orientationchange", function (e) {
    if ($(window).width() <= 992) {
      $('.car-rent-section .container .cars-row')
        .addClass('collapse-mobile-items')
        .addClass('hide-cars');
      $('.tour-packages-section .container .tours-row')
        .addClass('collapse-mobile-items')
        .addClass('hide-tours');
    } 
    else {
      $('.car-rent-section .container .cars-row')
        .removeClass('collapse-mobile-items')
        .removeClass('hide-cars');
      $('.tour-pacakages-section .container .tours-row')
        .removeClass('collapse-mobile-items')
        .removeClass('hide-tours');
      $('.collapse-mobile-items-btn').removeClass('active');
    }
  });
  
  $('.collapse-mobile-items-btn').on('click', function (e) {
    e.preventDefault();
    
    if ($('.collapse-mobile-items').hasClass('cars-row') ) {
      $('.collapse-mobile-items')
        .toggleClass('hide-cars');
    }
    else {
      $('.collapse-mobile-items')
        .toggleClass('hide-tours');
    }
    

    $(this).toggleClass('active');
    $(this).text($(this).hasClass('active') ? 'Hide All' : 'Show All');
  });
});