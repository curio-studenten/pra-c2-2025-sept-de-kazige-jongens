<x-layouts.app>

    <x-slot:breadcrumb>
        <li><a href="/contact">Contact</a></li>
    </x-slot:breadcrumb>

    <form class="contact-form" action="/submit-contact" method="POST">
        <label for="name">Naam *</label>
        <input type="text" id="name" name="name" placeholder="Je naam" required>

        <label for="email">E-mail *</label>
        <input type="email" id="email" name="email" placeholder="Je e-mail" required>

        <label for="subject">Onderwerp</label>
        <input type="text" id="subject" name="subject" placeholder="Onderwerp">

        <label for="message">Bericht *</label>
        <textarea id="message" name="message" rows="5" placeholder="Je bericht" required></textarea>

        <button type="submit">Versturen</button>
    </form>

</x-layouts.app>
