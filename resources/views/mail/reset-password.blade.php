<x-mail-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <p style="color: #0f172a;">Hi {{ $user->name }}!</p>
    <p style="color: #0f172a;">You are receiving this email because we received a password reset request for your account.</p>
    <p style="text-align: center">
        <a href="{{ $url }}" style="display: inline-block; padding: 8px 20px; font-size: 14px; border-radius: 6px; color: white; background-color: #f97316; text-decoration: none;">Reset password</a>
    </p>
    <p style="color: #0f172a;">This password reset link will expire in 60 minutes.</p>
    <p style="color: #0f172a;">If you did not request a password reset, no further action is required.</p>
</x-mail-layout>