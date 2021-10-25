
<?php 
    $title = 'Index';
    require_once 'includes/header.php'; ?>
<!-- 
    - First name
    - Last Name
    - Date of Birth (Use DatePicker)
    - Specialty (Database Admin, Software Developer, Wed Administratort, Other)
    - Email Address
    - Contact Number
 -->
    <h1 class="text-center">Registration for IT Conference</h1>

    <form>
    <div class="mb-3">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname">
        </div>
        <div class="mb-3">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname">
        </div>
        <div class="mb-3">
            <label for="dob">Date Of Birth</label>
            <input type="text" class="form-control" id="dob">
        </div>
        <div class="mb-3">
            <label for="specialty">Area of Expertise</label>
            <select class="form-control" id="specialty">
                <option>Database Admin<option>
                <option>Software Developer<option>
                <option>Web Administrator<option>
                <option>Other<option>
            </select>
        </div>
    <div class="mb-3">
            <label for="Email">Email address</label>
            <input type="email" class="form-control" id="email"
             aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="mb-3">
            <label for="phone">Contact Number</label>
            <input type="text" class="form-control" id="phone"
             aria-describedby="phoneHelp">
            <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
        </div>
        
        <button type="submit" class="btn btn-primary" class="btn-block" style="width:100%">Submit</button>
</form>

    <?php require_once 'includes/footer.php'; ?>
