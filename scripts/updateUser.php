<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cell = $_POST['cell'];

    // Check if the user exists
    foreach ($users['user'] as $key => $u) {
        if ($u['email'] == $_SESSION['user']['email']) {
            $users['user'][$key]['name'] = $name;
            $users['user'][$key]['email'] = $email;
            $users['user'][$key]['cell'] = $cell;
            break;
        }
    }

    $newUserData = json_encode($users,JSON_PRETTY_PRINT);
    file_put_contents($filePath, $newUserData);
        /*if  ($_SESSION['type'] == "Admin"){
            echo "
                    <div class='popup active' id='popup-register'>
                        <div class='overlay' ></div>
                        <div class='content'>
                            <h2>Update Successful</h2>
                            <a href='/../admin/admin_profile.php'>
                                <button> back</button>
                            </a>
                        </div>
                    </div>
                ";
        }else{
            echo "
                    <div class='popup active' id='popup-register'>
                        <div class='overlay' ></div>
                        <div class='content'>
                            <h2>Update Successful</h2>
                            <a href='/../client/profile.php'>
                                <button> Back</button>
                            </a>
                        </div>
                    </div>
                ";    */
}