@if (Session('success'))
<div class="alert alert-dark mb-5" id="status_message">
    <p class="text-white">{{ Session('success') }}</p>
</div>
@endif

@if (Session('error'))
<div class="alert alert-error" id="status_message">
    <p>{{ Session('error') }}</p>
</div>
@endif
