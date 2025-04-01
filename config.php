<?php
// Site information
$site_title = "William Giva";
$site_description = "Web Developer";

// Navigation items
$nav_items = [
    ['name' => 'Home', 'link' => '#hero'],
    ['name' => 'Experience', 'link' => '#experience'],
    ['name' => 'Skills', 'link' => '#skills'],
    ['name' => 'Projects', 'link' => '#projects'],
    ['name' => 'Contact', 'link' => '#contact'],
];

// Personal information
$personal_info = [
    'name' => 'William Giva',
    'title' => 'Web Developer | ICT Technician',
    'email' => 'givawilliam@gmail.com',
    'phone' => '+265 994 255 731',
    'location' => 'Blantyre, MW',
    'about_me' => 'I\'m a passionate web developer with expertise in PHP, Laravel, and a little bit of Javascript. I enjoy creating solutions to different problems and designing beautiful user interfaces. I am new in this field and seek to further my experience further more that I spend most of my time creating websites so I can learn more.',
    'profile_image' => 'img/profile.jpg',
    'resume_link' => 'files/William Giva CV.pdf',
    'social_links' => [
        ['platform' => 'LinkedIn', 'icon' => 'fab fa-linkedin', 'url' => 'https://www.linkedin.com/in/william-giva-9876b0149'],
        ['platform' => 'GitHub', 'icon' => 'fab fa-github', 'url' => 'https://github.com/Ghost-Bytes'],
        ['platform' => 'Twitter', 'icon' => 'fab fa-twitter', 'url' => 'https://x.com/givawilliam'],
        ['platform' => 'Instagram', 'icon' => 'fab fa-instagram', 'url' => 'https://www.instagram.com/giva_william?igsh=MW9zcm11a3lsY3pp']
    ]
];

// Experience data
$experiences = [
    [
        'title' => 'Web Developer',
        'company' => 'Independent / Freelance',
        'period' => 'June 2024 - Present',
        'description' => 'Building personal and academic projects to improve knowledge skills in web development. Designing system architecture and databases as needed.',
        'technologies' => ['PHP', 'Laravel','HTML', 'CSS', 'JavaScript', 'MySQL']
    ],
    [
        'title' => 'ICT Technician',
        'company' => 'Malawi University of Business and Applied Sciences',
        'period' => 'February 2020 - December 2024',
        'description' => 'Experienced in LAN design, network maintenance, computer troubleshooting, Windows & Linux administration, VLANs, user support, lab management, and CCTV installations.',
        'technologies' => ['Computer Networking','Lab Management','Microsoft Office','Office 365', 'Linux', 'Microsoft Windows', 'NAS Server',]
    ],
];

// Skills data
$skills = [
    'Languages' => ['PHP', 'JavaScript', 'HTML5', 'CSS3'],
    'Frameworks & Libraries' => ['Laravel', 'Bootstrap'],
    'Tools & Platforms' => ['Linux', 'Figma'],
    'Databases' => ['MySQL']
];

// Projects data
$projects = [
    [
        'id' => 1,
        'title' => 'Car Park Assistance',
        'thumbnail' => 'img/projects/parking.jpg',
        'description' => 'A system designed to tell drivers if a car park has space or not. ',
        'full_details' => '',
        'technologies' => ['C++', 'ESP32', 'IR Sensor'],
        'link_code' => 'https://github.com/Ghost-Bytes'
    ],
    [
        'id' => 2,
        'title' => 'Ticketing System',
        'thumbnail' => 'img/projects/tickets.png',
        'description' => '<b>Coming Soon</b> <br> A system for sending tickets for ICT assistance',
        'full_details' => '',
        'technologies' => ['Laravel', 'HTML', 'CSS',],
        'link_code' => 'https://github.com/Ghost-Bytes/ticket_system'
    ],
    [
        'id' => 3,
        'title' => 'Portfolio Website',
        'thumbnail' => 'img/projects/portfolio.png',
        'description' => 'A responsive portfolio website showcasing skills and projects with a clean, modern design.',
        'full_details' => '',
        'technologies' => ['HTML', 'CSS', 'JavaScript', 'PHP'],
        'link_code' => 'https://github.com/Ghost-Bytes/portfolio'
    ],
    [
        'id' => 4,
        'title' => 'Luggage Registration System',
        'thumbnail' => 'img/projects/luggage.jpg',
        'description' => 'A system that allows travellers to register their luggage and easily track it',
        'full_details' => '',
        'technologies' => ['Laravel', 'HTML', 'CSS', 'JavaScript'],
        'link_code' => 'https://github.com/Ghost-Bytes'
    ],
];
