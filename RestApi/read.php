<?php

include("dbcon.php");

header("Content-Type: application/json");

$method=$_SERVER['REQUEST_METHOD']??'GET';
$input=json_decode(file_get_contents('php://input'),true);

switch($method){
    case 'GET':
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $result=$conn->query("SELECT*FROM products where id=$id");
            $data=$result->fetch_assoc();
            echo json_encode($data);
        }else{
            $result=$conn->query("select*FROM products");
            $products=[];
            while($row=$result->fetch_assoc()){
                $products[]=$row;
            }
            echo json_encode($products);
        }
        break;

        case 'POST':
            $name=$input['name'];
            $email=$input['email'];
            $quantity=$input['quantity'];
            $conn->query("INSERT INTO products(name,email,quantity)VALUES('$name','$email',$quantity)");
            echo json_encode(["message"=>"products added successfully"]);
            break;
            case 'PUT':
                $id = $_GET['id'];
                $name = $input['name'];
                $email = $input['email'];
                $quantity = $input['quantity'];
                $conn->query("UPDATE products SET name='$name',email='$email', quantity=$quantity WHERE id=$id");
                echo json_encode(["message" => "User updated successfully"]);
                break;
        
            case 'DELETE':
                $id = $_GET['id'];
                $conn->query("DELETE FROM products WHERE id=$id");
                echo json_encode(["message" => "User deleted successfully"]);
                break;
        
            default:
                echo json_encode(["message" => "Invalid request method"]);
                break;
        }
        
        $conn->close();



?>