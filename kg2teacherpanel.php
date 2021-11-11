<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Panel Page</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="panel.css">
  </head>
  <body>

      <div class="sidebar">
        <div class="sidebar-brand">
          <h2><span class="lab la-accusoft"></span> ABC School</h2>
        </div>

        <div class="sidebar-menu">
          <ul>
            <li>
              <a class="active"><span class="las la-school"></span>
                <span>Dashboard</span></a>
            </li>
            <li>
              <a href="src/viewstudenttable2.php" class="view"><span class="las la-user-graduate"></span>
                <span>View Students</span></a>
            </li>
            <li>
              <a href="src/addstudent.php"><span class="las la-graduation-cap"></span>
                <span>Add Students</span></a>
            </li>
            <li>
              <a href="index.php"><span class="las la-user-minus"></span>
                <span>Logout</span></a>
            </li>
            <li>
               <div id="clock">
                 <div id="time">
                   <div>
                     <span id="hour">00</span>
                     <span>hours</span>
                   </div>
                   <div>
                     <span id="minute">00</span>
                     <span>minutes</span>
                   </div>
                   <div>
                     <span id="second">00</span>
                     <span>seconds</span>
                   </div>
                 </div>
               </div>
            </li>
          </ul>
        </div>
      </div>

      <div class="main-content">
         <header>
           <h2>
             <label for="">
               <span class="las la-bars"></span>
             </label>

             Dashboard
           </h2>



           <div class="user-wrapper">
             <img src="https://img.icons8.com/pastel-glyph/64/000000/user-male--v1.png" width="40px" height="40px"/>
             <div>
               <h4>Arya Anju Anjali Adarsh</h4>
               <small>Super Admin</small>
             </div>
           </div>
         </header>

         <main>
            <div class="cards">
              <a href="src/chooseclass.php" style="color:black;"><div class="card-single card-single-1">
                <div>
                  <h1>View</h1>
                  <span>Students</span>
                </div>
                <div>
                  <span class="l-1 las la-users"></span>
                </div>
              </div></a>
              <a href="src/addstudent.php" style="color: black;"><div class="card-single card-single-2">
                <div>
                  <h1>Add</h1>
                  <span >Students</span>
                </div>
                <div>
                  <span class="l-2 las la-graduation-cap"></span>
                </div>
              </div></a>
              <a href="index.php" style="color:black;"><div class="card-single card-single-3">
                <div>
                  <h1>Logout</h1>

                </div>
                <div>
                  <span class="l-3 las la-user-minus"></span>
                </div>
              </div></a>
            </div>

         </main>
      </div>
       <script>
          var hours = document.getElementById("hour");
          var minutes = document.getElementById("minute");
          var seconds = document.getElementById("second");
          function clock()
          {
            var h = new Date().getHours();
            var m = new Date().getMinutes();
            var s = new Date().getSeconds();

            hours.innerHTML = h;
            minutes.innerHTML = m;
            seconds.innerHTML = s;
          }
          var interval = setInterval( clock, 1000);
       </script>
  </body>
</html>
