<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration orders</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .container {
  border: 2px solid #000;
  background-color: #4c4545;
  padding: 20px;
  color: white;

}
button{
    margin-right: 50px;
  margin-left: 200px;
  width: 300px;
  height: 200px;
  margin-top: 20px
}
  </style>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" >My Certificates Com</a>
          </div>
          <ul class="nav navbar-nav navbar-right">


<li><a href="#"><span class="glyphicon glyphicon-user"></span> <div class="btn btn-secondary dropdown-toggle">{{ Auth::user()->First_Name }}</div></a></li>
<li class="nav-item dropdown">
<li><a href="#"><span class=""></span> <div><x-dropdown-link :href="route('profile.edit')"><div  style="color: white; color: lightgray;">{{ __('Profile') }}</div></x-dropdown-link></div></a></li>
<li>
    <a href="#">
        <span class="">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                    <div style="color: white; color: lightgray;">{{ __('Log Out') }}</div>
                </x-dropdown-link>
            </form>
        </span>
      </a>
</li>
</li>
</ul>

        </div>
        


      </nav>
  <form class="center">
  <div class="container ">
    <h1>Types of orders</h1>
    <p>Hello, here are the order lists. Select a list to review.</p>
  </div>

 <a href='{{ route('users.index') }}'><button type="button" class="btn btn-success" >Registration requests</button></a>
 <a href='{{ route('requests.index') }}'><button type="button" class="btn btn-success">Order list</button></a>
 <a href='{{route('Domand.index')}}'><button type="button" class="btn btn-success">Add Request</button></a>

</form>
      </body>
      </html>