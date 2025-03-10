<div class="container">
    <div class="section-header">
        <h2>My Skills</h2>
        <p>What I bring to the table</p>
    </div>
    <div class="skills-container">
        <?php foreach ($skills as $category => $categorySkills): ?>
        <div class="skill-category">
            <h3><?php echo $category; ?></h3>
            <div class="skills-list">
                <?php foreach ($categorySkills as $skill): ?>
                <div class="skill-item">
                    <div class="skill-name"><?php echo $skill; ?></div>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: <?php echo rand(75, 95); ?>%;"></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>