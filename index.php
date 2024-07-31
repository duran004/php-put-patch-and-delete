<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PUT PATCH DELETE EXAMPLE</title>
</head>

<body>
    <h1>PHP PUT PATCH DELETE EXAMPLE</h1>
    <br /><br /><a href="send_put.php">Send PUT Request</a>
    <br /><br /><a href="send_patch.php">Send PATCH Request</a>
    <br /><br /><a href="send_delete.php">Send DELETE Request</a>
    <hr /><br />
    <h2>WITH JAVASCRIPT</h2>
    <br /><br /><button onclick="sendPutRequest()">Send PUT Request</button>
    <br /><br /><button onclick="sendPatchRequest()">Send PATCH Request</button>
    <br /><br /><button onclick="sendDeleteRequest()">Send DELETE Request</button>

    <script>
    function sendPutRequest() {
        fetch('http://phpputpatchdelete.test/get_request.php', {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    name: 'PUT GONDERDIM',
                    value: 'DEGER'
                }),
            })
            .then(response => response.json())
            .then(data => console.log(data))
            .catch(error => console.error(error));
    }

    function sendPatchRequest() {
        fetch('http://phpputpatchdelete.test/get_request.php', {
                method: 'PATCH',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    name: 'PATCH GONDERDIM'
                }),
            })
            .then(response => response.json())
            .then(data => console.log(data))
            .catch(error => console.error(error));
    }

    function sendDeleteRequest() {
        fetch('http://phpputpatchdelete.test/get_request.php', {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                },
            })
            .then(response => response.json())
            .then(data => console.log(data))
            .catch(error => console.error(error));
    }
    </script>

</body>

</html>