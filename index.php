<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/jquery-3.4.1.js" type="text/javascript"></script>
        <script src="js/JQGrid.js" type="text/javascript"></script>
        
        <script src="https://nosir.github.io/cleave.js/dist/cleave.min.js" type="text/javascript"></script>
        <style>
            input:-moz-read-only { /* For Firefox */
                background-color: #ccc;
            }
            input:read-only {
                background-color: #ccc;
            }
        </style>
    </head>
    <body>

        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>id</th>
                    <th>produk</th>
                    <th>qty</th>
                    <th>harga</th>
                    <th>total</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody id="grid-editing">
                <tr>
                    <td>#</td>
                    <td><input type="text" name="id"></td>
                    <td><input type="text"   name="produk"></td>
                    <td><input type="text"  class="thousand" name="qty"></td>
                    <td><input type="text"  class="thousand" name="harga"></td>
                    <td><span class="total"></span></td>
                    <td><button class="remove">delete</button></td>
                </tr>
            </tbody>
        </table>
        <button id="push">Add New</button>
        <textarea name="output"></textarea>

        <?php require_once 'index_script.php'; ?>
    </body>
</html>
