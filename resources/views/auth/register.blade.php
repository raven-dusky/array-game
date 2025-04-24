<x-layout>
    <div class="auth-container">
        <form class="auth-form" method="POST" action="{{ route('register') }}">
            @csrf
            <label class="auth-label" for="username">Username</label>
            <input class="auth-input" type="text" id="username" name="name" />
            <label class="auth-label" for="email">E-mail</label>
            <input class="auth-input" type="email" id="email" name="email" />
            <label class="auth-label" for="password">Password</label>
            <input class="auth-input" type="password" id="password" name="password" />
            <label class="auth-label" for="password_confirmation">Confirm Password</label>
            <input class="auth-input" type="password" id="password_confirmation" name="password_confirmation" />
            <button class="auth-btn" type="submit">Register</button>
        </form>
    </div>
</x-layout>
