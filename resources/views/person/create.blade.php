<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Create Person</h2>
        <form action="{{url('store-person')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="">City</label>
                <select name="city" id="" class="form-control">
                    <option value="Dhaka">Dhaka</option>
                    <option value="Chattogram">Chattogram</option>
                    <option value="Sylhet">Sylhet</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Date of Birth</label>
                <input type="date" name="dob" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Salary</label>
                <input type="number" name="salary" class="form-control">
            </div>
            <div class="form-group">
            <label for="">Status</label>
              <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="status" value="1">Active
                </label>
               </div>
            </div>
            <div class="form-group">
             <label for="">Gender</label>
             <br>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="gender" value="male">Male
                        <input type="radio" class="form-check-input" name="gender" value="female">Female
                        <input type="radio" class="form-check-input" name="gender" value="other">Other
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label>Choose Your Hobby</label>
                <br>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="hobby[]" value="Reading">Reading books
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="hobby[]" value="Tv">Watching Tv
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="hobby[]" value="Football" >Football
                    </label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-dark">Save</button>
            </div>
        </form>
    </div>
</body>
</html>