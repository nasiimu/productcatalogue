
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <?php include 'includes/head.html';?>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: blue;
            padding: 20px;
            margin: 20px;
            color: white;
           
        }
        h1, p {
            margin-bottom: 20px;
        }
        <p>This is <span style="color: red;">red</span> text.</p>

    </style>
    
</head>
<body>
<?php include 'includes/nav.php';?>
<?php
// Define information about your team or company
$companyName = "proofAficanbeauty";
$establishedYear = 2007;
$teamMembers = [
    "HassanBound" => "Founder & CEO",
    "Namayanja Ritah" => "HR",
    "Mugoya Dihfahsih" => "Lead Developer",
    "Nakamatte Nasiimu" => "Marketing Manager", 
    "Gonza phiphi" => " chief product Manager",

    
];
?>

<h1>About Us - <?php echo $companyName; ?>proofAfrianbeauty</h1>

<p>Welcome to <?php echo $companyName; ?>, a company dedicated to excellence in various skin types. We were established in Florida USA since <?php echo $establishedYear; ?> and have  been committed to delivering top-notch services for 16years now in experience.</p>

<p>Our team is composed of talented individuals who are passionate about what they do. Meet some of the key members:</p>

<ul>
    <?php
    foreach ($teamMembers as $name => $position) {
        echo "<li><strong>$name</strong> - $position</li>";
    }
    ?>
</ul>

<p>At <?php echo $companyName; ?>, we strive to provide improving skin solutions and outstanding customer service. Feel free to contact us if you have any questions or inquiries.</p>
<?php include 'includes/footer.php';?>
</body>
</html>


