@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Pizza</title>
    <link rel="stylesheet" href="/assets/css/form.css">
</head>

<body>

    <form action="/pizzas" method="POST" class="form-card">
        @csrf
        <fieldset class="form-fieldset">
            <legend class="form-legend">Order Pizza</legend>
            <div class="form-element form-input">
                <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" name="name" id="name" placeholder="Please fill in your full name" type="input" required />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" type="text">Name</label>
            </div>


            <div class="form-element form-select">
                <select id="field-be1h8i-ll2hpg-q4efzm-nfjj1e-udkw5r" class="form-element-field" name="type">
                    <option disabled selected value="" class="form-select-placeholder"> </option>
                    <option value="neapolitan">Neapolitan</option>
                    <option value="new York-Style">New York-Style</option>
                    <option value="greek">Greek</option>
                    <option value="detroit">Detroit</option>
                    <option value="pepperoni">Pepperoni</option>
                    <option value="sicilian">Sicilian</option>
                    <option value="california">California</option>
                    <option value="st.Louis">St.Louis </option>
                    <option value="chicago">Chicago</option>
                </select>
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="field-be1h8i-ll2hpg-q4efzm-nfjj1e-udkw5r"> Choose your pizza:</label>
            </div>



            <div class="form-element form-select">
                <select id="field-be1h8i-ll2hpg-q4efzm-nfjj1e-udkw5r" class="form-element-field" name="base">
                    <option disabled selected value="" class="form-select-placeholder"> </option>
                    <option value="thick">Thick</option>
                    <option value="thin & crispy">Thin & Crispy</option>
                    <option value="cheese crust">Cheese Crust</option>
                    <option value="garlic crust">Garlic Crust</option>
                </select>
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="field-be1h8i-ll2hpg-q4efzm-nfjj1e-udkw5r"> Choose Crust:</label>
            </div>



            <div class="form-checkbox form-checkbox-inline">
                <div class="form-checkbox-legend">Extra Toppings:</div>
                <label class="form-checkbox-label">
                    <input class="form-checkbox-field" value="mushrooms" name="toppings[]" type="checkbox" />
                    <i class="form-checkbox-button"></i>
                    <span>Mushrooms</span>
                </label>
                <label class="form-checkbox-label">
                    <input class="form-checkbox-field" value="peppers " name="toppings[]" type="checkbox" />
                    <i class="form-checkbox-button"></i>
                    <span>Peppers </span>
                </label>
                <label class="form-checkbox-label">
                    <input class="form-checkbox-field" value="garlic" name="toppings[]" type="checkbox" />
                    <i class="form-checkbox-button"></i>
                    <span>Garlic</span>
                </label>
                <label class="form-checkbox-label">
                    <input class="form-checkbox-field" value="olives" name="toppings[]" type="checkbox" />
                    <i class="form-checkbox-button"></i>
                    <span>Olives</span>
                </label>

            </div>


            <div class="form-element form-textarea">
                <textarea name="address" id="field-3naeph-0f3yuw-x153ph-dzmahy-qhkmgm" class="form-element-field" placeholder="Address"></textarea>
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="field-3naeph-0f3yuw-x153ph-dzmahy-qhkmgm">Address: </label>
            </div>


        </fieldset>

        <input id="order_pizza" class="form-btn" type="submit" value="Order Pizza">

    </form>

    <footer id="footer">

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Slice Pizza</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

</body>

</html>