<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resume";

$conn = mysqli_connect($serverName, $userName, $password, $dbname);

$query= "SELECT * FROM contract_info";
$contract_info_result= mysqli_query($conn,$query);
$contract_info_row = mysqli_fetch_assoc($contract_info_result);


$resume =
    [
        'contract_info' =>
        [
            'name' => $contract_info_row['name'],
            'present_address' => $contract_info_row['present_address'],
            'email' => $contract_info_row['email'],
            'phone' => $contract_info_row['phone'],
        ],

        'img_url'   => $contract_info_row['img_url'],

        'career_objective' => 'To work in a challenging environment with a scope of future progress applying my academic knowledge and working capability. Would like to welcome the change to work as a part of a dynamic working team where. I could make a significant contribution while developing my skill yet further.',

        'present_status' => 'To obtain a position that will allow me to utilize my technical skills, experience, and willingness to make an organization successful. Seeking an entry-leve position to begin my career in a high-level professional environment.',

        'education' =>
        [
            'education_title' =>
            [
                'Exam',
                'Board_University',
                'Year',
                'Name_Of_Institution',
                'Marks'
            ],

            'graduation' =>
            [
                'Graduation',
                '-',
                'City University, Bangladesh',
                '2022',
                '3.47'
            ],
            'diploma' =>
            [
                'Diploma',
                'Technical',
                'Sirajganj Polytechnic Institute, Sirajganj',
                '2018',
                '2.94'
            ],
            'ssc' =>
            [
                'SSC',
                'Rajshahi',
                'S.B Railway Colony High School, Sirajganj',
                '2013',
                '4.34'
            ],
        ],

        'computer_skills' =>
        [
            'computer_skills_title' =>
            [
                'Programming Languages',
                'Web based skills',
                'DataBase skills',
                'Scripting skills',
                'Development Tools',
                'Others'
            ],

            'programming_languages' => 'C, C++, java, PHP',
            'web_based_skills' => 'HTML, CSS, Bootstrap',
            'database_skills' => 'MySQL',
            'scripting_skills' => 'JavaScrept',
            'development_tools' => 'CodeBlocks,VS Code, PHP strom',
            'others' => 'Auto cad, Ms Office, XL, Power point'

        ],

        'professional_experience' => 'No Professional Experience',

        'projects' =>
        [
            'projects_name_1' => 'INCOME TAX ANALYZER',
            'projects_description_1' => 'Find the Assessment Value Without Knowing Any Tax Knowledge or Law',
        ],
        'academic_projects' =>
        [
            'academic_projects_name_1' => 'INCOME TAX ANALYZER',
            'academic_projects_description_1' => 'Find the Assessment Value Without Knowing Any Tax Knowledge or Law',
            'academic_projects_name_2' => 'INCOME TAX ANALYZER',
            'academic_projects_description_2' => 'Find the Assessment Value Without Knowing Any Tax Knowledge or Law',
            'academic_projects_name_3' => 'INCOME TAX ANALYZER',
            'academic_projects_description_3' => 'Find the Assessment Value Without Knowing Any Tax Knowledge or Law',

        ],

        'achievements' => 'To work in a challenging environment with a scope of future progress applying my',

        'personal_information' =>
        [
            'personal_information_title' =>
            [
                'Full Name',
                'Father Name',
                'Mother Nmae',
                'Date of Birth',
                'Marital Status',
                'Nationality',
                'Religion',
                'Blood Group',
                'Present Address',
                'Permanent Address'
            ],
            'full_name' => 'Md. Alif Khan Rifat',
            'father_name' => 'Md. Shahjahan Ali Khan',
            'mother_nmae' => 'MST. Jesmin Sultana',
            'date_of_birth' => '05-12-1997',
            'marital_status' => 'Single',
            'nationality' => 'Bangladeshi',
            'religion' => 'Muslim',
            'blood_group' => 'O+',
            'present_address' => 'East Tejturi Bazar, Tejgon, Dhaka',
            'permanent_address' => 'Soyadhangora KhanPara, Sirajganj Sadar, Sirajganj'

        ],

        'hobbies' => 'To work in a challenging environment with a scope of future progress applying my',
        'game' => 'To work in a challenging environment with a scope of future progress applying my',

        'references' =>
        [
            'references_title' =>
            [
                'Name :',
                'Address :',
                'Email :',
                'Phone :'
            ],

            'references_1' =>
            [
                'Md Ataullah',
                'Dhaka',
                'ata@yahoo.com',
                '018xxxxxxx'
            ],

            'references_2' =>
            [
                'Md Ataullah',
                'Dhaka',
                'ata@yahoo.com',
                '018xxxxxxx'
            ]
        ],

        'footer' => 'Copyright © Md Alif Kahn Rifat, 2022',
    ];

//print_r($resume);
