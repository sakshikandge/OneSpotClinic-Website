<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Appointment Slot Booking</title>
  <link rel="stylesheet" href="styles.css">

  <style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  margin: 0;
  padding: 0;
  background-image: url(1.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  
}

.container {
  max-width: 500px;
  margin: 20px auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 5px 5px 20px black;
  margin-top: 110px;
  
}

h1 {
  text-align: center;
  color: #45a049;
  
}

form {
  display: flex;
  flex-direction: column;
}

label {
  margin-top: 10px;
}

input,
select {
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

button {
  padding: 10px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #45a049;
}
.time-slots {
  display: flex;
  justify-content: center;
  gap: 20px;
  margin-bottom: 20px;
  margin-top: 20PX;
  
}

.time-slot {
  border: 2px solid #007bff;
  padding: 10px;
  cursor: pointer;
  box-shadow: 5px 5px 10px black;
  
}
 
 

.doctor-name {
  font-weight: bold;
  margin-top: 20px;
  margin-left: 160px;
  margin-bottom: 40PX;
}
/* Define the animation */
@keyframes blink {
  0% { opacity: 0; }
  50% { opacity: 1; }
  100% { opacity: 0; }
}

/* Apply the animation to the element */
.blinking-text {
  animation: blink 1s infinite; /* 1s for 1 second interval */
}
.payment-form {
    background-color: #fff;
    border-radius: 8px;
    padding: 10px;
    box-shadow:5px 5px 10px black;
    width: 400px;
    font-size: 15px;
  }
  .payment-method {
    margin-bottom: 10px;
    font-size: 13px;
  }
  .payment-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 10px 20px;
    cursor: pointer;
  }
  .time-button {
  padding: 10px 20px;
  background-color: #3498db;
  color: #fff;
  border: none;
  cursor: pointer;
  
}
.time-button:hover
{
  background-color: #3498db;
  color: black;
}
  .time-list {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  list-style: none;
  padding: 0;
  margin: 0;
}

.time-list li {
  padding: 8px 20px;
  border-bottom: 1px solid #ccc;
  cursor: pointer;
}

.time-list li:last-child {
  border-bottom: none;
}
.doctor {
    cursor: pointer;
    color: rgb(54, 54, 216);
    text-decoration: double;
    display: flex;
    padding-top: 10px;
  
  }

  .slots {
    display: none;
    margin-top: 10px;
  }


  </style>
</head>
<body>
  <div class="container">
    <div class="blinking-text"><h1>Dentist Appointment</h1></div>

    
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="appointmentDate">Select Date:</label>
      <input type="date" id="appointmentDate" name="appointmentDate" required>

      <!--label for="appointmentTime" id="appointmentTime" name="appointmentTime">Select Time Slot:</label-->

      <label for="doctor">Select Specialists</label>
    

<select name="doctor" id="doctor" required>
  <option value="Dr.Sonali Joshi">---</option>
  <option value="Dr.Sonali Joshi">Dr.Amol Prajapati</option>
  <option value="Dr.Hemanth Shah">Dr.Anagha Nene</option>
  <option value="Dr.Ashitosh Sinha">Dr.Nitin Deshpande</option>
</select>


<label for="time slots">Time Slots:</label>
<select name="timeslot" id="time">
  <optgroup label="Dr.Amol Prajapati">
    <option value="---">---</option>
    <option value="10AM-11AM">10AM-11AM</option>
  <option value="11AM-12PM">11AM-12PM</option>
  <option value="12PM-1PM">12PM-1PM</option>
  
  </optgroup>
  <optgroup label="Dr.Anagha Nene">
    <option value="2PM-3PM">2PM-3PM</option>
    <option value="3PM-4PM">3PM-4PM</option>
    <option value="4PM-5PM">4PM-5PM</option>
  </optgroup>
  <optgroup label="Dr.Nitin Deshpande">
    <option value="7PM-8PM">7PM-8PM</option>
  <option value="8PM-9PM">8PM-9PM</option>
  <option value="9PM-10PM">9PM-10PM</option>
  
  </optgroup>
</select>

      
       
   
 
 
      <h2 style="font-size: 18px;">Select Payment Method</h2>
    <div class="payment-method">
      <label>
        <input type="radio" name="paymentMethod" value="card" checked>
        Credit/Debit Card
      </label>
    </div>
    <div class="payment-method">
      <label>
        <input type="radio" name="paymentMethod" value="upi">
        UPI
      </label>
    </div>
    <div class="payment-details" id="cardDetails">
      <h3 style="font-size: 18px;">Card Details</h3>
      
        <label for="cardNumber">Card Number:</label>
        <input type="text" id="cardNumber" name="cardNumber">
        <label for="expiryDate">Expiry Date:</label>
        <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY">
        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv">
        <button class="payment-button" style="margin-bottom: 15px; ">Pay Now</button>
         
      
    </div>
    <div class="payment-details" id="upiDetails" style="display: none;">
      <h3 style="font-size: 18px;">UPI Details</h3>
      <form>
        <label for="upiId">UPI ID:</label>
        <input type="text" id="upiId" name="upiId" >
        <button class="payment-button">Pay Now</button>
      
    
    </div>
  
      
    <button input type="submit" name="submit">Book Appointment</button>
    


      <!--script>
        function showDoctorName(doctorName) {
      const doctorNameElement = document.getElementById('doctorName');
      doctorNameElement.textContent = `Doctor: ${doctorName}`;
    }
    
      </script-->

<script>
  const paymentMethodRadios = document.querySelectorAll('input[name="paymentMethod"]');
  const cardDetails = document.getElementById('cardDetails');
  const upiDetails = document.getElementById('upiDetails');
  
  paymentMethodRadios.forEach(radio => {
    radio.addEventListener('change', () => {
      if (radio.value === 'card') {
        cardDetails.style.display = 'block';
        upiDetails.style.display = 'none';
      } else if (radio.value === 'upi') {
        cardDetails.style.display = 'none';
        upiDetails.style.display = 'block';
      }
    });
  });
</script>

<script>
  const timeButton = document.querySelector('.time-button');
const timeList = document.querySelector('.time-list');

timeButton.addEventListener('click', () => {
timeList.style.display = timeList.style.display === 'block' ? 'none' : 'block';
});

timeList.addEventListener('click', (event) => {
const selectedTime = event.target.innerText;
timeButton.innerText = selectedTime;
timeList.style.display = 'none';
});

</script>

<script>
  function toggleSlots(doctorId) {
    const slotsElement = document.getElementById(doctorId);
    if (slotsElement.style.display === "none") {
      slotsElement.style.display = "block";
    } else {
      slotsElement.style.display = "none";
    }
  }
</script>

 
     
    </form>
  </div>
</body>
</html>
