<x-admin-app-layout :title="'Brand Add'">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-header">
                    <div>
                        <h2>Brand Create</h2>
                    </div>
                    <div>
                        <a href="{{ route('admin.brands.index') }}" class="btn btn-light-info">
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5"
                                        fill="currentColor" />
                                    <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                        transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                    <rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
                                        fill="currentColor" />
                                </svg>
                            </span>

                            Back.
                        </a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-admin-app-layout>
