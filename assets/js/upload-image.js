$(document).ready( function () {

    var pub = {

        "text_lenght"   : "",
        "text"          : "",
        "image"         : ""
    };

    var errors = {

        "many_characters"   : "",
        "type_error"        : "",
        "no_characters"     : "",
        "no_image"          : "",
        "image_width"       : ""

    };

    $("#pub_text").change( function () {

        pub.text_lenght = $(this).val().length;
        pub.text        = $(this).val();

        pub.text_lenght < 45 ? errors.many_characters = "" : errors.many_characters = "Превышен допустимый порог символов!";
        pub.text !== "" ? errors.no_characters = "" : errors.no_characters = "Описание отсутствует!"

    } );

    $("#pub_image_input").change( function () {

        if (this.files && this.files[0])
        {
            if(this.files[0]["type"] === "image/png" || this.files[0]["type"] === "image/jpeg")
            {
                var reader = new FileReader();

                reader.onload = function (e)
                {
					var image = new Image();
					image.src = reader.result;

                    image.onload = function() {

                        console.log(image.width);

                        if(image.width < 780) {
							
							alert("Ширина изображения меньше 780 пикселей!");						
							
                        } else {
							
							$('#pub_image_input').css("display","none"); // Убираем кнопку загрузки изображения
							$('#publicate_image').removeClass("hidden"); // Показываем изображение
							$('#publicate_image').attr('src', e.target.result); // Прописываем путь изображения
							pub.image = e.target.result;
						}

                    };

                };

                reader.readAsDataURL(this.files[0]);

            } else {

                errors.image_type = "Неверный формат загруженного изображения!";
            }
        }
    } );

    $("#pub_submit").click( function () {

        $("#pub_text").val() !== "" ? errors.no_characters = ""  : errors.no_characters = "Описание отсутствует!";
        $("#publicate_image")[0]["currentSrc"] !== "" ? errors.no_image = ""  : errors.no_image = "Изображение отсутствует!";

        if(errors.image_width === "" && errors.many_characters === "" && errors.no_characters === "" && errors.no_image === "" && errors.type_error === "") {

            $.ajax({
                url: '/post/publish',
                type: 'POST',
                dataType: 'text',
                data: { text: pub.text, image:  pub.image  },
                success: function(data) {

                    window.location.reload();
                },
                error : function (data) {

                    alert("Ошибка добавления, повторите позднее...");
                }
            });


        } else if(errors.many_characters !== "") {

           alert(errors.many_characters);

        } else if(errors.no_image !== "") {

           alert(errors.no_image);

        } else if(errors.no_characters !== "") {

            alert(errors.no_characters);

        } else if(errors.type_error !== "") {

            alert(errors.type_error);	

        }

    } );

} );