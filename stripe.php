<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container fluid">
        <div class="card">
            <div class="card-header bg-dark">
                <h1 class="text-center text-white"> Stripe Payment Form</h1>
            </div>
        </div>
        <table align="center" border="1px" width="100%">
            <div class="jumbotron">
                <div class="insert-form">
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name"><b> Card Holder Name</b></label>
                            <input type="text" class="form-control" placeholder="Enter Name" name="name" required">
                        </div>
                        <div class="form-group">
                            <label for="email"><b> Email Address</b></label>
                            <input type="text" class="form-control" placeholder="Enter email" name="email" required">
                        </div>
                        <div class="form-group">
                            <label for="cardnum"><b> Card Number</b></label>
                            <input type="number" class="form-control" placeholder="Enter Card Number" name="card_num" required">
                        </div>
                        <div class="form-group">
                            <label for="Expiry Month / Year"><b> Expiry Month/ Year</b></label> <span id="userEmail-info" class="info"></span><br> <select name="month" id="month" class="demoSelectBox">
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select> <select name="year" id="year" class="demoSelectBox">
                                <option value="19">2019</option>
                                <option value="20">2020</option>
                                <option value="21">2021</option>
                                <option value="22">2022</option>
                                <option value="23">2023</option>
                                <option value="24">2024</option>
                                <option value="25">2025</option>
                                <option value="26">2026</option>
                                <option value="27">2027</option>
                                <option value="28">2028</option>
                                <option value="29">2029</option>
                                <option value="30">2030</option>
                            </select><br></br>
                            <div class="form-group">
                                <label for="cvc"><b> CVC</b></label>
                                <input type="number" class="form-control" placeholder="Enter CVC" name="card_cvc" required">
                            </div>
                            <button type="submit" class="btn btn-success" name="insertpro">Submit Payment</button>
                    </form>
                </div>
        </table>
    </div>
</body>