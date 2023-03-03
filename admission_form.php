<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="reg.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8" style="border:2px solid black; padding:5px; text-align:center;">
            <h1>Admission Form 2023</h1>
        </div>
        <div class="col-sm-2"></div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10" style="padding: 80px;">
            <form action="form_action.php" method="POST" enctype="mutlipart/form-data">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3 row">
                            <div class="col-sm-4">
                                <label class="label">Full Name:-</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-4">
                                <label class="label">Father Name:-</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" name="fname" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-4">
                                <label class="label">Mother Name:-</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" name="mname" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-4">
                                <label class="label">Address:-</label>
                            </div>
                            <div class="col-sm-8">
                                <textarea name="address" class="form-control" required></textarea>
                            </div>
                        </div>    
                            <div class="mb-3 row">
                            <div class="col-sm-4">
                                <label class="label">Email:-</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-4">
                                <label class="label">Mobile No:-</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" name="mobile" maxlength="10" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-4">
                                <label class="label">DOB:-</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="date" name="dob" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-4">
                                <label class="label">Category:-</label>
                            </div>
                            <div class="col-sm-8">
                                <select name="category" class="form-control" required>
                                    <option value="">Select Your Category</option>
                                      <option value="ST">ST</option>
                                      <option value="SC">SC</option>
                                      <option value="OBC">OBC</option>
                                      <option value="General">General</option>
                                </select>      
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-4">
                                <label class="label">Gender:-</label>
                            </div>
                            <div class="col-sm-8">
                                <select name="gender" class="form-control" required>
                                    <option value="">Select Gender</option>
                                      <option value="Male">Male</option>
                                      <option value="Female">Female</option>
                                      <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-4">
                                <label class="label">Department:-</label>
                            </div>
                            <div class="col-sm-8">
                                <select name="course" class="form-control" required>
                                    <option value="">Select Your Department</option>
                                      <option value="IT">Information Technology</option>
                                      <option value="CSE">Computer Science Engineering</option>
                                      <option value="EE">Electrical Engineering</option>
                                      <option value="ME">Mechanical Engineering</option>
                                      <option value="A">Architecture</option>
                                      <option value="CE">Civil Engineering</option>
                                      <option value="Ph">Pharmancy</option>
                                      <option value="Pr">Production</option>
                                </select>      
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group" style="float: right;">
                                  <label class="label">Photo</label>
                                  <div style="border:1px solid black; height:150px; width:150px; background:#F5FAFF;">
                                  <img id="output" width="150" height="150" style="display:none;">
                                  </div>
                                  <input type="file" name="image" id="image" onchange="loadFile(event)" class="form-control" required accept="image/*" style="width:150px;" required>
                                <!-- JavaScript For Photo -->
                                  <script>
                                    var loadFile = function(event){
                                        var reader = new FileReader();
                                        reader.onload = function(){
                                            var output = document.getElementById('output');
                                            output.src = reader.result;
                                        };
                                        $('#output').show();
                                        reader.readAsDataURL(event.target.files[0]);
                                    };
                                  </script>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group" style="float: right;">
                                  <label class="label">Signature</label>
                                  <div style="border:1px solid black; height:150px; width:150px; background:#F5FAFF;">
                                  <img id="outputs" width="150" height="150" style="display:none;">
                                  </div>
                                  <input type="file" name="simage" id="simage" onchange="loadFiles(event)" class="form-control" required accept="image/*" style="width:150px;" required>
                                <!-- JavaScript For Signature -->
                                  <script>
                                    var loadFiles = function(event){
                                        var reader = new FileReader();
                                        reader.onload = function(){
                                            var output = document.getElementById('outputs');
                                            output.src = reader.result;
                                        };
                                        $('#outputs').show();
                                        reader.readAsDataURL(event.target.files[0]);
                                    };
                                  </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">'
                        <div class="col-sm-2">
                            <label class="label">Declaration</label>
                        </div>
                        <div class="col-sm-8">
                            <div style="border:2px solid black; padding:10px; text-align:center; border-radius:25px;">
                        <input type="checkbox" name="declare" required>
                    I declare that I have read and filles the above information correctly and all the given information is true.
                    Therefore, if any information is incorrect then you can smite me in the face.</div>
                    <div class="form-group row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <br>
                            <button class="btn btn-success" name="form_submit">Submit</button>
                        </div>
                    </div>
                    <div class="col-sm-4"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>