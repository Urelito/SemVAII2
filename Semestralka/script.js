function addUser()
{
    $username = document.getElementById("user-name").value;
    $password = document.getElementById("password").value;
    $confirmPassword = document.getElementById("confirm-password").value;

    if ($password.length > 6 && $username.length > 2)
    {
        if ($password == $confirmPassword) {
            console.log($password);
            console.log($username);
            $.ajax({
                type: "POST",
                url: "./php/add_new_user.php",
                data: {
                    username: $username,
                    password: $password
                }
            })
                .done((data) => {
                    if (data == 0) {
                        alert('Meno už existuje');
                    }
                    else {
                        alert('Účet bol vytvorený');
                    }

                })

                .fail(function () {
                    console.log("nic sa nestalo :'(");
                });
        }
        else
        {
            alert("Heslá sa nezhodujú");
        }
    }
    else
    {
        alert('Heslo musí mať aspoň 7 znakov a meno viac ako 2!');
    }

};

function addPost()
{
    $postName = document.getElementById("post-name").value;
    $postText = document.getElementById("post-text").value;
            console.log($postName);
            console.log($postText);
            $.ajax({
                type: "POST",
                url: "./php/add_new_post.php",
                data: {
                    postName: $postName,
                    postText: $postText
                }
            })
                .done((data) => {
                    if (data == 1) {
                        alert('uspech');
                    }
                    else
                    {
                        console.log(data);
                    }

                })

                .fail(function () {
                    console.log("nic sa nestalo :'(");
                });

};

function delPost()
{
    $delPostName = document.getElementById("post-name").value;
    $.ajax({
        type: "POST",
        url: "./php/del_post.php",
        data: {
            postName: $delPostName
        }
    })
        .done((data) => {
            if (data == 1) {
                alert('vymazane');
            }
            else {
                console.log(data);
            }

        })

        .fail(function () {
            console.log("nic sa nestalo :'(");
        });

};