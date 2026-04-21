<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions</title>
    <style>
        table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 10px;
}
    </style>
</head>
<body>
        <table>
            <tr>
                <th>Function</th>
                <th>Description</th>
                <th>Example</th>
            </tr>
            <tr>
                <td>strlen()</td>
                <td>Trả về độ dài của một chuỗi</td>
                <td>strlen("Hello") => 5</td>
            </tr>
            <tr>
                <td>str_word_count()</td>
                <td>Trả về số lượng từ trong một chuỗi</td>
                <td>str_word_count("Hello, World!") => 2</td>
            </tr>
            <tr>
                <td>str_contains()</td>
                <td>Kiểm tra xem chuỗi có chứa chuỗi con hay không</td>
                <td>str_contains("Hello, World!", "World") => true</td>
            </tr>
            <tr>
                <td>strpos()</td>
                <td>Trả về vị trí của chuỗi con trong chuỗi</td>
                <td>strpos("Hello, World!", "World") => 7</td>
            </tr>
            <tr>
                <td>str_starts_with()</td>
                <td>Kiểm tra xem chuỗi có bắt đầu bằng chuỗi con hay không</td>
                <td>str_starts_with("Hello, World!", "Hello") => true</td>
            </tr>
            <tr>
                <td>str_ends_with()</td>
                <td>Kiểm tra xem chuỗi có kết thúc bằng chuỗi con hay không</td>
                <td>str_ends_with("Hello, World!", "World!") => true</td>
            </tr>
            <tr>
                <td>strtoupper()</td>
                <td>Chuyển đổi chuỗi thành chữ hoa</td>
                <td>strtoupper("Hello") => "HELLO"</td>
            </tr>
            <tr>
                <td>strtolower()</td>
                <td>Chuyển đổi chuỗi thành chữ thường</td>
                <td>strtolower("Hello") => "hello"</td>
            </tr>
            <tr>
                <td>str_replace()</td>
                <td>Thay thế một chuỗi con bằng một chuỗi khác trong chuỗi</td>
                <td>str_replace("Hello", "Hi", "Hello, World!") => "Hi, World!"</td>        
            </tr>
            <tr>
                <td>trim()</td>
                <td>Loại bỏ khoảng trắng ở đầu và cuối chuỗi</td>
                <td>trim("  Hello  ") => "Hello"</td>   
            </tr>
            <tr>
                <td>strrev()</td>
                <td>Đảo ngược chuỗi</td>
                <td>strrev("Hello") => "olleH"</td>
            </tr>
            <tr>
                <td>explode()</td>
                <td>Tách một chuỗi thành một mảng dựa trên một ký tự phân tách</td>
                <td>explode(" ", "Hello World") => ["Hello", "World"]</td>
            </tr>
            <tr>
                <td>substr()</td>
                <td>Lấy một phần của chuỗi</td>
                <td>substr("Hello, World!", 7, 5) => "World"</td>
        </table>
        <?php
            //hàm strlen()
            $str = "Hello, World!";
            echo "Độ dài của chuỗi '$str' là: " . strlen($str);
            //hàm str_word_count()
            echo "<br>Số lượng từ trong chuỗi '$str' là: " . str_word_count($str);
            //hàm str_contains() để kiểm tra xem chuỗi có chứa chuỗi con hay không
            if (str_contains($str, "World")) {
                echo "<br>Chuỗi '$str' chứa chuỗi con 'World'";
            }
            //hàm strpos() để kiểm tra vị trí của chuỗi con  trong chuỗi
            $pos = strpos($str, "World");
            echo "<br>Vị trí của chuỗi con 'World' trong chuỗi '$str' là: " . $pos;
            //hàm str_starts_with() để kiểm tra xem chuỗi có bắt đầu bằng chuỗi con hay không
            $phone_number = "0886xxxxxx";
            if (str_starts_with($phone_number, "0886")) {
                echo "<br>Số điện thoại '$phone_number' hợp lệ";
            }
            //hàm str_ends_with() để kiểm tra xem chuỗi có kết thúc bằng
            $email = "hieulx@huce.edu.vn";
            if (str_ends_with($email, "@huce.edu.vn")) {
                echo "<br>Địa chỉ email '$email' hợp lệ";
            }
            else {
                echo "<br>Địa chỉ email '$email' không hợp lệ";
            }
            //hàm strtoupper() để chuyển đổi chuỗi thành chữ hoa
            $hoten_viet_thuong = "lương xuân hiếu";
            $hoten_viet_hoa = strtoupper($hoten_viet_thuong);
            echo "<br>Họ tên viết hoa: " . strtoupper($hoten_viet_thuong);
            //hàm strtolower() để chuyển đổi chuỗi thành chữ thường
            echo "<br>Họ tên viết thường: " . strtolower($hoten_viet_hoa);
            //str_replace() để thay thế một chuỗi con bằng một chuỗi khác trong chuỗi
            $str = "Khoa CNTT, trường Đại học Xây dựng Hà Nội";
            $str = str_replace("CNTT", "Công Nghệ Thông Tin", $str);
            echo "<br>Chuỗi sau khi thay thế: " . $str;
            //hàm trim() để loại bỏ khoảng trắng ở đầu và cuối chuỗi
            $input_password = "  12345678    ";
            $input_password = trim($input_password);
            echo "<br>Mật khẩu sau khi loại bỏ khoảng trắng: " . $input_password;
            //hàm strrev() để đảo ngược chuỗi
            $str = "Hello, World!";
            echo "<br>Chuỗi $str sau khi đảo ngược: " . strrev($str);
            //hàm explode() để tách một chuỗi thành một mảng dựa trên một ký tự phân tách
            $fruit = "apple banana orange mango";
            $fruit_array = explode(" ", $fruit);
            var_dump($fruit_array);
            //hàm substr() để lấy một phần của chuỗi. tham số đầu tiên là chuỗi, tham số thứ hai là vị trí bắt đầu, tham số thứ ba là độ dài của phần cần lấy
            $str = "Hello, World!";
            echo "<br>Chuỗi $str sau khi lấy phần từ vị trí 7 đến 5 ký tự: " . substr($str, 7, 5);
            ?>
    </body>
</html>