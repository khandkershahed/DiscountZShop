<x-frontend-app-layout :title="'Terms and Condition || DiscountZShop'">
    <!-- Hero Section -->
    <section>
        <div class="regular-banner">
            <img class="img-fluid w-100" src="{{!empty(optional($page_banner)->image) && file_exists(public_path('storage/'.optional($page_banner)->image)) ? asset('storage/'.optional($page_banner)->image) : asset('images/no-banner(1920-330).png') }}"
                alt="{{ ucfirst(optional($page_banner)->page_name)}}" />
        </div>
    </section>
    <!-- Hero End -->
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="main-color mb-4">{{ $terms->title }}</h4>
                    <p>
                        {!! $terms->content !!}
                    </p>
                    @if (!empty($setting->support_email))
                        <p class="pt-2">Email: [{{ $setting->support_email }}]</p>
                    @endif
                    {{-- @if (!empty($setting->primary_phone))
                        <p class="pt-2">Phone: [{{ $setting->primary_phone }}]</p>
                    @endif --}}

                    @if (!empty($terms->effective_date))
                        <p class="pt-2">Effective Date: [{{ $terms->effective_date }}]</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
</x-frontend-app-layout>
