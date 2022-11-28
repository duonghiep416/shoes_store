<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/add_product.css">
</head>
<body>
    <h1>Add product</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Size 1</th>
                <th>Size 2</th>
                <th>Size 3</th>
                <th>Size 4</th>
            </tr>
            <tr>
                <td>
                    <input type="text" name="product_id" id="">
                </td>
                <td>
                    <input type="text" name="product_name" id="">
                </td>
                <td>
                    <input type="text" name="product_price" id="">
                </td>
                <td>
                    <input type="file" name="product_img" id="">
                </td>
                <td>
                    <input type="text" name="size_1" id="">
                </td>
                <td>
                    <input type="text" name="size_2" id="">
                </td>
                <td>
                    <input type="text" name="size_3" id="">
                </td>
                <td>
                    <input type="text" name="size_4" id="">
                </td>
            </tr>
        </table>
        <input class="submit" type="submit" value="Submit" name="submit">
    </form>
    <?php
        $connect = mysqli_connect('localhost','root','','add_product');
        if(!$connect) {
            echo "Connection failed";
        } 

        if(isset($_POST['submit'])) {
            $product_id = $_POST['product_id'];
            $product_name = $_POST['product_name'];
            $product_price = $_POST['product_price'];
            // chú ý nhận dữ liệu kiểu file từ Form
            $product_img = $_FILES['product_img']['name'];
            //Đưa ảnh từ máy tính lên tmp
            $product_image_tmp = $_FILES['product_img']['tmp_name'];
            //Di chuyển ảnh từ tmp sang thư mục cần lưu
            move_uploaded_file($product_image_tmp, "Image/$product_img");
            $size_1 = $_POST['size_1'];
            $size_2 = $_POST['size_2'];
            $size_3 = $_POST['size_3'];
            $size_4 = $_POST['size_4'];
            //Viết sql
            $sql ="INSERT INTO products VALUES('$product_id','$product_name','$product_price','$product_img','$size_1','$size_2','$size_3','$size_4')";
            $result = mysqli_query($connect, $sql);
            if($result){
                echo "<script>alert('Thêm sản phẩm thành công') </script>";
            }
            else{
                echo "<script>alert('Thêm thất bại') </script>";
            }
        }
    ?>
</body>
</html>