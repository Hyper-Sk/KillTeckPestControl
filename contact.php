<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "./_head.php" ?>

  <link rel="stylesheet" href="./styles/headline.css">
  <link rel="stylesheet" href="./styles/loader.css">
  <link rel="stylesheet" href="./styles/breadcrumb.css">
  <link rel="stylesheet" href="./styles/reviews.css">
  <link rel="stylesheet" href="./styles/contact.css">



  <title>Contact Us - Kill Teck Pest Control</title>
  <meta name="description" content="Contact Kill Teck Pest Control for fast and reliable pest control services. Book an inspection for termite, cockroach, bed bug, and rodent treatments.">

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
      <h2> <span>Contact</span> Kill Teck Pest Control</h2>
      <p>
        Call or Message us Today for Expert Pest Control Services.
      </p>
      <div>
        <a href="tel:+916300225950" class="btn-2"><i class="uil uil-phone"></i> +91 63002 25950</a>
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
            <option value="General Pest Control"> General Pest Control</option>
            <option value="Cockroach Control"> Cockroach Control </option>
            <option value="Termite Control"> Termite Control </option>
            <option value="Bed Bug Control"> Bed Bug Control </option>
            <option value="Rodent Control"> Rodent Control (Rats, Mice, bandicoots and Squirrels) </option>
            <option value="Mosquito Control"> Mosquito Control </option>
            <option value="Ant Control"> Ant Control </option>
          </select>
        </div>
        <div class="field">
          <label for="">Service Address:</label>
          <input type="text" placeholder="Enter your Address" required name="address">
        </div>
        <div class="field">
          <label for="">Message:</label>
          <textarea placeholder="Enter Message" name="message"></textarea>
        </div>

        <div class="submit">
          <button type="submit" class="" name="send">Submit</button>
        </div>
      </form>
    </section>


    <!-- Reviews area -->
    <?php include "__reviews.php" ?>

    <!-- footer area -->
    <?php include "__footer.php" ?>

    <!-- popups  -->
    <?php include "__popup.php" ?>

  </div>





</body>

</html>