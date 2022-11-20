<!DOCTYPE html>
<html lang="en">

<head>
    <mata charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <style>
            body{
                font-family: Arial;
                text-align: center;
            }

            tr,td {
                padding: 1rem .5rem;
                border: 1px solid #ccc;
            }

            thead{
                background: #333;
                color: #fff;
            }
        </style>
</head>

<body>

    <table width="100%">
        <thead>
            <tr>
                <td>ID</td>
                <td>Province</td>
                <td>Slogan</td>
            </tr>
        </thead>
        <tbody id="info">

        </tbody>
    </table>

    <!-- <button type="button" onclick="loadDoc()">Change content</button> -->
    

    <script>
        // function loadDoc() {
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    let data = JSON.parse(this.responseText);
                    console.log(data);

                    for(let i =0; i < data.length; i++){
                        document.getElementById('info').innerHTML +=`
                        <tr>
                            <td>${data[i].id}</td>
                            <td>${data[i].province}</td>
                            <td>${data[i].slogan}</td>
                        </tr>
                    `}
                }
            }
            
            xhttp.open("GET", 'api.php', true);
            xhttp.send();
        // }
    </script>
</body>

</html>