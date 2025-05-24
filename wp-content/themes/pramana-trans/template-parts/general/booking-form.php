<?php
  $desc_key = get_post_type() == 'car-rent' ? 'booking_form_car_desc' : 'booking_form_tour_desc';
	$booking_desc = get_field($desc_key, 'option');
?>
<section class="py-5" id="booking-form-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <?php if ( get_post_type() == 'car-rent') : ?>
          <h3 class="section-title">Booking Rental Mobil</h3>
          <form id="book_car_form">
            <div class="booking-form">
              <div class="mb-3">
                <label class="form-label small">Nama</label>
                <input id="book_name" type="text" class="form-control" placeholder="Nama" required>
              </div>
              <div class="mb-3">
                <label class="form-label small">No. Telp / WA *</label>
                <input id="book_phone" type="text" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label small">Armada / Mobil</label>
                <select id="book_car" class="form-select" required>
                  <?php if (have_rows('car_items')): ?>
                    <?php
                      while (have_rows('car_items')): the_row();
                        $car_name = get_sub_field('car_name');
                    ?>
                      <option value="<?php echo $car_name; ?>"><?php echo $car_name; ?></option>
                    <?php 
                      endwhile; 
                    ?>
                  <?php endif; ?>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label small">Durasi Sewa *</label>
                <select id="book_duration" class="form-select" required>
                  <option>12 Jam</option>
                  <option>Fullday</option>
                </select>
              </div>
              <button class="btn btn-warning text-white mb-4">BOOKING SEKARANG</button>
            </div>
          </form>
        <?php else: ?>
          <h3 class="section-title">Booking Tour</h3>
          <form id="book_tour_form">
            <div class="booking-form">
              <div class="mb-3">
                <label class="form-label small">Nama *</label>
                <input id="book_name" type="text" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label small">Jumlah Peserta *</label>
                <input id="book_qty" type="number" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label small">Pilih Paket *</label>
                <select id="book_packet" class="form-select" required>
                  <?php if (have_rows('tpi_items')): ?>
                    <?php
                      while (have_rows('tpi_items')): the_row();
                        $tour_name = get_sub_field('tpi_name');
                    ?>
                      <option value="<?php echo $tour_name; ?>"><?php echo $tour_name; ?></option>
                    <?php 
                      endwhile; 
                    ?>
                  <?php endif; ?>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label small">Tanggal Mulai Tour *</label>
                <input id="book_start_date" type="date" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label small">Waktu Penjemputan *</label>
                <input id="book_pickup_time" type="time" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label small">Lokasi Penjemputan *</label>
                <input id="book_pickup_location" type="text" class="form-control" required>
              </div>
              <button class="btn btn-warning text-white mb-4">BOOKING SEKARANG</button>
            </div>
          </form>
        <?php endif; ?>
      </div>
      <div class="col-lg-7">
        <?php echo $booking_desc; ?>
      </div>
    </div>
  </div>
</section>