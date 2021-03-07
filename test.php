<style>
    input {
        width: 90px;
        height: 30px;
        font-size: 23px;
        line-height: 30px;
        padding: 5px;
    }
</style>


<script src="js/payment.js"></script>


<input type="text" class="ccFormatMonitor" placeholder="Card Number">

<input type="text" id="inputExpDate" placeholder="MM / YY" maxlength='7'>

<input type="password" maxlength="3" class="cvv" placeholder="CVV">




<select style="display:none;" id="monthSelect" name="dwfrm_billing_paymentMethods_creditCard_expiration_month">
    <option class="select-option" label="Month" value="" selected="selected">Month</option>
    <option class="select-option" label="01" value="1">01</option>
    <option class="select-option" label="02" value="2">02</option>
    <option class="select-option" label="03" value="3">03</option>
    <option class="select-option" label="04" value="4">04</option>
    <option class="select-option" label="05" value="5">05</option>
    <option class="select-option" label="06" value="6">06</option>
    <option class="select-option" label="07" value="7">07</option>
    <option class="select-option" label="08" value="8">08</option>
    <option class="select-option" label="09" value="9">09</option>
    <option class="select-option" label="10" value="10">10</option>
    <option class="select-option" label="11" value="11">11</option>
    <option class="select-option" label="12" value="12">12</option>
</select>

<select style="display:none;" class="input-select year required valid" id="yearSelect" name="dwfrm_billing_paymentMethods_creditCard_expiration_year" aria-required="true" aria-describedby="dwfrm_billing_paymentMethods_creditCard_expiration_year-error" aria-invalid="false">
    <option class="select-option" label="Year" value="" selected="selected">Year</option>
    <option class="select-option" label="2017" value="2017">2017</option>
    <option class="select-option" label="2018" value="2018">2018</option>
    <option class="select-option" label="2019" value="2019">2019</option>
    <option class="select-option" label="2020" value="2020">2020</option>
    <option class="select-option" label="2021" value="2021">2021</option>
    <option class="select-option" label="2022" value="2022">2022</option>
    <option class="select-option" label="2023" value="2023">2023</option>
    <option class="select-option" label="2024" value="2024">2024</option>
    <option class="select-option" label="2025" value="2025">2025</option>
    <option class="select-option" label="2026" value="2026">2026</option>
    <option class="select-option" label="2027" value="2027">2027</option>
</select>