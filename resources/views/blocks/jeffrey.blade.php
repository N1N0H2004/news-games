
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
            <form id="downloadForm">
{{--                https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf--}}
                <label for="url">Voer de URL van het PDF-bestand in:</label><br>
                <input type="text" id="url" name="url"><br><br>
                <button type="submit">Check Downloadbaarheid</button>
            </form>
        </div>
    </div>
</div>

@push('scripts')
    <script src="{{ asset('js/jeffrey.js') }}"></script>
@endpush


