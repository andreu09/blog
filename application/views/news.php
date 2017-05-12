{% include 'twig/header.twig' %}

<div class="ui two column centered grid stackable">
    <div class="eight wide column">
        {% for i in 0..news.news.count - 1 %}
        <div class="ui card fluid">
            <div class="content">
                <div class="header">{{ news.news[i].title }}</div>
                <div class="meta">
                    <span class="right floated time">{{ news.news[i].time  }}</span>
                    <span class="category">{{ news.news[i].type }}</span>
                </div>
                <div class="description">
                    <p>
                       {{ news.news[0].text }}
                    </p>
                </div>
            </div>
            <div class="extra content">
                <div class="right floated author">
                    <img class="ui avatar image" src="{{ news.user[i].photo_50 }}"> {{ news.user[i].first_name }} {{ news.user[i].last_name }}
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
</div>

{% include 'twig/footer.twig' %}