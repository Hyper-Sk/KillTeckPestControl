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
      <h2>Contact Kill Teck Pest Control in <span> Hyderabad </span> </h2>
      <p>
        Call or message us today for expert maintenance services.
      </p>
      <div>
        <a href="tel:+916300225950" class="btn-2">Call Now!</a>
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
            
          </select>
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