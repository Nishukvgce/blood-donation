<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="blood.png">
   
    <title>Blood Donation Camp</title>
    
</head>
<body>

    <header >
        
        <h1 style="color: aliceblue;">Blood Donation Camp</h1>
       
    </header >
    
    <nav class="text-bar" >
    <ul>
       <li> <a href="#Home" style="color: aliceblue"> Home</a></li>
       <li><a href="about.html" style="color: antiquewhite;">about</a></li>
       <li> <a href="#contact" style="color: antiquewhite;">contact</a></li>
       <li> <a href="image.html" style="color: aliceblue"> Image</a></li>
       <li> <a href="#Registration" style="color: antiquewhite;">Register </a></li>
       <li><a href="login.html" style="color: antiquewhite;" >login</a></li>
    </ul>


    </nav>
    <div class="lines">
        <p style="color: brown;">donate blood,save the life!</p>
        <h1 style="color: black;">Donate blood and inspire other </h2>
        <button style="height: 50px; " >learn more</button>
    </div>
     <div>
    <img src="https://gscbt.net/wp-content/uploads/2020/02/donation-camp.jpg" alt="" style="width:100%;">
    </div>

    <div class="backg">
        <section id="donor-form">
        <h1 style="text-align: center; font-size: xx-large;" >Register</h1>
        <h2 style="padding: 0px 200px;">Become a Donor</h2>
  
        <form id="donorForm" >
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="bloodType">Blood Type:</label>
            <select id="bloodType" name="bloodType" required>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select>

            <label for="contact">Contact Number:</label>
          <input type="tel" id="contact" name="contact" required>
             <br>
            
            
            <button type="submit">Submit</button>
        </form>
    </section>
</div>

    <section id="donor-list">
        <h2>Registered Donors</h2>
        <ul id="donorList">
            <!-- Donor list will be dynamically populated here -->
        </ul>
    </section>

    <footer>
        <p>&copy; 2023 Blood Donation Camp. All Rights Reserved.</p>
    </footer>
    <script src="index.js"></script>
</body>
</html>
//span?
