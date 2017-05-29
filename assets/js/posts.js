$(document).ready(function ()
{
    // Все данные о посте
    var post = {};

    function readURL(input)
    {
        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function (e) {

                $('#post_image-input').css("display","none");
                $('#smile-div').css("display","block");
                $('#post-image').attr('src', e.target.result).css("display","block");

                post.image = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    // Выбор настроения
    $('#smile-div').dropdown({

        onChange: function(value) {

            post.smile = value;
        }
    });

    // Отправка
    $("#submit-post").click(function () {

        if(post.image === undefined) {

            alert("Не выбрано изображение!")

        } else if (post.smile === undefined) {

            alert("Настроение не выбрано!")

        } else {

            $(this).addClass('loading');

            $.ajax({

                url: "/post/add",
                data: { smile: post.smile, image: post.image },
                type: "POST",
                dataType: "text",
                success: function (post) {

                    if (post) {

                        window.location.href = "/feed";

                    } else {

                        alert("Произошла ошибка, попробуйте позднее...");
                        $("#submit-post").removeClass('loading');
                    }
                },
                error: function () {

                    alert("Произошла ошибка, попробуйте позднее...");
                    $("#submit-post").removeClass('loading');
                }
            })
        }
    });

    // Вывод изображения
    $('#post_image-input').change(function () {

        readURL(this);
    });
})

// Удаление поста
function del(post_id) {

    $.ajax({

        url: "/post/delete",
        data: { post_id : post_id },
        dataType: "json",
        type: "POST",
        success: function (data) {

            if(data.status === true) {

                location.reload();

            } else {

                alert("Произошла ошибка...");
            }
        },
        error: function () {

            alert("Произошла ошибка... Повторите позднее...");
        }
    })
}

// Мне нравиться пост
function like(post_id) {

    $.ajax({
        url: "/post/like",
        data: { post_id : post_id },
        dataType: "json",
        type: "POST",
        success: function (post) {

            $("#" + post_id).html(post.likes);

            // В зависимости от действия добавляем или убираем закрашивание иконки лайка
            post.action === "delete" ?  $("#icon_" + post_id).removeClass("red") :  $("#icon_" + post_id).addClass("red");
        },
        beforeSend: function () {

            // Пока грузиться анимируем
            $("#icon_" + post_id).transition({
                animation  : 'pulse',
                duration   : '1s'
            });
        }
    })
}
