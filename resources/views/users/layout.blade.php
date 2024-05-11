
<!Doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/5.3.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>

    <style>
    button{
            border: none;
            padding: 10px;
            width: 50%;
            font-weight:bold ;
            font-size: 15px;
           
            cursor: pointer;
            background-color:transparent;
            cursor: pointer;
            font-family: 'Cairo',sans-serif ;
            margin-bottom: 20px;

}
h4{
  color:black;

  font-weight: 540;
}
  .card{
           height: 100px;
            float: right;
           flex-direction: row;

           box-shadow: 0 2px 2px;
           max-width: 100%;
            min-width: 40%;
            float: right;
            margin-top:60px ;
            margin-left: 10px;
            margin-right: 10px;
        }

  .card-body{
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    justify-content: space-between;

  }
  .text-section {
    max-width: 60%;
  }
       </style>
       <title>My Certificates Com</title>
  </head>
  <body>



<div style="background-color: black;" >
     <nav class="navbar navbar-inverse" >
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" style="color: lavender;">My Certificates Com</a>
        </div>
        <div class="nav-link active">
            <ul class="nav nav-underline">
                <li><a href="#"><span class="glyphicon glyphicon-user" ></span> <div style="color: white; color:lavender;" >{{ Auth::user()->First_Name }} {{Auth::user()->Family_Name}}</div></a></li>
                <li><h5 href="#"><span class="glyphicon glyphicon-user" ></span> <div style="color: white; color:lavender;" >{{ Auth::user()->Registration_number }}</div></h5></li>
                <li class="nav-item dropdown">
                <li>
                    
                        <span class="">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" style="color: white; color: lavender;">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </span>
                      
                </li>
                </li>
        </ul>

    </li>
        </div></div>
    </nav>
</div>
    <div class='max-w-7xl mx-auto py-6 sm:px-6 lg:px-8'>
        @yield('content')
       </div>
  </body>

