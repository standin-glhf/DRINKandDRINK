@section('footer')
    <footer>
        <hr class="footer-line">
        <div class="container">
            <div class="footer-row">

                <div class="footer-column">
                    <div class="footer-fb">
                        <a href="https://www.facebook.com"><img src="img/footer-fb.png" alt="facebook logo"></a>
                    </div>
                    <div class="footer-insta">
                        <a href="https://www.instagram.com"><img src="img/footer-insta.png" alt="instagram logo"></a>
                    </div>
                </div>

                <div class="footer-column">
                    <ul class="footer-list">
                        <li><a href="menu">МЕНЮ</a></li>
                        <li><a href="about-us">ПРО НАС</a></li>
                        <li><button class="popup-btn" rel="popup1">ЗАБРОНЮВАТИ</button></li> <!-- Pop-up -->
                    </ul>

                    <div class="overlay_popup"></div>
                    <div class="popup" id="popup1">
                        <div class="object">
                            <form action="{{ route('book-form')}}" method="post">
                            @csrf

                            <p>Ім'я: </p>
                            <p><input type="text" name="name" required minlength="1" maxlength="25"></p>
                            <p>Номер столику: </p>
                            <p><input type="number" name="number" required min="1" max="20"></p>
                            <p><input type="date" name="date" required value="{{ date("Y-m-d", strtotime('tomorrow')) }}" min="{{ date("Y-m-d", strtotime('tomorrow')) }}"></p>
                            <input type="submit" value="Надіслати">
                            </form>
                        </div>
                    </div>

                </div>

                <div class="footer-column">
                    <div class="footer-phone">
                        <img src="img/footer-phone.png" alt="phone logo">
                        <div class="footer-phone-text">+38 (045) 661-52-87</div>
                    </div>
                    <div class="footer-address">
                        <img src="img/address.png" alt="map pin">
                        <div class="footer-address-text">пр. Свободи, 55, Кременчук</div>
                    </div>
                </div>
            </div>
            <div class="copyright">&copy; 2021 ФОП Кавун Микола Васильович</div>
        </div>
    </footer>