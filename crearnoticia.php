<?php
switch ($_POST['api']) {
    case "crearNoticia":
        peticion1($_POST['titulo'], $_POST['texto'], $_POST['texto2'], $_POST['texto3'], $_POST['imagen']);
        break;
    case "pedirNoticia":
        peticion2($_POST['id']);
        break;
    case "recuentoObjetos":
        peticion3();
        break;
}


function peticion1($titulo, $texto, $texto2, $texto3, $imagen)
{
    //INSERTAR DATOS
    $conn = new mysqli("localhost", "root", "", "pbd");
    $sql = "INSERT INTO noticias (titulo,foto,texto,texto2,texto3) VALUES ('" . $titulo . "','" . $imagen . "','" . $texto . "','" . $texto2 . "','" . $texto3 . "') ;";
    echo $sql;
    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        echo $last_id;
    } else {
        echo "Error: insert table \"usuarios\" " . $conn->error;
    }
    $conn->close();
}

function peticion2($id)
{

    $conn = new mysqli("localhost", "root", "", "pbd");
    $sql = "SELECT * FROM noticias WHERE id='" . $id . "'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $array = [];
        while ($row = $result->fetch_assoc()) {
            echo json_encode($row);
            break;
        }
    } else {
        echo "0 results";
    }

    $conn->close();
}

function peticion3()
{
    $conn = new mysqli("localhost", "root", "", "pbd");
    $sql = "SELECT id FROM noticias WHERE";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $array = [];
        while ($row = $result->fetch_assoc()) {
            echo json_encode($row);
            break;
        }
    } else {
        echo "0 results";
    }

    $conn->close();
}
