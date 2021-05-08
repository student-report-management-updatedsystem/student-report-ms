
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
              <a href="" class="active"><span class="las la-school"></span>
                <span>Dashboard</span></a>
            </li>
            <li>
              <a href="src/viewstudenttable.php"><span class="las la-user-graduate"></span>
                <span>View</span></a>
            </li>
            <li>
              <a href="src/addstudent.php"><span class="las la-graduation-cap"></span>
                <span>Add</span></a>
            </li>
            <li>
              <a href=""><span class="las la-user-minus"></span>
                <span>Delete</span></a>
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

           <div class="search-wrapper">
             <span class="las la-search"></span>
             <input type="search" placeholder="Search Here" value="">
           </div>

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
              <div class="card-single">
                <div>
                  <a href="src/viewstudenttable.php"><h1>View</h1></a>
                  <span>Students</span>
                </div>
                <div>
                  <span class="las la-users"></span>
                </div>
              </div>
              <div class="card-single">
                <div>
                  <a href="src/addstudent.php" style="color: black;"><h1>Add</h1></a>
                  <span>Students</span>
                </div>
                <div>
                  <span class="las la-graduation-cap"></span>
                </div>
              </div>
              <div class="card-single">
                <div>
                  <a href="index.php" style="color:black;"><h1>Logout</h1></a>
                  <span>Students</span>
                </div>
                <div>
                  <span class="las la-user-minus"></span>
                </div>
              </div>
            </div>

         </main>
      </div>

  </body>
</html>
