<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Home Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link href="css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
           <div class="row h-25 d-inline-block"></div>
           <div class="row">
               <div class="col-md-7">
                   <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                       <li class="nav-item">
                           <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                              aria-controls="pills-home" aria-selected="true">Home</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                              aria-controls="pills-profile" aria-selected="false">About us</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                              aria-controls="pills-contact" aria-selected="false">Contact us</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                              aria-controls="pills-contact" aria-selected="false">Login</a>
                       </li>
                   </ul>
               </div>

               <div class="col-md-5">
                   <a href="Homepage.php"><img src="images/logo.png" width="400px" alt="Logo"/></a>
               </div>

           </div>
       </div>
       <div class="container">
             <div class="card bg-dark text-white">
                <img class="card-img" src="images/banner.png" alt="Banner image">
                <div class="card-img-overlay">
                    <div class="homepage-search-btn" style="margin-top: 350px; margin-left: 50px;">
                      <button type="button" class="btn btn-outline-light"  >Search For Property's To Buy</button>
                    
                  </div>
              </div>
                 </div>
             <div class="row">
                        <div class="col-md-5">
                            <h1 class="writing" style="margin-top: 200px;">Meet our agents...</h1>
                        </div>
             </div>
             <div class="card-deck"style="margin-bottom: 100px;">
                <div class="card">
                    <img class="card-img-top" src="images/agent1.png" alt="Agent1">
                  <div class="card-body">
                    <h5 class="card-title">Agent 1</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src="images/agent2.png" alt="Agent2">
                  <div class="card-body">
                    <h5 class="card-title">Agent 2</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src="images/agent3.png" alt="Agent3">
                  <div class="card-body">
                    <h5 class="card-title">Agent 3</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
            </div>
             
          
        </div>
        
        
            
            
        
    </body>
</html>
