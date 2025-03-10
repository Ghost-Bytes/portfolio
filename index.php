<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_title; ?> - Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>
    
    <!-- Hero Section -->
    <section id="hero" class="section">
        <?php include_once 'includes/hero.php'; ?>
    </section>
    
    <!-- Experience Section -->
    <section id="experience" class="section">
        <?php include_once 'includes/experience.php'; ?>
    </section>
    
    <!-- Skills Section -->
    <section id="skills" class="section">
        <?php include_once 'includes/skills.php'; ?>
    </section>
    
    <!-- Projects Section -->
    <section id="projects" class="section">
        <?php include_once 'includes/projects.php'; ?>
    </section>
    
    <!-- Contact Section -->
    <section id="contact" class="section">
        <?php include_once 'includes/contact.php'; ?>
    </section>
    
    <!-- Footer -->
    <?php include_once 'includes/footer.php'; ?>
    
    <!-- JS Scripts -->
    <script src="js/main.js"></script>
</body>
</html>