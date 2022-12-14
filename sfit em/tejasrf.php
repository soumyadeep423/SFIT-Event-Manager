
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {
      padding: 0;
      box-sizing: border-box;
    }

    h1 {
      margin-bottom: 10px;
      outline: 3px groove black;
      margin-left:16%;
      width:62%;
      background-color: lightyellow;
    }

    input[type=text],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }

    label {
      padding: 10px 10px 10px 0;
      display: inline-block;
    }

    input[type=submit] {
      background-color: #04AA6D;
      color: white;
      font-size: 20px;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .container {
      border-radius: 5px;
      background-color: #f2dbff;
      padding: 20px;
      padding-left: 25%;
      font: 20px Arial;
      text-transform: capitalize;

    }
      
    
    .col-25 {
      float: left;
      width: 25%;
      margin-top: 6px;
    }

    .col-75 {
      float: left;
      width: 75%;
      margin-top: 6px;
    }


    .row:after {
      content: "";
      display: table;
      clear: both;
    }


    @media screen and (max-width: 600px) {

      .col-25,
      .col-75,
      input[type=submit] {
        width: 100%;
        margin-top: 0;
      }
    }
  </style>
</head>

<body>

  <h1><strong
      style="margin-left: 35%; color:darkcyan; letter-spacing: 1px; line-height: 1.6; font-size: 30px;">Registration
      Form</strong></h1>
  <div class="container" >
    <form action="register_tejas.php">
      <div class="row">
        <div class="col-25">
          <label for="fname">First Name :</label>
        </div>
        <div class="col-15" style="width:60%;">
          <input type="text" name="firstname" placeholder="Your name">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Last Name :</label>
        </div>
        <div class="col-15" style="width:60%;">
          <input type="text" name="lastname" placeholder="Your last name">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="branch">Branch :</label>
        </div>
        <div class="col-15" style="width:60%;">
          <select name="branch">
            <option value="null">--Select Branch--</option>
            <option value="CMPN">CMPN</option>
            <option value="INFT">INFT</option>
            <option value="EXTC">EXTC</option>
            <option value="MECH">MECH</option>
            <option value="EE">EE</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="division">Division :</label>
        </div>
        <div class="col-15" style="width:60%;">
          <select name="division">
            <option value="null">--Select Division--</option>
            <option value="A">A</option>
            <option value="B">B</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="rollno">Roll No :</label>
        </div>
        <div class="col-15" style="width:60%;">
          <input type="text" name="rollno" placeholder="Enter Roll No.">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="pid">PID :</label>
        </div>
        <div class="col-15" style="width:60%;">
          <input type="text" name="pid" placeholder="Enter PID">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="year">Year :</label>
        </div>
        <div class="col-15" style="width:60%;">
          <select name="year">
            <option value="null">--Select Year--</option>
            <option value="SE">SE</option>
            <option value="TE">TE</option>
            <option value="BE">BE</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-75">
          <label for="field" style="text-indent: 1px;">Registration open for following fields :</label>
        </div>
        <div class="col-15" style="width:60%;">
          <select name="field">
            <option value="null">--Select--</option>
            <option value="Design Department">Design Department</option>
            <option value="Graphics Department">Graphics Department</option>
            <option value="Avionics Department">Avionics Department</option>
    
          </select>
        </div>
      </div>
      <div class="row">
        <input type="submit" value="Submit" name="submit-form">
      </div>
    </form>
  </div>
</body>

</html>

