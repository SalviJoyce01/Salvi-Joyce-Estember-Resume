<?php
$name = "Salvi Joyce V. Estember";
$email = "estembersalvi@gmail.com";
$phone = "09912345678";
$location = "Sn. Miguel, Jordan, Guimaras";
$imageSrc = "salvi.JPG";

$professionalSummary = "As a recent graduate of BS Information Technology with a degree of Web and Mobile Development, 
I'm excited to launch my career in UX & UI design. Skilled in Adobe Creative Suite, Figma, and Microsoft Office, 
I'm passionate about creating intuitive and user-friendly interfaces for web and mobile applications. 
Seeking a role where I can grow my skills and contribute to a dynamic team.";

$experiences = [
    [
        "title" => "Junior Designer - APEX Company",
        "location" => "Cebu, Philippines",
        "duration" => "May 2027 - June 2029",
        "description" => "Responsible for ideating and execution of AIGA event graphics and professional communication assets."
    ],
    [
        "title" => "Graphic Designer - University of the Philippines",
        "location" => "Cebu, Philippines",
        "duration" => "May 2029 - June 2030",
        "description" => "Design print and digital marketing imagery promoting holistic wellness for University's health initiatives."
    ],
    [
        "title" => "Visual Design Intern - Digital Designing Company",
        "location" => "Ontario, Canada",
        "duration" => "May 2030 - Present",
        "description" => "Designed product packaging, created online campaigns, and worked on UI development for web/mobile."
    ]
];

$educations = [
    [
        "school" => "Guimaras State University - Mosqueda Campus",
        "location" => "Alaguisoc, Jordan, Guimaras",
        "year" => "Class of 2026",
        "degree" => "BS Information Technology",
        "major" => "Major in Mobile and Web Development"
    ],
    [
        "school" => "International Technology University",
        "location" => "Cebu City, Philippines",
        "year" => "Class of 2028",
        "degree" => "Masters in Mobile and Web Development"
    ]
];

$recognitions = [
    "Dean's Lister 2022-2026",
    "Graphic International Design Awards",
    "International Design Excellence Awards(IDEA)",
    "Cybersecurity Training Awards",
    "Google IT Support Professional Certificate"
];

$skills = [
    "Front-end Development",
    "User Interface Design",
    "User Experience Design",
    "Web Designing",
    "Mobile App Designing"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?>_Resume</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1><?php echo $name; ?></h1>
            <p>Email: <?php echo $email; ?> | Phone: <?php echo $phone; ?></p>
            <p>Location: <?php echo $location; ?></p>
            <image src="<?php echo $imageSrc; ?>" alt="<?php echo $name; ?>">
        </header>

        <section class="summary">
            <h2>Professional Summary</h2>
            <p><?php echo $professionalSummary; ?></p>
        </section>

        <!-- Experiences -->
        <section class="experience">
            <h2>Work Experience</h2>
            <?php foreach ($experiences as $experience): ?>
                <div class="job">
                    <h3><?php echo $experience['title']; ?></h3>
                    <p><strong><?php echo $experience['location']; ?></strong> | <?php echo $experience['duration']; ?></p>
                    <p><?php echo $experience['description']; ?></p>
                </div>
                <br>
            <?php endforeach; ?>
        </section>

        <!-- Education -->
        <section class="education">
            <h2>Education</h2>
            <?php foreach ($educations as $education): ?>
                <div class="school">
                    <h3><?php echo $education['school']; ?></h3>
                    <p><strong><?php echo $education['location']; ?></strong> <br><?php echo $education['year']; ?> <br><?php echo $education['degree']; ?> <br><?php echo isset($education['major']) ? $education['major'] : ''; ?></p>
                </div>
                <br>
            <?php endforeach; ?>
        </section>

        <!-- Recognitions and Awards -->
        <section class="recognitions">
            <h2>Recognition and Awards</h2>
            <ul>
                <?php foreach ($recognitions as $recognition): ?>
                    <li><?php echo $recognition; ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <!-- Skills -->
        <section class="skills">
            <h2>Skills</h2>
            <ul>
                <?php foreach ($skills as $skill): ?>
                    <li><?php echo $skill; ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <!-- Reference -->
        <section class="reference">
            <h2>Reference</h2>
        </section>
    </div>
</body>
</html>
