<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "./_head.php" ?>

  <link rel="stylesheet" href="./styles/headline.css">
  <link rel="stylesheet" href="./styles/loader.css">
  <link rel="stylesheet" href="./styles/breadcrumb.css">
  <link rel="stylesheet" href="./styles/reviews.css">
  <link rel="stylesheet" href="./styles/contact.css">



  <title>Contact Us</title>


</head>

<body>
  <!-- loader  -->
  <?php include "__loader.php" ?>


  <div class="page">

    <!-- header area  -->
    <?php include "__headline.php" ?>

    <!-- header area  -->
    <?php include "__header.php" ?>

    <!-- service one area -->
    <section class="breadcrumb">
      <div class="breadcrumb-content">
        <h1>Contact Us</h1>
        <p>Contact Us</p>
      </div>
    </section>



    <section class="form-area">
      <h2>Contact Urban Bike Service in <span> Hyderabad </span> </h2>
      <p>
        Call or message us today for expert bike repair and maintenance services.
      </p>
      <div>
        <a href="tel:+919885442038" class="btn-2">Call Now!</a>
      </div>
      <form action="./__sendmail.php" method="post" class="form-area-content">
        <div class="field">
          <label for="">Name:</label>
          <input type="text" placeholder="Enter Name" required name="name">
        </div>
        <div class="field">
          <label for="">Phone:</label>
          <input type="phone" placeholder="Enter Phone" required name="phone">
        </div>
        <div class="field">
          <label for="">Select Service:</label>
          <select name="service" id="" required>
            <option value="" disabled selected> Please Select Service </option>
            <option value="General Bike Service">General Bike Service</option>
            <option value="Basic Service (Oil + Checkup)"> Basic Service (Oil + Checkup)</option>
            <option value="Full Bike Service"> Full Bike Service
            </option>
            <option value="Periodic Maintenance Service"> Periodic Maintenance Service</option>
            <option value="Express Service (Quick 1–2 Hour Service)"> Express Service (Quick 1–2 Hour Service)</option>
            <option value="Engine Oil Change"> Engine Oil Change</option>
            <option value="Engine Tuning"> Engine Tuning</option>
            <option value="Carburetor Cleaning"> Carburetor Cleaning</option>
            <option value="Fuel Injector Cleaning"> Fuel Injector Cleaning</option>
            <option value="Clutch Plate Replacement"> Clutch Plate Replacement</option>
            <option value="Engine Overhaul"> Engine Overhaul</option>
            <option value="Valve Adjustment Service"> Valve Adjustment Service</option>
            <option value="Battery Replacement"> Battery Replacement</option>
            <option value="Self Starter Repair"> Self Starter Repair</option>
            <option value="Headlight & Indicator Repair">Headlight & Indicator Repair</option>
            <option value="Wiring Repair">Wiring Repair</option>
            <option value="Brake Pad Replacement">Brake Pad Replacement</option>
            <option value="Disc Brake Service">Disc Brake Service</option>
            <option value="Chain Sprocket Replacement">Chain Sprocket Replacement</option>
            <option value="Wheel Alignment">Wheel Alignment</option>
            <option value="Tyre Replacement">Tyre Replacement</option>
            <option value="Puncture Repair">Puncture Repair</option>
            <option value="Bike Wash">Bike Wash</option>
            <option value="Bike Polishing & Detailing">Bike Polishing & Detailing</option>
            <option value="Suspension Service">Suspension Service</option>
            <option value="Other">Other</option>
          </select>
        </div>

        <div class="field">
          <label for="">Vehicle Name:</label>
          <input type="text" placeholder="Enter Vehicle Name" required name="vehiclename">
        </div>
        <div class="field">
          <label for="">Pickup or Service Location:</label>
          <input type="text" placeholder="Enter your Address" required name="address">
        </div>
        <!-- <div class="field">
          <label for="">Message:</label>
          <textarea placeholder="Enter Message" required name="message"></textarea>
        </div> -->

        <div class="submit">
          <button type="submit" class="btn-1" name="send">Submit</button>
        </div>
      </form>
    </section>


    <!-- Reviews area -->
    <?php include "__reviews.php" ?>

    <!-- footer area -->
    <?php include "__footer.php" ?>

  </div>





</body>

</html>