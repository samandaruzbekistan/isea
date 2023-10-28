@extends('user.header_footer')


@section('main')
    <div class="banner">

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="banner-preview">
                        <div class="banner-img">
                            <img src="img/banner-card-img.png" width="500">
                        </div>
                        <div class="banner-topic">
                            <h1 class="banner-header-text">Renewables Jobs Nearly Doubled in Past Decade, Soared to 13.7
                                Million in 2022
                            </h1>
                            <p class="banner_link"><a href="">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="banner-preview">
                        <div class="banner-img">
                            <img src="img/banner-card-img.png" width="500">
                        </div>
                        <div class="banner-topic">
                            <h1 class="banner-header-text">Renewables Jobs Nearly Doubled in Past Decade, Soared to 13.7
                                Million in 2022
                            </h1>
                            <p class="banner_link"><a href="">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="banner-preview">
                        <div class="banner-img">
                            <img src="img/banner-card-img.png" width="500">
                        </div>
                        <div class="banner-topic">
                            <h1 class="banner-header-text">Renewables Jobs Nearly Doubled in Past Decade, Soared to 13.7
                                Million in 2022
                            </h1>
                            <p class="banner_link"><a href="">Read more</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="our-mission">
        <i class="fa-solid fa-chevron-down" style="color: #5c7cb2; cursor: pointer;" data-bs-toggle="collapse"
           href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"></i>
        <div class="collapse-active" id="collapseExample">
            <div>
                <h3>Our Mission</h3>
                <h1>Supporting <b>countries worldwide</b> in their transition to a sustainable energy future</h1>
            </div>
        </div>

        <div class="members-statistics">
            <h1>143</h1>
            <h2>PARTNERS!</h2>
        </div>
    </div>
    <div class="card-news">
        <div class="news-header">
            <p class="news-titles"><strong>Latest news</strong></p>
            <ul>
                <li>
                    <a href="#0" >Our partners</a>
                </li>
                <li>
                    <a href="#0">More news</a>
                </li>
            </ul>
        </div>
        <!-- <hr style="border: 3px solid #182d4b;"> -->
        <div class="latest-news">
            <div class="news-preview">
                <div class="news-img">
                    <img src="img/banner-card-img.png" alt="latest news image" width="750">
                </div>
                <h1 style="cursor: pointer">Renewables Jobs Nearly Doubled in Past Decade, Soared to 13.7 Million in 2022</h1>
                <div class="date-release-and-read-more">
                    <span>28 September 2023</span>
                    <span>|</span>
                    <span style="cursor: pointer"><b>Read more</b></span>
                </div>
                <hr>

            </div>
            <div class="other-news">
                <div class="other-news1-preview">
                    <img src="img/news1.png" width="400">
                    <h1 style=" font-size:30px; font-weight: bold; cursor: pointer">A Decade of Progress: Renewables Jobs on the Rise</h1>
                    <div class="date-release-and-read-more">
                        <span>28 September 2023</span>
                        <span>|</span>
                        <span style="cursor: pointer"><b>Read more</b></span>
                    </div>
                </div>
                <br><br>
                <div class="other-news1-preview">
                    <img src="img/news2.png" width="400">
                    <h1 style=" font-size:30px; font-weight: bold; cursor: pointer">IRENA Office in Germany Officially Inaugurated</h1>
                    <div class="date-release-and-read-more">
                        <span>28 September 2023</span>
                        <span>|</span>
                        <span style="cursor: pointer"><b>Read more</b></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="subscribe-block">
        <div class="sub-img">
            <span class="m-NewsletterSocialMedia__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70" height="72" viewbox="0 0 70 72">
                                <image id="L1" width="36" height="52" transform="translate(17 20)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAA0CAYAAADi1poDAAAABHNCSVQICAgIfAhkiAAABrpJREFUWEe9mQlQlVUUx3/PJVc0TcnMvVTUUrRJJfcFF3LcJytbNI3MxlyybMalKdMpmnFJW9TSGiWVsWxSQTTJMgU1ckzNpFKpVDQ0EzRxgeb/uBc+Hjx4woM7w7z5vu9+9/6/c8/5n/85uOqu34orPg3niJnSmw6Naztv1QEmAa2AZGA18JMmdHwzhuTzl/O8X5yLrJAA92suT0ANa1dj/6yBuFw5y3YDvgAEyo7/gIYH/rhwfsDCuOLsn+8dr4Am9mrBa4Pb2heqAj8CLYG9wOdAH6A/cDIwKrapX9A4FslnodipfQhuVMtO6QzEA6lAG+AcUNEcV9C8zYfvXHzllO75beQBdHetqiTODnMelyyxFTgEtAOyzM6613/e5sNtF185pWd+G3kANRCgOWHOxfsBscARIBi4YR5uA0JnbTxYefn1lAy/ofF06nIuF8kRw7itQjm7R6GAZmw4UGVV5rmrpQZIC++a0Y8W9Wr4CqjSqsxz10oV0JrxXQhtc5dPgKauTxwR6UoVJfht5IuyuUPbEd6juU+A1sSfCJ/2Z9IKv6EpiBjHdrmHt0a29wlQanpGeOvonaULqHdQPdY+19UnQMC4wKjYlWZyBcNRuhQ96E/+ZanCJ0PmO7Imdaqzd+YAXwG9BOwzaUXU8GtRu2bcuMmxlDT6L9hBZlYuVq+po0I5FycjhlGxvDv0Cw17QFm1mgGRCWwEXgDOFgVszMo9xBw6nTPNKyDNSJg5gKZ1qvsCSHOUOs4A9wHlga+BVcBAoKZh+U+BJCfIxOQLhC3KTcyFApIPyZd8sNBOYJQBJVWwyYDwNNBFYKxh+sHmYdyQJTujEo6nyrIUCmj+8GDGdbu3MEDbgb7A88CHjt2/AwRM7L3UHN0IQEk639h25MyWJz/aPQy4XiigyPCu9G1VqIUsoPHAx46dvge6AG8Dr5r78jE5fGNAeU9RKT01PiuLGt0jts1NSrk0xyug1vVrEjc91Gb83sCOApJrKDAUmAukOAAtBx41/rPbcV9aqiMwH5hp7j8LLF+372TS5LU/tMwDSBNc8WnSOYErnu7M4OAGdq0eQGQBgLwF0W2GAnLDJ3vmZ8AQI+4SzMvaJOnajcxKQbO+qp7eoYqsli1hDaDVC0Y9MHJ0Z7cItAJWv9rkMCD6tvKjqKj2fK5jCwROeDwQuE5jVu7ZFF09ze3sTkDJZxeObORlp5IC8vYBEcDLkQknMqatT6ybFRKQ5ga0u+dD5ZsHBiha5KTHgHDgJvCeUYqlBUhqcMvpi1dOt389ullWSECG63z6VWpXq6Qv+BboDjxjiE33hhth76kYb/XIvM3XMYowA3pGbK989My/111Z2flEvvIb0AxQZH1jVhDXKMRLC5C22QV0PZZyaULcLynLLCCRjo5KUlHVxc8GkLdc5i8LaR0RqPKffidZQMpDqkQvAVJnf5choCnAQvkSMMgCskej81SVaCuJsrCQiHStkTGdLCAlPlG6qF+5yI6yADTIJGWdULAFNBt4A1gHPFbGgB4GNhuXyQG0zHDPO8ArZQxI8kWG2K98Zy0UbRLii8ASByBbSivqVEoXN3UUFpVq87wLxABhAiQOOmA2FBFKhnr6kDgqyLC3P0Neay0CJgMfABMFSNxzFKivRGe83W6qNogstgd4399IzHrSsb1MQ2ypADUx9C0pqQ6ZZ0YuJRzuZe8wlYo+PERyXoAeNFaRUFdjKm9/rzThgOot+c5fxiUuC5ASqhKreoctTHFXujByV18ATHXSjQApbajplG4AyVJlMVQyJZpgEjF/ok0FSH1EhbVE+FOmw1oWgOSvYmfru8ctIP2KEKebaJNPlbzPW/QnqYRS5KoAkENn6yCjhxTyB41AlyAfXfR6JZ4hvlPl4qxEcgBpdRV0G8w2aoyrTPFr/9DxCbcbqqlrOEgVsHtYC9nrCcaMYm/V6E/40jgohq1U16lxmo9qPAFZS0mKWAZ/xJRBxdjX6yvWZ6NMbyBnYkGA9FApRBlYLK6m+eNGW/sDlMJdmV113jijw4oEpAkCIyWnRoF4Sn1qd6eihEP0Iv0uYNLvedo03ixk99T/NeRLSr6Stv6QH9LsWk8dErVYnL2BfE7t+fHW+fxZBgmEAKn/KHB5+gBFWchqalWu95fwqOzrKtd/LykgNTPVDJAPqUT6xwFOZa+3noDnN4iN5ZvqcOjIlMxvyULqE0reaqjWFz+dMlEoDtH1l4CEuq9D76ijqiNTpaz1fIoyTdILKuBU2dr/yCgJ6ihlKS2uDppY/laGPk45TJLZ3Rey43+SJpb9tZe3gQAAAABJRU5ErkJggg=="/>
                                <image id="Layer_770" data-name="Layer 770" width="70" height="45" xlink:href="data:image/png;base64,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"/>
                            </svg>
            </span>
            <div class="sub-text">
                <h3>Stay up to date</h3>
                <p><a href="#">Subscribe to the newslatter</a></p>
            </div>
            <div class="com-text">
                <p>
                    Stories you might have missed, key data and upcoming events information straight into your mailbox
                </p>
            </div>
        </div>
    </div>
    <br><br>
    <div class="cardss">
        <div class="recent-publications-center">
            <div class="recent-publications">
                <div class="resent-publications-header">
                    <h1>Resent Publications</h1>
                    <h2>Browse all publications</h2>
                </div>
                <hr>
            </div>

        </div>



        <div class="publications-card">
            <div>
                <img src="img/publication_pic1.png">
            </div>
            <div class="publications-card-preview">
                <h2 style="cursor: pointer">
                    Renewables Readiness Assessment:
                    Bosnia and Herzegovina
                </h2>
                <p>
                    This Renewables Readiness Assessment aims to support
                    Bosnia and Herzegovina on its path towards integrating a (higher share of renewable energy, and
                    diversifying its...
                </p>
                <h4 style="cursor: pointer">
                    View
                </h4><br>
                <span>
                        August 2023
                    </span><br>
                <span>
                        Energy Transition | English
                    </span>

            </div>
        </div>
    </div>


    </div>
    </div>
    </div>


    <div class="events-block">
        <div class="key-data">
            <div class="key-data-header">
                <h1>Events</h1>
            </div>
            <hr>
            <div class="events">
                <div>
                    <iframe width="420" height="315" src="https://youtube.com/embed/5j794cM9jOM?si=qY-sTJUZ7VllthEZ">
                    </iframe>
                </div>
                <div>
                    <iframe width="420" height="315" src="https://youtube.com/embed/5j794cM9jOM?si=qY-sTJUZ7VllthEZ">
                    </iframe>
                </div>
                <div>
                    <iframe width="420" height="315" src="https://youtube.com/embed/5j794cM9jOM?si=qY-sTJUZ7VllthEZ">
                    </iframe>
                </div>
                <!--            javascript here-->
            </div>

        </div>
    </div>
@endsection
