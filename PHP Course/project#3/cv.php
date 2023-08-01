<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $education = $_POST['education'];
    $workExperience = $_POST['workExperience'];
    $skills = $_POST['skills'];

    // Prepare the data for the CV template
    $data = array(
        'name' => $name,
        'address' => $address,
        'email' => $email,
        'phone' => $phone,
        'education' => $education,
        'workExperience' => $workExperience,
        'skills' => $skills
    );

} else {
    // If the form is not submitted, redirect to the form page
    header('Location: index.html');
    exit;
}
?>





<!DOCTYPE html>
<html>
<head>
    <title>CV Template</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
            color: blue;
        }

        .section {
            margin: 0 auto 20px;
            border: 1px solid gray;
            max-width: 800px;
            padding: 1rem 2rem;
            
        }

        .section h2 {
            margin-bottom: 10px;
            color: green;
        }

        .section .sub-heading {
            font-weight: bold;
        }

        .section ul {
            list-style-type: disc;
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <h1>Curriculum Vitae</h1>

    <div class="section">
        <h2>Personal Information</h2>
        <p><span class="sub-heading">Name:</span> <?php echo $name; ?></p>
        <p><span class="sub-heading">Address:</span> <?php echo $address; ?></p>
        <p><span class="sub-heading">Email:</span> <?php echo $email; ?></p>
        <p><span class="sub-heading">Phone:</span> <?php echo $phone; ?></p>
    </div>

    <div class="section">
        <h2>Education</h2>
        <?php foreach ($education as $item) { ?>
            <p><span class="sub-heading"><?php echo $item['degree']; ?></span> <?php echo $item['university']; ?>, <?php echo $item['year']; ?></p>
        <?php } ?>
    </div>

    <div class="section">
        <h2>Work Experience</h2>
        <?php foreach ($workExperience as $item) { ?>
            <p><span class="sub-heading"><?php echo $item['position']; ?></span> <?php echo $item['company']; ?>, <?php echo $item['duration']; ?></p>
            <ul>
                <?php foreach ($item['responsibilities'] as $responsibility) { ?>
                    <li><?php echo $responsibility; ?></li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>

    <div class="section">
        <h2>Skills</h2>
        <ul>
            <?php foreach ($skills as $skill) { ?>
                <li><?php echo $skill; ?></li>
            <?php } ?>
        </ul>
    </div>
</body>
</html>
