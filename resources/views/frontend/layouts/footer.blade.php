<footer style="background-color: #f9f9f9">
    <section class="pt-5">
        <div class="container">
            <div class="row gx-5 pb-5">
                <div class="col-lg-4">
                    <div>
                        <div>
                            <span class="logo-text">discount<span class="main-color extrafont"
                                    style="font-size: 30px">Z</span>shop</span>
                        </div>
                        <p class="pt-3 mb-0 footer-description">
                            {{ optional($setting)->site_motto }}
                        </p>
                        <!-- Contact Info Start -->
                        <div class="pt-3">
                            <div class="d-flex align-items-center pt-2">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12"
                                        viewBox="0 0 16 12" fill="none">
                                        <path
                                            d="M14.4 0H1.6C0.72 0 0.00799999 0.659561 0.00799999 1.46569L0 10.2598C0 11.066 0.72 11.7255 1.6 11.7255H14.4C15.28 11.7255 16 11.066 16 10.2598V1.46569C16 0.659561 15.28 0 14.4 0ZM14.4 2.93138L8 6.59561L1.6 2.93138V1.46569L8 5.12992L14.4 1.46569V2.93138Z"
                                            fill="#F15A2D" />
                                    </svg>
                                </div>
                                <p class="ps-3 company-link">Email: {{ optional($setting)->support_email }}</p>
                            </div>
                            <div class="d-flex align-items-center pt-2">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15"
                                        viewBox="0 0 14 15" fill="none">
                                        <path
                                            d="M13.2222 9.96908C12.25 9.96908 11.3167 9.81708 10.4456 9.53589C10.1733 9.45229 9.87 9.51309 9.65222 9.71829L7.94111 11.3903C5.74 10.2959 3.93556 8.54031 2.81556 6.38194L4.52667 4.70237C4.74444 4.50477 4.80667 4.20838 4.72111 3.94238C4.43333 3.0912 4.27778 2.17921 4.27778 1.22923C4.27778 0.811233 3.92778 0.469238 3.5 0.469238H0.777778C0.35 0.469238 0 0.811233 0 1.22923C0 8.36551 5.91889 14.149 13.2222 14.149C13.65 14.149 14 13.807 14 13.389V10.7291C14 10.3111 13.65 9.96908 13.2222 9.96908ZM14 2.7492H11.6667V0.469238H10.1111V2.7492H7.77778V4.26918H10.1111V6.54914H11.6667V4.26918H14V2.7492Z"
                                            fill="#F15A2D" />
                                    </svg>
                                </div>
                                <p class="ps-3 company-link">Call: {{ optional($setting)->primary_phone }}</p>
                            </div>
                            <div class="d-flex align-items-center pt-2">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="18"
                                        viewBox="0 0 14 18" fill="none">
                                        <path
                                            d="M7 9.40276C7.48125 9.40276 7.89337 9.23686 8.23637 8.90506C8.57879 8.57382 8.75 8.17544 8.75 7.7099C8.75 7.24437 8.57879 6.8457 8.23637 6.5139C7.89337 6.18266 7.48125 6.01705 7 6.01705C6.51875 6.01705 6.10692 6.18266 5.7645 6.5139C5.4215 6.8457 5.25 7.24437 5.25 7.7099C5.25 8.17544 5.4215 8.57382 5.7645 8.90506C6.10692 9.23686 6.51875 9.40276 7 9.40276ZM7 17.5496C6.88333 17.5496 6.76667 17.5285 6.65 17.4861C6.53333 17.4438 6.43125 17.3874 6.34375 17.3169C4.21458 15.497 2.625 13.8079 1.575 12.2493C0.525 10.6902 0 9.23347 0 7.87919C0 5.76312 0.703792 4.07731 2.11138 2.82178C3.51838 1.56624 5.14792 0.938477 7 0.938477C8.85208 0.938477 10.4816 1.56624 11.8886 2.82178C13.2962 4.07731 14 5.76312 14 7.87919C14 9.23347 13.475 10.6902 12.425 12.2493C11.375 13.8079 9.78542 15.497 7.65625 17.3169C7.56875 17.3874 7.46667 17.4438 7.35 17.4861C7.23333 17.5285 7.11667 17.5496 7 17.5496Z"
                                            fill="#F15A2D" />
                                    </svg>
                                </div>
                                <p class="ps-3 company-link">
                                    {{ optional($setting)->address_line_one }} <br/>
                                    {{ optional($setting)->address_line_two }}
                                </p>
                            </div>
                            <div class="d-flex align-items-center pt-2">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                        viewBox="0 0 16 17" fill="none">
                                        <path
                                            d="M7.992 0.863281C3.576 0.863281 0 4.3653 0 8.68029C0 12.9953 3.576 16.4973 7.992 16.4973C12.416 16.4973 16 12.9953 16 8.68029C16 4.3653 12.416 0.863281 7.992 0.863281ZM10.632 12.3621L7.2 9.00079V4.77179H8.8V8.3598L11.768 11.2599L10.632 12.3621Z"
                                            fill="#F15A2D" />
                                    </svg>
                                </div>
                                <p class="ps-3 company-link">
                                    Hours: 09:00 AM - 06:00 PM
                                </p>
                            </div>
                        </div>
                        <!-- Contact Info End -->
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4">
                            <div>
                                <h5 class="mb-3 footer-title">Information</h5>
                                <span class="title-divider"></span>
                                <span class="title-divider-small"></span>
                            </div>
                            <ul class="ps-0 footer-link" style="list-style-type: none;position: relative;top: 10px;">
                                <li class="mb-2">
                                    <a href="{{ route('aboutUs') }}">About Us</a>
                                </li>
                                <li class="mb-2">
                                    <a href="{{ route('contactUs') }}">Contact Us</a>
                                </li>
                                <li class="mb-2">
                                    <a href="{{ route('allBrand') }}">All Brands</a>
                                </li>
                                {{-- <li class="mb-2">
                                    <a href="">Coupons</a>
                                </li> --}}
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <div>
                                <h5 class="mb-3 footer-title">Custom Links</h5>
                                <span class="title-divider"></span>
                                <span class="title-divider-small"></span>
                            </div>
                            <ul class="ps-0 footer-link" style="list-style-type: none;position: relative;top: 10px;">
                                <li class="mb-2">
                                    <a href="{{ route('faq') }}">FAQ</a>
                                </li>
                                {{-- <li class="mb-2">
                                    <a href="">New Offer</a>
                                </li>
                                <li class="mb-2">
                                    <a href="">Best Coupon</a>
                                </li> --}}
                                <li class="mb-2">
                                    <a href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="mb-2">
                                    <a href="{{ route('register') }}">Register</a>
                                </li>
                                {{-- <li class="mb-2">
                                    <a href="">My Account</a>
                                </li> --}}
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <div>
                                <h5 class="mb-3 footer-title">Newsletter</h5>
                                <span class="title-divider"></span>
                                <span class="title-divider-small"></span>
                            </div>
                            <form action="{{ route('email.subscribe') }}" method="POST">
                                @csrf
                                <p class="pt-3 footer-description pb-2">
                                    <input type="email" class="form-control" name="email"
                                        id="exampleFormControlInput1" placeholder="name@example.com" required />
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </p>
                                <button type="submit" class="btn btn-common-one pb-2">Subscribe<i
                                        class="fa-solid fa-paper-plane ps-2"></i></button>
                            </form>
                            <div class="pt-5">
                                <p class="footer-description">Follow us on</p>
                                <div class="pt-3 d-flex justify-content-space-around align-items-center">
                                    <a href="#" class="p-2">
                                        <i class="fa-brands fa-facebook-f" style="font-size: 22px"></i>
                                    </a>
                                    <a href="#" class="p-2">
                                        <i class="fa-brands fa-twitter" style="font-size: 22px"></i>
                                    </a>
                                    <a href="#" class="p-2">
                                        <i class="fa-brands fa-instagram" style="font-size: 22px"></i>
                                    </a>
                                    <a href="#" class="p-2">
                                        <i class="fa-brands fa-linkedin-in" style="font-size: 22px"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid pt-3 pb-2" style="border-top: 2px solid var(--primary-color)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center align-items-center flex-column">
                        <p class="footer-description">
                            {{ optional($setting)->copyright_title }}
                            <a href="{{ optional($setting)->copyright_url }}" class="main-color">{{ optional($setting)->website_name }}</a>
                        </p>
                        <div class="d-flex justify-content-center align-items-center pt-3">
                            <a href="{{ route('termsCondition') }}" class="pe-3"
                                style="font-size: 14px; color: #808083">Terms
                                & Condition</a>
                            <a href="{{ route('privacyPolicy') }}" class=""
                                style="font-size: 14px; color: #808083">Privacy
                                Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
