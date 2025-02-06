<x-app-layout>
    <div class="w-full max-w-6xl mx-auto">
        <h1 class="font-semibold text-3xl text-slate-800 mb-6">New project</h1>
        <div class="bg-white rounded-lg shadow px-6 py-4 mb-6">
            <form action="{{ route('projects.store') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block mb-2 text-sm text-slate-400">Name</label>
                    <input type="text" id="name" name="name" class="w-full p-2 border rounded-lg transition-all focus:ring-2 focus:ring-orange-500 outline-0" value="{{ old('name') }}">
                    <x-input-error :message="$errors->first('name')"/>
                </div>
                <div class="mb-4">
                    <label for="slug" class="block mb-2 text-sm text-slate-400">Slug</label>
                    <input type="text" id="slug" name="slug" class="w-full p-2 border rounded-lg transition-all focus:ring-2 focus:ring-orange-500 outline-0" value="{{ old('slug') }}">
                    <x-input-error :message="$errors->first('slug')"/>
                </div>
                <x-button>Save</x-button>
            </form>
        </div>
    </div>
</x-app-layout>