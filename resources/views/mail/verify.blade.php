<x-mail-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <p style="color: #0f172a;">Hi {{ $user->name }}!</p>
    <p style="color: #0f172a;">Please click the link below to verify your email address.</p>
    <p style="text-align: center">
        <a href="{{ $url }}" style="display: inline-block; padding: 8px 20px; font-size: 14px; border-radius: 6px; color: white; background-color: #f97316; text-decoration: none;">Verify email</a>
    </p>
    <p style="color: #0f172a;">If you did not create an account, no further action is required.</p>
</x-mail-layout>