@extends('layouts.app')

@section('content')

<div class="col-12 col-xl-12">
    <div class="card card-body border-0 shadow mb-4">

        <h2 class="h5 mb-4">Edit Language</h2>

        <form method="POST" action="{{ route('dashboard.language.update', $label->kt_label_id) }}">
            @csrf
            @method('PUT')

            <input type="hidden"
                   name="kt_label_id"
                   value="{{ $label->kt_label_id }}">

            <div class="row">

                <!-- Label Name -->
                <div class="col-md-6 mb-3">
                    <label>Label Name</label>
                    <input type="text"
                           name="label_name"
                           value="{{ old('label_name', $label->kt_label_name) }}"
                           class="form-control">
                </div>

                <!-- Controller Name -->
                <div class="col-md-6 mb-3">
                    <label>Controller Name</label>
                    <input type="text"
                           name="controller_name"
                           value="{{ old('controller_name', $label->kt_field_type) }}"
                           class="form-control">
                </div>

                <!-- English -->
                <div class="col-md-6 mb-3">
                    <label>Label Value (English)</label>
                    <textarea name="label_value_english"
                              class="form-control"
                              rows="4">{{ old('label_value_english', $label->kt_label_value) }}</textarea>
                </div>

                <!-- Hindi -->
                <div class="col-md-6 mb-3">
                    <label>Label Value (Hindi)</label>
                    <textarea name="label_value_hindi"
                              class="form-control"
                              rows="4">{{ old('label_value_hindi', $subLabel->kt_sub_lang_name ?? '') }}</textarea>
                </div>

            </div>

            <button type="submit"
                    class="btn btn-gray-800 mt-2">
                Update
            </button>

            <a href="{{ route('dashboard.language') }}"
               class="btn btn-secondary mt-2">
               Cancel
            </a>

        </form>

    </div>
</div>

@endsection
