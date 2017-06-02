{% include 'twig/header.twig' %}

<div class="ui two column centered grid stackable">
    <div class="five wide column">
        <div class="ui attached segment">
            <h4 class="ui centered dividing header">Подтверждение входа</h4>
            <a  onclick="$(this).addClass('loading')" class="ui vk button fluid" style="color:white" href="https://oauth.vk.com/authorize?client_id=5240196&display=page&redirect_uri=http://shmakov-andrey.ru/user/vk_auth&response_type=code&v=5.64">
                <i class="vk icon"></i>
                Авторизация с помощью VK
            </a>
        </div>
    </div>
</div>

{% include 'twig/footer.twig' %}