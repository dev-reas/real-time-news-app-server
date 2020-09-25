<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
        html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 300;
                height: 100vh;
                margin: 0;
                width:100%;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                float:right;
                right: 10px;
                top: 18px;
                
            }
             .top-left {
                float:left;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            .m-b-md {
                margin-bottom: 30px;
            }

.topnav {
  background-color: #3498DB;
  overflow: hidden;
   text-transform: uppercase;
   padding: 0px 25px;
   
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 17px 20px;
  text-decoration: none;
  font-size: 14px;
  margin-bottom:-5px;
  font-weight: 600;
 
}

/* Add an active class to highlight the current page */
.active {
  background-color: #4CAF50;
  color: white;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}

/* Dropdown container - needed to position the dropdown content */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Style the dropdown button to fit inside the topnav */
.dropdown .dropbtn {
  font-size: 14px;
  border: none;
  outline: none;
  color: #fff;
  padding: 17px 20px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
  text-transform: uppercase;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: fixed;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  font-weight: 400;
}

/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #5DADE2;
  color: white;.
  padding: 18px 20px;

}

/* Add a grey background to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

/* Show the dropdown menu when the user moves the mouse over the dropdown button */
.dropdown:hover .dropdown-content {
  display: block;
}

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 890px) {
  .topnav a:not(:first-child), .dropdown .dropbtn   {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
  #wala1{
        display:none;
    }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 890px) {
    .topnav.responsive {position: relative;}
    .topnav.responsive a.icon {
        position: absolute;
        right: 0;
        top: 0;
    }
     .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
    }
     .topnav.responsive .dropdown {float: none;}
     .topnav.responsive .dropdown-content  {position: relative;}
     .topnav.responsive .dropdown .dropbtn {
        display: block;
        width: 100%;
        text-align: left;
    }
    
  
}

@media screen and (min-width: 890px) {
    #wala{
        display:none;
    }
    

}

.topnav-right {
  float: right;
}






          
                    
</style>
    </head>

    
    