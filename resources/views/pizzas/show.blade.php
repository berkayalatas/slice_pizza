<!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Complete Order</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 </head>

 <style>
  

   .complete {
     color: black;
     background-color: red;
     padding: 10px;
     border-radius: 10px;
     font-size: 18px;
     margin: 10px;
   }

   .complete:hover {
     opacity: 0.7;
   }

   .goback {
     text-decoration: none;
     background-color: yellowgreen;
     color: black;
     font-size: 20px;
     border-radius: 10px;
     padding: 10px;
     max-height: 50px;
     margin: 10px;
   }

   .goback:hover {
     opacity: 0.7;
   }

   .card{
     margin: 30px;
     font-size: 17px;
   }
   .card-title{
     font-size: 20px;
     text-transform: uppercase;
     font-weight: 600;
   }
 
 </style>

 <body>

 <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="/assets/img/slide_pizza.svg" alt="image ">
  <div class="card-body">
    <h5 class="card-title">{{ $pizza->name }}</h5>
    <p class="card-text"> </p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">TYPE: {{ $pizza->type }}</li>
    <li class="list-group-item">BASE: {{ $pizza->base }}</li>
    <li class="list-group-item">Extra Toppings:
             @foreach($pizza->toppings as $topping)
              {{ $topping }}
             @endforeach
    </li>
    <li class="list-group-item">ADDRESS: {{ $pizza->address }}</li>
  </ul>

  <div class="card-body">
    <a href="/pizzas" class="card-link goback">Go Back Pizzas</a>
    <a href="#" class="card-link">
          <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
             @csrf
             @method('DELETE')
             <!-- overwrite delete-->
             <button class="complete">Complete Order</button>
           </form>
    </a>
  </div>
</div>
   


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 </body>

 </html>

 