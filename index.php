<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <title>Suscription page</title>

</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 offset-md-1">
        <br>
        <br>
        <p><i class="bi bi-amd"></i> Neuralite</p>
        <p id="titulo">Upgrade to PLUS</p>
        <p>Upgrade today and take you AI-powered productivity to the next level</p>
        <br>
        <form>
          <div class="form-group">
            <label for="billedto">Billed to</label>
            <input type="text" class="form-control inputs" id="billedto" placeholder="Enter first and last name">
          </div>

          <!--OPCIONES DE PAGO -->
          <p>Payment details</p>
          <div class="form-row">
            <div class="form-check col-md-3">
              <label class="form-check-label payment-card" for="paymentoption1">
                <input class="form-check-input" type="radio" name="paymentoption" id="paymentoption1" value="1" checked>
                <div class="card" id="paymentoptions">
                  <div class="card-body">
                    <div class="card-content">
                      <i class="bi bi-credit-card"></i>
                      <br>
                      <span>Credit Card</span>
                    </div>
                  </div>
                </div>
              </label>
            </div>

            <div class="form-check col-md-3 offset-md-1" >
              <label class="form-check-label payment-card" for="paymentoption2">
                <input class="form-check-input" type="radio" name="paymentoption" id="paymentoption2" value="2">
                <div class="card" id="paymentoptions">
                  <div class="card-body">
                    <div class="card-content">
                      <i class="bi bi-bank"></i>
                      <br>
                      <span>Bank transfer</span>
                    </div>
                  </div>
                </div>
              </label>
            </div>

            <div class="form-check col-md-3 offset-md-1">
              <label class="form-check-label payment-card" for="paymentoption3">
                <input class="form-check-input" type="radio" name="paymentoption" id="paymentoption3" value="3">
                <div class="card" id="paymentoptions">
                  <div class="card-body">
                    <div class="card-content">
                      <i class="bi bi-gem"></i>
                      <br>
                      <span>Points</span>
                    </div>
                  </div>
                </div>
              </label>
            </div>
          </div>
            <!--FIN DE OPCIONES DE PAGO -->

          <br>
          <div class="form-group">
            <label for="emailadress">Email adress</label>
            <input type="email" class="form-control inputs" id="emailadress" placeholder="Enter email adress">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="country">Country</label>
              <select id="country" class="form-control inputs">
                <option selected>Argentina</option>
                <option>Brasil</option>
                <option>Estados Unidos</option>
                <option>Mexico</option>
                <option>España</option>
                <option>Otro</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="postalcode">Postal code</label>
              <input type="text" class="form-control inputs" id="postalcode" placeholder="7600">
            </div>
          </div>
          <br>
          <button type="button" class="btn btn-secondary">Cancel</button>
          <button type="submit" class="btn btn-primary">Subscribe</button>
        </form>
      </div> <!-- col 1 -->

      <div class="col-md-4">
        <br>
        <br>
        <div class="card" id="plan">
          <div class="card-body">
            <p id="titulo">Starter Plan</p>
              <div class="form-check">
                <label class="form-check-label" for="plan1">
                  <input class="form-check-input" type="radio" name="plan1" id="plan1" value="1" checked>
                  <div class="card">
                    <div class="card-body">
                      <div class="card-content">
                        <p><b>Pay monthly</b></p>
                        <p>$20/month/member</p>
                      </div>
                    </div>
                  </div>
                </label>
              </div>

              <br>

              <div class="form-check">
                <label class="form-check-label" for="plan2">
                  <input class="form-check-input" type="radio" name="plan2" id="plan2" value="2">
                  <div class="card">
                    <div class="card-body">
                      <div class="card-content">
                        <p><b>Pay annual</b></p>
                        <p>$16/month/member</p>
                      </div>
                    </div>
                  </div>
                </label>
                <br>
                <br>
                <hr>
                <div class="d-flex">
                  <span>TOTAL</span>
                  <span class="ml-auto">$20/month</span>
                  <span class="ml-auto" hidden>$16/month</span> <!-- usar js -->
                </div>
                <br>
                <small><i class="bi bi-shield-lock"></i> This environment is for demostration purposes only. Please refrain from entering any actual sensitive information.</small>
              </div>
          </div>
        </div>
      </div> <!-- col 2 -->
    </div> <!-- row 1 -->
  </div> <!-- container -->





  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>