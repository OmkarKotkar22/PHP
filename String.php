<?php 
    $str = "Hello, World!";
    echo "<h2>". $str . "</h2><br>";
    echo "<h3>String Functions</h3>";

    // String Length
    echo "<h3>String Length</h3>";
    echo "<br> The length of the string is: " . strlen($str);

    // String Word Count
    echo "<h3>String Word Count</h3>";
    echo "<br> The word count of the string is: " . str_word_count($str);

    // String Reverse
    echo "<h3>String Reverse</h3>";
    echo "<br> The reversed string is: " . strrev($str);

    // String Replace
    echo "<h3>String Replace</h3>";
    echo "<br> The string after replacement is: " . str_replace("World", "PHP", $str);

    // String Position
    echo "<h3>String Position</h3>";
    echo "<br> The position of 'World' in the string is: " . strpos($str, "World");

    // String to Uppercase
    echo "<h3>String to Uppercase</h3>";
    echo "<br> The string in uppercase is: " . strtoupper($str);

    // String to Lowercase
    echo "<h3>String to Lowercase</h3>";
    echo "<br> The string in lowercase is: " . strtolower($str);

    // String Trim
    $str_with_spaces = "   Hello, PHP!   ";
    echo "<h3>String Trim</h3>";
    echo "<br> The string with spaces is: '" . $str_with_spaces . "'";
    echo "<br> The string after trimming is: '" . trim($str_with_spaces) . "'";

    // String Substring
    echo "<h3>String Substring</h3>";
    echo "<br> The substring from position 7 is: '" . substr($str, 7) . "'";

    // String Split
    echo "<h3>String Split</h3>";
    $str_to_split = "Hello, PHP, World!";
    $split_array = explode(", ", $str_to_split);
    echo "<br> The split array is: ";
    print_r($split_array);

    // String Join
    echo "<h3>String Join</h3>";
    $joined_string = implode(" - ", $split_array);
    echo "<br> The joined string is: '" . $joined_string . "'";

    // String Compare
    echo "<h3>String Compare</h3>";
    $str1 = "Hello";
    $str2 = "hello";
    if(strcmp($str1, $str2) == 0){
        echo "<br> The strings are equal.";
    } else {
        echo "<br> The strings are not equal.";
    }

    // String Contains
    echo "<h3>String Contains</h3>";
    if(strpos($str, "World") !== false){
        echo "<br> The string contains 'World'.";
    } else {
        echo "<br> The string does not contain 'World'.";
    }

    // String Starts With
    echo "<h3>String Starts With</h3>";
    if(str_starts_with($str, "Hello")){
        echo "<br> The string starts with 'Hello'.";
    } else {
        echo "<br> The string does not start with 'Hello'.";
    }

    // String Ends With
    echo "<h3>String Ends With</h3>";
    if(str_ends_with($str, "World!")){
        echo "<br> The string ends with 'World!'.";
    } else {
        echo "<br> The string does not end with 'World!'.";
    }

    // String Repeat
    echo "<h3>String Repeat</h3>";
    echo "<br> The repeated string is: '" . str_repeat($str, 3) . "'";

    // String Padding
    echo "<h3>String Padding</h3>";
    echo "<br> The padded string is: '" . str_pad($str, 20, "*", STR_PAD_BOTH) . "'";

    // String Shuffle
    echo "<h3>String Shuffle</h3>";
    echo "<br> The shuffled string is: '" . str_shuffle($str) . "'";

    // String Split into Array of Characters
    echo "<h3>String Split into Array of Characters</h3>";
    $char_array = str_split($str);
    echo "<br> The array of characters is: ";
    print_r($char_array);

    // String Replace Array
    echo "<h3>String Replace Array</h3>";
    $search = array("Hello", "World");
    $replace = array("Hi", "PHP");
    echo "<br> The string after replacement is: '" . str_replace($search, $replace, $str) . "'";

    // String Case Conversion
    echo "<h3>String Case Conversion</h3>";
    echo "<br> The string in title case is: '" . ucwords($str) . "'";

    // String Encoding
    echo "<h3>String Encoding</h3>";
    $encoded_str = base64_encode($str);
    echo "<br> The base64 encoded string is: '" . $encoded_str . "'";

    // String Decoding
    echo "<h3>String Decoding</h3>";
    $decoded_str = base64_decode($encoded_str);
    echo "<br> The base64 decoded string is: '" . $decoded_str . "'";

    // String Hashing
    echo "<h3>String Hashing</h3>";
    $hashed_str = password_hash($str, PASSWORD_DEFAULT);
    echo "<br> The hashed string is: '" . $hashed_str . "'";

    // String Verification
    echo "<h3>String Verification</h3>";
    if(password_verify($str, $hashed_str)){
        echo "<br> The string matches the hash.";
    } else {
        echo "<br> The string does not match the hash.";
    }

    // String Formatting
    echo "<h3>String Formatting</h3>";
    $formatted_str = sprintf("The string is: %s", $str);
    echo "<br> " . $formatted_str;

    // String Searching
    echo "<h3>String Searching</h3>";
    if(strpos($str, "World") !== false){
        echo "<br> The string contains 'World'.";
    } else {
        echo "<br> The string does not contain 'World'.";
    }

    // String Splitting with Limit
    echo "<h3>String Splitting with Limit</h3>";
    $limited_split_array = explode(", ", $str_to_split, 2);
    echo "<br> The limited split array is: ";
    print_r($limited_split_array);

    // String Joining with Glue
    echo "<h3>String Joining with Glue</h3>";
    $glued_string = implode(" | ", $split_array);
    echo "<br> The glued string is: '" . $glued_string . "'";

    // String Padding with Different Types
    echo "<h3>String Padding with Different Types</h3>";
    echo "<br> The left padded string is: '" . str_pad($str, 20, "*", STR_PAD_LEFT) . "'";
    echo "<br> The right padded string is: '" . str_pad($str, 20, "*", STR_PAD_RIGHT) . "'";
    echo "<br> The both padded string is: '" . str_pad($str, 20, "*", STR_PAD_BOTH) . "'";

    // String Trimming Specific Characters
    echo "<h3>String Trimming Specific Characters</h3>";
    $str_with_chars = "###Hello, PHP!###";
    echo "<br> The string with specific characters is: '" . $str_with_chars . "'";
    echo "<br> The string after trimming specific characters is: '" . trim($str_with_chars, "#") . "'";

?>