<?php
include '../connection/dbconnection.php';
include './UserHeader.php'
?>
<style>
    .container{
        width:100%;
        height:150vh;
        border:1px solid #fff;
    }

    /* From Uiverse.io by R1SH4BH81 */ 
/* Body */
.container {
  display: grid;
  grid-template-columns: auto;
  gap: 0px;
}

hr {
  height: 1px;
  background-color: #2e2e2e; /* Dark gray line */
  border: none;
}

.card {
  width: 100%;
  background: #1c1c1c; /* Dark background for a professional look */
  box-shadow:
    0px 187px 75px rgba(0, 0, 0, 0.01),
    0px 105px 63px rgba(0, 0, 0, 0.05),
    0px 47px 47px rgba(0, 0, 0, 0.09),
    0px 12px 26px rgba(0, 0, 0, 0.1),
    0px 0px 0px rgba(0, 0, 0, 0.1);
}

.title {
  width: 100%;
  height: 40px;
  position: relative;
  display: flex;
  align-items: center;
  padding-left: 20px;
  border-bottom: 1px solid #2e2e2e; /* Dark gray */
  font-weight: 700;
  font-size: 11px;
  color: #ffffff; /* White text */
}

/* Cart */
.cart {
  border-radius: 19px 19px 0px 0px;
}

.cart .steps {
  display: flex;
  flex-direction: column;
  padding: 20px;
}

.cart .steps .step {
  display: grid;
  gap: 10px;
}

.cart .steps .step span {
  font-size: 13px;
  font-weight: 600;
  color: #ffffff; /* White text */
  margin-bottom: 8px;
  display: block;
}

.cart .steps .step p {
  font-size: 11px;
  font-weight: 600;
  color: #bbbbbb; /* Light gray text */
}

/* Promo */
.promo form {
  display: grid;
  grid-template-columns: 1fr 80px;
  gap: 10px;
  padding: 0px;
}

.input_field {
  width: auto;
  height: 36px;
  padding: 0 0 0 12px;
  border-radius: 5px;
  outline: none;
  border: 1px solid #2e2e2e; /* Dark gray */
  background-color: #333333; /* Dark input background */
  color: #ffffff; /* White text */
  transition: all 0.3s cubic-bezier(0.15, 0.83, 0.66, 1);
}

.input_field:focus {
  border: 1px solid transparent;
  box-shadow: 0px 0px 0px 2px #555555; /* Light gray focus */
  background-color: #333333;
}

.promo form button {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  padding: 10px 18px;
  gap: 10px;
  width: 100%;
  height: 36px;
  background: #555555; /* Medium gray button */
  box-shadow:
    0px 0.5px 0.5px #555555,
    0px 1px 0.5px rgba(239, 239, 239, 0.5);
  border-radius: 5px;
  border: 0;
  font-weight: 600;
  font-size: 12px;
  line-height: 15px;
  color: #ffffff; /* White text */
  transition: all 0.3s cubic-bezier(0.15, 0.83, 0.66, 1);
}

/* Checkout */
.payments .details {
  display: grid;
  grid-template-columns: 10fr 1fr;
  padding: 0px;
  gap: 5px;
}

.payments .details span:nth-child(odd) {
  font-size: 12px;
  font-weight: 600;
  color: #ffffff; /* White text */
}

.payments .details span:nth-child(even) {
  font-size: 13px;
  font-weight: 600;
  color: #bbbbbb; /* Light gray text */
}

.checkout .footer {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 10px 10px 20px;
  background-color: #2e2e2e; /* Dark gray background */
}

.price {
  font-size: 22px;
  color: #ffffff; /* White text */
  font-weight: 900;
}

.checkout .checkout-btn {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  width: 150px;
  height: 36px;
  background: #555555; /* Medium gray button */
  border-radius: 7px;
  border: 1px solid #2e2e2e; /* Dark gray border */
  color: #ffffff; /* White text */
  font-size: 13px;
  font-weight: 600;
  transition: all 0.3s cubic-bezier(0.15, 0.83, 0.66, 1);
}

.checkout .checkout-btn:hover {
  background-color: #777777; /* Slightly lighter gray on hover */
}

</style>

<div class="container">

/* From Uiverse.io by R1SH4BH81 */ 
<div class="container">
  <div class="card cart">
    <label class="title">CHECKOUT</label>
    <div class="steps">
      <div class="step">
        <div>
          <span>SHIPPING</span>
          <p>221B Baker Street, W1U 8ED</p>
          <p>London, United Kingdom</p>
        </div>
        <hr />
        <div>
          <span>PAYMENT METHOD</span>
          <p>Visa</p>
          <p>**** **** **** 4243</p>
        </div>
        <hr />
        <div class="promo">
          <span>HAVE A PROMO CODE?</span>
          <form class="form">
            <input
              class="input_field"
              placeholder="Enter a Promo Code"
              type="text"
            />
            <button>Apply</button>
          </form>
        </div>
        <hr />
        <div class="payments">
          <span>PAYMENT</span>
          <div class="details">
            <span>Subtotal:</span>
            <span>$240.00</span>
            <span>Shipping:</span>
            <span>$10.00</span>
            <span>Tax:</span>
            <span>$30.40</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card checkout">
    <div class="footer">
      <label class="price">$280.40</label>
      <button class="checkout-btn">Checkout</button>
    </div>
  </div>
</div>


</div>

<?php
include './UserFooter.php';
?>