<x-admin-app-layout :title="'Counter Edit'">
    <div class="card card-flash">
        <!--begin::Card header-->
        <div class="card-header mt-6">
            <div class="card-title"></div>

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Button-->
                <a href="{{ route('admin.counters.index') }}" class="btn btn-light-info rounded-2">
                    <!--begin::Svg Counter | path: counters/duotune/general/gen035.svg-->
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
                    <!--end::Svg Counter-->Back to the list
                </a>
            </div>
        </div>
        <div class="card-body pt-0">
            <!--begin::Form-->
            <form class="form" action="{{ route('admin.counters.update', $counter->id) }}" method="POST">
                @csrf
                @method('PUT')
                <!--begin::Input group-->
                <div class="row">
                    <div class="form-floating border rounded mt-5">
                        <select class="form-select form-select-transparent" placeholder="..." id="kt_docs_select2_icon"
                            name="icon_id">
                            <option></option>
                            @foreach ($icons as $icon)
                                <option value="{{ $icon->id }}"
                                    data-kt-select2-icon="{{ asset('storage/' . $icon->image) }}"
                                    {{ $icon->id == $service->icon_id ? 'selected' : '' }}>
                                    {{ $icon->name }}</option>
                            @endforeach
                        </select>
                        <label for="kt_docs_select2_icon">Select a icon</label>
                        @error('icon_id')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="title"
                            class="col-form-label fw-bold fs-6 required">{{ __('Title') }}
                        </x-metronic.label>

                        <x-metronic.input id="title" type="title" name="title" :value="$counter->title"
                            placeholder="Enter the Title"></x-metronic.input>
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="number"
                            class="col-form-label fw-bold fs-6 required">{{ __('Number') }}
                        </x-metronic.label>

                        <x-metronic.input id="number" type="number" name="number" :value="$counter->number"
                            placeholder="Enter the Number"></x-metronic.input>
                    </div>
                </div>
                <div class="text-center pt-15">
                    <x-metronic.button type="submit" class="primary">
                        {{ __('Update') }}
                    </x-metronic.button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
    </div>

    @push('scripts')
        <script>
            // Format options
            var optionFormat = function(item) {
                if (!item.id) {
                    return item.text;
                }

                var span = document.createElement('span');
                var imgUrl = item.element.getAttribute('data-kt-select2-icon');
                var template = '';

                template += '<img src="' + imgUrl + '" class="rounded-circle h-20px me-2" alt="image"/>';
                template += item.text;

                span.innerHTML = template;

                return $(span);
            }

            // Init Select2 --- more info: https://select2.org/
            $('#kt_docs_select2_icon').select2({
                templateSelection: optionFormat,
                templateResult: optionFormat
            });
        </script>
    @endpush
</x-admin-app-layout>
