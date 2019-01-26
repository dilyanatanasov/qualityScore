<?php
/**
 * Created by PhpStorm.
 * User: dilya
 * Date: 20/01/2019
 * Time: 10:15
 */
 require_once "../../Controller/ProductManager.php";
?>

<html>
    <head>
        <title>Качествена оценка</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="wrapper">
            <div id="container">
                <form method="POST" action="../../Controller/ProductManager.php">
                    <h2>Кaчествена оценка на продукти и услуги</h2>
                    <table>
                        <tr>
                            <td></td>
                            <td>Параметър 1</td>
                            <td>Параметър 2</td>
                            <td>Параметър 3</td>
                        </tr>
                        <tr>
                            <td>Тежест</td>
                            <td><input placeholder="Тежест 1" type="number" name="weight[]"></td>
                            <td><input placeholder="Тежест 2" type="number" name="weight[]"></td>
                            <td><input placeholder="Тежест 3" type="number" name="weight[]"></td>
                        </tr>
                        <tr>
                            <td><input placeholder="Продукт 1" type="text" name="product1[]"></td>
                            <td><input placeholder="Параметър 1" type="text" name="product1[]"></td>
                            <td><input placeholder="Параметър 2" type="text" name="product1[]"></td>
                            <td><input placeholder="Параметър 3" type="text" name="product1[]"></td>
                        </tr>
                        <tr>
                            <td><input placeholder="Продукт 2" type="text" name="product2[]"></td>
                            <td><input placeholder="Параметър 1" type="text" name="product2[]"></td>
                            <td><input placeholder="Параметър 2" type="text" name="product2[]"></td>
                            <td><input placeholder="Параметър 3" type="text" name="product2[]"></td>
                        </tr>
                        <tr>
                            <td class="submit" colspan="4">
                                <button type="submit">Изпрати</button>
                            </td>
                        </tr>
                    </table>

                </form>
            </div>
        </div>
    </body>
</html>
