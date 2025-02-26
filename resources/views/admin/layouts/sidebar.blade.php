<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <a href="{{ route('dashboard') }}">
            <img alt="Logo"
                src="{{ !empty($site->site_logo) && file_exists(public_path('storage/settings/' . $site->site_logo)) ? asset('storage/settings/' . $site->site_logo) : asset('admin/assets/media/svg/avatars/blank-dark.svg') }}"
                class="h-60px logo w-200px">
        </a>
        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle active"
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="aside-minimize">
            <span class="svg-icon svg-icon-1 rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none">
                    <path opacity="0.5"
                        d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                        fill="currentColor"></path>
                    <path
                        d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                        fill="currentColor"></path>
                </svg>
            </span>
        </div>
    </div>
    <div class="aside-menu flex-column-fluid">
        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu"
            data-kt-scroll-offset="0" style="height: 318px;">
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
                <div class="menu-item">
                    <a class="menu-link {{ Route::is('admin.dashboard') ? 'active' : '' }}"
                        href="{{ route('admin.dashboard') }}">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor">
                                    </rect>
                                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                        fill="currentColor"></rect>
                                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                        fill="currentColor"></rect>
                                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                        fill="currentColor"></rect>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>

                {{-- Site Content  --}}
                @php
                    $menuItems = [
                        //====================== Offer Management ============================

                        [
                            'title' => 'Offer Management',
                            'icon' => 'icons/duotune/general/gen051.svg',

                            'routes' => [
                                'admin.brands.index',
                                'admin.brands.create',
                                'admin.brands.edit',

                                'admin.categories.index',
                                'admin.categories.create',
                                'admin.categories.edit',

                                'admin.offer.index',
                                'admin.offer.create',
                                'admin.offer.edit',

                                'admin.offer-type.index',
                                'admin.offer-type.create',
                                'admin.offer-type.edit',

                                'admin.special-offer.index',
                                'admin.special-offer.create',
                                'admin.special-offer.edit',

                                'admin.coupon.index',
                                'admin.coupon.create',
                                'admin.coupon.edit',

                                'admin.store.index',
                                'admin.store.create',
                                'admin.store.edit',

                                'admin.categories.index',
                                'admin.categories.create',
                                'admin.categories.edit',
                            ],

                            'subMenu' => [
                                [
                                    'title' => 'Category List',
                                    'routes' => [
                                        'admin.categories.index',
                                        'admin.categories.create',
                                        'admin.categories.edit',
                                    ],
                                    'route' => 'admin.categories.index',
                                ],

                                [
                                    'title' => 'Brand List',
                                    'routes' => ['admin.brands.index', 'admin.brands.create', 'admin.brands.edit'],
                                    'route' => 'admin.brands.index',
                                ],

                                // [
                                //     'title' => 'Store List',
                                //     'routes' => ['admin.store.index', 'admin.store.create', 'admin.store.edit'],
                                //     'route' => 'admin.store.index',
                                // ],

                                [
                                    'title' => 'Offer Type List',
                                    'routes' => [
                                        'admin.offer-type.index',
                                        'admin.offer-type.create',
                                        'admin.offer-type.edit',
                                    ],
                                    'route' => 'admin.offer-type.index',
                                ],
                                [
                                    'title' => 'Offer List',
                                    'routes' => ['admin.offer.index', 'admin.offer.create', 'admin.offer.edit'],
                                    'route' => 'admin.offer.index',
                                ],
                                [
                                    'title' => 'Coupon List',
                                    'routes' => ['admin.coupon.index', 'admin.coupon.create', 'admin.coupon.edit'],
                                    'route' => 'admin.coupon.index',
                                ],
                            ],
                        ],

                        // ============== Customer Support =================================

                        [
                            'title' => 'Customer Support',
                            'icon' => 'icons/duotune/ecommerce/ecm002.svg',
                            'routes' => [
                                'admin.contacts.index',

                                'admin.faq.index',
                                'admin.faq.create',
                                'admin.faq.edit',

                                'admin.newsletters.index',
                            ],
                            'subMenu' => [
                                [
                                    'title' => 'Contact Messages',
                                    'routes' => ['admin.contacts.index'],
                                    'route' => 'admin.contacts.index',
                                ],
                                [
                                    'title' => 'FAQ Lists',
                                    'routes' => ['admin.faq.index', 'admin.faq.create', 'admin.faq.edit'],
                                    'route' => 'admin.faq.index',
                                ],
                                [
                                    'title' => 'Subscribed Emails List',
                                    'routes' => ['admin.newsletters.index'],
                                    'route' => 'admin.newsletters.index',
                                ],
                            ],
                        ],

                        // ======================== Site Content =========================
                        [
                            'title' => 'Site Contents',
                            'icon' => 'icons/duotune/ecommerce/ecm002.svg',
                            'routes' => [
                                'admin.homepage.index',
                                'admin.homepage.create',
                                'admin.homepage.edit',

                                'admin.about-us.index',
                                'admin.about-us.edit',

                                'admin.terms-condition.index',
                                'admin.terms-condition.create',
                                'admin.terms-condition.edit',

                                'admin.privacy-policy.index',
                                'admin.privacy-policy.create',
                                'admin.privacy-policy.edit',

                                'admin.page-banner.index',
                                'admin.page-banner.create',
                                'admin.page-banner.edit',
                                'admin.slider.index',
                                'admin.slider.create',
                                'admin.slider.edit',
                                'admin.banner.index',
                                'admin.banner.create',
                                'admin.banner.edit',
                            ],
                            'subMenu' => [
                                [
                                    'title' => 'HomePage',
                                    'routes' => [
                                        'admin.homepage.index',
                                        'admin.homepage.create',
                                        'admin.homepage.edit',
                                    ],
                                    'route' => 'admin.homepage.index',
                                ],

                                [
                                    'title' => 'About US',
                                    'routes' => ['admin.about-us.index', 'admin.about-us.edit'],
                                    'route' => 'admin.about-us.index',
                                ],

                                [
                                    'title' => 'Terms & Condition',
                                    'routes' => [
                                        'admin.terms-condition.index',
                                        'admin.terms-condition.create',
                                        'admin.terms-condition.edit',
                                    ],
                                    'route' => 'admin.terms-condition.index',
                                ],

                                [
                                    'title' => 'Privacy Policy',
                                    'routes' => [
                                        'admin.privacy-policy.index',
                                        'admin.privacy-policy.create',
                                        'admin.privacy-policy.edit',
                                    ],
                                    'route' => 'admin.privacy-policy.index',
                                ],

                                [
                                    'title' => 'HomePage Top Left Slider',
                                    'routes' => ['admin.slider.index', 'admin.slider.create', 'admin.slider.edit'],
                                    'route' => 'admin.slider.index',
                                ],

                                [
                                    'title' => 'HomePage Top Right Banners',
                                    'routes' => ['admin.banner.index', 'admin.banner.create', 'admin.banner.edit'],
                                    'route' => 'admin.banner.index',
                                ],

                                [
                                    'title' => 'Page Banner',
                                    'routes' => [
                                        'admin.page-banner.index',
                                        'admin.page-banner.create',
                                        'admin.page-banner.edit',
                                    ],
                                    'route' => 'admin.page-banner.index',
                                ],
                            ],
                        ],

                        // ========================= Setting ==============================

                        [
                            'title' => 'Settings',
                            'icon' => 'icons/duotune/ecommerce/ecm002.svg',
                            'routes' => [
                                'admin.settings.index',
                                'admin.email-settings.index',
                                'admin.settings.index',
                                'admin.country.index',
                                'admin.division.index',
                                'admin.city.index',
                                'admin.area.index',
                            ],
                            'subMenu' => [
                                [
                                    'title' => 'Website Setting',
                                    'routes' => ['admin.settings.index'],
                                    'route' => 'admin.settings.index',
                                ],
                                [
                                    'title' => 'Country',
                                    'routes' => ['admin.country.index'],
                                    'route' => 'admin.country.index',
                                ],
                                [
                                    'title' => 'Division',
                                    'routes' => ['admin.division.index'],
                                    'route' => 'admin.division.index',
                                ],
                                [
                                    'title' => 'City',
                                    'routes' => ['admin.city.index'],
                                    'route' => 'admin.city.index',
                                ],
                                [
                                    'title' => 'Area',
                                    'routes' => ['admin.area.index'],
                                    'route' => 'admin.area.index',
                                ],
                            ],
                        ],

                        // ============================ Role & Permission ===============================

                        [
                            'title' => 'Role & Permission',
                            'icon' => 'icons/duotune/ecommerce/ecm002.svg',
                            'routes' => ['all.role', 'all.permission', 'all.admin.permission'],
                            'subMenu' => [
                                [
                                    'title' => 'All Admin',
                                    'routes' => ['all.admin.permission'],
                                    'route' => 'all.admin.permission',
                                ],
                                [
                                    'title' => 'Role',
                                    'routes' => ['all.role'],
                                    'route' => 'all.role',
                                ],
                                [
                                    'title' => 'Permission',
                                    'routes' => ['all.permission'],
                                    'route' => 'all.permission',
                                ],
                            ],
                        ],
                    ];
                @endphp

                @if (Auth::guard('admin')->user()->can('category.menu') ||
                        Auth::guard('admin')->user()->can('brand.menu') ||
                        Auth::guard('admin')->user()->can('offertype.menu') ||
                        Auth::guard('admin')->user()->can('offer.menu') ||
                        Auth::guard('admin')->user()->can('coupon.menu') ||
                        Auth::guard('admin')->user()->can('permission.menu') ||
                        Auth::guard('admin')->user()->can('role.menu') ||
                        Auth::guard('admin')->user()->can('admin.menu') ||
                        Auth::guard('admin')->user()->can('about.menu') ||
                        Auth::guard('admin')->user()->can('country.menu') ||
                        Auth::guard('admin')->user()->can('division.menu') ||
                        Auth::guard('admin')->user()->can('city.menu') ||
                        Auth::guard('admin')->user()->can('area.menu') ||
                        Auth::guard('admin')->user()->can('contact_message.menu') ||
                        Auth::guard('admin')->user()->can('faq.menu') ||
                        Auth::guard('admin')->user()->can('homapage_left_banner.menu') ||
                        Auth::guard('admin')->user()->can('homapage_right_banner.menu') ||
                        Auth::guard('admin')->user()->can('homepage.menu') ||
                        Auth::guard('admin')->user()->can('page_banner.menu') ||
                        Auth::guard('admin')->user()->can('pagebanner.menu') ||
                        Auth::guard('admin')->user()->can('privacy.menu') ||
                        Auth::guard('admin')->user()->can('term.menu') ||
                        Auth::guard('admin')->user()->can('subscribe.menu') ||
                        Auth::guard('admin')->user()->can('web_setting.menu'))

                    @foreach ($menuItems as $item)
                        <div data-kt-menu-trigger="click"
                            class="menu-item menu-accordion {{ Route::is(...$item['routes'] ?? []) ? 'here show' : '' }}">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                </span>
                                <span class="menu-title">{{ $item['title'] }}</span>
                                <span class="menu-arrow"></span>
                            </span>
                            @if (!empty($item['subMenu']))
                                <div
                                    class="menu-sub menu-sub-accordion {{ Route::is(...$item['routes'] ?? []) ? 'menu-active-bg' : '' }}">
                                    @foreach ($item['subMenu'] as $subItem)
                                        @if (isset($subItem['subMenu']))
                                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                                <span class="menu-link">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">{{ $subItem['title'] }}</span>
                                                    <span class="menu-arrow"></span>
                                                </span>
                                                <div
                                                    class="menu-sub menu-sub-accordion {{ Route::is(...array_column($subItem['subMenu'], 'route') ?? []) ? 'here show' : '' }}">
                                                    @foreach ($subItem['subMenu'] as $subSubItem)
                                                        <div class="menu-item">
                                                            @if (isset($subSubItem['route']))
                                                                <a class="menu-link {{ Route::is($subSubItem['route']) ? 'active' : '' }}"
                                                                    href="{{ route($subSubItem['route']) }}">
                                                                    <span class="menu-bullet">
                                                                        <span class="bullet bullet-dot"></span>
                                                                    </span>
                                                                    <span
                                                                        class="menu-title">{{ $subSubItem['title'] }}</span>
                                                                </a>
                                                            @else
                                                                <span
                                                                    class="menu-title">{{ $subSubItem['title'] }}</span>
                                                            @endif
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @else
                                            <div class="menu-item">
                                                @if (isset($subItem['route']))
                                                    <a class="menu-link {{ Route::is($subItem['routes']) ? 'active' : '' }}"
                                                        href="{{ route($subItem['route']) }}">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">{{ $subItem['title'] }}</span>
                                                    </a>
                                                @else
                                                    <span class="menu-title">{{ $subItem['title'] }}</span>
                                                @endif
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @endforeach

                @endif

            </div>
        </div>
    </div>
    <div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
        <form method="POST" action="{{ route('admin.logout') }}">
            <a href="{{ route('admin.logout') }}" class="btn btn-custom btn-primary w-100"
                onclick="event.preventDefault();
      this.closest('form').submit();">
                <span class="btn-label">
                    @csrf
                    {{ __('Log Out') }}
                </span>
            </a>
        </form>
    </div>
</div>
