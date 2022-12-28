<?php
include_once 'resume.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alif Resume</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="container">

        <section class="section_one">

            <section class="section_one_left">
                <br>
                <br>
                <br>
                <br>
                <p>
                    <strong><?php echo $resume['contract_info']['name']; ?></strong><br>
                    <?php echo $resume['contract_info']['present_address']; ?><br>
                    <?php echo $resume['contract_info']['email']; ?><br>
                    <?php echo $resume['contract_info']['phone']; ?><br>
                </p>
            </section>

            <section class="section_one_right">
                <img class="p_img" src="<?php echo $resume['img_url']; ?>" alt="Picture">
            </section>
        </section>

        <section class="section_two">
            <p class="heading_boder"><b>Career Objective</b></p>
            <p class="extra_padding"> <?php echo $resume['career_objective']; ?><br> </p>
        </section>

        <section class="section_three">
            <p class="heading_boder"><b>Present Statas</b></p>
            <p class="extra_padding"><?php echo $resume['present_status']; ?><br></p>
        </section>

        <section class="section_four">

            <section>
                <p class="heading_boder"><b>Education</b></p>
            </section>

            <section class="extra_padding">

                <table class="euducation_table">
                    <tr>
                        <th class="table_td_h"><?php echo $resume['education']['education_title'][0]; ?></th>
                        <th class="table_td_h"><?php echo $resume['education']['education_title'][1]; ?></th>
                        <th class="table_td_h"><?php echo $resume['education']['education_title'][2]; ?></th>
                        <th class="table_td_h"><?php echo $resume['education']['education_title'][3]; ?></th>
                        <th class="table_td_h"><?php echo $resume['education']['education_title'][4]; ?></th>
                    </tr>
                    <tr>
                        <td class="table_th"><?php echo $resume['education']['graduation'][0]; ?></td>
                        <td class="table_th"><?php echo $resume['education']['graduation'][1]; ?></td>
                        <td class="table_th"><?php echo $resume['education']['graduation'][2]; ?></td>
                        <td class="table_th"><?php echo $resume['education']['graduation'][3]; ?></td>
                        <td class="table_th"><?php echo $resume['education']['graduation'][4]; ?></td>
                    </tr>
                    <tr>
                        <td class="table_th"><?php echo $resume['education']['diploma'][0]; ?></td>
                        <td class="table_th"><?php echo $resume['education']['diploma'][1]; ?></td>
                        <td class="table_th"><?php echo $resume['education']['diploma'][2]; ?></td>
                        <td class="table_th"><?php echo $resume['education']['diploma'][3]; ?></td>
                        <td class="table_th"><?php echo $resume['education']['diploma'][4]; ?></td>
                    </tr>
                    <tr>
                        <td class="table_th"><?php echo $resume['education']['ssc'][0]; ?></td>
                        <td class="table_th"><?php echo $resume['education']['ssc'][1]; ?></td>
                        <td class="table_th"><?php echo $resume['education']['ssc'][2]; ?></td>
                        <td class="table_th"><?php echo $resume['education']['ssc'][3]; ?></td>
                        <td class="table_th"><?php echo $resume['education']['ssc'][4]; ?></td>
                    </tr>
                </table>

            </section>

            <section class="section_five extra_padding">
                <p class="heading_boder"><b>Computer Skills</b></p>

                <section class="skil_info extra_padding">
                    <table class="">
                        <tr>
                            <td><?php echo $resume['computer_skills']['computer_skills_title'][0]; ?></td>
                            <td>&nbsp; &nbsp; &nbsp; : &nbsp; &nbsp; </td>
                            <td><?php echo $resume['computer_skills']['programming_languages']; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $resume['computer_skills']['computer_skills_title'][1]; ?></td>
                            <td>&nbsp; &nbsp; &nbsp; : &nbsp; &nbsp; </td>
                            <td><?php echo $resume['computer_skills']['web_based_skills']; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $resume['computer_skills']['computer_skills_title'][2]; ?></td>
                            <td>&nbsp; &nbsp; &nbsp; : &nbsp; &nbsp; </td>
                            <td><?php echo $resume['computer_skills']['database_skills']; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $resume['computer_skills']['computer_skills_title'][3]; ?></td>
                            <td>&nbsp; &nbsp; &nbsp; : &nbsp; &nbsp; </td>
                            <td><?php echo $resume['computer_skills']['scripting_skills']; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $resume['computer_skills']['computer_skills_title'][4]; ?></td>
                            <td>&nbsp; &nbsp; &nbsp; : &nbsp; &nbsp; </td>
                            <td><?php echo $resume['computer_skills']['development_tools']; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $resume['computer_skills']['computer_skills_title'][5]; ?></td>
                            <td>&nbsp; &nbsp; &nbsp; : &nbsp; &nbsp; </td>
                            <td><?php echo $resume['computer_skills']['others']; ?></td>
                        </tr>
                    </table>
                </section>

            </section>

        </section>

        <section class="section_six extra_padding">
            <p class="heading_boder"><b>Professional Experience</b></p>
            <p><?php echo $resume['professional_experience']; ?></p>
        </section>

        <section class="section_seven">

            <p class="heading_boder"><b>Projects</b></p>

            <dl>
                <ul>
                    <li>
                        <dt><?php echo $resume['projects']['projects_name_1']; ?></dt>
                    </li>
                </ul>

                <ul>

                    <dd>&#186; &nbsp; <?php echo $resume['projects']['projects_description_1']; ?></dd>

                </ul>

            </dl>

        </section>
        <section class="section_eight">

            <p class="heading_boder"><b>Academic Projects</b></p>

            <dl>
                <ul>
                    <li>
                        <dt><?php echo $resume['academic_projects']['academic_projects_name_1']; ?></dt>
                    </li>
                </ul>

                <ul>

                    <dd>&#186; &nbsp; <?php echo $resume['academic_projects']['academic_projects_description_1']; ?></dd>

                </ul>

                <ul>
                    <li>
                        <dt><?php echo $resume['academic_projects']['academic_projects_name_2']; ?></dt>
                    </li>
                </ul>

                <ul>

                    <dd>&#186; &nbsp; <?php echo $resume['academic_projects']['academic_projects_description_2']; ?></dd>

                </ul>

                <ul>
                    <li>
                        <dt><?php echo $resume['academic_projects']['academic_projects_name_3']; ?></dt>
                    </li>
                </ul>

                <ul>

                    <dd>&#186; &nbsp; <?php echo $resume['academic_projects']['academic_projects_description_3']; ?></dd>

                </ul>
            </dl>

        </section>

        <section class="section_nine">
            <p class="heading_boder"><b>Achievements</b></p>
            <p>
                <?php echo $resume['achievements']; ?>
            </p>
        </section>

        <section class="section_ten">
            <p class="heading_boder"><b>Personal Information</b></p>

            <section class="personal_info extra_padding">
                <table class="">

                    <tr>
                        <td><?php echo $resume['personal_information']['personal_information_title'][0]; ?></td>
                        <td>&nbsp; &nbsp; &nbsp; : &nbsp; &nbsp; </td>
                        <td><?php echo $resume['personal_information']['full_name']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $resume['personal_information']['personal_information_title'][1]; ?></td>
                        <td>&nbsp; &nbsp; &nbsp; : &nbsp; &nbsp; </td>
                        <td><?php echo $resume['personal_information']['father_name']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $resume['personal_information']['personal_information_title'][2]; ?></td>
                        <td>&nbsp; &nbsp; &nbsp; : &nbsp; &nbsp; </td>
                        <td><?php echo $resume['personal_information']['mother_nmae']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $resume['personal_information']['personal_information_title'][3]; ?></td>
                        <td>&nbsp; &nbsp; &nbsp; : &nbsp; &nbsp; </td>
                        <td><?php echo $resume['personal_information']['date_of_birth']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $resume['personal_information']['personal_information_title'][4]; ?></td>
                        <td>&nbsp; &nbsp; &nbsp; : &nbsp; &nbsp; </td>
                        <td><?php echo $resume['personal_information']['marital_status']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $resume['personal_information']['personal_information_title'][5]; ?></td>
                        <td>&nbsp; &nbsp; &nbsp; : &nbsp; &nbsp; </td>
                        <td><?php echo $resume['personal_information']['nationality']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $resume['personal_information']['personal_information_title'][6]; ?></td>
                        <td>&nbsp; &nbsp; &nbsp; : &nbsp; &nbsp; </td>
                        <td><?php echo $resume['personal_information']['religion']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $resume['personal_information']['personal_information_title'][7]; ?></td>
                        <td>&nbsp; &nbsp; &nbsp; : &nbsp; &nbsp; </td>
                        <td><?php echo $resume['personal_information']['blood_group']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $resume['personal_information']['personal_information_title'][8]; ?></td>
                        <td>&nbsp; &nbsp; &nbsp; : &nbsp; &nbsp; </td>
                        <td><?php echo $resume['personal_information']['present_address']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $resume['personal_information']['personal_information_title'][9]; ?></td>
                        <td>&nbsp; &nbsp; &nbsp; : &nbsp; &nbsp; </td>
                        <td><?php echo $resume['personal_information']['permanent_address']; ?></td>
                    </tr>

                </table>

            </section>

        </section>

        <section class="section_ten extra_padding">
            <p class="heading_boder"><b>Hobbies</b></p>
            <p>
                <?php echo $resume['hobbies']; ?>
            </p>
        </section>

        <section class="section_eleven">
            <p class="heading_boder"><b>Game</b></p>
            <p> <?php echo $resume['game']; ?></p>
        </section>

        <section class="section_twelve">

            <p class="heading_boder"><b>References</b></p>
            <dl class="extra_padding">
                <dt><b><?php echo $resume['references']['references_title'][0] . $resume['references']['references_1'][0]; ?></b></dt>
                <dt><?php echo $resume['references']['references_title'][1] . $resume['references']['references_1'][1]; ?></dt>
                <dt><?php echo $resume['references']['references_title'][2] . $resume['references']['references_1'][2]; ?></dt>
                <dt><?php echo $resume['references']['references_title'][3] . $resume['references']['references_1'][3]; ?></dt>
            </dl>
            <dl class="extra_padding">
                <dt><b><?php echo $resume['references']['references_title'][0] . $resume['references']['references_2'][0]; ?></b></dt>
                <dt><?php echo $resume['references']['references_title'][1] . $resume['references']['references_2'][1]; ?></dt>
                <dt><?php echo $resume['references']['references_title'][2] . $resume['references']['references_2'][2]; ?></dt>
                <dt><?php echo $resume['references']['references_title'][3] . $resume['references']['references_2'][3]; ?></dt>
            </dl>

        </section>

        <footer class="extra_padding">
            <p style="text-align: center;"><?php echo $resume['footer']; ?></p>
        </footer>
    </section>

</body>

</html>