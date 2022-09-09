@php
    $hobby = json_decode($person->hobby);
@endphp

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
        <h2>Update Person</h2>
        <form action="{{url('update-person/'.$person->id)}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="">Name</label>
                <input value="{{ $person->name }}" type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input value="{{ $person->email }}" type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="">City</label>
                <select name="city" id="" class="form-control">
                    <option {{ $person->city=='Dhaka' ? 'selected' : '' }} value="Dhaka">Dhaka</option>
                    <option {{ $person->city=='Chattogram' ? 'selected': '' }} value="Chattogram">Chattogram</option>
                    <option {{ $person->city=='Sylhet' ? 'selected' : '' }} value="Sylhet">Sylhet</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Date of Birth</label>
                <input type="date"  value="{{ $person->birth_date }}"  name="dob" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Salary</label>
                <input type="number"  value="{{ $person->salary }}" name="salary" class="form-control">
            </div>
            <div class="form-group">
                <label>Status</label>
                <div class="form-check">
                    <label class="form-check-label">
                        <input {{ $person -> status == 1 ? 'checked' :''}} type="checkbox" name="status" class="form-check-input" value="1">Is_Active
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label>Gender</label>
                <br />
                <div class="form-check form-check-inline">
                    <input class="form-check-input" {{ $person -> gender == 'Male' ? 'checked' :''}} type="radio" name="gender" id="inlineRadio1" value="Male">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" {{ $person -> gender == 'Female' ? 'checked' :''}} type="radio" name="gender" id="inlineRadio2" value="Female">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Other">
                    <label class="form-check-label" {{ $person -> gender == 'Other' ? 'checked' :''}} for="inlineRadio3">Other</label>
                </div>
            </div>
            <div class="form-group">
                <label>Choose Your Hobby</label>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" {{in_array('Reading',$hobby)?'checked' :''}} class="form-check-input" name="hobby[]" value="Reading">Reading books
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" {{in_array('Tv',$hobby)?'checked' :''}} class="form-check-input" name="hobby[]" value="Tv">Watching Tv
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" {{in_array('Football',$hobby)?'checked' :''}} class="form-check-input" name="hobby[]" value="Football" >Football
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