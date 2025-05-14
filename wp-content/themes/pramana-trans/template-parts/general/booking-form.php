<?php
	$booking_desc = get_field("booking_form_desc", 'option');
?>
<div class="container">
  <div class="row">
    <div class="col-lg-5">
      <h3 class="section-title">Booking Rental Mobil</h3>
      <div class="booking-form">
        <div class="mb-3">
          <label class="form-label small">Nama / Telp *</label>
          <input id="book_name" type="text" class="form-control" placeholder="Nama">
        </div>
        <div class="mb-3">
          <label class="form-label small">Alamat / Jemput *</label>
          <input id="book_address" type="text" class="form-control" placeholder="Alamat">
        </div>
        <div class="mb-3">
          <label class="form-label small">Durasi Sewa *</label>
          <select id="book_duration" class="form-select">
            <option>6 Jam</option>
            <option>12 Jam</option>
            <option>Fullday</option>
          </select>
        </div>
        <button id="book_car_form_btn" class="btn btn-warning text-white">BOOKING SEKARANG</button>
      </div>
    </div>
    <div class="col-lg-7">
      <?php echo $booking_desc; ?>
    </div>
  </div>
</div>