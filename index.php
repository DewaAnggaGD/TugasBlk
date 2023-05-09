<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
    body {
    background-color:#394867;
    }

    .container {
    display :flex;
    width : 600px;
    height : 600px;
    margin : 200px auto;
    border-radius:20px;
    background-color:#212A3E;
    }

    form {
    width: 500px;
    margin:auto;
    color : white;
    }

    form div {
    margin-top: 20px;
    }

    input,
    select,
    textarea {
    width: 100%;
    margin-top: 5px;
    padding: 10px;
    background-color: white;
    border: 1px solid #dbdbdb;
    border-radius: 5px;
    box-sizing : border-box;
    }

    label {
    font-weight: bold;
    }

    textarea {
    height: 80px;
    resize: none;
    }

    button {
    margin-left: 410px;
    background-color:#394867;
    border: none;
    color: white;
    padding: 6px 25px;
    cursor: pointer;
    border-radius: 5px;
    }

    button:hover {
    background-color: rgb(105, 105, 226);;
    }
    </style>

</head>
<body>
    <div class="container">
        <form action="" >
            <div>
                <label for="Nama">Nama</label>
                <input type="text" id="Nama">
            </div>
            <div>
                <label for="Email">Email</label>
                <input type="text" id="Email">
            </div>
            <div>
                <label for="Alamat">Alamat</label>
                <textarea name="" id="Alamat" cols="" rows="10"></textarea>
            </div>
            <div>
             <label for="Program">Program Pelatihan</label>
             <select id="Program">
                <option></option>
                <option>Junior Web Developer</option>
                <option>Digital Marketing</option>
                <option>Content Creator</option>
                <option>Desainer Multimedia</option>
             </select>
            </div>
            <div>
                <label for="Daftar">Tahun Daftar</label>
                <input type="month" id="Daftar">
            </div>
            <div>
                <button type="button">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>