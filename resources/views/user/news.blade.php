@extends('user.header_footer')

@section('main')
    <hr>
    <div class="page-path-news">
        <a href="index.php" style="color: #182d4b"><span style="font-weight: bold; cursor: pointer">Home</span></a>
        <i class="fa-solid fa-chevron-up fa-rotate-90" style="color: #777676;"></i>
        <span style="font-weight: bold; cursor: pointer">News</span>
    </div>
    <div class="newsroom-header">
        <h1>Newsroom</h1>
    </div>
    <div class="news-and-newslatter">
        <div>
            <div class="search-box">
                <i class="fa-solid fa-magnifying-glass"></i>
                <div>
                    <div class="text__field akf-js-textfield akf-textfield--floating-label">
                        <div class="textfield__field search-field">
                            <input  class="textfield__input"  id="search-input"    type="text" size="75">
                        </div>
                    </div>
                </div>
            </div>

            <div class="news-part1" >
                <div class="main-news">
                    <div class="news-img">
                        <img src="img/news3.png" alt="latest news image" width="600px">
                    </div>
                    <h1 style="cursor: pointer">Infrastructure Reform is Key to Accelerating Africa’s Energy Transition</h1>
                    <div class="date-release-and-read-more">
                        <span>28 September 2023</span>
                        <span>|</span>
                        <span style="cursor: pointer"><a href="news_reading_page.php"><b>Read more</b></a></span>

                    </div>
                    <p>
                        Francesco La Camera, IRENA Director-General & Nardos Bekele-Thomas,
                        AUDA-NEPAD CEO, discuss how ensuring adequate investment and infrastructure development to support renewables is crucial to meet Africa's power needs.
                    </p>
                </div>
                <div class="main-news2" >
                    <div class="other-news1-preview">
                        <img src="img/news1.png" width="300">
                        <h3 style="cursor: pointer">A Decade of Progress: Renewables Jobs on the Rise</h3>
                        <div class="date-release-and-read-more">
                            <span>28 September 2023</span>
                            <span>|</span>
                            <span style="cursor: pointer"><b>Read more</b></span>
                        </div>
                    </div>
                    <div class="other-news1-preview">
                        <img src="img/news2.png" width="300">
                        <h3 style="cursor: pointer">IRENA Office in Germany Officially Inaugurated</h3>
                        <div class="date-release-and-read-more">
                            <span>28 September 2023</span>
                            <span>|</span>
                            <span style="cursor: pointer"><b>Read more</b></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news-part2" id="nothing-alert">
                <div class="news-part2-1">
                    <div class="other-news1-preview">
                        <img src="img/news1.png" width="300">
                        <h3 style="cursor: pointer">A Decade of Progress: Renewables Jobs on the Rise</h3>
                        <div class="date-release-and-read-more">
                            <span>28 September 2023</span>
                            <span>|</span>
                            <span style="cursor: pointer"><b>Read more</b></span>
                        </div>
                    </div>
                    <div class="other-news1-preview">
                        <img src="img/news2.png" width="300">
                        <h3 style="cursor: pointer">IRENA Office in Germany Officially Inaugurated</h3>
                        <div class="date-release-and-read-more">
                            <span>28 September 2023</span>
                            <span>|</span>
                            <span style="cursor: pointer"><b>Read more</b></span>
                        </div>
                    </div>
                    <div class="other-news1-preview">
                        <img src="img/news2.png" width="300">
                        <h3 style="cursor: pointer">IRENA Office in Germany Officially Inaugurated</h3>
                        <div class="date-release-and-read-more">
                            <span>28 September 2023</span>
                            <span>|</span>
                            <span style="cursor: pointer"><b>Read more</b></span>
                        </div>
                    </div>
                </div>
                <div class="news-part2-2">
                    <div class="other-news1-preview">
                        <img src="img/news1.png" width="300">
                        <h3 style="cursor: pointer">A Decade of Progress: Renewables Jobs on the Rise</h3>
                        <div class="date-release-and-read-more">
                            <span>28 September 2023</span>
                            <span>|</span>
                            <span style="cursor: pointer"><b>Read more</b></span>
                        </div>
                    </div>
                    <div class="other-news1-preview">
                        <img src="img/news2.png" width="300">
                        <h3 style="cursor: pointer">IRENA Office in Germany Officially Inaugurated</h3>
                        <div class="date-release-and-read-more">
                            <span>28 September 2023</span>
                            <span>|</span>
                            <span style="cursor: pointer"><b>Read more</b></span>
                        </div>
                    </div>
                    <div class="other-news1-preview">
                        <img src="img/news2.png" width="300">
                        <h3 style="cursor: pointer">IRENA Office in Germany Officially Inaugurated</h3>
                        <div class="date-release-and-read-more">
                            <span>28 September 2023</span>
                            <span>|</span>
                            <span style="cursor: pointer"><b>Read more</b></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>

        </div>
        <div class="newsletter-block">
            <div class="newsletter">
                <div  class="newsletter-topic">
                    <h5 style="color: #182d4b">
                        Newsletter
                    </h5>
                    <i class="fa-solid fa-envelope" style="color: #182d4b"></i>
                </div>
                <p>
                    Sign up to the newsletter and stay up to date on events, publications, key data and relevant information.
                </p>
                <span>
                Sign Up
            </span>
            </div>
            <div class="email-address">
                <div>
                    <h3>OAV uchun:</h3>
                    <a href="mailto:risakov0809@gmail.com"> <h4>risakov0809@gmail.com</h4></a>
                </div>
                <i class="fa-regular fa-pen-to-square" style="color: #5c7cb2"></i>
            </div>
            <div class="newsletters-page">
                <h2>Irena In The News</h2>
                <div class="newsletters-letter">
                    <img src="img/writing.svg" width="40px" style="color: #5c7cb2; font-weight: bold">
                    <div>
                        <h5>Geothermal race heats up Africa</h5>
                        <div class="newsletters-letter-spans">
                            <span>26 April 2023 </span>
                            <span>|</span>
                            <span>African Business</span>
                        </div>
                        <p>Kenya has led the way in developing its geothermal energy resources – with support from the land of ice and fire, Iceland.</p>
                    </div>
                </div>
                <div class="newsletters-letter">
                    <img src="img/writing.svg" width="40px" style="color: #5c7cb2; font-weight: bold">
                    <div>
                        <h5>Geothermal race heats up Africa</h5>
                        <div class="newsletters-letter-spans">
                            <span>26 April 2023 </span>
                            <span>|</span>
                            <span>African Business</span>
                        </div>
                        <p>Kenya has led the way in developing its geothermal energy resources – with support from the land of ice and fire, Iceland.</p>
                    </div>
                </div>
                <div class="newsletters-letter">
                    <img src="img/writing.svg" width="40px" style="color: #5c7cb2; font-weight: bold">
                    <div>
                        <h5>Geothermal race heats up Africa</h5>
                        <div class="newsletters-letter-spans">
                            <span>26 April 2023 </span>
                            <span>|</span>
                            <span>African Business</span>
                        </div>
                        <p>Kenya has led the way in developing its geothermal energy resources – with support from the land of ice and fire, Iceland.</p>
                    </div>
                </div>
                <div class="newsletters-letter">
                    <img src="img/writing.svg" width="40px" style="color: #5c7cb2; font-weight: bold">
                    <div>
                        <h5>Geothermal race heats up Africa</h5>
                        <div class="newsletters-letter-spans">
                            <span>26 April 2023 </span>
                            <span>|</span>
                            <span>African Business</span>
                        </div>
                        <p>Kenya has led the way in developing its geothermal energy resources – with support from the land of ice and fire, Iceland.</p>
                    </div>
                </div>
            </div>
            <div class="see_also">
                <h1><b>More News</b></h1>
                <div class="hashtags">
                    <h5>#press_relises</h5>
                    <h5>#articles</h5>
                    <h5>#expert_insights</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="subscribe-block">
        <img src="img/subscribe-block-img.png" width="100%">
        <div class="block-under-subscribe-block">
            <div class="subscribe-button">
                <div class="email-icon">
                    <i class="fa-solid fa-envelope" style="color: #ffffff;"></i>
                </div>
                <div class="stay_up_to_date">
                    <h1>
                        STAY UP TO DATE
                    </h1>
                    <h3 style="cursor: pointer">
                        Subscribe to the newsletter
                    </h3>
                </div>
            </div>
            <div class="subscribe-purpose-text">
                <h2>
                    Stories you might have missed, key data and upcoming events information straight into your mailbox
                </h2>
            </div>
        </div>
    </div>
    <div class="key-data-center">
        <div class="key-data">
            <div class="key-data-header">
                <h1>Infographics</h1>
                <h2>View all</h2>
            </div><hr>

            <div class="charts-category">
                <div>

                </div>
                <div>

                </div>
                <div>

                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('search-input');
            const cards = document.querySelectorAll('.other-news1-preview');

            function filterIcons(searchQuery) {
                const nothingfound = document.getElementById("nothing-alert");
                let number = 0;
                cards.forEach(function (card) {
                    const name = card.querySelector("h3").textContent.toLowerCase();

                    if (name.includes(searchQuery.toLowerCase())) {
                        nothingfound.style.display = "none";
                        card.style.display = "flex";
                        number++;
                    } else {
                        card.style.display = "none";
                    }
                });
                if(number == 0){
                    nothingfound.style.display = "block";
                }
            }

            searchInput.addEventListener("input", function () {
                const searchQuery = searchInput.value.trim();
                filterIcons(searchQuery);
            });
        });
    </script>
@endsection
