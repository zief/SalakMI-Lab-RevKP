<?php
include_once "../desain/sider.php";
include_once "../desain/setcss.php";

echo "<div class=\"main\" style=\"height: 100%;\">";
include_once "../desain/header.php";

echo "<pre>Setelah beberapa kali ada yang meretas servernya, Bejo sadar bahwa ada yang salah
pada fungsi <b>ping</b> yang ia buat, kemudian ia menambahkan keamanan pada script <b>ping</b> yang ia buat tersebut.</pre>";

echo "<form name=\"ping\" action=\"#\" method=\"post\">
            <p>
                Enter an IP address:
                <input type=\"text\" name=\"ip\" size=\"30\">
                <input type=\"submit\" name=\"Submit\" value=\"Submit\">
            </p>\n
            </form>";

if( isset( $_POST[ 'Submit' ]  ) ) {
    // Get input
    $target = $_REQUEST[ 'ip' ];

    // Set blacklist
    $replace = array(
        '&'  => '',
        ';'  => '',
        '| ' => '',
        '-'  => '',
        '$'  => '',
        '('  => '',
        ')'  => '',
        '`'  => '',
        '||' => '',
    );

    // Remove any of the charactars in the array (blacklist).
    $target = str_replace( array_keys( $replace ), $replace, $target ); 

    // Determine OS and execute the ping command.
    if( stristr( php_uname( 's' ), 'Windows NT' ) ) {
        // Windows
        $cmd = shell_exec( 'ping  ' . $target );
    }
    else {
        // *nix
        $cmd = shell_exec( 'ping  -c 4 ' . $target );
    }

    // Feedback for the end user
    echo "<pre>{$cmd}</pre>";
}

echo "</div>";

?> 