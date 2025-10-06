<x-layouts.app>

    <x-slot:breadcrumb>
        <li><a href="{{ url('/contact') }}">{{ __('contact.title') }}</a></li>
    </x-slot:breadcrumb>

    <form class="contact-form" action="{{ url('/submit-contact') }}" method="POST">
        @csrf

        <label for="name">{{ __('contact.name') }} *</label>
        <input type="text" id="name" name="name" placeholder="{{ __('contact.placeholder_name') }}" required>

        <label for="email">{{ __('contact.email') }} *</label>
        <input type="email" id="email" name="email" placeholder="{{ __('contact.placeholder_email') }}" required>

        <label for="subject">{{ __('contact.subject') }}</label>
        <input type="text" id="subject" name="subject" placeholder="{{ __('contact.placeholder_subject') }}">

        <label for="message">{{ __('contact.message') }} *</label>
        <textarea id="message" name="message" rows="5" placeholder="{{ __('contact.placeholder_message') }}" required></textarea>

        <button type="submit">{{ __('contact.send') }}</button>
    </form>

</x-layouts.app>
