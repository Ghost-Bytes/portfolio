<div class="container">
    <div class="section-header">
        <h2>My Skills</h2>
        <p>What I bring to the table</p>
    </div>
    <div class="skills-container">
        <?php foreach ($skills as $category => $skillsList): ?>
        <div class="skill-category">
            <h3><?php echo htmlspecialchars($category); ?></h3>
            <div class="skills-list">
                <?php foreach ($skillsList as $skillName => $skillLevel): ?>
                <div class="skill-item">
                    <div class="skill-name"><?php echo htmlspecialchars($skillName); ?></div>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: <?php echo $skillLevel; ?>%;"></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>