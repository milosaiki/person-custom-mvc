<?php include_once 'header.php'; ?>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 offset-lg-3 offset-md-3">
        <form action="/add" method="post" id="addPerson">
          <div class="form-group">  
            <label for="firstname">First name:</label>
            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter Your first name">
          </div>
          <div class="form-group">  
            <label for="lastname">Last name:</label>
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter Your last name">
          </div>
          <div class="form-group">  
            <label for="male">Male:</label>
            <input type="radio" name="gender" id="male" value="0">
            <label for="female">Female:</label>
            <input type="radio" name="gender" id="female" value="1">
          </div> 
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <div class="form-group">  
                <label for="age">Age:</label>
                <input type="number" min="0" class="form-control" name="age" id="age">
              </div>
            </div>            
          
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
              <div class="form-group radio-btn-holder">  
                <label for="adult">Adult:</label>
                <input type="radio" name="adult" id="adult" value="0">
                <label for="child">Child:</label>
                <input type="radio" name="adult" id="child" value="1">
              </div> 
            </div>
          </div>  
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="city">City: </label>
                <input class="form-control" type="text" name="city" id="city">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="address">Address: </label>
                <input class="form-control" type="text" name="address" id="address">
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <div class="form-group">
                <label for="state">State: </label>
                <input class="form-control" type="text" name="state" id="state">
              </div>
            </div>
          </div>

          <div id="adultHolder">         
            <div class="form-group">
              <label for="work">Work: </label>
              <input class="form-control" type="text" name="work" id="work">
            </div>                     
            <div class="form-group">
              <label for="education">Education: </label>
              <input class="form-control" type="text" name="education" id="education">
            </div>  
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">  
                  <label for="kids">Kids:</label>
                  <input type="number" min="0" class="form-control" name="kids" id="kids">
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                <label for="marrigeStatus">Relationship: </label>
                  <select name="marrigeStatus" class="form-control" id="">
                    <option value="0"></option>
                    <option value="1">Single</option>
                    <option value="2">In Relationship</option>
                    <option value="3">Married</option>
                  </select>
                </div>
              </div>
            </div>          
          </div>        
          <div id="childHolder">         
            <div class="form-group">
              <label for="school">School: </label>
              <input class="form-control" type="text" name="school" id="school">
            </div>                     
            <div class="form-group">
              <label for="favoriteFriend">Best friend: </label>
              <input class="form-control" type="text" name="favoriteFriend" id="favoriteFriend">
            </div>  
            <div class="form-group">
              <label for="favoriteGame">Favorite Game: </label>
              <input class="form-control" type="text" name="favoriteGame" id="favoriteGame">
            </div>  
                      
          </div>        

          <input type="submit" value="Create" class="btn btn-success" name="createPerson">
        </form>
      </div>
    </div>
  </div>

<?php include_once 'footer.php'; ?>