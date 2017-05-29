{% include 'twig/header.twig' %}

<div class="ui two column centered grid stackable">
    <div class="eight wide column">

        {% for i in 0..news.current_count - 1 %}

        <div class="ui card fluid">
            <div class="content">
                <div class="header">{{ news.item[i].title }}</div>
                <div class="meta">
                    <span class="right floated time">{{ news.item[i].time  }}</span>
                    <span class="category">{{ news.item[i].type }}</span>
                </div>
                <div class="description">
                    <p>
                       {{ news.item[i].text|nl2br }}
                    </p>
                </div>
            </div>
            <div class="extra content">
                <div class="right floated author">
                    <img class="ui avatar image" src="{{  news.user[i].photo_50 }}"> {{ news.user[i].first_name }} {{  news.user[i].last_name }}
                </div>
            </div>
        </div>

        {% endfor %}
        
    </div>
</div>


{% include 'twig/footer.twig' %}